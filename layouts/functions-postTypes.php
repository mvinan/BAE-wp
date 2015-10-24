<?php
/**
* Adding Post Types Perzonalized
*/
add_action( 'init', 'literature_post_type', 0 );
function literature_post_type() {

    $labels = array(
    'name'               => __( 'Literaturas' ),
    'singular_name'      => __( 'Literaturas' ),
    'add_new_item'       => __( 'Agregar nueva', 'your-plugin-textdomain' ),
    'new_item'           => __( 'Nueva literatura', 'your-plugin-textdomain' ),
    'edit_item'          => __( 'Editar literatura', 'your-plugin-textdomain' ),
    'view_item'          => __( 'Ver literatura', 'your-plugin-textdomain' ),
    'all_items'          => __( 'Todas las literaturas', 'your-plugin-textdomain' ),
    'search_items'       => __( 'Buscar Literatura', 'your-plugin-textdomain' ),
    'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
    'not_found'          => __( 'Literaturas no encontradas.', 'your-plugin-textdomain' ),
    'not_found_in_trash' => __( 'Literaturas no encontrados en la papelera.', 'your-plugin-textdomain' )
      );

  $args = array(
    'labels'          => $labels,
    'public'          => true,
    'taxonomies'      => array('category'),
    'supports'        => array( 'title', 'editor', 'thumbnail','excerpt','author', 'comments' ),
    'show_in_menu'    => true,
    'menu_position'   => 4,
    'can_export'      => true,
    'has_archive'     => true,
    'capability_type'     => 'post'


  );

  register_post_type('Literatura', $args );
}

//Actividades

add_action( 'init', 'activities_post_type', 0 );
function activities_post_type() {

    $labels = array(
    'name'               => __( 'Actividades' ),
    'singular_name'      => __( 'Actividades' ),
    'add_new_item'       => __( 'Agregar nueva', 'your-plugin-textdomain' ),
    'new_item'           => __( 'Nueva actividad', 'your-plugin-textdomain' ),
    'edit_item'          => __( 'Editar actividad', 'your-plugin-textdomain' ),
    'view_item'          => __( 'Ver actividad', 'your-plugin-textdomain' ),
    'all_items'          => __( 'Todas las actividades', 'your-plugin-textdomain' ),
    'search_items'       => __( 'Buscar actividad', 'your-plugin-textdomain' ),
    'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
    'not_found'          => __( 'Actividades no encontradas.', 'your-plugin-textdomain' ),
    'not_found_in_trash' => __( 'Actividades no encontrados en la papelera.', 'your-plugin-textdomain' )
      );

  $args = array(
    'labels'          => $labels,
    'public'          => true,
    'taxonomies'      => array('category'),
    'supports'        => array( 'title', 'editor', 'thumbnail','excerpt','author', 'comments' ),
    'show_in_menu'    => true,
    'menu_position'   => 4,
    'can_export'      => true,
    'has_archive'     => true,
    'capability_type'     => 'post'


  );

  register_post_type('Actividades', $args );
}
//Noticias

add_action( 'init', 'news_post_type', 0 );
function news_post_type() {

    $labels = array(
    'name'               => __( 'Noticias' ),
    'singular_name'      => __( 'Noticias' ),
    'add_new_item'       => __( 'Agregar nueva', 'your-plugin-textdomain' ),
    'new_item'           => __( 'Nueva noticia', 'your-plugin-textdomain' ),
    'edit_item'          => __( 'Editar noticia', 'your-plugin-textdomain' ),
    'view_item'          => __( 'Ver noticia', 'your-plugin-textdomain' ),
    'all_items'          => __( 'Todas las noticias', 'your-plugin-textdomain' ),
    'search_items'       => __( 'Buscar noticia', 'your-plugin-textdomain' ),
    'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
    'not_found'          => __( 'Noticias no encontradas.', 'your-plugin-textdomain' ),
    'not_found_in_trash' => __( 'Noticias no encontrados en la papelera.', 'your-plugin-textdomain' )
      );

  $args = array(
    'labels'          => $labels,
    'public'          => true,
    'taxonomies'      => array('category'),
    'supports'        => array( 'title', 'editor', 'thumbnail','excerpt','author', 'comments' ),
    'show_ui'         => true,
    'show_in_menu'    => true,
    'menu_position'   => 4,
    'can_export'      => true,
    'has_archive'     => true,
    'capability_type'     => 'post'

  );

  register_post_type('Noticias', $args );
}
