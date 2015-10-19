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
* Add support colors
*/
$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'default-repeat'         => '',
	'default-position-x'     => '',
	'default-attachment'     => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );

/**
* Add support for logo
*/

//* Cambia el logotipo de la página inicio de sesión de WordPress (usar imagen de 80x80px)
function mi_logo_personalizado() { ?>
    <style type="text/css">
        body.login div#login h1 a {
      background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/my-logo.png);
      background-size :170px;
      height          :300px;
      width           :170px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'mi_logo_personalizado' );

// Personaliza el enlace y título de la imagen de inicio de sesión de WordPress
function mi_logo_personalizado_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'mi_logo_personalizado_url' );

function mi_logo_personalizado_url_titulo() {
    return 'Bbae: Biblioteca básica de autores ecuatorianos';
}
add_filter( 'login_headertitle', 'mi_logo_personalizado_url_titulo' );

add_action( 'wp_print_scripts', 'deregister_cf7_javascript', 100 );

// Contact Form7 llamada unicamente para la pagina contact
//eliminar Java Script de contact form 7
function deregister_cf7_javascript() {
    if ( !is_page('contact') ) {
        wp_deregister_script( 'contact-form-7' );
    }
}
//eliminar CSS de contact form 7
add_action( 'wp_print_styles', 'deregister_cf7_styles', 100 );
function deregister_cf7_styles() {
    if ( !is_page('contact') ) {
        wp_deregister_style( 'contact-form-7' );
    }
}
