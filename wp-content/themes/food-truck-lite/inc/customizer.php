<?php
/**
 * Food Truck Lite Theme Customizer
 * @package Food Truck Lite
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function food_truck_lite_customize_register( $wp_customize ) {	

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-selector.php' );

	class Food_Truck_Lite_WP_Customize_Range_Control extends WP_Customize_Control{
	    public $type = 'custom_range';
	    public function enqueue(){
	        wp_enqueue_script(
	            'cs-range-control',
	            false,
	            true
	        );
	    }
	    public function render_content(){?>
	        <label>
	            <?php if ( ! empty( $this->label )) : ?>
	                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
	            <?php endif; ?>
	            <div class="cs-range-value"><?php echo esc_html($this->value()); ?></div>
	            <input data-input-type="range" type="range" <?php $this->input_attrs(); ?> value="<?php echo esc_attr($this->value()); ?>" <?php $this->link(); ?> />
	            <?php if ( ! empty( $this->description )) : ?>
	                <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
	            <?php endif; ?>
	        </label>
        <?php }
	}

	//add home page setting pannel
	$wp_customize->add_panel( 'food_truck_lite_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'food-truck-lite' ),
	    'description' => __( 'Description of what this panel does.', 'food-truck-lite' ),
	) );

	// font array
	$food_truck_lite_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );

	//Typography
	$wp_customize->add_section( 'food_truck_lite_typography', array(
    	'title' => __( 'Typography', 'food-truck-lite' ),
		'priority'   => 30,
		'panel' => 'food_truck_lite_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'food_truck_lite_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'food_truck_lite_paragraph_color', array(
		'label' => __('Paragraph Color', 'food-truck-lite'),
		'section' => 'food_truck_lite_typography',
		'settings' => 'food_truck_lite_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('food_truck_lite_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'food_truck_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'food_truck_lite_paragraph_font_family', array(
	    'section'  => 'food_truck_lite_typography',
	    'label'    => __( 'Paragraph Fonts','food-truck-lite'),
	    'type'     => 'select',
	    'choices'  => $food_truck_lite_font_array,
	));

	$wp_customize->add_setting('food_truck_lite_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('food_truck_lite_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','food-truck-lite'),
		'section'	=> 'food_truck_lite_typography',
		'setting'	=> 'food_truck_lite_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'food_truck_lite_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'food_truck_lite_atag_color', array(
		'label' => __('"a" Tag Color', 'food-truck-lite'),
		'section' => 'food_truck_lite_typography',
		'settings' => 'food_truck_lite_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('food_truck_lite_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'food_truck_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'food_truck_lite_atag_font_family', array(
	    'section'  => 'food_truck_lite_typography',
	    'label'    => __( '"a" Tag Fonts','food-truck-lite'),
	    'type'     => 'select',
	    'choices'  => $food_truck_lite_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'food_truck_lite_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'food_truck_lite_li_color', array(
		'label' => __('"li" Tag Color', 'food-truck-lite'),
		'section' => 'food_truck_lite_typography',
		'settings' => 'food_truck_lite_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('food_truck_lite_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'food_truck_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'food_truck_lite_li_font_family', array(
	    'section'  => 'food_truck_lite_typography',
	    'label'    => __( '"li" Tag Fonts','food-truck-lite'),
	    'type'     => 'select',
	    'choices'  => $food_truck_lite_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'food_truck_lite_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'food_truck_lite_h1_color', array(
		'label' => __('H1 Color', 'food-truck-lite'),
		'section' => 'food_truck_lite_typography',
		'settings' => 'food_truck_lite_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('food_truck_lite_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'food_truck_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'food_truck_lite_h1_font_family', array(
	    'section'  => 'food_truck_lite_typography',
	    'label'    => __( 'H1 Fonts','food-truck-lite'),
	    'type'     => 'select',
	    'choices'  => $food_truck_lite_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('food_truck_lite_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('food_truck_lite_h1_font_size',array(
		'label'	=> __('H1 Font Size','food-truck-lite'),
		'section'	=> 'food_truck_lite_typography',
		'setting'	=> 'food_truck_lite_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'food_truck_lite_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'food_truck_lite_h2_color', array(
		'label' => __('h2 Color', 'food-truck-lite'),
		'section' => 'food_truck_lite_typography',
		'settings' => 'food_truck_lite_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('food_truck_lite_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'food_truck_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'food_truck_lite_h2_font_family', array(
	    'section'  => 'food_truck_lite_typography',
	    'label'    => __( 'h2 Fonts','food-truck-lite'),
	    'type'     => 'select',
	    'choices'  => $food_truck_lite_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('food_truck_lite_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('food_truck_lite_h2_font_size',array(
		'label'	=> __('h2 Font Size','food-truck-lite'),
		'section'	=> 'food_truck_lite_typography',
		'setting'	=> 'food_truck_lite_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'food_truck_lite_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'food_truck_lite_h3_color', array(
		'label' => __('h3 Color', 'food-truck-lite'),
		'section' => 'food_truck_lite_typography',
		'settings' => 'food_truck_lite_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('food_truck_lite_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'food_truck_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'food_truck_lite_h3_font_family', array(
	    'section'  => 'food_truck_lite_typography',
	    'label'    => __( 'h3 Fonts','food-truck-lite'),
	    'type'     => 'select',
	    'choices'  => $food_truck_lite_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('food_truck_lite_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('food_truck_lite_h3_font_size',array(
		'label'	=> __('h3 Font Size','food-truck-lite'),
		'section'	=> 'food_truck_lite_typography',
		'setting'	=> 'food_truck_lite_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'food_truck_lite_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'food_truck_lite_h4_color', array(
		'label' => __('h4 Color', 'food-truck-lite'),
		'section' => 'food_truck_lite_typography',
		'settings' => 'food_truck_lite_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('food_truck_lite_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'food_truck_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'food_truck_lite_h4_font_family', array(
	    'section'  => 'food_truck_lite_typography',
	    'label'    => __( 'h4 Fonts','food-truck-lite'),
	    'type'     => 'select',
	    'choices'  => $food_truck_lite_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('food_truck_lite_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('food_truck_lite_h4_font_size',array(
		'label'	=> __('h4 Font Size','food-truck-lite'),
		'section'	=> 'food_truck_lite_typography',
		'setting'	=> 'food_truck_lite_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'food_truck_lite_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'food_truck_lite_h5_color', array(
		'label' => __('h5 Color', 'food-truck-lite'),
		'section' => 'food_truck_lite_typography',
		'settings' => 'food_truck_lite_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('food_truck_lite_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'food_truck_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'food_truck_lite_h5_font_family', array(
	    'section'  => 'food_truck_lite_typography',
	    'label'    => __( 'h5 Fonts','food-truck-lite'),
	    'type'     => 'select',
	    'choices'  => $food_truck_lite_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('food_truck_lite_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('food_truck_lite_h5_font_size',array(
		'label'	=> __('h5 Font Size','food-truck-lite'),
		'section'	=> 'food_truck_lite_typography',
		'setting'	=> 'food_truck_lite_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'food_truck_lite_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'food_truck_lite_h6_color', array(
		'label' => __('h6 Color', 'food-truck-lite'),
		'section' => 'food_truck_lite_typography',
		'settings' => 'food_truck_lite_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('food_truck_lite_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'food_truck_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'food_truck_lite_h6_font_family', array(
	    'section'  => 'food_truck_lite_typography',
	    'label'    => __( 'h6 Fonts','food-truck-lite'),
	    'type'     => 'select',
	    'choices'  => $food_truck_lite_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('food_truck_lite_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('food_truck_lite_h6_font_size',array(
		'label'	=> __('h6 Font Size','food-truck-lite'),
		'section'	=> 'food_truck_lite_typography',
		'setting'	=> 'food_truck_lite_h6_font_size',
		'type'	=> 'text'
	));

	//Topbar section
	$wp_customize->add_section('food_truck_lite_topbar_icon',array(
		'title'	=> __('Topbar Section','food-truck-lite'),
		'description'	=> __('Add Header Content here','food-truck-lite'),
		'priority'	=> null,
		'panel' => 'food_truck_lite_panel_id',
	));

	$wp_customize->add_setting('food_truck_lite_top_header',array(
       'default' => false,
       'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_top_header',array(
       'type' => 'checkbox',
       'label' => __('Enable Top Header','food-truck-lite'),
       'section' => 'food_truck_lite_topbar_icon'
    ));

    $wp_customize->add_setting('food_truck_lite_topbar_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('food_truck_lite_topbar_padding',array(
		'label'	=> esc_html__('Topbar Padding','food-truck-lite'),
		'section'=> 'food_truck_lite_topbar_icon',
	));

    $wp_customize->add_setting('food_truck_lite_top_topbar_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_top_topbar_padding',array(
		'description'	=> __('Top','food-truck-lite'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'food_truck_lite_topbar_icon',
		'type'=> 'number',
	));

	$wp_customize->add_setting('food_truck_lite_bottom_topbar_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_bottom_topbar_padding',array(
		'description'	=> __('Bottom','food-truck-lite'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'food_truck_lite_topbar_icon',
		'type'=> 'number',
	));

    $wp_customize->add_setting('food_truck_lite_sticky_header',array(
       'default' => '',
       'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_sticky_header',array(
       'type' => 'checkbox',
       'label' => __('Stick header on Desktop','food-truck-lite'),
       'section' => 'food_truck_lite_topbar_icon'
    ));

    $wp_customize->add_setting('food_truck_lite_sticky_header_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('food_truck_lite_sticky_header_padding',array(
		'label'	=> esc_html__('Sticky Header Padding','food-truck-lite'),
		'section'=> 'food_truck_lite_topbar_icon',
		'type' => 'hidden',
	));

    $wp_customize->add_setting('food_truck_lite_top_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_top_sticky_header_padding',array(
		'description'	=> __('Top','food-truck-lite'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'food_truck_lite_topbar_icon',
		'type'=> 'number'
	));

	$wp_customize->add_setting('food_truck_lite_bottom_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_bottom_sticky_header_padding',array(
		'description'	=> __('Bottom','food-truck-lite'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'food_truck_lite_topbar_icon',
		'type'=> 'number'
	));

	$wp_customize->add_setting('food_truck_lite_topbar_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('food_truck_lite_topbar_text',array(
		'label'	=> __('Add Topbar Text','food-truck-lite'),
		'section' => 'food_truck_lite_topbar_icon',
		'setting' => 'food_truck_lite_topbar_text',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('food_truck_lite_phone_icon',array(
		'default'	=> 'fas fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Food_Truck_Lite_Icon_Selector(
        $wp_customize,'food_truck_lite_phone_icon',array(
		'label'	=> __('Phone Icon','food-truck-lite'),
		'section' => 'food_truck_lite_topbar_icon',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('food_truck_lite_call',array(
		'default'	=> '',
		'sanitize_callback'	=> 'food_truck_lite_sanitize_phone_number'
	));
	$wp_customize->add_control('food_truck_lite_call',array(
		'label'	=> __('Add Phone No.','food-truck-lite'),
		'section' => 'food_truck_lite_topbar_icon',
		'setting' => 'food_truck_lite_call',
		'type'	=> 'text'
	));

	// Header
	$wp_customize->add_section('food_truck_lite_header',array(
		'title'	=> __('Header','food-truck-lite'),
		'priority'	=> null,
		'panel' => 'food_truck_lite_panel_id',
	));

	$wp_customize->add_setting( 'food_truck_lite_menu_font_size', array(
		'default'=> '15',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Food_Truck_Lite_WP_Customize_Range_Control( $wp_customize, 'food_truck_lite_menu_font_size', array(
        'label'  => __('Menu Font Size','food-truck-lite'),
        'section'  => 'food_truck_lite_header',
        'description' => __('Measurement is in pixel.','food-truck-lite'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('food_truck_lite_menu_font_weight',array(
        'default' => '',
        'sanitize_callback' => 'food_truck_lite_sanitize_choices'
	));
	$wp_customize->add_control('food_truck_lite_menu_font_weight',array(
        'type' => 'select',
        'label' => __('Menu Font Weight','food-truck-lite'),
        'section' => 'food_truck_lite_header',
        'choices' => array(
            '100' => __('100','food-truck-lite'),
            '200' => __('200','food-truck-lite'),
            '300' => __('300','food-truck-lite'),
            '400' => __('400','food-truck-lite'),
            '500' => __('500','food-truck-lite'),
            '600' => __('600','food-truck-lite'),
            '700' => __('700','food-truck-lite'),
            '800' => __('800','food-truck-lite'),
            '900' => __('900','food-truck-lite'),
        ),
	) );

	$wp_customize->add_setting('food_truck_lite_topbar_button_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('food_truck_lite_topbar_button_text',array(
		'label'	=> __('Add Button Text','food-truck-lite'),
		'section' => 'food_truck_lite_header',
		'setting' => 'food_truck_lite_topbar_button_text',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('food_truck_lite_topbar_button_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('food_truck_lite_topbar_button_link',array(
		'label'	=> __('Add Button Link','food-truck-lite'),
		'section' => 'food_truck_lite_header',
		'setting' => 'food_truck_lite_topbar_button_link',
		'type'	=> 'text'
	));

	//Slider section
  	$wp_customize->add_section('food_truck_lite_slider',array(
	    'title' => __('Slider Section','food-truck-lite'),
	    'description' => '',
	    'priority'  => null,
	    'panel' => 'food_truck_lite_panel_id',
	)); 

	$wp_customize->add_setting('food_truck_lite_show_slider',array(
        'default' => false,
        'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
	));
	$wp_customize->add_control('food_truck_lite_show_slider',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider','food-truck-lite'),
      	'section' => 'food_truck_lite_slider'
	));

	$wp_customize->add_setting('food_truck_lite_slider_title',array(
        'default' => true,
        'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
	));
	$wp_customize->add_control('food_truck_lite_slider_title',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Title','food-truck-lite'),
      	'section' => 'food_truck_lite_slider'
	));

	$wp_customize->add_setting('food_truck_lite_slider_content',array(
        'default' => true,
        'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
	));
	$wp_customize->add_control('food_truck_lite_slider_content',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Content','food-truck-lite'),
      	'section' => 'food_truck_lite_slider'
	));

	$wp_customize->add_setting('food_truck_lite_slider_button',array(
        'default' => true,
        'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
	));
	$wp_customize->add_control('food_truck_lite_slider_button',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Button','food-truck-lite'),
      	'section' => 'food_truck_lite_slider'
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'food_truck_lite_slidersettings_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'food_truck_lite_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'food_truck_lite_slidersettings_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'food-truck-lite' ),
			'section'  => 'food_truck_lite_slider',
			'type'     => 'dropdown-pages'
		) 	);
	}

    //Slider excerpt
	$wp_customize->add_setting( 'food_truck_lite_slider_excerpt', array(
		'default'              => 20,
		'sanitize_callback'    => 'food_truck_lite_sanitize_float',
	) );
	$wp_customize->add_control( 'food_truck_lite_slider_excerpt', array(
		'label'       => esc_html__( 'Slider Excerpt length','food-truck-lite' ),
		'section'     => 'food_truck_lite_slider',
		'type'        => 'number',
		'settings'    => 'food_truck_lite_slider_excerpt',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'food_truck_lite_slider_button_label', array(
		'default' => __('Read More','food-truck-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'food_truck_lite_slider_button_label', array(
		'label' => esc_html__( 'Slider Button Label','food-truck-lite' ),
		'section'     => 'food_truck_lite_slider',
		'type'        => 'text',
		'settings'    => 'food_truck_lite_slider_button_label'
	) );

	//Product Section
	$wp_customize->add_section('food_truck_lite_special_menu',array(
		'title'	=> __('Special Menu Section','food-truck-lite'),
		'description'	=> __('Add Special Menu sections below.','food-truck-lite'),
		'panel' => 'food_truck_lite_panel_id',
	));

	$wp_customize->add_setting('food_truck_lite_small_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('food_truck_lite_small_title',array(
		'label'	=> __('Section Small Title','food-truck-lite'),
		'section'	=> 'food_truck_lite_special_menu',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'food_truck_lite_feature_page', array(
      'default'           => '',
      'sanitize_callback' => 'food_truck_lite_sanitize_dropdown_pages'
    ));
    $wp_customize->add_control( 'food_truck_lite_feature_page', array(
      'label'    => __( 'Select Page', 'food-truck-lite' ),
      'section'  => 'food_truck_lite_special_menu',
      'type'     => 'dropdown-pages'
    ));

	//layout setting
	$wp_customize->add_section( 'food_truck_lite_theme_layout', array(
    	'title' => __( 'Blog Settings', 'food-truck-lite' ),   
		'priority' => null,
		'panel' => 'food_truck_lite_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('food_truck_lite_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'food_truck_lite_sanitize_choices'
	) );
	$wp_customize->add_control(new Food_Truck_Lite_Image_Radio_Control($wp_customize, 'food_truck_lite_layout', array(
        'type' => 'radio',
        'label' => esc_html__('Select Sidebar layout', 'food-truck-lite'),
        'section' => 'food_truck_lite_theme_layout',
        'settings' => 'food_truck_lite_layout',
        'choices' => array(
            'Right Sidebar' => esc_url(get_template_directory_uri()) . '/images/layout3.png',
            'Left Sidebar' => esc_url(get_template_directory_uri()) . '/images/layout2.png',
            'One Column' => esc_url(get_template_directory_uri()) . '/images/layout1.png',
            'Three Columns' => esc_url(get_template_directory_uri()) . '/images/layout4.png',
            'Four Columns' => esc_url(get_template_directory_uri()) . '/images/layout5.png',
            'Grid Layout' => esc_url(get_template_directory_uri()) . '/images/layout6.png'
   	))));

    $wp_customize->add_setting('food_truck_lite_blog_post_display_type',array(
        'default' => 'blocks',
        'sanitize_callback' => 'food_truck_lite_sanitize_choices'
    ));
	$wp_customize->add_control('food_truck_lite_blog_post_display_type', array(
        'type' => 'select',
        'label' => __( 'Blog Page Display Type', 'food-truck-lite' ),
        'section' => 'food_truck_lite_theme_layout',
        'choices' => array(
            'blocks' => __('Blocks','food-truck-lite'),
            'without blocks' => __('Without Blocks','food-truck-lite'),
        ),
    ));

   	$wp_customize->add_setting('food_truck_lite_metafields_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_metafields_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Date ','food-truck-lite'),
       'section' => 'food_truck_lite_theme_layout'
    ));

    $wp_customize->add_setting('food_truck_lite_metafields_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_metafields_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Author','food-truck-lite'),
       'section' => 'food_truck_lite_theme_layout'
    ));

    $wp_customize->add_setting('food_truck_lite_metafields_comment',array(
       'default' => 'true',
       'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_metafields_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Comments','food-truck-lite'),
       'section' => 'food_truck_lite_theme_layout'
    ));

    $wp_customize->add_setting('food_truck_lite_metafields_time',array(
       'default' => 'true',
       'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_metafields_time',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Time','food-truck-lite'),
       'section' => 'food_truck_lite_theme_layout'
    ));

    $wp_customize->add_setting('food_truck_lite_post_navigation',array(
       'default' => 'true',
       'sanitize_callback' => 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_post_navigation',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Post Navigation','food-truck-lite'),
       'section' => 'food_truck_lite_theme_layout'
    ));

    $wp_customize->add_setting('food_truck_lite_blog_post_content',array(
    	'default' => 'Excerpt Content',
        'sanitize_callback' => 'food_truck_lite_sanitize_choices'
	));
	$wp_customize->add_control('food_truck_lite_blog_post_content',array(
        'type' => 'radio',
        'label' => __('Blog Post Content Type','food-truck-lite'),
        'section' => 'food_truck_lite_theme_layout',
        'choices' => array(
            'No Content' => __('No Content','food-truck-lite'),
            'Full Content' => __('Full Content','food-truck-lite'),
            'Excerpt Content' => __('Excerpt Content','food-truck-lite'),
        ),
	) );

    $wp_customize->add_setting( 'food_truck_lite_post_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'food_truck_lite_sanitize_float'
	) );
	$wp_customize->add_control( 'food_truck_lite_post_excerpt_number', array(
		'label'       => esc_html__( 'Blog Post Excerpt Number (Max 50)','food-truck-lite' ),
		'section'     => 'food_truck_lite_theme_layout',
		'type'        => 'number',
		'settings'    => 'food_truck_lite_post_excerpt_number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
		'active_callback' => 'food_truck_lite_excerpt_enabled'
	) );

	$wp_customize->add_setting( 'food_truck_lite_button_excerpt_suffix', array(
		'default'   => '...',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'food_truck_lite_button_excerpt_suffix', array(
		'label'       => esc_html__( 'Post Excerpt Suffix','food-truck-lite' ),
		'section'     => 'food_truck_lite_theme_layout',
		'type'        => 'text',
		'settings'    => 'food_truck_lite_button_excerpt_suffix',
		'active_callback' => 'food_truck_lite_excerpt_enabled'
	) );

	$wp_customize->add_setting( 'food_truck_lite_feature_image_border_radius', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Food_Truck_Lite_WP_Customize_Range_Control( $wp_customize, 'food_truck_lite_feature_image_border_radius', array(
        'label'  => __('Featured Image Border Radius','food-truck-lite'),
        'section'  => 'food_truck_lite_theme_layout',
        'description' => __('Measurement is in pixel.','food-truck-lite'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        ),
    )));

    $wp_customize->add_setting( 'food_truck_lite_feature_image_shadow', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Food_Truck_Lite_WP_Customize_Range_Control( $wp_customize, 'food_truck_lite_feature_image_shadow', array(
        'label'  => __('Featured Image Shadow','food-truck-lite'),
        'section'  => 'food_truck_lite_theme_layout',
        'description' => __('Measurement is in pixel.','food-truck-lite'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        ),
    )));

    $wp_customize->add_setting( 'food_truck_lite_pagination_type', array(
        'default'			=> 'page-numbers',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'food_truck_lite_pagination_type', array(
        'section' => 'food_truck_lite_theme_layout',
        'type' => 'select',
        'label' => __( 'Blog Pagination Style', 'food-truck-lite' ),
        'choices' => array(
            'page-numbers' => __('Number', 'food-truck-lite' ),
            'next-prev' => __('Next/Prev', 'food-truck-lite' ),
    )));

    $wp_customize->add_setting('food_truck_lite_blog_nav_position',array(
        'default' => 'bottom',
        'sanitize_callback' => 'food_truck_lite_sanitize_choices'
    ));
	$wp_customize->add_control('food_truck_lite_blog_nav_position', array(
        'type' => 'select',
        'label' => __( 'Blog Post Navigation Position', 'food-truck-lite' ),
        'section' => 'food_truck_lite_theme_layout',
        'choices' => array(
            'top' => __('Top','food-truck-lite'),
            'bottom' => __('Bottom','food-truck-lite'),
            'both' => __('Both','food-truck-lite')
        ),
    ));

	$wp_customize->add_section( 'food_truck_lite_single_post_settings', array(
		'title' => __( 'Single Post Options', 'food-truck-lite' ),
		'panel' => 'food_truck_lite_panel_id',
	));

	$wp_customize->add_setting('food_truck_lite_single_post_breadcrumb',array(
       'default' => 'true',
       'sanitize_callback' => 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_single_post_breadcrumb',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Breadcrumb','food-truck-lite'),
       'section' => 'food_truck_lite_single_post_settings'
    ));

	$wp_customize->add_setting('food_truck_lite_single_post_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_single_post_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Date','food-truck-lite'),
       'section' => 'food_truck_lite_single_post_settings'
    ));

    $wp_customize->add_setting('food_truck_lite_single_post_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_single_post_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Author','food-truck-lite'),
       'section' => 'food_truck_lite_single_post_settings'
    ));

    $wp_customize->add_setting('food_truck_lite_single_post_comment_no',array(
       'default' => 'true',
       'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_single_post_comment_no',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Comment Number','food-truck-lite'),
       'section' => 'food_truck_lite_single_post_settings'
    ));

	$wp_customize->add_setting('food_truck_lite_metafields_tags',array(
       'default' => 'true',
       'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_metafields_tags',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Tags','food-truck-lite'),
       'section' => 'food_truck_lite_single_post_settings'
    ));

    $wp_customize->add_setting('food_truck_lite_single_post_image',array(
       'default' => 'true',
       'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_single_post_image',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Featured Image','food-truck-lite'),
       'section' => 'food_truck_lite_single_post_settings'
    ));

    $wp_customize->add_setting( 'food_truck_lite_post_featured_image', array(
        'default' => 'in-content',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'food_truck_lite_post_featured_image', array(
        'section' => 'food_truck_lite_single_post_settings',
        'type' => 'radio',
        'label' => __( 'Featured Image Display Type', 'food-truck-lite' ),
        'choices'		=> array(
            'banner'  => __('as Banner Image', 'food-truck-lite'),
            'in-content' => __( 'as Featured Image', 'food-truck-lite' ),
    )));

    $wp_customize->add_setting('food_truck_lite_single_post_nav',array(
       'default' => 'true',
       'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_single_post_nav',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Navigation','food-truck-lite'),
       'section' => 'food_truck_lite_single_post_settings'
    ));

    $wp_customize->add_setting( 'food_truck_lite_single_post_prev_nav_text', array(
		'default' => __('Previous','food-truck-lite' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'food_truck_lite_single_post_prev_nav_text', array(
		'label' => esc_html__( 'Single Post Previous Nav text','food-truck-lite' ),
		'section'     => 'food_truck_lite_single_post_settings',
		'type'        => 'text',
		'settings'    => 'food_truck_lite_single_post_prev_nav_text'
	) );

	$wp_customize->add_setting( 'food_truck_lite_single_post_next_nav_text', array(
		'default' => __('Next','food-truck-lite' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'food_truck_lite_single_post_next_nav_text', array(
		'label' => esc_html__( 'Single Post Next Nav text','food-truck-lite' ),
		'section'     => 'food_truck_lite_single_post_settings',
		'type'        => 'text',
		'settings'    => 'food_truck_lite_single_post_next_nav_text'
	) );

    $wp_customize->add_setting('food_truck_lite_single_post_comment',array(
       'default' => 'true',
       'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_single_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post comment','food-truck-lite'),
       'section' => 'food_truck_lite_single_post_settings'
    ));

	$wp_customize->add_setting( 'food_truck_lite_comment_width', array(
		'default'=> '100',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Food_Truck_Lite_WP_Customize_Range_Control( $wp_customize, 'food_truck_lite_comment_width', array(
        'label'  => __('Comment textarea width','food-truck-lite'),
        'section'  => 'food_truck_lite_single_post_settings',
        'description' => __('Measurement is in %.','food-truck-lite'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
        ),
    )));

    $wp_customize->add_setting('food_truck_lite_comment_title',array(
       'default' => __('Leave a Reply','food-truck-lite' ),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('food_truck_lite_comment_title',array(
       'type' => 'text',
       'label' => __('Comment form Title','food-truck-lite'),
       'section' => 'food_truck_lite_single_post_settings'
    ));

    $wp_customize->add_setting('food_truck_lite_comment_submit_text',array(
       'default' => __('Post Comment','food-truck-lite' ),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('food_truck_lite_comment_submit_text',array(
       'type' => 'text',
       'label' => __('Comment Submit Button Label','food-truck-lite'),
       'section' => 'food_truck_lite_single_post_settings'
    ));

	$wp_customize->add_setting('food_truck_lite_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Posts','food-truck-lite'),
       'section' => 'food_truck_lite_single_post_settings'
    ));

    $wp_customize->add_setting('food_truck_lite_related_posts_title',array(
       'default' => __('You May Also Like','food-truck-lite' ),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('food_truck_lite_related_posts_title',array(
       'type' => 'text',
       'label' => __('Related Posts Title','food-truck-lite'),
       'section' => 'food_truck_lite_single_post_settings'
    ));

    $wp_customize->add_setting( 'food_truck_lite_related_post_count', array(
		'default' => 3,
		'sanitize_callback'	=> 'food_truck_lite_sanitize_float'
	) );
	$wp_customize->add_control( 'food_truck_lite_related_post_count', array(
		'label' => esc_html__( 'Related Posts Count','food-truck-lite' ),
		'section' => 'food_truck_lite_single_post_settings',
		'type' => 'number',
		'settings' => 'food_truck_lite_related_post_count',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 6,
		),
	) );

    $wp_customize->add_setting( 'food_truck_lite_post_shown_by', array(
        'default' => 'categories',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'food_truck_lite_post_shown_by', array(
        'section' => 'food_truck_lite_single_post_settings',
        'type' => 'radio',
        'label' => __( 'Related Posts must be shown:', 'food-truck-lite' ),
        'choices'		=> array(
            'categories'  => __('By Categories', 'food-truck-lite'),
            'tags' => __( 'By Tags', 'food-truck-lite' ),
    )));

	// Button option
	$wp_customize->add_section( 'food_truck_lite_button_options', array(
		'title' =>  __( 'Button Options', 'food-truck-lite' ),
		'panel' => 'food_truck_lite_panel_id',
	));

    $wp_customize->add_setting( 'food_truck_lite_blog_button_text', array(
		'default'   => __('Read Full','food-truck-lite' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'food_truck_lite_blog_button_text', array(
		'label'       => esc_html__( 'Blog Post Button Label','food-truck-lite' ),
		'section'     => 'food_truck_lite_button_options',
		'type'        => 'text',
		'settings'    => 'food_truck_lite_blog_button_text'
	) );

	$wp_customize->add_setting('food_truck_lite_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('food_truck_lite_button_padding',array(
		'label'	=> esc_html__('Button Padding','food-truck-lite'),
		'section'=> 'food_truck_lite_button_options',
		'active_callback' => 'food_truck_lite_button_enabled'
	));

	$wp_customize->add_setting('food_truck_lite_top_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_top_button_padding',array(
		'label'	=> __('Top','food-truck-lite'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'food_truck_lite_button_options',
		'type'=> 'number',
		'active_callback' => 'food_truck_lite_button_enabled'
	));

	$wp_customize->add_setting('food_truck_lite_bottom_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_bottom_button_padding',array(
		'label'	=> __('Bottom','food-truck-lite'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'food_truck_lite_button_options',
		'type'=> 'number',
		'active_callback' => 'food_truck_lite_button_enabled'
	));

	$wp_customize->add_setting('food_truck_lite_left_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_left_button_padding',array(
		'label'	=> __('Left','food-truck-lite'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'food_truck_lite_button_options',
		'type'=> 'number',
		'active_callback' => 'food_truck_lite_button_enabled'
	));

	$wp_customize->add_setting('food_truck_lite_right_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_right_button_padding',array(
		'label'	=> __('Right','food-truck-lite'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'food_truck_lite_button_options',
		'type'=> 'number',
		'active_callback' => 'food_truck_lite_button_enabled'
	));

	$wp_customize->add_setting( 'food_truck_lite_button_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Food_Truck_Lite_WP_Customize_Range_Control( $wp_customize, 'food_truck_lite_button_border_radius', array(
            'label'  => __('Border Radius','food-truck-lite'),
            'section'  => 'food_truck_lite_button_options',
            'description' => __('Measurement is in pixel.','food-truck-lite'),
            'input_attrs' => array(
                'min' => 0,
                'max' => 50,
            ),
			'active_callback' => 'food_truck_lite_button_enabled'
    )));

    //Sidebar setting
	$wp_customize->add_section( 'food_truck_lite_sidebar_options', array(
    	'title'   => __( 'Sidebar options', 'food-truck-lite'),
		'priority'   => null,
		'panel' => 'food_truck_lite_panel_id'
	) );

	$wp_customize->add_setting('food_truck_lite_single_page_layout',array(
        'default' => 'One Column',
        'sanitize_callback' => 'food_truck_lite_sanitize_choices'
    ));
	$wp_customize->add_control('food_truck_lite_single_page_layout', array(
        'type' => 'select',
        'label' => __( 'Single Page Layout', 'food-truck-lite' ),
        'section' => 'food_truck_lite_sidebar_options',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','food-truck-lite'),
            'Right Sidebar' => __('Right Sidebar','food-truck-lite'),
            'One Column' => __('One Column','food-truck-lite')
        ),
    ));

    $wp_customize->add_setting('food_truck_lite_single_post_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'food_truck_lite_sanitize_choices'
    ));
	$wp_customize->add_control('food_truck_lite_single_post_layout', array(
        'type' => 'select',
        'label' => __( 'Single Post Layout', 'food-truck-lite' ),
        'section' => 'food_truck_lite_sidebar_options',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','food-truck-lite'),
            'Right Sidebar' => __('Right Sidebar','food-truck-lite'),
            'One Column' => __('One Column','food-truck-lite')
        ),
    ));

    //Advance Options
	$wp_customize->add_section( 'food_truck_lite_advance_options', array(
    	'title' => __( 'Advance Options', 'food-truck-lite' ),
		'priority'   => null,
		'panel' => 'food_truck_lite_panel_id'
	) );

	$wp_customize->add_setting('food_truck_lite_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_preloader',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','food-truck-lite'),
       'section' => 'food_truck_lite_advance_options'
    ));

    $wp_customize->add_setting( 'food_truck_lite_preloader_color', array(
	    'default' => '#333333',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'food_truck_lite_preloader_color', array(
  		'label' => __('Preloader Color', 'food-truck-lite'),
	    'section' => 'food_truck_lite_advance_options',
	    'settings' => 'food_truck_lite_preloader_color',
  	)));

  	$wp_customize->add_setting( 'food_truck_lite_preloader_bg_color', array(
	    'default' => '#ffffff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'food_truck_lite_preloader_bg_color', array(
  		'label' => __('Preloader Background Color', 'food-truck-lite'),
	    'section' => 'food_truck_lite_advance_options',
	    'settings' => 'food_truck_lite_preloader_bg_color',
  	)));

  	$wp_customize->add_setting('food_truck_lite_preloader_type',array(
        'default' => 'Square',
        'sanitize_callback' => 'food_truck_lite_sanitize_choices'
	));
	$wp_customize->add_control('food_truck_lite_preloader_type',array(
        'type' => 'radio',
        'label' => __('Preloader Type','food-truck-lite'),
        'section' => 'food_truck_lite_advance_options',
        'choices' => array(
            'Square' => __('Square','food-truck-lite'),
            'Circle' => __('Circle','food-truck-lite'),
        )
	) );

	$wp_customize->add_setting('food_truck_lite_theme_layout_options',array(
        'default' => 'Default Theme',
        'sanitize_callback' => 'food_truck_lite_sanitize_choices'
	));
	$wp_customize->add_control('food_truck_lite_theme_layout_options',array(
        'type' => 'radio',
        'label' => __('Theme Layout','food-truck-lite'),
        'section' => 'food_truck_lite_advance_options',
        'choices' => array(
            'Default Theme' => __('Default Theme','food-truck-lite'),
            'Container Theme' => __('Container Theme','food-truck-lite'),
            'Box Container Theme' => __('Box Container Theme','food-truck-lite'),
        ),
	) );

	//404 Page Option
	$wp_customize->add_section('food_truck_lite_404_settings',array(
		'title'	=> __('404 Page & Search Result Settings','food-truck-lite'),
		'priority'	=> null,
		'panel' => 'food_truck_lite_panel_id',
	));

	$wp_customize->add_setting('food_truck_lite_404_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('food_truck_lite_404_title',array(
		'label'	=> __('404 Title','food-truck-lite'),
		'section'	=> 'food_truck_lite_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('food_truck_lite_404_button_label',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('food_truck_lite_404_button_label',array(
		'label'	=> __('404 button Label','food-truck-lite'),
		'section'	=> 'food_truck_lite_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('food_truck_lite_search_result_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('food_truck_lite_search_result_title',array(
		'label'	=> __('No Search Result Title','food-truck-lite'),
		'section'	=> 'food_truck_lite_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('food_truck_lite_search_result_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('food_truck_lite_search_result_text',array(
		'label'	=> __('No Search Result Text','food-truck-lite'),
		'section'	=> 'food_truck_lite_404_settings',
		'type'		=> 'text'
	));	

	//Responsive Settings
	$wp_customize->add_section('food_truck_lite_responsive_options',array(
		'title'	=> __('Responsive Options','food-truck-lite'),
		'panel' => 'food_truck_lite_panel_id'
	));

	$wp_customize->add_setting('food_truck_lite_menu_open_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Food_Truck_Lite_Icon_Selector(
        $wp_customize,'food_truck_lite_menu_open_icon',array(
		'label'	=> __('Menu Open Icon','food-truck-lite'),
		'section' => 'food_truck_lite_responsive_options',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('food_truck_lite_mobile_menu_label',array(
       'default' => __('Menu','food-truck-lite'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('food_truck_lite_mobile_menu_label',array(
       'type' => 'text',
       'label' => __('Mobile Menu Label','food-truck-lite'),
       'section' => 'food_truck_lite_responsive_options'
    ));

	$wp_customize->add_setting('food_truck_lite_menu_close_icon',array(
		'default'	=> 'fas fa-times-circle',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Food_Truck_Lite_Icon_Selector(
        $wp_customize,'food_truck_lite_menu_close_icon',array(
		'label'	=> __('Menu Close Icon','food-truck-lite'),
		'section' => 'food_truck_lite_responsive_options',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('food_truck_lite_close_menu_label',array(
       'default' => __('Close Menu','food-truck-lite'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('food_truck_lite_close_menu_label',array(
       'type' => 'text',
       'label' => __('Close Menu Label','food-truck-lite'),
       'section' => 'food_truck_lite_responsive_options'
    ));

	$wp_customize->add_setting('food_truck_lite_hide_topbar_responsive',array(
        'default' => true,
        'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
	));
	$wp_customize->add_control('food_truck_lite_hide_topbar_responsive',array(
     	'type' => 'checkbox',
      	'label' => __('Enable Top Header','food-truck-lite'),
      	'section' => 'food_truck_lite_responsive_options',
	));

	//Woocommerce Options
	$wp_customize->add_section('food_truck_lite_woocommerce',array(
		'title'	=> __('WooCommerce Options','food-truck-lite'),
		'panel' => 'food_truck_lite_panel_id',
	));

	$wp_customize->add_setting('food_truck_lite_shop_page_sidebar',array(
       'default' => true,
       'sanitize_callback' => 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_shop_page_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable Shop Page Sidebar','food-truck-lite'),
       'section' => 'food_truck_lite_woocommerce'
    ));

    $wp_customize->add_setting('food_truck_lite_shop_page_navigation',array(
       'default' => true,
       'sanitize_callback' => 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_shop_page_navigation',array(
       'type' => 'checkbox',
       'label' => __('Enable Shop Page Pagination','food-truck-lite'),
       'section' => 'food_truck_lite_woocommerce'
    ));

    $wp_customize->add_setting('food_truck_lite_single_product_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_single_product_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable Single Product Page Sidebar','food-truck-lite'),
       'section' => 'food_truck_lite_woocommerce'
    ));

    $wp_customize->add_setting('food_truck_lite_single_related_products',array(
       'default' => true,
       'sanitize_callback' => 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_single_related_products',array(
       'type' => 'checkbox',
       'label' => __('Enable Related Products','food-truck-lite'),
       'section' => 'food_truck_lite_woocommerce'
    ));

    $wp_customize->add_setting('food_truck_lite_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_products_per_page',array(
		'label'	=> __('Products Per Page','food-truck-lite'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'food_truck_lite_woocommerce',
		'type'=> 'number',
	));

	$wp_customize->add_setting('food_truck_lite_products_per_row',array(
		'default'=> '3',
		'sanitize_callback'	=> 'food_truck_lite_sanitize_choices'
	));
	$wp_customize->add_control('food_truck_lite_products_per_row',array(
		'label'	=> __('Products Per Row','food-truck-lite'),
		'choices' => array(
            '2' => '2',
			'3' => '3',
			'4' => '4',
        ),
		'section'=> 'food_truck_lite_woocommerce',
		'type'=> 'select',
	));

	$wp_customize->add_setting('food_truck_lite_product_border',array(
       'default' => true,
       'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('food_truck_lite_product_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide product border','food-truck-lite'),
       'section' => 'food_truck_lite_woocommerce',
    ));

    $wp_customize->add_setting('food_truck_lite_product_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('food_truck_lite_product_padding',array(
		'label'	=> esc_html__('Product Padding','food-truck-lite'),
		'section'=> 'food_truck_lite_woocommerce',
	));

	$wp_customize->add_setting( 'food_truck_lite_product_top_padding',array(
		'default' => 10,
		'sanitize_callback' => 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_product_top_padding', array(
		'label' => esc_html__( 'Top','food-truck-lite' ),
		'type' => 'number',
		'section' => 'food_truck_lite_woocommerce',
		'input_attrs' => array(
			'min' => -1,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('food_truck_lite_product_bottom_padding',array(
		'default' => 10,
		'sanitize_callback' => 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_product_bottom_padding', array(
		'label' => esc_html__( 'Bottom','food-truck-lite' ),
		'type' => 'number',
		'section' => 'food_truck_lite_woocommerce',
		'input_attrs' => array(
			'min' => -1,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('food_truck_lite_product_left_padding',array(
		'default' => 10,
		'sanitize_callback' => 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_product_left_padding', array(
		'label' => esc_html__( 'Left','food-truck-lite' ),
		'type' => 'number',
		'section' => 'food_truck_lite_woocommerce',
		'input_attrs' => array(
			'min' => -1,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'food_truck_lite_product_right_padding',array(
		'default' => 10,
		'sanitize_callback' => 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_product_right_padding', array(
		'label' => esc_html__( 'Right','food-truck-lite' ),
		'type' => 'number',
		'section' => 'food_truck_lite_woocommerce',
		'input_attrs' => array(
			'min' => -1,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'food_truck_lite_product_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Food_Truck_Lite_WP_Customize_Range_Control( $wp_customize, 'food_truck_lite_product_border_radius', array(
        'label'  => __('Product Border Radius','food-truck-lite'),
        'section'  => 'food_truck_lite_woocommerce',
        'description' => __('Measurement is in pixel.','food-truck-lite'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

	$wp_customize->add_setting('food_truck_lite_product_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('food_truck_lite_product_button_padding',array(
		'label'	=> esc_html__('Product Button Padding','food-truck-lite'),
		'section'=> 'food_truck_lite_woocommerce',
	));

	$wp_customize->add_setting( 'food_truck_lite_product_button_top_padding',array(
		'default' => 10,
		'sanitize_callback' => 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_product_button_top_padding', array(
		'label' => esc_html__( 'Top','food-truck-lite' ),
		'type' => 'number',
		'section' => 'food_truck_lite_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('food_truck_lite_product_button_bottom_padding',array(
		'default' => 10,
		'sanitize_callback' => 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_product_button_bottom_padding', array(
		'label' => esc_html__( 'Bottom','food-truck-lite' ),
		'type' => 'number',
		'section' => 'food_truck_lite_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('food_truck_lite_product_button_left_padding',array(
		'default' => 12,
		'sanitize_callback' => 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_product_button_left_padding', array(
		'label' => esc_html__( 'Left','food-truck-lite' ),
		'type' => 'number',
		'section' => 'food_truck_lite_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'food_truck_lite_product_button_right_padding',array(
		'default' => 12,
		'sanitize_callback' => 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_product_button_right_padding', array(
		'label' => esc_html__( 'Right','food-truck-lite' ),
		'type' => 'number',
		'section' => 'food_truck_lite_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'food_truck_lite_product_button_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Food_Truck_Lite_WP_Customize_Range_Control( $wp_customize, 'food_truck_lite_product_button_border_radius', array(
        'label'  => __('Product Button Border Radius','food-truck-lite'),
        'section'  => 'food_truck_lite_woocommerce',
        'description' => __('Measurement is in pixel.','food-truck-lite'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('food_truck_lite_product_sale_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'food_truck_lite_sanitize_choices'
	));
	$wp_customize->add_control('food_truck_lite_product_sale_position',array(
        'type' => 'radio',
        'label' => __('Product Sale Position','food-truck-lite'),
        'section' => 'food_truck_lite_woocommerce',
        'choices' => array(
            'Left' => __('Left','food-truck-lite'),
            'Right' => __('Right','food-truck-lite'),
        ),
	) );

	$wp_customize->add_setting( 'food_truck_lite_product_sale_font_size',array(
		'default' => '13',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Food_Truck_Lite_WP_Customize_Range_Control( $wp_customize, 'food_truck_lite_product_sale_font_size', array(
        'label'  => __('Product Sale Font Size','food-truck-lite'),
        'section'  => 'food_truck_lite_woocommerce',
        'description' => __('Measurement is in pixel.','food-truck-lite'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('food_truck_lite_product_sale_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('food_truck_lite_product_sale_padding',array(
		'label'	=> esc_html__('Product Sale Padding','food-truck-lite'),
		'section'=> 'food_truck_lite_woocommerce',
	));

	$wp_customize->add_setting( 'food_truck_lite_product_sale_top_padding',array(
		'default' => 0,
		'sanitize_callback' => 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_product_sale_top_padding', array(
		'label' => esc_html__( 'Top','food-truck-lite' ),
		'type' => 'number',
		'section' => 'food_truck_lite_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('food_truck_lite_product_sale_bottom_padding',array(
		'default' => 0,
		'sanitize_callback' => 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_product_sale_bottom_padding', array(
		'label' => esc_html__( 'Bottom','food-truck-lite' ),
		'type' => 'number',
		'section' => 'food_truck_lite_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('food_truck_lite_product_sale_left_padding',array(
		'default' => 0,
		'sanitize_callback' => 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_product_sale_left_padding', array(
		'label' => esc_html__( 'Left','food-truck-lite' ),
		'type' => 'number',
		'section' => 'food_truck_lite_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('food_truck_lite_product_sale_right_padding',array(
		'default' => 0,
		'sanitize_callback' => 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_product_sale_right_padding', array(
		'label' => esc_html__( 'Right','food-truck-lite' ),
		'type' => 'number',
		'section' => 'food_truck_lite_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'food_truck_lite_product_sale_border_radius',array(
		'default' => '10',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Food_Truck_Lite_WP_Customize_Range_Control( $wp_customize, 'food_truck_lite_product_sale_border_radius', array(
        'label'  => __('Product Sale Border Radius','food-truck-lite'),
        'section'  => 'food_truck_lite_woocommerce',
        'description' => __('Measurement is in pixel.','food-truck-lite'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

	//footer text
	$wp_customize->add_section('food_truck_lite_footer_section',array(
		'title'	=> __('Footer Section','food-truck-lite'),
		'panel' => 'food_truck_lite_panel_id'
	));

	$wp_customize->add_setting('food_truck_lite_hide_scroll',array(
        'default' => 'true',
        'sanitize_callback'	=> 'food_truck_lite_sanitize_checkbox'
	));
	$wp_customize->add_control('food_truck_lite_hide_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Back To Top','food-truck-lite'),
      	'section' => 'food_truck_lite_footer_section',
	));

	$wp_customize->add_setting('food_truck_lite_back_to_top',array(
        'default' => 'Right',
        'sanitize_callback' => 'food_truck_lite_sanitize_choices'
	));
	$wp_customize->add_control('food_truck_lite_back_to_top',array(
        'type' => 'radio',
        'label' => __('Back to Top Alignment','food-truck-lite'),
        'section' => 'food_truck_lite_footer_section',
        'choices' => array(
            'Left' => __('Left','food-truck-lite'),
            'Right' => __('Right','food-truck-lite'),
            'Center' => __('Center','food-truck-lite'),
        ),
	) );

	$wp_customize->add_setting('food_truck_lite_footer_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'food_truck_lite_footer_bg_color', array(
		'label'    => __('Footer Background Color', 'food-truck-lite'),
		'section'  => 'food_truck_lite_footer_section',
	)));

	$wp_customize->add_setting('food_truck_lite_footer_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'food_truck_lite_footer_bg_image',array(
        'label' => __('Footer Background Image','food-truck-lite'),
        'section' => 'food_truck_lite_footer_section'
	)));

	$wp_customize->add_setting('food_truck_lite_footer_widget',array(
        'default'           => '4',
        'sanitize_callback' => 'food_truck_lite_sanitize_choices',
    ));
    $wp_customize->add_control('food_truck_lite_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer columns', 'food-truck-lite'),
        'section'     => 'food_truck_lite_footer_section',
        'description' => __('Select the number of footer columns and add your widgets in the footer.', 'food-truck-lite'),
        'choices' => array(
            '1'   => __('One column', 'food-truck-lite'),
            '2'  => __('Two columns', 'food-truck-lite'),
            '3' => __('Three columns', 'food-truck-lite'),
            '4' => __('Four columns', 'food-truck-lite')
        ),
    )); 

    $wp_customize->add_setting('food_truck_lite_copyright_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('food_truck_lite_copyright_padding',array(
		'label'	=> esc_html__('Copyright Padding','food-truck-lite'),
		'section'=> 'food_truck_lite_footer_section',
	));

    $wp_customize->add_setting('food_truck_lite_top_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_top_copyright_padding',array(
		'description'	=> __('Top','food-truck-lite'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'food_truck_lite_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('food_truck_lite_bottom_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'food_truck_lite_sanitize_float'
	));
	$wp_customize->add_control('food_truck_lite_bottom_copyright_padding',array(
		'description'	=> __('Bottom','food-truck-lite'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'food_truck_lite_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('food_truck_lite_copyright_alignment',array(
        'default' => 'center',
        'sanitize_callback' => 'food_truck_lite_sanitize_choices'
	));
	$wp_customize->add_control('food_truck_lite_copyright_alignment',array(
        'type' => 'radio',
        'label' => __('Copyright Alignment','food-truck-lite'),
        'section' => 'food_truck_lite_footer_section',
        'choices' => array(
            'left' => __('Left','food-truck-lite'),
            'right' => __('Right','food-truck-lite'),
            'center' => __('Center','food-truck-lite'),
        ),
	) );

	$wp_customize->add_setting( 'food_truck_lite_copyright_font_size', array(
		'default'=> '15',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Food_Truck_Lite_WP_Customize_Range_Control( $wp_customize, 'food_truck_lite_copyright_font_size', array(
        'label'  => __('Copyright Font Size','food-truck-lite'),
        'section'  => 'food_truck_lite_footer_section',
        'description' => __('Measurement is in pixel.','food-truck-lite'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));
	
	$wp_customize->add_setting('food_truck_lite_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('food_truck_lite_text',array(
		'label'	=> __('Copyright Text','food-truck-lite'),
		'description'	=> __('Add some text for footer like copyright etc.','food-truck-lite'),
		'section'	=> 'food_truck_lite_footer_section',
		'type'		=> 'text'
	));	
}
add_action( 'customize_register', 'food_truck_lite_customize_register' );	

load_template( ABSPATH . 'wp-includes/class-wp-customize-control.php' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

class Food_Truck_Lite_Image_Radio_Control extends WP_Customize_Control {

    public function render_content() {
 
        if (empty($this->choices))
            return;
 
        $name = '_customize-radio-' . $this->id;
        ?>
        <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
        <ul class="controls" id='food-truck-lite-img-container'>
            <?php
            foreach ($this->choices as $value => $label) :
                $class = ($this->value() == $value) ? 'food-truck-lite-radio-img-selected food-truck-lite-radio-img-img' : 'food-truck-lite-radio-img-img';
                ?>
                <li style="display: inline;">
                    <label>
                        <input <?php $this->link(); ?>style = 'display:none' type="radio" value="<?php echo esc_attr($value); ?>" name="<?php echo esc_attr($name); ?>" <?php
                          	$this->link();
                          	checked($this->value(), $value);
                          	?> />
                        <img role="img" src='<?php echo esc_url($label); ?>' class='<?php echo esc_attr($class); ?>' />
                    </label>
                </li>
                <?php
            endforeach;
            ?>
        </ul>
        <?php
    } 
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Food_Truck_Lite_Customize {

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
		$manager->register_section_type( 'Food_Truck_Lite_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Food_Truck_Lite_Customize_Section_Pro(
			$manager,
			'food_truck_lite_pro_link',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Food Truck Pro', 'food-truck-lite' ),
					'pro_text' => esc_html__( 'Go Pro', 'food-truck-lite' ),
					'pro_url'  => esc_url('https://www.themesglance.com/themes/food-truck-wordpress-theme/')
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

		wp_enqueue_script( 'food-truck-lite-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'food-truck-lite-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Food_Truck_Lite_Customize::get_instance();