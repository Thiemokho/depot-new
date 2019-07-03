<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage niwas-resort-hotel
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'niwas-resort-hotel' ) ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<div id="top-header">
	<div class="container">
		<div class="contact-details">
			<div class="row">
				<div class="col-lg-9 col-md-9">
					<div class="mail-call">
						<span>
							<?php if( get_theme_mod( 'niwas_resort_hotel_welcome') != '') { ?>	
							<p class="col-org"><?php echo esc_html( get_theme_mod('niwas_resort_hotel_welcome','') ); ?></p>
						    <?php } ?>
						</span>
						<span>
							<?php if( get_theme_mod( 'niwas_resort_hotel_call','' ) != '') { ?>
						    <p class="col-org"><i class="fas fa-phone"></i><?php echo esc_html( get_theme_mod('niwas_resort_hotel_call','') ); ?></p>
							<?php } ?>
						</span>
						<span>
							<?php if( get_theme_mod( 'niwas_resort_hotel_mail','' ) != '') { ?>
								<p class="col-org"><i class="fas fa-envelope"></i><a href="mailto:<?php echo esc_attr(get_theme_mod('niwas_resort_hotel_mail','')); ?>"><span><?php echo esc_html(get_theme_mod('niwas_resort_hotel_mail','')); ?></a></p>
							<?php } ?>
						</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="social-icons">
						<?php if( get_theme_mod( 'niwas_resort_hotel_facebook_url') != '') { ?>
					      <a href="<?php echo esc_url( get_theme_mod( 'niwas_resort_hotel_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
					    <?php } ?>
					    <?php if( get_theme_mod( 'niwas_resort_hotel_twitter_url') != '') { ?>
					      <a href="<?php echo esc_url( get_theme_mod( 'niwas_resort_hotel_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
					    <?php } ?>
					    <?php if( get_theme_mod( 'niwas_resort_hotel_insta_url') != '') { ?>
					      <a href="<?php echo esc_url( get_theme_mod( 'niwas_resort_hotel_insta_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
					    <?php } ?>	
					    <?php if( get_theme_mod( 'niwas_resort_hotel_google_url') != '') { ?>
					      <a href="<?php echo esc_url( get_theme_mod( 'niwas_resort_hotel_google_url','' ) ); ?>"><i class="fab fa-google-plus-g"></i></a>
					    <?php } ?>		            
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
<div id="header">
	<div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','niwas-resort-hotel'); ?></a></div>
	<div class="menu-section">
		<div class="container">
			<div class="main-top">
				<div class="row">
					<div class="col-lg-3 col-md-3">
						<div class="logo">
					        <?php if( has_custom_logo() ){ niwas_resort_hotel_the_custom_logo();
					           }else{ ?>
					          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					          <?php $description = get_bloginfo( 'description', 'display' );
					          if ( $description || is_customize_preview() ) : ?> 
					            <p class="site-description"><?php echo esc_html($description); ?></p>
					        <?php endif; }?>
					    </div>
					</div>
					<div class="col-lg-8 col-md-8">
						<div class="nav">
							<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
						</div>
					</div>
					<div class="col-lg-1 col-md-1">
						<div class="search-box ">
          					<i class="fas fa-search"></i>
          				</div>
        			</div> 
				</div>
				<div class="serach_outer">
			        <div class="closepop"><i class="far fa-window-close"></i></div>
			        <div class="serach_inner">
			          <?php get_search_form(); ?>
			        </div>
		      	</div> 
			</div>	
		</div>		
	</div>
</div>