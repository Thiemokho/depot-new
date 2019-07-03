<?php
/**
 * The template part for displaying grid post
 *
 * @package Sirat
 * @subpackage sirat
 * @since Sirat 1.0
 */
?>

<div class="col-lg-4 col-md-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
	    <div class="post-main-box">
	      	<div class="box-image">
	          	<?php 
		            if(has_post_thumbnail()) { 
		              the_post_thumbnail(); 
		            }
	          	?>
	        </div>
	        <h3 class="section-title"><?php the_title();?></h3>
	        <div class="new-text">
	        	<p><?php the_excerpt();?></p>
	        </div>
	        <div class="more-btn">
          		<a href="<?php echo esc_url(get_permalink()); ?>" alt="<?php the_title(); ?>"><?php esc_html_e( 'READ MORE', 'sirat' ); ?><span class="screen-reader-text"><?php the_title(); ?></span></a>
        	</div>
	    </div>
	    <div class="clearfix"></div>
  	</article>
</div>