<?php

class CasaImageSlideMetaBox {

	function __construct(){
		add_action( 'add_meta_boxes', [ $this, 'casa_add_image_metabox' ] );
	}

	function casa_add_image_metabox(){

		add_meta_box(
			'casa_image',
			__( 'Casa Image' , 'casa-listing' ),
			[ $this, 'casa_image_meta_callback' ],
			'casa',
	    'side',
			'core'
		);

	}

	function casa_image_meta_callback( ){

	  wp_nonce_field( basename( __FILE__ ), 'casa_nonce' );
	  ?>

	  <div id="metabox_wrapper">
			<div id="image-tag"></div>
			<input type="hidden" id="img-hidden-field" name="custom_image_data">
			<input type="button" id="image-upload-button" class="button" value="Add Image">
			<input type="button" id="image-delete-button" class="button" value="Delete Image">
		</div>

	  <?php
	}

}


$casaImageSlideMetaBox = new CasaImageSlideMetaBox();
