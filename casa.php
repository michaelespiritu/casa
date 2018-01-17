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


require_once CASA_DIR . '/get.casa.cpt.php';
require_once CASA_DIR . '/get.casa.fields.php';
require_once CASA_DIR . '/get.casa.enqueue.php';
