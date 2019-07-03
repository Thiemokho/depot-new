<?php
/**
 * Fitness Gymhouse: Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function fitness_gymhouse_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'fitness_gymhouse_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'fitness-gymhouse' ),
	    'description' => __( 'Description of what this panel does.', 'fitness-gymhouse' ),
	) );

	// Add the Global Color typography section.
	$wp_customize->add_section( 'fitness_gymhouse_theme_color_option', array( 
		'panel' => 'fitness_gymhouse_panel_id', 
		'title' => esc_html__( 'Theme Color Option', 'fitness-gymhouse' )
	) );

  	$wp_customize->add_setting( 'fitness_gymhouse_theme_color_1', array(
	    'default' => '#554c86',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_gymhouse_theme_color_1', array(
  		'label' => 'Color Option 1',
	    'description' => __('One can change complete theme color on just one click.', 'fitness-gymhouse'),
	    'section' => 'fitness_gymhouse_theme_color_option',
	    'settings' => 'fitness_gymhouse_theme_color_1',
  	)));

  	$wp_customize->add_setting( 'fitness_gymhouse_theme_color_2', array(
	    'default' => '#e21b58',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_gymhouse_theme_color_2', array(
  		'label' => 'Color option 2',
	    'description' => __('One can change complete theme color on just one click.', 'fitness-gymhouse'),
	    'section' => 'fitness_gymhouse_theme_color_option',
	    'settings' => 'fitness_gymhouse_theme_color_2',
  	)));

	$wp_customize->add_section( 'fitness_gymhouse_general_option', array(
    	'title'      => __( 'Sidebar Settings', 'fitness-gymhouse' ),
		'priority'   => 30,
		'panel' => 'fitness_gymhouse_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('fitness_gymhouse_layout_settings',array(
        'default' => __('Right Sidebar','fitness-gymhouse'),
        'sanitize_callback' => 'fitness_gymhouse_sanitize_choices'	        
	));

	$wp_customize->add_control('fitness_gymhouse_layout_settings',array(
        'type' => 'radio',
        'label'     => __('Theme Sidebar Layouts', 'fitness-gymhouse'),
        'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'fitness-gymhouse'),
        	'section' => 'fitness_gymhouse_general_option',
        	'choices' => array(
            'Left Sidebar' => __('Left Sidebar','fitness-gymhouse'),
            'Right Sidebar' => __('Right Sidebar','fitness-gymhouse'),
            'One Column' => __('One Column','fitness-gymhouse'),
            'Three Columns' => __('Three Columns','fitness-gymhouse'),
            'Four Columns' => __('Four Columns','fitness-gymhouse'),
            'Grid Layout' => __('Grid Layout','fitness-gymhouse')
        ),
	));	

	//Topbar section
	$wp_customize->add_section('fitness_gymhouse_topbar',array(
		'title'	=> __('Topbar Section','fitness-gymhouse'),
		'label' => __('Contact Details', 'fitness-gymhouse'),
		'description' => __('Here you can add email address, phone number and timings.','fitness-gymhouse'),
		'priority'	=> null,
		'panel' => 'fitness_gymhouse_panel_id',
	));

	$wp_customize->add_setting('fitness_gymhouse_contact',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('fitness_gymhouse_contact',array(
		'label'	=> __('Add Phone Number','fitness-gymhouse'),
		'section'	=> 'fitness_gymhouse_topbar',
		'setting'	=> 'fitness_gymhouse_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('fitness_gymhouse_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('fitness_gymhouse_email',array(
		'label'	=> __('Add Email Address','fitness-gymhouse'),
		'section'	=> 'fitness_gymhouse_topbar',
		'setting'	=> 'fitness_gymhouse_email',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('fitness_gymhouse_timming',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('fitness_gymhouse_timming',array(
		'label'	=> __('Add Time','fitness-gymhouse'),
		'section'	=> 'fitness_gymhouse_topbar',
		'setting'	=> 'fitness_gymhouse_timming',
		'type'		=> 'text'
	));

	//home page slider
	$wp_customize->add_section( 'fitness_gymhouse_slider' , array(
    	'title'      => __( 'Slider Section', 'fitness-gymhouse' ),
    	'label'     => __('Slider Settings', 'fitness-gymhouse'),
    	'description'	=> __('Here you can select pages which you have created for slider.','fitness-gymhouse'),
		'priority'   => null,
		'panel' => 'fitness_gymhouse_panel_id'
	) );

	$wp_customize->add_setting('fitness_gymhouse_slider_hide',array(
       'default' => 'false',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('fitness_gymhouse_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','fitness-gymhouse'),
       'section' => 'fitness_gymhouse_slider',
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'fitness_gymhouse_slide_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'fitness_gymhouse_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'fitness_gymhouse_slide_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'fitness-gymhouse' ),
			'section'  => 'fitness_gymhouse_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	//About
	$wp_customize->add_section('fitness_gymhouse_about_section',array(
		'title'	=> __('About Section','fitness-gymhouse'),
		'label'     => __('About Us', 'fitness-gymhouse'),
		'description'	=> __('Here you can select post which you have created for About section.','fitness-gymhouse'),
		'panel' => 'fitness_gymhouse_panel_id',
	));

	$post_list = get_posts();
	$i = 0;
	$posts[]='Select';	
	foreach($post_list as $post){
	$posts[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('fitness_gymhouse_about',array(
		'sanitize_callback' => 'fitness_gymhouse_sanitize_choices',
	));
	$wp_customize->add_control('fitness_gymhouse_about',array(
		'type'    => 'select',
		'choices' => $posts,
		'label' => __('Select post','fitness-gymhouse'),
		'section' => 'fitness_gymhouse_about_section',
	));

	//Footer
	$wp_customize->add_section( 'fitness_gymhouse_footer' , array(
    	'title'      => __( 'Footer Text', 'fitness-gymhouse' ),
    	'description'	=> __('Here you can add copyright text.','fitness-gymhouse'),
		'priority'   => null,
		'panel' => 'fitness_gymhouse_panel_id'
	) );
	$wp_customize->add_setting('fitness_gymhouse_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('fitness_gymhouse_footer_text',array(
		'label'	=> __('Add Copyright Text','fitness-gymhouse'),
		'section'	=> 'fitness_gymhouse_footer',
		'setting'	=> 'fitness_gymhouse_footer_text',
		'type'		=> 'text'
	));


	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'fitness_gymhouse_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'fitness_gymhouse_customize_partial_blogdescription',
	) );
	
}
add_action( 'customize_register', 'fitness_gymhouse_customize_register' );


/**
 * Render the site title for the selective refresh partial.
 *
 * @since Fitness Gymhouse 1.0
 * @see fitness-gymhouse_customize_register()
 *
 * @return void
 */
function fitness_gymhouse_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Fitness Gymhouse 1.0
 * @see fitness-gymhouse_customize_register()
 *
 * @return void
 */
function fitness_gymhouse_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function fitness_gymhouse_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'footer-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Fitness_Gymhouse_Customize {

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
		$manager->register_section_type( 'Fitness_Gymhouse_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
		 	new Fitness_Gymhouse_Customize_Section_Pro(
				$manager,
		 		'example_1',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Fitness Gymhouse Pro', 'fitness-gymhouse' ),
					'pro_text' => esc_html__( 'Go Pro', 'fitness-gymhouse' ),
					'pro_url'  => esc_url('https://www.themeseye.com/wordpress/premium-fitness-wordpress-theme/')
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

		wp_enqueue_script( 'fitness-gymhouse-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'fitness-gymhouse-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Fitness_Gymhouse_Customize::get_instance();