<?php
/**
 * WPT - Dead Pixel
 *
 * @package WordPress
 * @subpackage wpt-dead-pixel
 */



if ( ! function_exists( 'blank_setup' ) ) :
	/**
	 * Sets up theme defaults and registers the various WordPress features that
	 * this theme supports.
	 */
	function blank_setup() {
		load_theme_textdomain( 'Estudio-Dead-Pixel-V1' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		// This theme allows users to set a custom background.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => '000000',
			)
		);

		add_theme_support( 'custom-logo' );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 256,
				'width'       => 256,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array( 'site-title', 'site-description' ),
			)
		);
	}
endif; // end function_exists blank_setup.
add_action( 'after_setup_theme', 'blank_setup' );

/**
 * Sets up theme defaults and registers the various WordPress features that
 * this theme supports.
 * @param class $wp_customize Customizer object.
 */
function blank_customize_register( $wp_customize ) {
	$wp_customize->remove_section( 'static_front_page' );

	$wp_customize->add_section(
		'blank_footer',
		array(
			'title'      => __( 'Rodapé', 'intentionally-blank' ),
			'priority'   => 120,
			'capability' => 'edit_theme_options',
			'panel'      => '',
		)
	);
	$wp_customize->add_setting(
		'blank_copyright',
		array(
			'type'              => 'theme_mod',
			'default'           => __( 'Orgulhosamente desenvolvido por Neighböuring', 'intentionally-blank' ),
			'sanitize_callback' => 'wp_kses_post',
		)
	);

	/**
	 * Checkbox sanitization function

	 * @param bool $checked Whether the checkbox is checked.
	 * @return bool Whether the checkbox is checked.
	 */
	function blank_sanitize_checkbox( $checked ) {
		// Returns true if checkbox is checked.
		return ( ( isset( $checked ) && true === $checked ) ? true : false );
	}
	$wp_customize->add_setting(
		'blank_show_copyright',
		array(
			'default'           => true,
			'sanitize_callback' => 'blank_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'blank_copyright',
		array(
			'type'     => 'textarea',
			'label'    => __( 'Texto de Copyright', 'intentionally-blank' ),
			'section'  => 'blank_footer',
			'settings' => 'blank_copyright',
			'priority' => '10',
		)
	);
	$wp_customize->add_control(
		'blank_footer_copyright_hide',
		array(
			'type'     => 'checkbox',
			'label'    => __( 'Mostrar Copyright', 'intentionally-blank' ),
			'section'  => 'blank_footer',
			'settings' => 'blank_show_copyright',
			'priority' => '20',
		)
	);
}
add_action( 'customize_register', 'blank_customize_register', 100 );



// Registra Estilo CSS
// Documentação https://developer.wordpress.org/themes/basics/including-css-javascript/
wp_enqueue_style( 'style', get_stylesheet_uri() );



// Registra Script JS
// Documentação https://developer.wordpress.org/themes/basics/including-css-javascript/
wp_enqueue_script( 'dead-pixel-script', get_template_directory_uri() . '/assets/js/dead-pixel.js', array(), wp_get_theme()->get( 'Version' ), true );



// Adicionar Navigation Menu
// Documentação https://developer.wordpress.org/themes/functionality/navigation-menus/
// Uso https://developer.wordpress.org/reference/functions/wp_nav_menu/
function register_my_menus() {
	register_nav_menus(
	  array(
		'header-menu' => __( 'Menu do Header' ),
		'extra-menu' => __( 'Extra Menu (TESTE)' )
	   )
	 );
   }
   add_action( 'init', 'register_my_menus' );



// Gerar ACF para JOBS
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_638993b63b69f',
		'title' => 'JOB',
		'fields' => array(
			array(
				'key' => 'field_638993b615a36',
				'label' => 'Cliente',
				'name' => 'cliente',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Cliente',
				'maxlength' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_6389943115a37',
				'label' => 'Campanha',
				'name' => 'campanha',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Campanha',
				'maxlength' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_6389945a15a38',
				'label' => 'Agência',
				'name' => 'agencia',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Agência',
				'maxlength' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_6389946a15a39',
				'label' => 'Ano',
				'name' => 'ano',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Ano',
				'maxlength' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_6389948315a3a',
				'label' => 'Diretor',
				'name' => 'diretor',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Diretor',
				'maxlength' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_6389948c15a3b',
				'label' => 'Ficha Técnica',
				'name' => 'ficha_tecnica',
				'aria-label' => '',
				'type' => 'textarea',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Ficha Técnica',
				'maxlength' => '',
				'rows' => '',
				'placeholder' => '',
				'new_lines' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'acf_after_title',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));
	
	endif;		