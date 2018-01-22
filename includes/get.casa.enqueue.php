<?php
if ( ! class_exists( 'CasaEnqueue' ) ) {
	return null;
}


class CasaEnqueue{

  function __construct(){
    add_action( 'admin_enqueue_scripts', [ $this , 'load_media_files' ] );
    add_action( 'admin_enqueue_scripts', [ $this , 'casa_admin_enqueue' ] );
    add_action( 'wp_enqueue_scripts', [ $this , 'casa_enqueue' ] );
  }


  function load_media_files() {

      wp_enqueue_media();

  }



  function casa_admin_enqueue() {

  	global $pagenow, $typenow;

    if ( $typenow == 'casa') {
  		wp_enqueue_style( 'casa-admin-css', plugins_url( 'admin/css/admin-casa.css', __DIR__ ), '', '1.0' );
  	}

    if ( ($pagenow == 'post.php' || $pagenow == 'post-new.php') && $typenow == 'casa' ) {

  		wp_enqueue_script( 'casa-admin-js', plugins_url( 'admin/js/admin-casa.js', __DIR__ ), array( 'jquery' ), '1.0', true );

  		wp_enqueue_script( 'casa-image-upload-js', plugins_url( 'admin/js/image-upload.js', __DIR__ ), array( 'jquery', 'media-upload' ), '1.0', true );

  		wp_localize_script( 'casa-image-upload-js', 'casaImageUploads', array( 'imageData' => get_post_meta( get_the_ID(), 'casa_image_data', true ) ) );

  	}

  }

  function casa_enqueue(){

      if ( get_post_type() == 'casa' ) {
        wp_enqueue_style( 'casa-css', plugins_url( 'public/css/casa.css', __DIR__ ), '', '1149' );
      }

  		wp_enqueue_script( 'casa-image-show', plugins_url( 'public/js/image-slider-show.js', __DIR__ ), array( 'jquery' ), '1149', true );

  		wp_localize_script( 'casa-image-show', 'casaImageUploads', array( 'imageData' => get_post_meta( get_the_ID(), 'casa_image_data', true ) ) );

  }


}


$casaEnqueue = new CasaEnqueue();
