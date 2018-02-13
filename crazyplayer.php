<?php
/*
Plugin Name: CrazyPlayer by ItShaman
Plugin URI: http://novorossia.rocks
Description: Простой JQuery проигрыватель Эфира для Новороссия Рокс
Author: CrazyIce
Version: 1.1
 */
 function loadCrazyScript() {
 wp_register_script( 'mycrazyscript', plugins_url( '/crpl.js', __FILE__ ) );
 wp_enqueue_script( 'mycrazyscript' );
 }
 
 function register_style_crazyPlayer() {
 	wp_register_style( 'mycrazystyle', plugins_url('crazyplayer/crpl.css'));
	wp_enqueue_style( 'mycrazystyle' );
}
  
function add_CrazyPlayer(){
	//<source src=\"http://5.153.133.52:8000/nfm\" type=\"audio/mp3\"/>
	//<source src=\"http://93.157.14.109:8000/nfm\" type=\"audio/mp3\"/>
	//<source src=\"http://online.novorossia.rocks:8000/nfm\" type=\"audio/mp3\"/>
print("
<audio id=\"radio\">
<source src=\"http://online.novorossia.rocks:8000/nfm\" type=\"audio/mp3\"/>
  Your browser does not support the audio tag.
</audio>
<div id=\"crazyPlayer\"></div>");
}	
wp_enqueue_script('jquery'); //This Fix jQuery is not Define
add_action('wp_enqueue_scripts', 'register_style_crazyPlayer');
add_action ('wp_enqueue_scripts', 'loadCrazyScript');
//add_action('wp_footer', 'loadCrazyScript');
add_shortcode('add_crazyplayer', 'add_CrazyPlayer');
 ?> 
 