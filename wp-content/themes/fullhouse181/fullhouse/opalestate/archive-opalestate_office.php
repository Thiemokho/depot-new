<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}    
global $fullhouse_page_layouts; 
$fullhouse_page_layouts = apply_filters( 'fullhouse_fnc_get_archive_property_sidebar_configs', null );

get_header( apply_filters( 'fullhouse_fnc_get_header_layout', null ) ); ?>
<?php do_action( 'fullhouse_template_main_before' ); ?>

	<section id="main-container" class="site-main container" role="main">

		<main id="primary" class="content content-area">
			<div class="space-margin-bottom-30p">
				<?php echo Opalestate_Template_Loader::get_template_part( 'parts/search-office-form' ); ?>
			</div>
			
			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->

			

				<div class="<?php echo apply_filters('opalestate_row_container_class', 'row opal-row');?>">
					<?php 
						$cnt = 0 ; 
						$column = 3; 
						$colclass = floor( 12/ $column );

						while ( have_posts() ) : the_post(); 
							$cls ='';
							if( $cnt++%$column==0 ){
								$cls .= ' first-child';
							}
					?>
						<div class="col-lg-<?php echo $colclass ?> col-md-<?php echo $colclass ?> col-sm-<?php echo $colclass ?> <?php echo esc_attr($cls); ?>">
	                    	<?php echo Opalestate_Template_Loader::get_template_part( 'content-office-grid' ); ?>
	                	</div>
					<?php  endwhile; ?>
				</div>	
				<?php the_posts_pagination( array(
					'prev_text'          => __( 'Previous page', 'fullhouse' ),
					'next_text'          => __( 'Next page', 'fullhouse' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'fullhouse' ) . ' </span>',
				) ); ?>
				
			<?php else : ?>
				<?php echo Opalestate_Template_Loader::get_template_part( 'content-no-results' ); ?>
			<?php endif; ?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->


<?php get_footer(); ?>
