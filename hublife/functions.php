<?php 

function theme_setup() {

    // Adds <title> tag support
    add_theme_support( 'title-tag');  

}
add_action( 'after_setup_theme', 'theme_setup');

//Executa as funções básicas que precisam de suporte do tema
function hublife_theme_support() {
    //Cria a tag de título do site
    add_theme_support('title-tag');

    //Logotipo personalizado
    add_theme_support('custom_logo');

    //Register Custom Navigation Walker
   	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'hublife_theme_support');


//registra menu no tema
register_nav_menus( array(
    'primary' => __('Menu principal', 'hublife')
));

//define o tamanho das miniaturas
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 1280, 720, true );

// Definir o tamanho do resumo
add_filter( 'excerpt_length', function($length) {
    return 50;
});