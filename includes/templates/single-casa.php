<?php


get_header();
$casa_stored_meta = get_post_meta( $post->ID );
?>
  <div class="casa-show-property">

      <div class="casa-slider-images">

        <div class="casa-images">

          <button class="casa-btn-slider casa-display-left" onclick="plusDivs(-1)">&#10094;</button>
          <button class="casa-btn-slider casa-display-right" onclick="plusDivs(1)">&#10095;</button>
        </div>

      </div>

      <div class="casa-property" id="casa_<?php esc_attr( the_id() ); ?>">
        <h2><?php _e( get_the_title(), 'casa-listing') ?></h2>
        <?php if ( ! empty ( $casa_stored_meta['casa_location'][0] ) ) :?>
          <p><strong>Region: </strong> <?php _e($casa_stored_meta['casa_location'][0], 'casa-listing') ?></p>
        <?php endif; ?>
        <?php if ( ! empty ( $casa_stored_meta['casa_address'] ) ) :?>
          <p><strong>Address: </strong> <?php _e($casa_stored_meta['casa_address'][0], 'casa-listing') ?></p>
          <br>
        <?php endif; ?>

        <?php if ( ! empty ( $casa_stored_meta['casa_price'][0] ) ) :?>
          <p><strong>Price: </strong> <?php _e($casa_stored_meta['casa_price'][0], 'casa-listing') ?></p>
        <?php endif; ?>
        <?php if ( ! empty ( $casa_stored_meta['casa_type'][0] ) ) :?>
          <p><strong>Type: </strong> <?php _e($casa_stored_meta['casa_type'][0], 'casa-listing') ?></p>
        <?php endif; ?>
        <?php if ( ! empty ( $casa_stored_meta['casa_room'][0] ) ) :?>
          <p><strong>No. or Rooms: </strong> <?php _e($casa_stored_meta['casa_room'][0], 'casa-listing') ?></p>
        <?php endif; ?>
        <?php if ( ! empty ( $casa_stored_meta['casa_toilet'][0] ) ) :?>
          <p><strong>No. or Toilet: </strong> <?php _e($casa_stored_meta['casa_toilet'][0], 'casa-listing') ?></p>
        <?php endif; ?>
        <?php if ( ! empty ( $casa_stored_meta['casa_lot_area'][0] ) ) :?>
          <p><strong>Lot Area (sqm): </strong> <?php _e($casa_stored_meta['casa_lot_area'][0], 'casa-listing') ?></p>
        <?php endif; ?>
        <?php if ( ! empty ( $casa_stored_meta['casa_floor_area'][0] ) ) :?>
          <p><strong>Floor Area (sqm): </strong> <?php _e($casa_stored_meta['casa_floor_area'][0], 'casa-listing') ?></p>
        <?php endif; ?>

        <?php if ( ! empty ( $casa_stored_meta['casa_property_description'][0] ) ) :?>
          <br>
          <p><strong>Description</strong> </p>
          <p><?php _e($casa_stored_meta['casa_property_description'][0], 'casa-listing') ?></p>
        <?php endif; ?>

        <?php if ( ! empty ( $casa_stored_meta['casa_contact_name'][0] ) ) :?>
          <br>
          <p><strong>Contact Person: </strong> <?php _e($casa_stored_meta['casa_contact_name'][0], 'casa-listing') ?></p>
        <?php endif; ?>
        <?php if ( ! empty ( $casa_stored_meta['casa_contact_number_mobile'][0] ) ) :?>
          <p><strong>Mobile No.: </strong> <?php _e($casa_stored_meta['casa_contact_number_mobile'][0], 'casa-listing') ?></p>
        <?php endif; ?>
        <?php if ( ! empty ( $casa_stored_meta['casa_contact_number_landline'][0] ) ) :?>
          <p><strong>Landline No.: </strong> <?php _e($casa_stored_meta['casa_contact_number_landline'][0], 'casa-listing') ?></p>
        <?php endif; ?>
        <?php if ( ! empty ( $casa_stored_meta['casa_contact_email'][0] ) ) :?>
          <p><strong>Email: </strong> <?php _e($casa_stored_meta['casa_contact_email'][0], 'casa-listing') ?></p>
        <?php endif; ?>
      </div>

      <div class="casa-sidebar">
          <?php get_sidebar(); ?>
      </div>

  </div><!-- .casa-show-property -->

<?php

get_footer();
