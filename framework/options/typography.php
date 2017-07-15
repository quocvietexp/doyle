<?php
// Typography
Redux::setSection( $opt_name, array(
	'title'            => __( 'Typography', 'redux-framework-demo' ),
	'id'               => 'bt_typography',
	'icon'             => 'el el-fontsize',
	'fields'           => array(
		array(
			'id'       => 'body_font',
			'type'     => 'typography',
			'title'    => __( 'Body Font', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography body.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#888888',
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '26px',
				'letter-spacing' => '1px'
			),
			'output'    => array('body')
		),
		array(
			'id'       => 'h1_font',
			'type'     => 'typography',
			'title'    => __( 'H1 Typography', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography H1.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#333333',
				'font-size'   => '36px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '42px',
				'letter-spacing' => '1.6px'
			),
			'output'    => array('h1, .bt-font-size-1')
		),
		array(
			'id'       => 'h1_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => __( 'H1 Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the top/bottom margin the H1.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-bottom' => '15px'
			),
			'output'    => array('h1')
		),
		array(
			'id'       => 'h2_font',
			'type'     => 'typography',
			'title'    => __( 'H2 Typography', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography H2.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#333333',
				'font-size'   => '30px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '36px',
				'letter-spacing' => '1.6px'
			),
			'output'    => array('h2, .bt-font-size-2')
		),
		array(
			'id'       => 'h2_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => __( 'H2 Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the top/bottom margin the H2.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-bottom' => '15px'
			),
			'output'    => array('h2')
		),
		array(
			'id'       => 'h3_font',
			'type'     => 'typography',
			'title'    => __( 'H3 Typography', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography H3.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#333333',
				'font-size'   => '24px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '30px',
				'letter-spacing' => '1.6px'
			),
			'output'    => array('h3, .bt-font-size-3')
		),
		array(
			'id'       => 'h3_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => __( 'H3 Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the top/bottom margin the H3.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-bottom' => '15px'
			),
			'output'    => array('h3')
		),
		array(
			'id'       => 'h4_font',
			'type'     => 'typography',
			'title'    => __( 'H4 Typography', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography H4.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#333333',
				'font-size'   => '18px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '24px',
				'letter-spacing' => '1.6px'
			),
			'output'    => array('h4, .bt-font-size-4')
		),
		array(
			'id'       => 'h4_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => __( 'H4 Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the top/bottom margin the H4.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-bottom' => '15px'
			),
			'output'    => array('h4')
		),
		array(
			'id'       => 'h5_font',
			'type'     => 'typography',
			'title'    => __( 'H5 Typography', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography H5.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#333333',
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '16px',
				'letter-spacing' => '1.6px'
			),
			'output'    => array('h5, .bt-font-size-5')
		),
		array(
			'id'       => 'h5_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => __( 'H5 Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the top/bottom margin the H5.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-bottom' => '15px'
			),
			'output'    => array('h5')
		),
		array(
			'id'       => 'h6_font',
			'type'     => 'typography',
			'title'    => __( 'H6 Typography', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography H6.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#333333',
				'font-size'   => '12px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '14px',
				'letter-spacing' => '1.6px'
			),
			'output'    => array('h6, .bt-font-size-6')
		),
		array(
			'id'       => 'h6_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => __( 'H6 Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the top/bottom margin the H1.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-bottom' => '15px'
			),
			'output'    => array('h6')
		),
		
	)
) );
Redux::setSection( $opt_name, array(
	'title'            => __( 'Extra Font', 'redux-framework-demo' ),
	'id'               => 'bt_extrafont',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'extra_font_1',
			'type'     => 'typography',
			'title'    => __( 'Extra Font 1', 'redux-framework-demo' ),
			'subtitle' => __( 'Select a font to use throughout Typography settings.', 'redux-framework-demo' ),
			'subsets'   	=> false,
			'font-style'   	=> false,
			'font-weight'   => false,
			'font-size'   	=> false,
			'line-height'   => false,
			'color'   		=> false,
			'text-align'   	=> false
		),
		array(
			'id'=>'extra_element_1',
			'type' => 'textarea',
			'title' => __('Elements', 'redux-framework-demo'), 
			'subtitle' => __('Add the html tags, element ID or class as you need. Ex: body,a,.class-name,#tag-id,...', 'redux-framework-demo'),
			'default' => ''
		),
		array(
			'id'       => 'extra_font_2',
			'type'     => 'typography',
			'title'    => __( 'Extra Font 2', 'redux-framework-demo' ),
			'subtitle' => __( 'Select a font to use throughout Typography settings.', 'redux-framework-demo' ),
			'subsets'   	=> false,
			'font-style'   	=> false,
			'font-weight'   => false,
			'font-size'   	=> false,
			'line-height'   => false,
			'color'   		=> false,
			'text-align'   	=> false
		),
		array(
			'id'=>'extra_element_2',
			'type' => 'textarea',
			'title' => __('Elements', 'redux-framework-demo'), 
			'subtitle' => __('Add the html tags, element ID or class as you need. Ex: body,a,.class-name,#tag-id,...', 'redux-framework-demo'),
			'default' => ''
		),
		array(
			'id'       => 'extra_font_3',
			'type'     => 'typography',
			'title'    => __( 'Extra Font 3', 'redux-framework-demo' ),
			'subtitle' => __( 'Select a font to use throughout Typography settings.', 'redux-framework-demo' ),
			'subsets'   	=> false,
			'font-style'   	=> false,
			'font-weight'   => false,
			'font-size'   	=> false,
			'line-height'   => false,
			'color'   		=> false,
			'text-align'   	=> false
		),
		array(
			'id'=>'extra_element_3',
			'type' => 'textarea',
			'title' => __('Elements', 'redux-framework-demo'), 
			'subtitle' => __('Add the html tags, element ID or class as you need. Ex: body,a,.class-name,#tag-id,...', 'redux-framework-demo'),
			'default' => ''
		),
	)
) );
