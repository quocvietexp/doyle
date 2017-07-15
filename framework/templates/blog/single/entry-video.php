<?php
	$format = get_post_format() ? get_post_format() : 'standard';
	$post_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'post_options'):array();
	$video_url = isset($post_options['video_url'])?$post_options['video_url']:'';
	$video_poster = isset($post_options['video_poster'])?$post_options['video_poster']:array();
	$video_caption = isset($post_options['video_caption'])?$post_options['video_caption']:'';
	
?>
<article <?php post_class(); ?>>
	<div class="bt-post-item">
		<h3 class="bt-title"><?php the_title(); ?></h3>
		<div class="bt-media <?php echo esc_attr($format); ?>">
			<?php
				if(!empty($video_url)){
					?>
						<div class="bt-overlay">
							<a href="<?php echo esc_url($video_url); ?>" class="html5lightbox" data-group=""  data-thumbnail="" data-width="800" data-height="450" title="<?php echo esc_attr($video_caption); ?>"><i class="fa fa-play"></i></a>
						</div>
					<?php
					if(!empty($video_poster)){
						echo '<img src="'.esc_url($video_poster['url']).'" alt="Poster Image"/>';
					}else{
						if(has_post_thumbnail()) the_post_thumbnail('full');
					}
				}else{
					if(has_post_thumbnail()) the_post_thumbnail('full');
				}
			?>
		</div>
		<ul class="bt-meta">
			<li class="bt-author"><?php echo '<span>'.esc_html__('By: ', 'doyle').'</span>'.get_the_author(); ?></li>
			<li class="bt-public"><?php echo '<span>'.esc_html__('Date: ', 'doyle').'</span>'.get_the_date('M d, Y'); ?></li>
			<li><?php comments_number( '<span>Comment: </span> 0', '<span>Comment: </span> 1', '<span>Comments: </span> %' ); ?></li>
			<li><?php the_terms( get_the_ID(), 'category', '<span>Category: </span>', ', ' ); ?></li>
		</ul>
		<div class="bt-content">
			<?php
				the_content();
				wp_link_pages(array(
					'before' => '<div class="page-links">' . __('Pages:', 'doyle'),
					'after' => '</div>',
				));
			?>
		</div>
		<div class="bt-tag-share">
			<div class="bt-tag"><?php the_tags( '', '', '' ); ?> </div>
			<div class="bt-share">
				<h4><?php esc_html_e('Share: '); ?></h4>
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</article>
