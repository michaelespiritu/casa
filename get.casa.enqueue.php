<?php

function casa_admin_enqueue() {

	global $pagenow, $typenow;

  if ( $typenow == 'casa') {
		wp_enqueue_style( 'casa-admin-css', plugins_url( 'css/admin-casa.css', __FILE__ ), '', '1.0' );
	}

  if ( ($pagenow == 'post.php' || $pagenow == 'post-new.php') && $typenow == 'casa' ) {

		wp_enqueue_script( 'casa-admin-js', plugins_url( 'js/admin-casa.js', __FILE__ ), array( 'jquery' ), '1.0', true );

	}

}


add_action( 'admin_enqueue_scripts', 'casa_admin_enqueue' );


function casa_enqueue(){

    if ( get_post_type() == 'casa' ) {
      wp_enqueue_style( 'casa-css', plugins_url( 'css/casa.css', __FILE__ ), '', '1.0' );
    }

}

add_action( 'wp_enqueue_scripts', 'casa_enqueue' );
