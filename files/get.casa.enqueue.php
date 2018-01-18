<?php

function load_media_files() {

    wp_enqueue_media();

}

add_action( 'admin_enqueue_scripts', 'load_media_files' );

function casa_admin_enqueue() {

	global $pagenow, $typenow;

  if ( $typenow == 'casa') {
		wp_enqueue_style( 'casa-admin-css', plugins_url( 'css/admin-casa.css', __DIR__ ), '', '1.0' );
	}

  if ( ($pagenow == 'post.php' || $pagenow == 'post-new.php') && $typenow == 'casa' ) {

		wp_enqueue_script( 'casa-admin-js', plugins_url( 'js/admin-casa.js', __DIR__ ), array( 'jquery' ), '1.0', true );
		wp_enqueue_script( 'casa-image-upload-js', plugins_url( 'js/image-upload.js', __DIR__ ), array( 'jquery', 'media-upload' ), '1.0', true );
		wp_localize_script( 'casa-image-upload-js', 'casaImageUploads', array( 'imageData' => get_post_meta( get_the_ID(), 'casa_image_data', true ) ) );

	}

}


add_action( 'admin_enqueue_scripts', 'casa_admin_enqueue' );


function casa_enqueue(){

    if ( get_post_type() == 'casa' ) {
      wp_enqueue_style( 'casa-css', plugins_url( 'css/casa.css', __DIR__ ), '', '0310' );
    }
		wp_enqueue_script( 'casa-image-show', plugins_url( 'js/image-slider-show.js', __DIR__ ), array( 'jquery' ), '1.0', true );
		wp_localize_script( 'casa-image-show', 'casaImageUploads', array( 'imageData' => get_post_meta( get_the_ID(), 'casa_image_data', true ) ) );

}

add_action( 'wp_enqueue_scripts', 'casa_enqueue' );
