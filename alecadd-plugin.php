<?php

/*-------------------

@package     Alecardd plugins
--------------------*/

/*

Plugin Name : Alecardd Plugin
Plugin URI: http://alecadd.com/pluginname
Description: This is the custom plugin, which i have create for the blog post enhancements.
Version:1.0.1
Author: Shiva
Author URI: http://alecadd.com

*/

if (!defined('ABSPATH' ) ) {
	die;
	
}

defined('ABSPATH') or die( 'Hey, you can\t access this file, you silly human!' );

if (!function_exists( 'add_action' ) ) {
	echo 'Hey, you can\t access this file, you silly human!';
	
	exit;
}


Class AlecarddPlugin{
	function __construct(){
		add_action('init',array($this,'custom_post_type'));
		
	}
	function activate(){
		
		flush_rewrite_rule();
		echo 'plugin is activated';
	}
	
	function deactivate(){
		
		flush_rewrite_rule();
	}
	function unistall(){
		
	}
	
	function custom_post_type(){
		
		register_post_type('book',['public'=>true,'label'=>'Books']);
	}
	
	function enqueue() {
// enqueue all our scripts
wp_enqueue_style( 'mypluginstyle', plugins url( '/assets/mystyle.css', _FILE_ ) );
wp_enqueue_script( 'mypluginscript', plugins_url( '/assets/myscript.js', _FILE__ ) );

}

if(class_exists('AlecarddPlugin')){
	
	$alecadddPlugin = new AlecarddPlugin();
}

// activation
register_activation_hook( __FILE__, array( $alecadddPlugin, 'activate' ) );

// deactivation
register_deactivation_hook( __FILE__, array( $alecadddPlugin, 'deactivate' ) );44

// unistall
register_unistall_hook( __FILE__, array( $alecadddPlugin, 'unistall' ) );

add_action( 'init', 'function_name' );
?>