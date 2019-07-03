<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage negocio-business
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'negocio-business' ) ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="header">
	<div class="top-header">
		<div class="container">
			<?php if( get_theme_mod('negocio_business_welcome') != ''){ ?>
				<p class="col-org"><?php echo esc_html( get_theme_mod('negocio_business_welcome','') ); ?></p>
			<?php } ?>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-12">
				<div class="logo">
			        <?php if( has_custom_logo() ){ negocio_business_the_custom_logo();
			           }else{ ?>
			          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			          <?php $description = get_bloginfo( 'description', 'display' );
			          if ( $description || is_customize_preview() ) : ?> 
			            <p class="site-description"><?php echo esc_html($description); ?></p>
			        <?php endif; }?>
			    </div>
			</div>
			<div class="col-lg-8 col-md-12 p-0">
				<div class="row m-0">
					<div class="col-lg-4 col-md-4 contact">
						<?php if( get_theme_mod('negocio_business_call1') != '' || get_theme_mod( 'negocio_business_call' )!= ''){ ?>
							<div class="row">
								<div class="col-lg-2 col-md-3">
									<i class="fas fa-phone"></i>
								</div>
								<div class="col-lg-10 col-md-9">
									<p class="para-call"><?php if( get_theme_mod('negocio_business_call') != ''){ ?>
										<span class="col-org"><?php echo esc_html( get_theme_mod('negocio_business_call','') ); ?></span>
										<?php } ?>
									</p>
									<p><?php if( get_theme_mod('negocio_business_call1') != ''){ ?>
										<span class="col-org"><?php echo esc_html( get_theme_mod('negocio_business_call1','') ); ?></span>
										<?php } ?>
									</p>		
								</div>
							</div>		
						<?php } ?>
					</div>
					<div class="col-lg-4 col-md-4 contact">
						<?php if( get_theme_mod('negocio_business_email') != '' || get_theme_mod( 'negocio_business_email1' )!= ''){ ?>
							<div class="row">
								<div class="col-lg-2 col-md-3">
									<i class="fab fa-telegram-plane"></i>
								</div>
								<div class="col-lg-10 col-md-9">
									<p class="para-call"><?php if( get_theme_mod('negocio_business_email') != ''){ ?>
										<span class="col-org"><?php echo esc_html( get_theme_mod('negocio_business_email','') ); ?></span>
										<?php } ?>
									</p>
									<p><?php if( get_theme_mod('negocio_business_email1') != ''){ ?>
										<span class="col-org"><?php echo esc_html( get_theme_mod('negocio_business_email1','') ); ?></span>
									<?php } ?>
									</p>		
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="col-lg-4 col-md-4 social-media">
						<div class="social-icons">
						<?php if( get_theme_mod( 'negocio_business_facebook_url') != '') { ?>
					      <a href="<?php echo esc_url( get_theme_mod( 'negocio_business_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
					    <?php } ?>
					    <?php if( get_theme_mod( 'negocio_business_twitter_url') != '') { ?>
					      <a href="<?php echo esc_url( get_theme_mod( 'negocio_business_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
					    <?php } ?>
					     <?php if( get_theme_mod( 'negocio_business_insta_url') != '') { ?>
					      <a href="<?php echo esc_url( get_theme_mod( 'negocio_business_insta_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
					    <?php } ?>
					    <?php if( get_theme_mod( 'negocio_business_linkedin_url') != '') { ?>
					      <a href="<?php echo esc_url( get_theme_mod( 'negocio_business_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i></a>
					    <?php } ?>	            
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','negocio-business'); ?></a></div>
	<div class="menu-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-md-10">
					<div class="nav">
						<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
					</div>
				</div>
				<?php if ( get_theme_mod('negocio_business_btn_text','') != "" ) {?>
					<div class="col-lg-2 col-md-2 p-0"> 
					   	<div class="quote-btn">            
					     <a href="<?php echo esc_html( get_theme_mod('negocio_business_btn_link','') ); ?>"><?php echo esc_html( get_theme_mod('negocio_business_btn_text','') ); ?></a>    
					    </div>          
					</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>