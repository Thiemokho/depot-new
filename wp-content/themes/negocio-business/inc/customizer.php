<?php
/**
 * negocio-business: Customizer
 *
 * @package WordPress
 * @subpackage negocio-business
 * @since 1.0
 */

function negocio_business_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'negocio_business_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'negocio-business' ),
	    'description' => __( 'Description of what this panel does.', 'negocio-business' ),
	) );

	$wp_customize->add_section( 'negocio_business_theme_options_section', array(
    	'title'      => __( 'General Settings', 'negocio-business' ),
		'priority'   => 30,
		'panel' => 'negocio_business_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('negocio_business_theme_options',array(
        'default' => __('Right Sidebar','negocio-business'),
        'sanitize_callback' => 'negocio_business_sanitize_choices'	        
	));

	$wp_customize->add_control('negocio_business_theme_options',array(
        'type' => 'radio',
        'label' => __('Do you want this section','negocio-business'),
        'section' => 'negocio_business_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','negocio-business'),
            'Right Sidebar' => __('Right Sidebar','negocio-business'),
            'One Column' => __('One Column','negocio-business'),
            'Three Columns' => __('Three Columns','negocio-business'),
            'Four Columns' => __('Four Columns','negocio-business'),
            'Grid Layout' => __('Grid Layout','negocio-business')
        ),
	));

	// Top Bar
	$wp_customize->add_section( 'negocio_business_contact_details', array(
    	'title'      => __( 'Top Bar', 'negocio-business' ),
		'priority'   => null,
		'panel' => 'negocio_business_panel_id'
	) );

	$wp_customize->add_setting('negocio_business_welcome',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('negocio_business_welcome',array(
		'label'	=> __('Welcome Text','negocio-business'),
		'section'=> 'negocio_business_contact_details',
		'setting'=> 'negocio_business_welcome',
		'type'=> 'text'
	));
	
	$wp_customize->add_setting('negocio_business_call',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('negocio_business_call',array(
		'label'	=> __('Phone Text','negocio-business'),
		'section'=> 'negocio_business_contact_details',
		'setting'=> 'negocio_business_call',
		'type'=> 'text'
	));

	$wp_customize->add_setting('negocio_business_call1',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('negocio_business_call1',array(
		'label'	=> __('Phone Number','negocio-business'),
		'section'=> 'negocio_business_contact_details',
		'setting'=> 'negocio_business_call1',
		'type'=> 'text'
	));

	$wp_customize->add_setting('negocio_business_email',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('negocio_business_email',array(
		'label'	=> __('Email Text','negocio-business'),
		'section'=> 'negocio_business_contact_details',
		'setting'=> 'negocio_business_email',
		'type'=> 'text'
	));

	$wp_customize->add_setting('negocio_business_email1',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('negocio_business_email1',array(
		'label'	=> __('Email Address','negocio-business'),
		'section'=> 'negocio_business_contact_details',
		'setting'=> 'negocio_business_email1',
		'type'=> 'text'
	));

	$wp_customize->add_setting('negocio_business_btn_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('negocio_business_btn_text',array(
		'label'	=> __('Add Button Text','negocio-business'),
		'section'	=> 'negocio_business_contact_details',
		'setting'	=> 'negocio_business_btn_text',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('negocio_business_btn_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('negocio_business_btn_link',array(
		'label'	=> __('Add Button Link','negocio-business'),
		'section'	=> 'negocio_business_contact_details',
		'setting'	=> 'negocio_business_btn_link',
		'type'	=> 'url'
	));

	//social icons
	$wp_customize->add_section( 'negocio_business_social', array(
    	'title'      => __( 'Social Icons', 'negocio-business' ),
		'priority'   => null,
		'panel' => 'negocio_business_panel_id'
	) );

	$wp_customize->add_setting('negocio_business_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('negocio_business_facebook_url',array(
		'label'	=> __('Add Facebook link','negocio-business'),
		'section'	=> 'negocio_business_social',
		'setting'	=> 'negocio_business_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('negocio_business_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('negocio_business_twitter_url',array(
		'label'	=> __('Add Twitter link','negocio-business'),
		'section'	=> 'negocio_business_social',
		'setting'	=> 'negocio_business_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('negocio_business_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('negocio_business_insta_url',array(
		'label'	=> __('Add Instagram link','negocio-business'),
		'section'	=> 'negocio_business_social',
		'setting'	=> 'negocio_business_insta_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('negocio_business_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('negocio_business_linkedin_url',array(
		'label'	=> __('Add Linkedin link','negocio-business'),
		'section'	=> 'negocio_business_social',
		'setting'	=> 'negocio_business_linkedin_url',
		'type'	=> 'url'
	));
	
	//home page slider
	$wp_customize->add_section( 'negocio_business_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'negocio-business' ),
		'priority'   => null,
		'panel' => 'negocio_business_panel_id'
	) );

	$wp_customize->add_setting('negocio_business_slider_hide_show',array(
       	'default' => 'true',
       	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('negocio_business_slider_hide_show',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide slider','negocio-business'),
	   	'description' => __('Image Size ( 1600px x 582px )','negocio-business'),
	   	'section' => 'negocio_business_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'negocio_business_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'negocio_business_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'negocio_business_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'negocio-business' ),
			'section'  => 'negocio_business_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	//
	$wp_customize->add_section('negocio_business_about',array(
		'title'	=> __('About','negocio-business'),
		'description'	=> __('Add About Section below.','negocio-business'),
		'panel' => 'negocio_business_panel_id',
	));

	$wp_customize->add_setting( 'negocio_business_about_page', array(
		'default'           => '',
		'sanitize_callback' => 'negocio_business_sanitize_dropdown_pages'
	) );
	$wp_customize->add_control( 'negocio_business_about_page', array(
		'label'    => __( 'Select About Page', 'negocio-business' ),
		'section'  => 'negocio_business_about',
		'type'     => 'dropdown-pages'
	) );

	//	Our Services
	$wp_customize->add_section('negocio_business_service',array(
		'title'	=> __('Our Services','negocio-business'),
		'description'=> __('This section will appear below the slider.','negocio-business'),
		'panel' => 'negocio_business_panel_id',
	));
	
	$wp_customize->add_setting('negocio_business_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('negocio_business_title',array(
		'label'	=> __('Section Title','negocio-business'),
		'section'	=> 'negocio_business_service',
		'setting'	=> 'negocio_business_title',
		'type'		=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('negocio_business_cat',array(
		'default'	=> 'select',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('negocio_business_cat',array(
		'type'    => 'select',
		'choices' => $cat_pst,
		'label' => __('Select Category to display Post','negocio-business'),
		'section' => 'negocio_business_service',
	));

	//Footer
    $wp_customize->add_section( 'negocio_business_footer', array(
    	'title'      => __( 'Footer Text', 'negocio-business' ),
		'priority'   => null,
		'panel' => 'negocio_business_panel_id'
	) );

    $wp_customize->add_setting('negocio_business_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('negocio_business_footer_copy',array(
		'label'	=> __('Footer Text','negocio-business'),
		'section'	=> 'negocio_business_footer',
		'setting'	=> 'negocio_business_footer_copy',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'negocio_business_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'negocio_business_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'negocio_business_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'negocio_business_sanitize_dropdown_pages',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'negocio-business' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'negocio-business' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'negocio_business_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'negocio_business_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'negocio_business_customize_register' );

function negocio_business_customize_partial_blogname() {
	bloginfo( 'name' );
}

function negocio_business_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function negocio_business_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function negocio_business_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Negocio_Business_Customize {

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
		$manager->register_section_type( 'Negocio_Business_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Negocio_Business_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Business Pro Theme', 'negocio-business' ),
					'pro_text' => esc_html__( 'Go Pro','negocio-business' ),
					'pro_url'  => esc_url( 'https://www.luzuk.com/themes/wordpress-business-theme/' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'negocio-business-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'negocio-business-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Negocio_Business_Customize::get_instance();