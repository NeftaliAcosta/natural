<?php
function wooccm_add_payment_method_to_new_order( $order, $sent_to_admin, $plain_text = '' ) {

	$shipping = array(
		'country', 
		'first_name', 
		'last_name', 
		'company', 
		'address_1', 
		'address_2', 
		'city', 
		'state', 
		'postcode'
	);
	$billing = array( 
		'country', 
		'first_name', 
		'last_name', 
		'company', 
		'address_1', 
		'address_2', 
		'city', 
		'state', 
		'postcode', 
		'email', 
		'phone'
	);

	$names = array( 'billing', 'shipping' );
	$inc = 3;

 	if( $plain_text ) {

		foreach( $names as $name ) {

			$array = ($name == 'billing') ? $billing : $shipping;

			$options = get_option( 'wccs_settings'.$inc );
			if( !empty( $options[$name.'_buttons'] ) ) {
				foreach( $options[$name.'_buttons'] as $btn ) {

					if( !in_array( $btn['cow'], $array ) ) {
						if(
							( get_post_meta( $order->id , '_'.$name.'_'.$btn['cow'], true ) !== '' ) && 
							!empty( $btn['label'] ) && 
							empty( $btn['deny_receipt'] ) && 
							$btn['type'] !== 'heading' && 
							$btn['type'] !== 'multiselect' && 
							$btn['type'] !== 'wooccmupload' && 
							$btn['type'] !== 'multicheckbox'
						) {
							echo wooccm_wpml_string( $btn['label'] ).': '.nl2br( get_post_meta( $order->id , '_'.$name.'_'.$btn['cow'], true ) );
							echo "\n";
						} elseif (
							!empty( $btn['label'] ) && 
							empty( $btn['deny_receipt'] ) && 
							$btn['type'] == 'heading' && 
							$btn['type'] !== 'multiselect' && 
							$btn['type'] !== 'wooccmupload' && 
							$btn['type'] !== 'multicheckbox'
						) {
							echo wooccm_wpml_string( $btn['label'] );
							echo "\n";
						} elseif(
							( get_post_meta( $order->id , '_'.$name.'_'.$btn['cow'], true ) !== '' ) && 
							!empty( $btn['label'] ) && 
							empty( $btn['deny_receipt'] ) && 
							$btn['type'] !== 'heading' && 
							$btn['type'] !== 'wooccmupload' && 
							(
								$btn['type'] == 'multiselect' || $btn['type'] == 'multicheckbox'
							)
						) {
							$value = get_post_meta( $order->id , '_'.$name.'_'.$btn['cow'], true );
							$strings = maybe_unserialize( $value );
							echo wooccm_wpml_string($btn['label']).': ';
							if( !empty( $strings ) ) {
								if( is_array( $strings ) ) {
									$iww = 0;
									$len = count( $strings );
									foreach( $strings as $key ) {
										if( $iww == $len - 1 ) {
											echo $key;
										} else {
											echo $key.', ';
										}
										$iww++;
									}
								} else {
									echo $strings;
								}
							} else {
								echo '-';
							}
							echo "\n";
						} elseif( $btn['type'] == 'wooccmupload' ) {
							$info = explode( "||", get_post_meta( $order->id , '_'.$name.'_'.$btn['cow'], true));
							$btn['label'] = ( !empty( $btn['force_title2'] ) ? $btn['force_title2'] : $btn['label'] );
							echo wooccm_wpml_string( trim( $btn['label'] ) ).': '.$info[0];
							echo "\n";
						}
					}

				}
			}
			$inc--;

		}

		$options = get_option( 'wccs_settings' );
		if( !empty( $options['buttons'] ) ) {
			foreach( $options['buttons'] as $btn ) {

				if(
					( get_post_meta( $order->id , $btn['cow'], true ) !== '' ) && 
					!empty( $btn['label'] ) && 
					empty( $btn['deny_receipt'] ) && 
					$btn['type'] !== 'heading' && 
					$btn['type'] !== 'multiselect' && 
					$btn['type'] !== 'wooccmupload' && 
					$btn['type'] !== 'multicheckbox'
				) {
					echo wooccm_wpml_string( $btn['label'] ).': '.nl2br( get_post_meta( $order->id , $btn['cow'], true ) );
					echo "\n";
				} elseif(
					!empty( $btn['label'] ) && 
					empty( $btn['deny_receipt'] ) && 
					$btn['type'] == 'heading' && 
					$btn['type'] !== 'multiselect' && 
					$btn['type'] !== 'wooccmupload' && 
					$btn['type'] !== 'multicheckbox'
				) {
					echo wooccm_wpml_string( $btn['label'] );
					echo "\n";
				} elseif(
					( get_post_meta( $order->id, $btn['cow'], true ) !== '' ) && 
					!empty( $btn['label'] ) && 
					empty( $btn['deny_receipt'] ) && 
					$btn['type'] !== 'heading' && 
					$btn['type'] !== 'wooccmupload' && 
					(
						$btn['type'] == 'multiselect' || $btn['type'] == 'multicheckbox'
					)
				) {
					$value = get_post_meta( $order->id , $btn['cow'], true );
					$strings = maybe_unserialize( $value );
					echo wooccm_wpml_string($btn['label']).': ';
					if( !empty( $strings ) ) {
						if( is_array( $strings ) ) {
							$iww = 0;
							$len = count($strings);
							foreach($strings as $key ) {
								if( $iww == $len - 1 ) {
									echo $key;
								} else {
									echo $key.', ';
								}
								$iww++;
							}
						} else {
							echo $strings;
						}
					} else {
						echo '-';
					}
					echo "\n";
				} elseif( $btn['type'] == 'wooccmupload' ) {
					$info = explode( "||", get_post_meta( $order->id, $btn['cow'], true ) );
					$btn['label'] = ( !empty( $btn['force_title2'] ) ? $btn['force_title2'] : $btn['label'] );
					echo wooccm_wpml_string( trim( $btn['label'] ) ).': '.$info[0];
					echo "\n";
				}

			}
		}

		if ( !empty( $options['checkness']['set_timezone'] ) ) {
			date_default_timezone_set( $options['checkness']['set_timezone'] );
		}
		$date = ( !empty( $options['checkness']['twenty_hour'] ) ) ? date( "G:i T (P" ).' GMT)' : date( "g:i a" );
		$options['checkness']['time_stamp'] = ( isset( $options['checkness']['time_stamp'] ) ? $options['checkness']['time_stamp'] : false );
		if ( $options['checkness']['time_stamp'] == true ) {
			echo $options['checkness']['time_stamp_title'].' ' . $date . "\n";
		}
		if( $order->payment_method_title && isset( $options['checkness']['payment_method_t'] ) && $options['checkness']['payment_method_t'] == true ) {
			echo $options['checkness']['payment_method_d'].': ' . $order->payment_method_title . "\n";
		}
		if( $order->shipping_method_title && isset( $options['checkness']['shipping_method_t'] ) && $options['checkness']['shipping_method_t'] == true ) {
			echo $options['checkness']['shipping_method_d'].': ' . $order->shipping_method_title . "\n";
		}

		echo "\n";

	} else {

		foreach( $names as $name ) {

			$array = ( $name == 'billing' ) ? $billing : $shipping;

			$options = get_option( 'wccs_settings'.$inc );
			if( !empty( $options[$name.'_buttons'] ) ) {
				foreach( $options[$name.'_buttons'] as $btn ) {

					if( !in_array( $btn['cow'], $array ) ) {
						if(
							( get_post_meta( $order->id , '_'.$name.'_'.$btn['cow'], true ) !== '' ) && 
							!empty( $btn['label'] ) && 
							empty( $btn['deny_receipt'] ) && 
							$btn['type'] !== 'heading' && 
							$btn['type'] !== 'multiselect' && 
							$btn['type'] !== 'wooccmupload' && 
							$btn['type'] !== 'multicheckbox'
						) {
							echo '
<p>
	<strong>'.wooccm_wpml_string($btn['label']).':</strong> '.nl2br( get_post_meta( $order->id , '_'.$name.'_'.$btn['cow'], true ) ).'
</p>';
						} elseif (
							!empty( $btn['label'] ) && 
							empty( $btn['deny_receipt'] ) && 
							$btn['type'] == 'heading' && 
							$btn['type'] !== 'multiselect' && 
							$btn['type'] !== 'wooccmupload' && 
							$btn['type'] !== 'multicheckbox'
						) {
							echo '
<h2>' .wooccm_wpml_string($btn['label']). '</h2>';
						} elseif (
							( get_post_meta( $order->id , '_'.$name.'_'.$btn['cow'], true ) !== '' ) && 
							!empty( $btn['label'] ) && 
							empty( $btn['deny_receipt'] ) && 
							$btn['type'] !== 'heading' && 
							$btn['type'] !== 'wooccmupload' && 
							(
								$btn['type'] == 'multiselect' || $btn['type'] == 'multicheckbox'
							)
						) {
							$value = get_post_meta( $order->id , '_'.$name.'_'.$btn['cow'], true );
							$strings = maybe_unserialize( $value );
							echo '
<p>
	<strong>'.wooccm_wpml_string($btn['label']).':</strong> ';
							if( !empty( $strings ) ) {
								if( is_array( $strings ) ) {
									$iww = 0;
									$len = count( $strings );
									foreach( $strings as $key ) {
										if( $iww == $len - 1 ) {
											echo $key;
										} else {
											echo $key.', ';
										}
										$iww++;
									}
								} else {
									echo $strings;
								}
							} else {
								echo '-';
							}
							echo '
</p>';
						} elseif( $btn['type'] == 'wooccmupload' ) {
							$info = explode( "||", get_post_meta( $order->id , '_'.$name.'_'.$btn['cow'], true ) );
							$btn['label'] = ( !empty( $btn['force_title2'] ) ? $btn['force_title2'] : $btn['label'] );
							echo '
<p>
	<strong>'.wooccm_wpml_string( trim( $btn['label'] ) ).':</strong> '.$info[0].'
</p>';
						}
					}

				}
			}
			$inc--;

		}

		$options = get_option( 'wccs_settings' );
		if( !empty( $options['buttons'] ) ) {
			foreach( $options['buttons'] as $btn ) {

				if(
					( get_post_meta( $order->id , $btn['cow'], true ) !== '' ) && 
					!empty( $btn['label'] ) && 
					empty( $btn['deny_receipt'] ) && 
					$btn['type'] !== 'heading' && 
					$btn['type'] !== 'multiselect' && 
					$btn['type'] !== 'wooccmupload' && 
					$btn['type'] !== 'multicheckbox'
				) {
					echo '<p><strong>'.wooccm_wpml_string( $btn['label'] ).':</strong> '.nl2br( get_post_meta( $order->id , $btn['cow'], true ) ).'</p>';
				} elseif ( !empty( $btn['label'] ) && empty($btn['deny_receipt']) && ($btn['type'] == 'heading') && ($btn['type'] !== 'multiselect') && $btn['type'] !== 'wooccmupload' && ($btn['type'] !== 'multicheckbox') ) {
					echo '<h2>'.wooccm_wpml_string($btn['label']).'</h2>';
				} elseif ( ( get_post_meta( $order->id , $btn['cow'], true ) !== '' ) && !empty( $btn['label'] ) && empty($btn['deny_receipt']) && ($btn['type'] !== 'heading') && $btn['type'] !== 'wooccmupload' && (($btn['type'] == 'multiselect') || ($btn['type'] == 'multicheckbox')) ) {
					$value = get_post_meta( $order->id , $btn['cow'], true );
					$strings = maybe_unserialize( $value );
					echo '
<p>
	<strong>'.wooccm_wpml_string($btn['label']).':</strong> ';
					if( !empty( $strings ) ) {
						if( is_array( $strings ) ) {
							$iww = 0;
							$len = count( $strings );
							foreach( $strings as $key ) {
								if( $iww == $len - 1 ) {
									echo $key;
								} else {
									echo $key.', ';
								}
								$iww++;
							}
						} else {
							echo $strings;
						}
					} else {
						echo '-';
					}
					echo '
</p>';
				} elseif( $btn['type'] == 'wooccmupload' ) {
					$info = explode( "||", get_post_meta( $order->id , $btn['cow'], true ) );
					$btn['label'] = ( !empty( $btn['force_title2'] ) ? $btn['force_title2'] : $btn['label'] );
					echo '
<p>
	<strong>'.wooccm_wpml_string( trim( $btn['label'] ) ).':</strong> '.$info[0].'
</p>';
				}

			}
		}

		// @mod - We are not doing any checking for valid TimeZone
		if ( !empty($options['checkness']['set_timezone']) ) {
			date_default_timezone_set( $options['checkness']['set_timezone'] );
		}
		$date = ( !empty($options['checkness']['twenty_hour'])) ? date("G:i T (P").' GMT)' : date("g:i a");
		$options['checkness']['time_stamp'] = ( isset( $options['checkness']['time_stamp'] ) ? $options['checkness']['time_stamp'] : false );
		if( $options['checkness']['time_stamp'] == true ) {
			echo '
<p>
	<strong>'.$options['checkness']['time_stamp_title'].':</strong> ' . $date . '
</p>';
		}
		if( $order->payment_method_title && isset( $options['checkness']['payment_method_t'] ) && $options['checkness']['payment_method_t'] == true ) {
			echo '
<p>
	<strong>'.$options['checkness']['payment_method_d'].':</strong> ' . $order->payment_method_title . '
</p>';
		}
		if( $order->shipping_method_title && $options['checkness']['shipping_method_t'] == true ) {
			echo '
<p>
	<strong>'.$options['checkness']['shipping_method_d'].':</strong> ' . $order->shipping_method_title . '
</p>';
		}

	}

}
?>