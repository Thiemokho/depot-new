<?php
/**
 * VW Gardening Landscaping Theme Customizer
 *
 * @package VW Gardening Landscaping
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_gardening_landscaping_custom_controls() {

    load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'vw_gardening_landscaping_custom_controls' );

function vw_gardening_landscaping_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . 'inc/customize-homepage/class-customize-homepage.php' );

	//add home page setting pannel
	$wp_customize->add_panel( 'vw_gardening_landscaping_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'VW Settings', 'vw-gardening-landscaping' ),
	) );

	// Layout
	$wp_customize->add_section( 'vw_gardening_landscaping_left_right', array(
    	'title'      => __( 'General Settings', 'vw-gardening-landscaping' ),
		'panel' => 'vw_gardening_landscaping_panel_id'
	) );

	$wp_customize->add_setting('vw_gardening_landscaping_width_option',array(
        'default' => __('Full Width','vw-gardening-landscaping'),
        'sanitize_callback' => 'vw_gardening_landscaping_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Gardening_Landscaping_Image_Radio_Control($wp_customize, 'vw_gardening_landscaping_width_option', array(
        'type' => 'select',
        'label' => __('Width Layouts','vw-gardening-landscaping'),
        'description' => __('Here you can change the width layout of Website.','vw-gardening-landscaping'),
        'section' => 'vw_gardening_landscaping_left_right',
        'choices' => array(
            'Full Width' => get_template_directory_uri().'/assets/images/full-width.png',
            'Wide Width' => get_template_directory_uri().'/assets/images/wide-width.png',
            'Boxed' => get_template_directory_uri().'/assets/images/boxed-width.png',
    ))));

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('vw_gardening_landscaping_theme_options',array(
        'default' => __('Right Sidebar','vw-gardening-landscaping'),
        'sanitize_callback' => 'vw_gardening_landscaping_sanitize_choices'	        
	) );
	$wp_customize->add_control('vw_gardening_landscaping_theme_options', array(
        'type' => 'select',
        'label' => __('Post Sidebar Layout','vw-gardening-landscaping'),
        'description' => __('Here you can change the sidebar layout for posts. ','vw-gardening-landscaping'),
        'section' => 'vw_gardening_landscaping_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','vw-gardening-landscaping'),
            'Right Sidebar' => __('Right Sidebar','vw-gardening-landscaping'),
            'One Column' => __('One Column','vw-gardening-landscaping'),
            'Three Columns' => __('Three Columns','vw-gardening-landscaping'),
            'Four Columns' => __('Four Columns','vw-gardening-landscaping'),
            'Grid Layout' => __('Grid Layout','vw-gardening-landscaping')
        ),
	));

	$wp_customize->add_setting('vw_gardening_landscaping_page_layout',array(
        'default' => __('One Column','vw-gardening-landscaping'),
        'sanitize_callback' => 'vw_gardening_landscaping_sanitize_choices'
	));
	$wp_customize->add_control('vw_gardening_landscaping_page_layout',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','vw-gardening-landscaping'),
        'description' => __('Here you can change the sidebar layout for pages. ','vw-gardening-landscaping'),
        'section' => 'vw_gardening_landscaping_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','vw-gardening-landscaping'),
            'Right Sidebar' => __('Right Sidebar','vw-gardening-landscaping'),
            'One Column' => __('One Column','vw-gardening-landscaping')
        ),
	) );

	//Topbar
	$wp_customize->add_section( 'vw_gardening_landscaping_topbar', array(
    	'title'      => __( 'Topbar Settings', 'vw-gardening-landscaping' ),
		'panel' => 'vw_gardening_landscaping_panel_id'
	) );

	$wp_customize->add_setting('vw_gardening_landscaping_phone_number',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_gardening_landscaping_phone_number',array(
		'label'	=> __('Add Phone Number','vw-gardening-landscaping'),
		'input_attrs' => array(
            'placeholder' => __( '+00 987 654 1230', 'vw-gardening-landscaping' ),
        ),
		'section'=> 'vw_gardening_landscaping_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_gardening_landscaping_email_address',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_gardening_landscaping_email_address',array(
		'label'	=> __('Add Email Address','vw-gardening-landscaping'),
		'input_attrs' => array(
            'placeholder' => __( 'example@gmail.com', 'vw-gardening-landscaping' ),
        ),
		'section'=> 'vw_gardening_landscaping_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_gardening_landscaping_top_btn_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_gardening_landscaping_top_btn_text',array(
		'label'	=> __('Add Button Text','vw-gardening-landscaping'),
		'input_attrs' => array(
            'placeholder' => __( 'GET A QUOTE', 'vw-gardening-landscaping' ),
        ),
		'section'=> 'vw_gardening_landscaping_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_gardening_landscaping_top_btn_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('vw_gardening_landscaping_top_btn_url',array(
		'label'	=> __('Add Button URL','vw-gardening-landscaping'),
		'input_attrs' => array(
            'placeholder' => __( 'https://example.com', 'vw-gardening-landscaping' ),
        ),
		'section'=> 'vw_gardening_landscaping_topbar',
		'type'=> 'url'
	));

	$wp_customize->add_setting( 'vw_gardening_landscaping_search_hide_show',array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'vw_gardening_landscaping_switch_sanitization'
    ));  
    $wp_customize->add_control( new VW_Gardening_Landscaping_Toggle_Switch_Custom_Control( $wp_customize, 'vw_gardening_landscaping_search_hide_show',array(
          'label' => esc_html__( 'Show / Hide Search','vw-gardening-landscaping' ),
          'section' => 'vw_gardening_landscaping_topbar'
    )));
    
	//Slider
	$wp_customize->add_section( 'vw_gardening_landscaping_slidersettings' , array(
    	'title'      => __( 'Slider Section', 'vw-gardening-landscaping' ),
		'panel' => 'vw_gardening_landscaping_panel_id'
	) );

	$wp_customize->add_setting( 'vw_gardening_landscaping_slider_hide_show',array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'vw_gardening_landscaping_switch_sanitization'
    ));  
    $wp_customize->add_control( new VW_Gardening_Landscaping_Toggle_Switch_Custom_Control( $wp_customize, 'vw_gardening_landscaping_slider_hide_show',array(
          'label' => esc_html__( 'Show / Hide Slider','vw-gardening-landscaping' ),
          'section' => 'vw_gardening_landscaping_slidersettings'
    )));

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'vw_gardening_landscaping_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'vw_gardening_landscaping_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'vw_gardening_landscaping_slider_page' . $count, array(
			'label'    => __( 'Select Slider Page', 'vw-gardening-landscaping' ),
			'description' => __('Slider image size (1500 x 590)','vw-gardening-landscaping'),
			'section'  => 'vw_gardening_landscaping_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	//content layout
	$wp_customize->add_setting('vw_gardening_landscaping_slider_content_option',array(
        'default' => __('Left','vw-gardening-landscaping'),
        'sanitize_callback' => 'vw_gardening_landscaping_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Gardening_Landscaping_Image_Radio_Control($wp_customize, 'vw_gardening_landscaping_slider_content_option', array(
        'type' => 'select',
        'label' => __('Slider Content Layouts','vw-gardening-landscaping'),
        'section' => 'vw_gardening_landscaping_slidersettings',
        'choices' => array(
            'Left' => get_template_directory_uri().'/assets/images/slider-content1.png',
            'Center' => get_template_directory_uri().'/assets/images/slider-content2.png',
            'Right' => get_template_directory_uri().'/assets/images/slider-content3.png',
    ))));

    //Slider excerpt
	$wp_customize->add_setting( 'vw_gardening_landscaping_slider_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'vw_gardening_landscaping_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','vw-gardening-landscaping' ),
		'section'     => 'vw_gardening_landscaping_slidersettings',
		'type'        => 'range',
		'settings'    => 'vw_gardening_landscaping_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('vw_gardening_landscaping_slider_opacity_color',array(
      'default'              => 0.5,
      'sanitize_callback' => 'vw_gardening_landscaping_sanitize_choices'
	));

	$wp_customize->add_control( 'vw_gardening_landscaping_slider_opacity_color', array(
	'label'       => esc_html__( 'Slider Image Opacity','vw-gardening-landscaping' ),
	'section'     => 'vw_gardening_landscaping_slidersettings',
	'type'        => 'select',
	'settings'    => 'vw_gardening_landscaping_slider_opacity_color',
	'choices' => array(
      '0' =>  esc_attr('0','vw-gardening-landscaping'),
      '0.1' =>  esc_attr('0.1','vw-gardening-landscaping'),
      '0.2' =>  esc_attr('0.2','vw-gardening-landscaping'),
      '0.3' =>  esc_attr('0.3','vw-gardening-landscaping'),
      '0.4' =>  esc_attr('0.4','vw-gardening-landscaping'),
      '0.5' =>  esc_attr('0.5','vw-gardening-landscaping'),
      '0.6' =>  esc_attr('0.6','vw-gardening-landscaping'),
      '0.7' =>  esc_attr('0.7','vw-gardening-landscaping'),
      '0.8' =>  esc_attr('0.8','vw-gardening-landscaping'),
      '0.9' =>  esc_attr('0.9','vw-gardening-landscaping')
	),
	));
    
	//Our Expertise section
	$wp_customize->add_section( 'vw_gardening_landscaping_expertise_section' , array(
    	'title'      => __( 'Our Expertise', 'vw-gardening-landscaping' ),
		'priority'   => null,
		'panel' => 'vw_gardening_landscaping_panel_id'
	) );

	$wp_customize->add_setting('vw_gardening_landscaping_section_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_gardening_landscaping_section_title',array(
		'label'	=> __('Add Section Title','vw-gardening-landscaping'),
		'input_attrs' => array(
            'placeholder' => __( 'OUR EXPERTISE', 'vw-gardening-landscaping' ),
        ),
		'section'=> 'vw_gardening_landscaping_expertise_section',
		'type'=> 'text'
	));

	$categories = get_categories();
	$cat_post = array();
	$cat_post[]= 'select';
	$i = 0;	
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('vw_gardening_landscaping_our_expertise',array(
		'default'	=> 'select',
		'sanitize_callback' => 'vw_gardening_landscaping_sanitize_choices',
	));
	$wp_customize->add_control('vw_gardening_landscaping_our_expertise',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to display expertise','vw-gardening-landscaping'),
		'description' => __('Image Size (533 x 333)','vw-gardening-landscaping'),
		'section' => 'vw_gardening_landscaping_expertise_section',
	));

	//Expertise excerpt
	$wp_customize->add_setting( 'vw_gardening_landscaping_expertise_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'vw_gardening_landscaping_expertise_excerpt_number', array(
		'label'       => esc_html__( 'Expertise Excerpt length','vw-gardening-landscaping' ),
		'section'     => 'vw_gardening_landscaping_expertise_section',
		'type'        => 'range',
		'settings'    => 'vw_gardening_landscaping_expertise_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Blog Post
	$wp_customize->add_section('vw_gardening_landscaping_blog_post',array(
		'title'	=> __('Blog Post Settings','vw-gardening-landscaping'),
		'panel' => 'vw_gardening_landscaping_panel_id',
	));	

	$wp_customize->add_setting( 'vw_gardening_landscaping_toggle_postdate',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_gardening_landscaping_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Gardening_Landscaping_Toggle_Switch_Custom_Control( $wp_customize, 'vw_gardening_landscaping_toggle_postdate',array(
        'label' => esc_html__( 'Post Date','vw-gardening-landscaping' ),
        'section' => 'vw_gardening_landscaping_blog_post'
    )));

    $wp_customize->add_setting( 'vw_gardening_landscaping_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_gardening_landscaping_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Gardening_Landscaping_Toggle_Switch_Custom_Control( $wp_customize, 'vw_gardening_landscaping_toggle_author',array(
		'label' => esc_html__( 'Author','vw-gardening-landscaping' ),
		'section' => 'vw_gardening_landscaping_blog_post'
    )));

    $wp_customize->add_setting( 'vw_gardening_landscaping_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_gardening_landscaping_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Gardening_Landscaping_Toggle_Switch_Custom_Control( $wp_customize, 'vw_gardening_landscaping_toggle_comments',array(
		'label' => esc_html__( 'Comments','vw-gardening-landscaping' ),
		'section' => 'vw_gardening_landscaping_blog_post'
    )));

    $wp_customize->add_setting( 'vw_gardening_landscaping_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'vw_gardening_landscaping_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','vw-gardening-landscaping' ),
		'section'     => 'vw_gardening_landscaping_blog_post',
		'type'        => 'range',
		'settings'    => 'vw_gardening_landscaping_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Content Craetion
	$wp_customize->add_section( 'vw_gardening_landscaping_content_section' , array(
    	'title' => __( 'Customize Home Page', 'vw-gardening-landscaping' ),
		'priority' => null,
		'panel' => 'vw_gardening_landscaping_panel_id'
	) );

	$wp_customize->add_setting('vw_gardening_landscaping_content_creation_main_control', array(
		'sanitize_callback' => 'esc_html',
	) );

	$homepage= get_option( 'page_on_front' );

	$wp_customize->add_control(	new VW_Gardening_Landscaping_Content_Creation( $wp_customize, 'vw_gardening_landscaping_content_creation_main_control', array(
		'options' => array(
			esc_html__( 'First select static page in homepage setting for front page.Below given edit button is to customize Home Page. Just click on the edit option, add whatever elements you want to include in the homepage, save the changes and you are good to go.','vw-gardening-landscaping' ),
		),
		'section' => 'vw_gardening_landscaping_content_section',
		'button_url'  => admin_url( 'post.php?post='.$homepage.'&action=edit'),
		'button_text' => esc_html__( 'Edit', 'vw-gardening-landscaping' ),
	) ) );

	//Footer Text
	$wp_customize->add_section('vw_gardening_landscaping_footer',array(
		'title'	=> __('Footer','vw-gardening-landscaping'),
		'panel' => 'vw_gardening_landscaping_panel_id',
	));	
	
	$wp_customize->add_setting('vw_gardening_landscaping_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_gardening_landscaping_footer_text',array(
		'label'	=> __('Copyright Text','vw-gardening-landscaping'),
		'input_attrs' => array(
            'placeholder' => __( 'Copyright 2019, .....', 'vw-gardening-landscaping' ),
        ),
		'section'=> 'vw_gardening_landscaping_footer',
		'type'=> 'text'
	));	

	$wp_customize->add_setting('vw_gardening_landscaping_scroll_top_alignment',array(
        'default' => __('Right','vw-gardening-landscaping'),
        'sanitize_callback' => 'vw_gardening_landscaping_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Gardening_Landscaping_Image_Radio_Control($wp_customize, 'vw_gardening_landscaping_scroll_top_alignment', array(
        'type' => 'select',
        'label' => __('Scroll To Top','vw-gardening-landscaping'),
        'section' => 'vw_gardening_landscaping_footer',
        'settings' => 'vw_gardening_landscaping_scroll_top_alignment',
        'choices' => array(
            'Left' => get_template_directory_uri().'/assets/images/layout1.png',
            'Center' => get_template_directory_uri().'/assets/images/layout2.png',
            'Right' => get_template_directory_uri().'/assets/images/layout3.png'
    ))));
}

add_action( 'customize_register', 'vw_gardening_landscaping_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class VW_Gardening_Landscaping_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'VW_Gardening_Landscaping_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(new VW_Gardening_Landscaping_Customize_Section_Pro($manager,'example_1',array(
			'priority'   => 1,
			'title'    => esc_html__( 'VW Gardening Pro', 'vw-gardening-landscaping' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'vw-gardening-landscaping' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/themes/landscaping-wordpress-theme/'),
		)));

		$manager->add_section(new VW_Gardening_Landscaping_Customize_Section_Pro($manager,'example_2',array(
			'priority'   => 1,
			'title'    => esc_html__( 'Documentation', 'vw-gardening-landscaping' ),
			'pro_text' => esc_html__( 'Docs', 'vw-gardening-landscaping' ),
			'pro_url'  => admin_url('themes.php?page=vw_gardening_landscaping_guide'),
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'vw-gardening-landscaping-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'vw-gardening-landscaping-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
VW_Gardening_Landscaping_Customize::get_instance();