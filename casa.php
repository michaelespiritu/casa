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


require_once CASA_DIR . '/includes/get.casa.cpt.php';
require_once CASA_DIR . '/includes/get.casa.fields.php';
require_once CASA_DIR . '/includes/get.casa.add-columns.php';
require_once CASA_DIR . '/includes/get.casa.image-slider.php';
require_once CASA_DIR . '/includes/get.casa.enqueue.php';
require_once CASA_DIR . '/includes/get.casa.widget.php';
require_once CASA_DIR . '/includes/get.casa.widget-init.php';
