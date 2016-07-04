<?php
function wooccm_checkout_billing_fields( $fields ) {

	$options = get_option( 'wccs_settings3' );
	$buttons = ( isset( $options['billing_buttons'] ) ? $options['billing_buttons'] : false );

	// Check if we have any fields to process
	if( empty( $buttons ) )
		return $fields;

	foreach( $buttons as $btn ) {

		if( !empty( $btn['cow'] ) && empty( $btn['deny_checkout'] ) ) {
			if( $btn['cow'] == 'country' ) {
				// Country override
				$fields['billing_'.$btn['cow']]['type'] = 'wooccmcountry';
			} elseif( $btn['cow'] == 'state' ) {
				// State override
				$fields['billing_'.$btn['cow']]['type'] = 'wooccmstate';
			} else {
				$fields['billing_'.$btn['cow']]['type'] = $btn['type'];
			}

			if( $btn['cow'] !== 'country' || $btn['cow'] !== 'state' ) {
				$fields['billing_'.$btn['cow']]['placeholder'] = ( isset( $btn['placeholder'] ) ? $btn['placeholder'] : '' );
			}

			// @mod - Why are we not setting the position here like we do for shipping?

			$fields['billing_'.$btn['cow']]['class'] = array( $btn['position'].' '. ( isset( $btn['conditional_tie'] ) ? $btn['conditional_tie'] : '' ) .' '. ( isset( $btn['extra_class'] ) ? $btn['extra_class'] : '' ) );		
			$fields['billing_'.$btn['cow']]['label'] =  wooccm_wpml_string( $btn['label'] );
			$fields['billing_'.$btn['cow']]['clear'] = ( isset( $btn['clear_row'] ) ? $btn['clear_row'] : '' );
			$fields['billing_'.$btn['cow']]['default'] = ( isset( $btn['force_title2'] ) ? $btn['force_title2'] : '' );
			$fields['billing_'.$btn['cow']]['options'] = ( isset( $btn['option_array'] ) ? $btn['option_array'] : '' );
			$fields['billing_'.$btn['cow']]['user_role'] = ( isset( $btn['user_role'] ) ? $btn['user_role'] : '' );
			$fields['billing_'.$btn['cow']]['role_options'] = ( isset( $btn['role_options'] ) ? $btn['role_options'] : '' );
			$fields['billing_'.$btn['cow']]['role_options2'] = ( isset( $btn['role_options2'] ) ? $btn['role_options2'] : '' );
			$fields['billing_'.$btn['cow']]['required'] = ( isset( $btn['checkbox'] ) ? $btn['checkbox'] : '' );
			$fields['billing_'.$btn['cow']]['wooccm_required'] = ( isset( $btn['checkbox'] ) ? $btn['checkbox'] : '' );
			$fields['billing_'.$btn['cow']]['cow'] = ( isset( $btn['cow'] ) ? $btn['cow'] : '' );
			$fields['billing_'.$btn['cow']]['color'] = ( isset( $btn['colorpickerd'] ) ? $btn['colorpickerd'] : '' );
			$fields['billing_'.$btn['cow']]['colorpickertype'] = ( isset( $btn['colorpickertype'] ) ? $btn['colorpickertype'] : '' );
			$fields['billing_'.$btn['cow']]['order'] = ( isset( $btn['order'] ) ? $btn['order'] : '' );
			$fields['billing_'.$btn['cow']]['fancy'] = ( isset( $btn['fancy'] ) ? $btn['fancy'] : '' );

			// Check if Multi-checkbox has options assigned to it
			if( $btn['type'] == 'multicheckbox' && empty( $btn['option_array'] ) ) {
				$btn['disabled'] = true;
			}

			// Remove disabled fields
			if( !empty( $btn['disabled'] ) ) {
				unset( $fields['billing_'.$btn['cow']] );
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