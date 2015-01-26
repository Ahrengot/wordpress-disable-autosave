<?php
/*
 Plugin Name: Disable Autosave
 Plugin URI: https://github.com/Ahrengot/wordpress-disable-autosave
 Description: Disabled the autosave feature in WordPress.
 Version: 1.0
 Author: Jens Ahrengot Boddum
 Author URI: http://ahrengot.com/
 */

function a_deregister_autosave_script() {
	if ( is_admin() ) {
		wp_deregister_script( 'autosave' );
	}
}
add_action( 'init', 'a_deregister_autosave_script' );