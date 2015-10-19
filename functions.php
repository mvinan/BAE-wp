<?php
  /**
  * Proper way to enqueue styles
  */
  function bae_styles() {
    // CSS
    wp_enqueue_style( 'bae_theme_styles', get_template_directory_uri() . '/assets/css/styles.css');
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css');
  }

  add_action( 'wp_enqueue_scripts', 'bae_styles' );

  /**
  * Proper way to enqueue scripts
  */
  function bae_scripts() {
    // JS
    wp_enqueue_script('jquery-v2','https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js',"", "", true);
    wp_enqueue_script( 'bootstrapJs', get_template_directory_uri() . '/assets/js/min/app.js', array('jquery-v2'),'', true );
  }

  add_action( 'wp_enqueue_scripts', 'bae_scripts' );

  /**
  * Register my Menus
  */
  function register_my_menus(){
    register_nav_menus(
      array(
        'nav-header'=>__('Menu del Encabezado')
      )
    );
  }

  add_action('init', 'register_my_menus');

  /**
  * Suport for images
  */
	function custom_theme_setup(){
		add_theme_support('post-thumbnails');
		// format to declarate = ($name , $width , $heigh, $crop(boolean))
		add_image_size('full-thumbnails',1200,800,true);
		add_theme_support( 'custom-header');
	}
	add_action('after_setup_theme','custom_theme_setup');

/**
 * Posts Types Literaturas, Colecciones, Actividades, Noticias.
 */
  include(locate_template('layouts/functions-postTypes.php'));


/**
* Support widgets
*/
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Social Media',
		'id'            => 'post_top',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
/**
* Add support search form
*/
