<?php 
add_action( 'wp_enqueue_scripts', 'style_theme' );/*wp_enqueue_script - добавление хука ,style_theme - объявление нашей функции*/
add_action( 'wp_footer', 'scripts_theme' );
add_action( 'after_setup_theme', 'nav_menu' );

function nav_menu() {
 register_nav_menu('top', 'меню в шапке');/*top- как называется наше конкретное меню, меню в шапке - названиие меню в админке wordpress */
  register_nav_menu('footer', 'меню в футере');/*top- как называется наше конкретное меню, меню в шапке - названиие меню в админке wordpress */
}



/*-------------------------Подключение стилей--------------------------------------------------------------------------------- */
function style_theme(){/*Объявление нашей функции style theme */
	wp_enqueue_style( 'style', get_stylesheet_uri());/*wp_enqueue_style - подключает стили*/
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );/* 'bootstrap- название функции get_template_directory_uri() ищет нашу директорию*/
	wp_enqueue_style( 'babuska', get_template_directory_uri() . '/assets/css/style.css' );

		wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css' );
 wp_deregister_script('jquery');
 wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
}
/*-------------------------Подключение скриптов--------------------------------------------------------------------------------- */
function scripts_theme(){
wp_enqueue_script( 'burger_menu', get_template_directory_uri() . '/assets/js/burger-menu.js');/*wp_enqueue_script - подключает скрипты*/
wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js');
wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.slim.js');
wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js');
wp_enqueue_script( 'chtoeto', get_template_directory_uri() . 'assets/js/anijs.js)');


}
 ?>
