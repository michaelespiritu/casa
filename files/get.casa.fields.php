<?php

function casa_add_metabox() {

	add_meta_box(
		'casa_meta',
		__( 'Casa Listing' , 'casa-listing'),
		'casa_meta_callback',
		'casa',
		'normal',
		'core'
	);

}

add_action( 'add_meta_boxes', 'casa_add_metabox' );


function casa_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'casa_nonce' );
	$casa_stored_meta = get_post_meta( $post->ID ); ?>

	<div>

		<div class="casa-row">

				<div class="casa-th">
					<label for="casa-location" class="casa-field-title"><?php _e( 'Location', 'casa-listing' ) ?></label>
				</div>

				<div class="casa-td">

					<select name="casa_location" class="casa-row-content" id="casa-location" required>

								<option value=""></option>

								<option value="NCR (National Capital Region)" <?php if ( ! empty ( $casa_stored_meta['casa_location'] ) ) selected( $casa_stored_meta['casa_location'][0], 'NCR (National Capital Region)' ); ?> >  <?php _e( 'NCR (National Capital Region)', 'casa-listing' ) ?></option>

								<option value="Region 1 (Ilocos Region)" <?php if ( ! empty ( $casa_stored_meta['casa_location'] ) ) selected( $casa_stored_meta['casa_location'][0], 'Region 1 (Ilocos Region)' ); ?> >  <?php _e( 'Region 1 (Ilocos Region)', 'casa-listing' ) ?></option>

								<option value="CAR (Cordillera Administrative Region)" <?php if ( ! empty ( $casa_stored_meta['casa_location'] ) ) selected( $casa_stored_meta['casa_location'][0], 'CAR (Cordillera Administrative Region)' ); ?> >  <?php _e( 'CAR (Cordillera Administrative Region)', 'casa-listing' ) ?></option>

								<option value="Region 2 (Cagayan Valley)" <?php if ( ! empty ( $casa_stored_meta['casa_location'] ) ) selected( $casa_stored_meta['casa_location'][0], 'Region 2 (Cagayan Valley)' ); ?> >  <?php _e( 'Region 2 (Cagayan Valley)', 'casa-listing' ) ?></option>

								<option value="Region 3 (Central Luzon)" <?php if ( ! empty ( $casa_stored_meta['casa_location'] ) ) selected( $casa_stored_meta['casa_location'][0], 'Region 3 (Central Luzon)' ); ?> >  <?php _e( 'Region 3 (Central Luzon)', 'casa-listing' ) ?></option>

								<option value="Region 4A (CALABARZON)" <?php if ( ! empty ( $casa_stored_meta['casa_location'] ) ) selected( $casa_stored_meta['casa_location'][0], 'Region 4A (CALABARZON)' ); ?> >  <?php _e( 'Region 4A (CALABARZON)', 'casa-listing' ) ?></option>

								<option value="Southwestern Tagalog Region" <?php if ( ! empty ( $casa_stored_meta['casa_location'] ) ) selected( $casa_stored_meta['casa_location'][0], 'Southwestern Tagalog Region' ); ?> >  <?php _e( 'Southwestern Tagalog Region', 'casa-listing' ) ?></option>

								<option value="Region 5 (Bicol Region)" <?php if ( ! empty ( $casa_stored_meta['casa_location'] ) ) selected( $casa_stored_meta['casa_location'][0], 'Region 5 (Bicol Region)' ); ?> >  <?php _e( 'Region 5 (Bicol Region)', 'casa-listing' ) ?></option>

								<option value="Region 6 (Western Visayas)" <?php if ( ! empty ( $casa_stored_meta['casa_location'] ) ) selected( $casa_stored_meta['casa_location'][0], 'Region 6 (Western Visayas)' ); ?> >  <?php _e( 'Region 6 (Western Visayas)', 'casa-listing' ) ?></option>

								<option value="Region 7 (Central Visayas)" <?php if ( ! empty ( $casa_stored_meta['casa_location'] ) ) selected( $casa_stored_meta['casa_location'][0], 'Region 7 (Central Visayas)' ); ?> >  <?php _e( 'Region 7 (Central Visayas)', 'casa-listing' ) ?></option>

								<option value="Region 8 (Eastern Visayas)" <?php if ( ! empty ( $casa_stored_meta['casa_location'] ) ) selected( $casa_stored_meta['casa_location'][0], 'Region 8 (Eastern Visayas)' ); ?> >  <?php _e( 'Region 8 (Eastern Visayas)', 'casa-listing' ) ?></option>

								<option value="Region 9 (Zamboanga Peninsula)" <?php if ( ! empty ( $casa_stored_meta['casa_location'] ) ) selected( $casa_stored_meta['casa_location'][0], 'Region 9 (Zamboanga Peninsula)' ); ?> >  <?php _e( 'Region 9 (Zamboanga Peninsula)', 'casa-listing' ) ?></option>

								<option value="Region 10 (Northern Mindanao)" <?php if ( ! empty ( $casa_stored_meta['casa_location'] ) ) selected( $casa_stored_meta['casa_location'][0], 'Region 10 (Northern Mindanao)' ); ?> >  <?php _e( 'Region 10 (Northern Mindanao)', 'casa-listing' ) ?></option>

								<option value="Region 11 (Davao Region)" <?php if ( ! empty ( $casa_stored_meta['casa_location'] ) ) selected( $casa_stored_meta['casa_location'][0], 'Region 11 (Davao Region)' ); ?> >  <?php _e( 'Region 11 (Davao Region)', 'casa-listing' ) ?></option>

								<option value="Region 12 (SOCCSKSARGEN)" <?php if ( ! empty ( $casa_stored_meta['casa_location'] ) ) selected( $casa_stored_meta['casa_location'][0], 'Region 12 (SOCCSKSARGEN)' ); ?> >  <?php _e( 'Region 12 (SOCCSKSARGEN)', 'casa-listing' ) ?></option>

								<option value="Region 13 (Caraga Region)" <?php if ( ! empty ( $casa_stored_meta['casa_location'] ) ) selected( $casa_stored_meta['casa_location'][0], 'Region 13 (Caraga Region)' ); ?> >  <?php _e( 'Region 13 (Caraga Region)', 'casa-listing' ) ?></option>

								<option value="Autonomous Region in Muslim Mindanao" <?php if ( ! empty ( $casa_stored_meta['casa_location'] ) ) selected( $casa_stored_meta['casa_location'][0], 'Autonomous Region in Muslim Mindanao' ); ?> >  <?php _e( 'Autonomous Region in Muslim Mindanao', 'casa-listing' ) ?></option>

						</select>

				</div>

		</div><!-- /.casa-row -->



		<div class="casa-row" id="casa_address" >

			<div class="casa-th">

				<label for="casa-address" class="casa-row-title"><?php _e( 'Address', 'casa-listing' ); ?></label>

			</div>

			<div class="casa-td">

				<textarea name="casa_address" class="casa-textarea casa-row-content" id="casa-address" rows="8" cols="80"><?php if ( ! empty ( $casa_stored_meta['casa_address'] ) ) {
					echo esc_attr( $casa_stored_meta['casa_address'][0] );
				} ?></textarea>

			</div>

		</div><!-- /.casa-row -->



		<div class="casa-row">

				<div class="casa-th">

					<label for="casa-type" class="casa-field-title"><?php _e( 'Type', 'casa-listing' ) ?></label>

				</div>

				<div class="casa-td">

					<select name="casa_type" class="casa-row-content" id="casa-type" required>

						<option value=""></option>

						<option value="House and Lot" <?php if ( ! empty ( $casa_stored_meta['casa_type'] ) ) selected( $casa_stored_meta['casa_type'][0], 'House and Lot' ); ?>><?php _e( 'House and Lot', 'casa-listing' ) ?></option>

						<option value="Lot Only (Residential)" <?php if ( ! empty ( $casa_stored_meta['casa_type'] ) ) selected( $casa_stored_meta['casa_type'][0], 'Lot Only (Residential)' ); ?>><?php _e( 'Lot Only (Residential)', 'casa-listing' ) ?></option>

						<option value="Lot Only (Agricultural)" <?php if ( ! empty ( $casa_stored_meta['casa_type'] ) ) selected( $casa_stored_meta['casa_type'][0], 'Lot Only (Agricultural)' ); ?>><?php _e( 'Lot Only (Agricultural)', 'casa-listing' ) ?></option>

					</select>

				</div>

		</div><!-- /.casa-row -->


		<div class="casa-row" id="casa_style"  <?php if ( empty ( $casa_stored_meta['casa_style'][0] ) ) {
			echo 'style="display: none;"'; } ?>>

				<div class="casa-th">

					<label for="casa-style" class="casa-field-title"><?php _e( 'House Style', 'casa-listing' ) ?></label>

				</div>

				<div class="casa-td">

					<select name="casa_style" class="casa-row-content" id="casa-style">

						<option value=""></option>
						<option value="Bungalow" <?php if ( ! empty ( $casa_stored_meta['casa_style'] ) ) selected( $casa_stored_meta['casa_style'][0], 'Bungalow' ); ?>><?php _e( 'Bungalow', 'casa-listing' ) ?></option>

						<option value="2 storey" <?php if ( ! empty ( $casa_stored_meta['casa_style'] ) ) selected( $casa_stored_meta['casa_style'][0], '2 storey' ); ?>><?php _e( '2 storey', 'casa-listing' ) ?></option>

						<option value="Duplex" <?php if ( ! empty ( $casa_stored_meta['casa_style'] ) ) selected( $casa_stored_meta['casa_style'][0], 'Duplex' ); ?>><?php _e( 'Duplex', 'casa-listing' ) ?></option>

						<option value="Townhouse" <?php if ( ! empty ( $casa_stored_meta['casa_style'] ) ) selected( $casa_stored_meta['casa_style'][0], 'Townhouse' ); ?>><?php _e( 'Townhouse', 'casa-listing' ) ?></option>

						<option value="Single Detach" <?php if ( ! empty ( $casa_stored_meta['casa_style'] ) ) selected( $casa_stored_meta['casa_style'][0], 'Single Detach' ); ?>><?php _e( 'Single Detach', 'casa-listing' ) ?></option>

						<option value="Other" <?php if ( ! empty ( $casa_stored_meta['casa_style'] ) ) selected( $casa_stored_meta['casa_style'][0], 'Other' ); ?>><?php _e( 'Other', 'casa-listing' ) ?></option>

					</select>

				</div>

		</div><!-- /.casa-row -->


		<div class="casa-row" id="casa_room"  <?php if ( empty ( $casa_stored_meta['casa_room'][0] ) ) {
			echo 'style="display: none;"'; } ?>>

			<div class="casa-th">

				<label for="casa-room" class="casa-row-title"><?php _e( 'No. of Rooms', 'casa-listing' ); ?></label>
			</div>

			<div class="casa-td">

				<input type="text" class="casa-row-content" name="casa_room" id="casa-room"
				value="<?php if ( ! empty ( $casa_stored_meta['casa_room'] ) ) {
					echo esc_attr( $casa_stored_meta['casa_room'][0] );
				} ?>"/>

			</div>

		</div><!-- /.casa-row -->


		<div class="casa-row" id="casa_toilet"  <?php if ( empty ( $casa_stored_meta['casa_toilet'][0] ) ) {
			echo 'style="display: none;"'; } ?>>

			<div class="casa-th">

				<label for="casa-toilet" class="casa-row-title"><?php _e( 'No. of Toilet', 'casa-listing' ); ?></label>

			</div>

			<div class="casa-td">

				<input type="text" class="casa-row-content" name="casa_toilet" id="casa-toilet"
				value="<?php if ( ! empty ( $casa_stored_meta['casa_toilet'] ) ) {
					echo esc_attr( $casa_stored_meta['casa_toilet'][0] );
				} ?>"/>

			</div>

		</div><!-- /.casa-row -->


		<div class="casa-row" id="casa_price">

			<div class="casa-th">

				<label for="casa-price" class="casa-row-title"><?php _e( 'Price', 'casa-listing' ); ?></label>

			</div>

			<div class="casa-td">

				<input type="text" class="casa-row-content" name="casa_price" id="casa-price"
				value="<?php if ( ! empty ( $casa_stored_meta['casa_price'] ) ) {
					echo esc_attr( $casa_stored_meta['casa_price'][0] );
				} ?>" required/>

			</div>

		</div><!-- /.casa-row -->


		<div class="casa-row" id="casa_lot_area">

			<div class="casa-th">

				<label for="casa-lot-area" class="casa-row-title"><?php _e( 'Lot Area (sqm)', 'casa-listing' ); ?></label>

			</div>

			<div class="casa-td">

				<input type="text" class="casa-row-content" name="casa_lot_area" id="casa-lot-area"
				value="<?php if ( ! empty ( $casa_stored_meta['casa_lot_area'] ) ) {
					echo esc_attr( $casa_stored_meta['casa_lot_area'][0] );
				} ?>"/>

			</div>

		</div><!-- /.casa-row -->


		<div class="casa-row" id="casa_floor_area"  <?php if ( empty ( $casa_stored_meta['casa_floor_area'][0] ) ) {
			echo 'style="display: none;"'; } ?>>

			<div class="casa-th">

				<label for="casa-floor-area" class="casa-row-title"><?php _e( 'Floor Area (sqm)', 'casa-listing' ); ?></label>

			</div>

			<div class="casa-td">

				<input type="text" class="casa-row-content" name="casa_floor_area" id="casa-floor-area"
				value="<?php if ( ! empty ( $casa_stored_meta['casa_floor_area'] ) ) {
					echo esc_attr( $casa_stored_meta['casa_floor_area'][0] );
				} ?>"/>

			</div>

		</div><!-- /.casa-row -->

		<br>
		<div class="meta">

			<div class="casa-th">

				<label for="casa_property_description" class="casa-row-title"><?php _e( 'Property Description', 'casa-listing' ); ?></label>

			</div>

		</div>

		<div class="casa-editor"></div>
		<?php
		$content = get_post_meta( $post->ID, 'casa_property_description', true );
		$editor = 'casa_property_description';
		$settings = array(
			'textarea_rows' => 8,
			'media_buttons' => false,
		);
		wp_editor( $content, $editor, $settings); ?>


		<div class="casa-row" id="casa_contact_name" required>

			<div class="casa-th">

				<label for="casa-contact-name" class="casa-row-title"><?php _e( 'Contact Person', 'casa-listing' ); ?></label>
			</div>

			<div class="casa-td">

				<input type="text" class="casa-row-content" name="casa_contact_name" id="casa-contact-name"
				value="<?php if ( ! empty ( $casa_stored_meta['casa_contact_name'] ) ) {
					echo esc_attr( $casa_stored_meta['casa_contact_name'][0] );
				} ?>"/>

			</div>

		</div><!-- /.casa-row -->


		<div class="casa-row" id="casa_contact_number_mobile" required>

			<div class="casa-th">

				<label for="casa-contact-mobile" class="casa-row-title"><?php _e( 'Mobile No.', 'casa-listing' ); ?></label>
			</div>

			<div class="casa-td">

				<input type="text" class="casa-row-content" name="casa_contact_number_mobile" id="casa-contact-mobile"
				value="<?php if ( ! empty ( $casa_stored_meta['casa_contact_number_mobile'] ) ) {
					echo esc_attr( $casa_stored_meta['casa_contact_number_mobile'][0] );
				} ?>"/>

			</div>

		</div><!-- /.casa-row -->


		<div class="casa-row" id="casa_contact_number_landline" >

			<div class="casa-th">

				<label for="casa-contact-landline" class="casa-row-title"><?php _e( 'Landline No.', 'casa-listing' ); ?></label>
			</div>

			<div class="casa-td">

				<input type="text" class="casa-row-content" name="casa_contact_number_landline" id="casa-contact-landline"
				value="<?php if ( ! empty ( $casa_stored_meta['casa_contact_number_landline'] ) ) {
					echo esc_attr( $casa_stored_meta['casa_contact_number_landline'][0] );
				} ?>"/>

			</div>

		</div><!-- /.casa-row -->


		<div class="casa-row" id="casa_contact_email" required>

			<div class="casa-th">

				<label for="casa-contact-email" class="casa-row-title"><?php _e( 'Email', 'casa-listing' ); ?></label>
			</div>

			<div class="casa-td">

				<input type="email" class="casa-row-content" name="casa_contact_email" id="casa-contact-email"
				value="<?php if ( ! empty ( $casa_stored_meta['casa_contact_email'] ) ) {
					echo esc_attr( $casa_stored_meta['casa_contact_email'][0] );
				} ?>"/>

			</div>

		</div><!-- /.casa-row -->



	</div>
	<?php
}



function casa_meta_save( $post_id ) {
	// Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );

    $is_revision = wp_is_post_revision( $post_id );

    $is_valid_nonce = ( isset( $_POST[ 'casa_nonce' ] ) && wp_verify_nonce( $_POST[ 'casa_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

		$casa_stored_meta = get_post_meta( $post_id );

    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }

		if ( isset( $_POST[ 'casa_location' ] ) ) {
			update_post_meta( $post_id, 'casa_location', sanitize_text_field( $_POST[ 'casa_location' ] ) );
		}


    if ( isset( $_POST[ 'casa_address' ] ) ) {
    	update_post_meta( $post_id, 'casa_address', sanitize_text_field( $_POST[ 'casa_address' ] ) );
    }


    if ( isset( $_POST[ 'casa_type' ] ) ) {
    	update_post_meta( $post_id, 'casa_type', sanitize_text_field( $_POST[ 'casa_type' ] ) );
    }


    if ( isset( $_POST[ 'casa_style' ] ) ){
    	update_post_meta( $post_id, 'casa_style', sanitize_text_field( $_POST[ 'casa_style' ] ) );
    }


    if ( isset( $_POST[ 'casa_room' ] ) ){
    	update_post_meta( $post_id, 'casa_room', sanitize_text_field( $_POST[ 'casa_room' ] ) );
    }


    if ( isset( $_POST[ 'casa_toilet' ] ) ){
    	update_post_meta( $post_id, 'casa_toilet', sanitize_text_field( $_POST[ 'casa_toilet' ] ) );
    }


    if ( isset( $_POST[ 'casa_price' ] ) ) {
    	update_post_meta( $post_id, 'casa_price', sanitize_text_field( $_POST[ 'casa_price' ] ) );
    }


		if ( isset( $_POST[ 'casa_lot_area' ] ) )  {
			update_post_meta( $post_id, 'casa_lot_area', wp_kses_post( $_POST[ 'casa_lot_area' ] ) );
		}


    if ( isset( $_POST[ 'casa_floor_area' ] ) ) {
    	update_post_meta( $post_id, 'casa_floor_area', sanitize_text_field( $_POST[ 'casa_floor_area' ] ) );
    }


		if ( isset( $_POST[ 'casa_property_description' ] ) ) {
			update_post_meta( $post_id, 'casa_property_description', sanitize_text_field( $_POST[ 'casa_property_description' ] ) );
		}


		if ( isset( $_POST[ 'casa_contact_name' ] ) ) {
			update_post_meta( $post_id, 'casa_contact_name', sanitize_text_field( $_POST[ 'casa_contact_name' ] ) );
		}


		if ( isset( $_POST[ 'casa_contact_number_mobile' ] ) ) {
			update_post_meta( $post_id, 'casa_contact_number_mobile', sanitize_text_field( $_POST[ 'casa_contact_number_mobile' ] ) );
		}


		if ( isset( $_POST[ 'casa_contact_number_landline' ] ) ) {
			update_post_meta( $post_id, 'casa_contact_number_landline', sanitize_text_field( $_POST[ 'casa_contact_number_landline' ] ) );
		}


		if ( isset( $_POST[ 'casa_contact_email' ] ) ) {
			update_post_meta( $post_id, 'casa_contact_email', sanitize_text_field( $_POST[ 'casa_contact_email' ] ) );
		}

		if ( isset( $_POST[ 'custom_image_data' ] ) ) {

			$image_data = json_decode( stripslashes( $_POST[ 'custom_image_data' ] ) );

			update_post_meta( $post_id, 'casa_image_data', $image_data );


		}
}


add_action( 'save_post', 'casa_meta_save' );
