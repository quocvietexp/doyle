<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

class FW_Extension_Bearsthemes_Update extends FW_Extension {
	private $api_url = 'http://theme.bearsthemes.com/update_themes/api';
	private $theme_data;
	private $theme_version;
	private $theme_base;

	/**
	 * @internal
	 */
	protected function _init() {

		if ( ! current_user_can( 'update_themes' ) ) {
			return;
		}

		if(function_exists('wp_get_theme')){
		    $this->theme_data = wp_get_theme(get_option('template'));
		    $this->theme_version = $this->theme_data->Version;
		} else {
		    $this->theme_data = add_theme_page( get_template_directory() . '/style.css');
		    $this->theme_version = $this->theme_data['Version'];
		}
		$this->theme_base = get_option('template');

		$this->add_filters();
		$this->add_actions();

	}

	private function add_filters() {
		add_filter( 'pre_set_site_transient_update_themes', array( $this, '_check_for_update' ) );
		add_filter( 'themes_api', array( $this, '_my_theme_api_call' ), 10, 3 );
	}

	private function add_actions() {

	}

	public function _check_for_update($checked_data) {
		global $wp_version;
		$theme_version 	= $this->theme_version;
		$theme_base 	= $this->theme_base;
		$api_url 		= $this->api_url;

		$request = array(
			'slug' => $theme_base,
			'version' => $theme_version
		);
		// Start checking for an update
		$send_for_check = array(
			'body' => array(
				'action' => 'theme_update',
				'request' => serialize($request),
				'api-key' => md5(home_url())
			),
			'user-agent' => 'WordPress/' . $wp_version . '; ' . home_url()
		);
		$raw_response = wp_remote_post($api_url, $send_for_check);
		if (!is_wp_error($raw_response) && ($raw_response['response']['code'] == 200))
			$response = unserialize($raw_response['body']);
		// Feed the update data into WP updater
		if (!empty($response))
			$checked_data->response[$theme_base] = $response;
		return $checked_data;
	}

	public function _my_theme_api_call($def, $action, $args) {
		global $wp_version;
		$theme_version 	= $this->theme_version;
		$theme_base 	= $this->theme_base;
		$api_url 		= $this->api_url;

		if ($args->slug != $theme_base)
			return false;

		// Get the current version
		$args->version = $theme_version;
		$request_string = prepare_request($action, $args);
		$request = wp_remote_post($api_url, $request_string);
		if (is_wp_error($request)) {
			$res = new WP_Error('themes_api_failed', sprintf('%s</p> <p><a href="?" onclick="document.location.reload(); return false;">%s</a>', __('An Unexpected HTTP Error occurred during the API request.', 'doyle'), __('Try again', 'doyle')), $request->get_error_message());
		} else {
			$res = unserialize($request['body']);

			if ($res === false)
				$res = new WP_Error('themes_api_failed', __('An unknown error occurred', 'doyle'), $request['body']);
		}

		return $res;
	}
}
