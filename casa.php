<?php

/*
* Plugin Name: Casa
* Author: Michael Espiritu
* Description: Local House Listing
* Version: 1.0
*/


//Exit if access directly
if( !defined('ABSPATH') ){

  exit;

}

if ( ! defined( 'CASA_DIR' ) ) {

	define( 'CASA_DIR', dirname( __FILE__ ) );

}


require_once CASA_DIR . '/files/get.casa.cpt.php';
require_once CASA_DIR . '/files/get.casa.fields.php';
require_once CASA_DIR . '/files/get.casa.image-slider.php';
require_once CASA_DIR . '/files/get.casa.enqueue.php';
require_once CASA_DIR . '/files/get.casa.widget.php';
require_once CASA_DIR . '/files/get.casa.widget-init.php';
