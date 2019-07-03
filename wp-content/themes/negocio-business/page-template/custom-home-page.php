<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<?php do_action( 'negocio_business_above_slider' ); ?>

<?php if( get_theme_mod('negocio_business_slider_hide_show') != ''){ ?>
	<section id="slider">
	  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
		    <?php $pages = array();
		      	for ( $count = 1; $count <= 3; $count++ ) {
			        $mod = intval( get_theme_mod( 'negocio_business_slider' . $count ));
			        if ( 'page-none-selected' != $mod ) {
			          $pages[] = $mod;
			        }
		      	}
		      	if( !empty($pages) ) :
		        $args = array(
		          	'post_type' => 'page',
		          	'post__in' => $pages,
		          	'orderby' => 'post__in'
		        );
		        $query = new WP_Query( $args );
		        if ( $query->have_posts() ) :
		          $i = 1;
		    ?>     
		    <div class="carousel-inner" role="listbox">
		      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
		        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
		          	<a href="<?php echo esc_url( get_permalink() );?>"><img src="<?php the_post_thumbnail_url('full'); ?>"/></a>
		          	<div class="carousel-caption">
			            <div class="inner_carousel">
			              	<h2><?php the_title();?></h2>
			            </div>
			            <div class="read-btn">
			              <a href="<?php the_permalink();?>" class="" title="<?php esc_attr_e( 'Read More', 'negocio-business' ); ?>"><?php esc_html_e('Read More','negocio-business'); ?>
			              </a>
				       	</div>
		          	</div>
		        </div>
		      	<?php $i++; endwhile; 
		      	wp_reset_postdata();?>
		    </div>
		    <?php else : ?>
		    <div class="no-postfound"></div>
		      <?php endif;
		    endif;?>
		    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
		    </a>
		    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
		    </a>
	  	</div>  
	  	<div class="clearfix"></div>
	</section>
<?php }?>

<?php do_action('negocio_business_below_slider'); ?>

<?php if( get_theme_mod('negocio_business_about_page') != ''){ ?>

<section id="about">
 	<div class="container">
	   	<?php $pages = array();
	     	$mod = absint( get_theme_mod( 'negocio_business_about_page'));
	     	if ( 'page-none-selected' != $mod ) {
	       		$pages[] = $mod;
	     	}
	   	if( !empty($pages) ) :
	     	$args = array(
	       	'post_type' => 'page',
	       	'post__in' => $pages,
	       	'orderby' => 'post__in'
	 	);
	 	$query = new WP_Query( $args );
	     	if ( $query->have_posts() ) :
	       		while ( $query->have_posts() ) : $query->the_post(); ?>
		           	<div class="row">
			            <div class="col-lg-3 col-md-4 heading">
			                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			            </div>
			            <div class="col-lg-9 col-md-8">
			               <p><?php $excerpt = get_the_excerpt(); echo esc_html( negocio_business_string_limit_words( $excerpt,30 ) ); ?></p>
			            </div>
		           	</div>
	       	<?php endwhile; ?>
	     	<?php else : ?>
	         	<div class="no-postfound"></div>
	     	<?php endif;
	   	endif;
	   	wp_reset_postdata()?>
	 	<div class="clearfix"></div> 
 	</div>
</section>

<?php }?> 

<?php do_action('negocio_business_above_our_services_section'); ?>

<?php /*--our-services --*/?>
<?php if( get_theme_mod('negocio_business_title') != '' || get_theme_mod( 'negocio_business_cat' )!= ''){ ?>
	<section id="business-services">
		<div class="container">
			<div class="service-box">
				<?php if( get_theme_mod('negocio_business_title') != ''){ ?>
		    		<h3><?php echo esc_html(get_theme_mod('negocio_business_title','')); ?></h3>
		    		<img src="<?php echo esc_url(get_theme_mod('negocio_business_sec_border',get_template_directory_uri().'/assets/images/border.png')); ?>" alt="">
		    	<?php }?>
	            <div class="row">
		      		<?php $catData1=  get_theme_mod('negocio_business_cat'); if($catData1){ 
		      		$page_query = new WP_Query(array( 'category_name' => esc_html($catData1 ,'negocio-business')));?>
		        		<?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>	
		          			<div class="col-lg-3 col-md-4">
		          				<div class="service-section">
							      	<img src="<?php the_post_thumbnail_url('full'); ?>"/>
			          				<div class="content-topic">
			          					 <h4><?php the_title();?></h4>
					            		<p><?php $excerpt = get_the_excerpt(); echo esc_html( negocio_business_string_limit_words( $excerpt,10 ) ); ?></p>
					            		<div class="read-btn">
							              <a href="<?php the_permalink();?>" class="" title="<?php esc_attr_e( 'Read More', 'negocio-business' ); ?>"><?php esc_html_e('Read More','negocio-business'); ?>
							              </a>
							            </div>
		            				</div>
		          				</div>
						    </div>    	
		          		<?php endwhile; 
		          	wp_reset_postdata();
		          	}?>
	      		</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
<?php }?>

<?php do_action('negocio_business_below_our_services_section'); ?>

<div class="container">
  	<?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>