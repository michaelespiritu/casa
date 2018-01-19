<?php


get_header();
?>

<?php while ( have_posts() ) : the_post(); $casa_stored_meta = get_post_meta( $post->ID );?>

    <div class="casa-item" id="case_<?php esc_attr( the_id() ); ?>">


      <h3 class="casa-title"><a href="<?php esc_attr( the_permalink() ); ?>"><?php _e( the_title(), 'casa-listing'); ?></a></h3>
      <?php if ( ! empty ( $casa_stored_meta['casa_address'] ) ) :?>
        <p><strong>Address: </strong> <?php _e($casa_stored_meta['casa_address'][0], 'casa-listing') ?></p>
      <?php endif; ?>
      <?php if ( ! empty ( $casa_stored_meta['casa_price'][0] ) ) :?>
        <p><strong>Price: </strong> <?php _e($casa_stored_meta['casa_price'][0], 'casa-listing') ?></p>
      <?php endif; ?>

      <p class="casa-view-button"><a href="<?php esc_attr( the_permalink() ); ?>"><?php _e('View Property', 'casa-listing') ?></a></p>


    </div>
<?php endwhile; ?>

<?php

get_footer();
