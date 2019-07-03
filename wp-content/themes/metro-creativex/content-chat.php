<?php
/**
 * The template for displaying posts in the Chat post format.
 *
 * @package metro-creativex
 */
?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-design' ); ?>>
				<?php
					$metro_creativex_posttitle = get_the_title();
					$metro_creativex_feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				if (isset( $metro_creativex_feat_image[0] )) :
					echo '<div class="img"><img src=' . $metro_creativex_feat_image[0] . ' alt="' . $metro_creativex_posttitle . '"></div>';
					endif;
				?>
				<div class="post_icon" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/pt_chat.png);"></div>
				<div class="post_content">
					<div class="excerpt chat_type">
						<?php  echo get_the_excerpt(); ?>
					</div><!--/excerpt-->
					<div class="post_date"><?php the_time( get_option( 'date_format' ) ); ?></div>
				</div><!--/post_content-->
			</article>
