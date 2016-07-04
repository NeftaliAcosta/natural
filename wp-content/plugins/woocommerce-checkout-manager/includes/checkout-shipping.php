<?php
function wooccm_checkout_shipping_fields( $fields = array() ) {

	$options = get_option( 'wccs_settings2' );
	$buttons = ( isset( $options['shipping_buttons'] ) ? $options['shipping_buttons'] : false );

	// Check if we have any fields to process
	if( empty( $buttons ) )
		return $fields;

	foreach( $buttons as $btn ) {

		if( !empty( $btn['cow'] ) && empty( $btn['deny_checkout'] ) ) {
			if( $btn['cow'] == 'country' ) {
				// Country override
				$fields['shipping_'.$btn['cow']]['type'] = 'wooccmcountry';
			} elseif( $btn['cow'] == 'state' ) {
				// State override
				$fields['shipping_'.$btn['cow']]['type'] = 'wooccmstate';
			} else {
				$fields['shipping_'.$btn['cow']]['type'] = $btn['type'];
			}

			if( $btn['cow'] !== 'country' || $btn['cow'] !== 'state' ) {
				$fields['shipping_'.$btn['cow']]['placeholder'] = ( isset( $btn['placeholder'] ) ? $btn['placeholder'] : '' );
			}

			// Default to Position wide
			$btn['position'] = ( isset( $btn['position'] ) ? $btn['position'] : 'form-row-wide' );
			$fields['shipping_'.$btn['cow']]['class'] = array( $btn['position'].' '. ( isset( $btn['conditional_tie'] ) ? $btn['conditional_tie'] : '' ) .' '. ( isset( $btn['extra_class'] ) ? $btn['extra_class'] : '' ) );
			$fields['shipping_'.$btn['cow']]['label'] =  wooccm_wpml_string( $btn['label'] );
			$fields['shipping_'.$btn['cow']]['clear']  = ( isset( $btn['clear_row'] ) ? $btn['clear_row'] : '' );
			$fields['shipping_'.$btn['cow']]['default'] = ( isset( $btn['force_title2'] ) ? $btn['force_title2'] : '' );
			$fields['shipping_'.$btn['cow']]['options'] = ( isset( $btn['option_array'] ) ? $btn['option_array'] : '' );
			$fields['shipping_'.$btn['cow']]['user_role'] = ( isset( $btn['user_role'] ) ? $btn['user_role'] : '' );
			$fields['shipping_'.$btn['cow']]['role_options'] = ( isset( $btn['role_options'] ) ? $btn['role_options'] : '' );
			$fields['shipping_'.$btn['cow']]['role_options2'] = ( isset( $btn['role_options2'] ) ? $btn['role_options2'] : '' );
			$fields['shipping_'.$btn['cow']]['required'] = ( isset( $btn['checkbox'] ) ? $btn['checkbox'] : '' );
			$fields['shipping_'.$btn['cow']]['wooccm_required'] = ( isset( $btn['checkbox'] ) ? $btn['checkbox'] : '' );
			$fields['shipping_'.$btn['cow']]['cow'] = ( isset( $btn['cow'] ) ? $btn['cow'] : '' );
			$fields['shipping_'.$btn['cow']]['color'] = ( isset( $btn['colorpickerd'] ) ? $btn['colorpickerd'] : '' );
			$fields['shipping_'.$btn['cow']]['colorpickertype'] = ( isset( $btn['colorpickertype'] ) ? $btn['colorpickertype'] : '' );
			$fields['shipping_'.$btn['cow']]['order'] = ( isset( $btn['order'] ) ? $btn['order'] : '' );
			$fields['shipping_'.$btn['cow']]['fancy'] = ( isset( $btn['fancy'] ) ? $btn['fancy'] : '' );

			// Check if Multi-checkbox has options assigned to it
			if( $btn['type'] == 'multicheckbox' && empty( $btn['option_array'] ) ) {
				$btn['disabled'] = true;
			}

			// Remove disabled fields
			if( !empty( $btn['disabled'] ) ) {
				unset( $fields['shipping_'.$btn['cow']] );
			}

		}

	}

	// Resort the fields by order
	$fields[] = uasort( $fields, 'wooccm_sort_fields' );

	if( $fields[0] ) {
		unset( $fields[0] );
	}

	return $fields;

}
?>