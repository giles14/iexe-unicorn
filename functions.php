<?php
/* CONSTANTES DE PROGRAMAS
========================================== */
define('MAXIMAS_MATERIAS' , 7);
define('MAXIMOS_PERIODOS' , 10);
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_image_size( 'destacada-archivo', 600, 420 );
add_image_size( 'ultimas-archivo', 400, 280 , true );

function agregar_estilos_tema(){
    wp_register_style( 'iexe-unicorn-main', get_template_directory_uri() . '/assets/css/style.css' , 'bootstrap', '1.0', 'all'  );
    wp_register_style( 'iexe-unicorn-programas-estilo', get_template_directory_uri() . '/assets/css/programas.css', 'iexe-unicorn-main', '1.0', 'all' );
    wp_register_style( 'iexe-unicorn-blog', get_template_directory_uri() . '/assets/css/blog.css', 'iexe-unicorn-main', '1.0', 'all' );
    wp_register_script( 'iexe-unicorn-programas', get_template_directory_uri() . '/assets/js/academico.js', 'jquery', '1.0', true );
    wp_register_script( 'iexe-unicorn-blog', get_template_directory_uri() . '/assets/js/blog.js', 'jquery', '1.0', true );
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', false, '4.6', 'all' );
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', false, '3.6.0', true );
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', 'jquery', '4.6.0', 'all' );
    
    wp_enqueue_style( 'iexe-unicorn-blog');
    wp_enqueue_script( 'iexe-unicorn-blog');

    wp_enqueue_style( 'iexe-unicorn-main' );
    if(is_page_template('academicos.php')){
        wp_enqueue_style('iexe-unicorn-programas-estilo');
        wp_enqueue_script( 'iexe-unicorn-programas');
    }

}
add_action( 'wp_enqueue_scripts', 'agregar_estilos_tema' );

function iexe_unicorn_excerpt_lenght() {
    return 20;
}
add_filter( 'excerpt_length', 'iexe_unicorn_excerpt_lenght', 999 );

function iexe_unicorn_body() {

	global $post; 
	//$postclass = $post->post_name;
 
	if (is_home()) {
		echo ' id="home"';

	} elseif (is_single()) {
		echo ' id="single" class="'.$postclass.'"';

	} elseif (is_search()) {
		echo ' id="search"';

	} elseif (is_archive()) {
		echo ' id="archive"';

	}elseif(is_page()){

        if(is_page_template('academicos.php')){
            echo 'id="programas"';
        }else{
            echo ' id="page"';
        }
    }
}

if ( ! function_exists( 'iexe_unicorn_registra_nav_menu' ) ) {
 
    function iexe_unicorn_registra_nav_menu(){
        register_nav_menus( array(
            'menu_principal' => 'Menu Principal',
            'menu_footer'  => 'Menu Footer'
        ) );
    }
    add_action( 'after_setup_theme', 'iexe_unicorn_registra_nav_menu', 0 );
}