<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="bt-comment" class="bt-comment-wrapper clearfix">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h6 class="bt-heading-comment"><?php comments_number( esc_html__('Comment (0)', 'doyle'), esc_html__('Comment (1)', 'doyle'), esc_html__('Comments (%)', 'doyle') ); ?></h6>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="comment-navigation col-xs-12 col-sm-12 col-md-12 col-lg-12" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'doyle' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'doyle' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'doyle' ) ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<?php
			wp_list_comments( array(
				'style'      => 'div',
				'short_ping' => true,
				'avatar_size' => 90,
				'callback' => 'doyle_custom_comment',
			) );
		?>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'doyle' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'doyle' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'doyle' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'doyle' ); ?></p>
	<?php endif; ?>

	<?php
		$commenter = wp_get_current_commenter();
		
		$fields =  array(
			'author' => '<div class="row"><div class="col-md-4 comment-form-author"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" placeholder="'.__('Name*','doyle').'" aria-required="true" /></div>',
			'email' => '<div class="col-md-4 comment-form-email"><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" placeholder="'.__('Email*','doyle').'" aria-required="true" /></div>',
			'url' => '<div class="col-md-4 comment-form-url"><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" placeholder="'.__('Website','doyle').'" /></div></div>',
		);
		
		$args = array(
			'id_form'           => 'commentform',
			'id_submit'         => 'submit',
			'class_submit'      => 'submit',
			'name_submit'       => 'submit',
			'title_reply'       => __( '<span class="bt-label-reply">Leave A Comment</span>', 'doyle' ),
			'title_reply_to'    => __( '<span class="bt-label-reply">Leave A Reply to %s</span>', 'doyle' ),
			'cancel_reply_link' => __( 'Cancel Reply', 'doyle' ),
			'label_submit'      => __( 'Send Comment', 'doyle' ),
			'format'            => 'xhtml',

			'comment_field' =>  '<div class="comment-form-comment"><textarea id="comment" name="comment" cols="60" rows="6" aria-required="true" placeholder="'.__('Message','doyle').'">' . '</textarea></div>',

			'must_log_in' => '<div class="must-log-in">' . sprintf(__( 'You must be <a href="%s">logged in</a> to post a comment.', 'doyle' ), wp_login_url( apply_filters( 'the_permalink', get_permalink() ) ) ) . '</div>',

			'logged_in_as' => '<div class="logged-in-as">' . sprintf(__( 'Logged in as <a class="bt-name" href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'doyle' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</div>',

			'comment_notes_before' => '',

			'comment_notes_after' => '',

			'fields' => apply_filters( 'comment_form_default_fields', $fields ),
		  );

		comment_form($args);
	?>

</div><!-- #comments -->
