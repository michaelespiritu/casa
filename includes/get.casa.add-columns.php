<?php


class CasaAddColumn{

  function __construct(){

    add_filter('manage_casa_posts_columns' , [ $this , 'add_sticky_column' ] );
    add_action( 'manage_casa_posts_custom_column' , [ $this , 'display_posts_stickiness' ], 10 , 2 );

  }


  function add_sticky_column($columns) {

      $cols = [
        'title' => __('Property Name', 'casa-listing'),
        'region' => __('Region', 'casa-listing'),
        'price' => __('Price', 'casa-listing'),
        'date' => __('Date Created', 'casa-listing'),
      ];

      return $cols;

  }



  function display_posts_stickiness( $column, $post_id ) {

      $casa_stored_meta = get_post_meta( $post_id );

      switch ($column) {

        case 'region':

            if( !empty( $casa_stored_meta['casa_location'][0] ) ){

              echo $casa_stored_meta['casa_location'][0];

            }

          break;

        case 'price':

            if( !empty( $casa_stored_meta['casa_price'][0] ) ){

              echo $casa_stored_meta['casa_price'][0];

            }

          break;

        default:
          # code...
          break;
      }

  }

}

$casaAddColumn = new CasaAddColumn();
