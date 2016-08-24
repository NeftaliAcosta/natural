<?php
/*
Plugin Name: Conekta Payment Gateway
Plugin URI: https://wordpress.org/plugins/conekta-woocommerce/
Description: Payment Gateway through Conekta.io for Woocommerce for both credit and debit cards as well as cash payments in OXXO and monthly installments for Mexican credit cards.
Version: 0.3.0
Author: Conekta.io
Author URI: https://www.conekta.io
License: GNU General Public License v3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

/*
 * Title   : Conekta Payment Extension for WooCommerce
 * Author  : Conekta.io
 * Url     : https://www.conekta.io/es/docs/plugins/woocommerce
 */

function conekta_checkout_init_your_gateway()
{
    if (class_exists('WC_Payment_Gateway'))
    {
        if (array_key_exists("wc-ajax", $_GET) && $_GET["wc-ajax"] === "checkout") {
            if (array_key_exists("payment_method", $_POST)) {
                include_once('conekta_gateway_helper.php');
                include_once('conekta_plugin.php');
                
                switch ($_POST["payment_method"]) {
                    case 'conektacard': default:
                        include_once('conekta_card_gateway.php');
                    break;
                    case 'conektabanorte':
                        include_once('conekta_banorte_gateway.php');
                    break;
                    case 'conektacash':
                        include_once('conekta_cash_gateway.php');
                    break;
                    case 'conektaspei':
                        include_once('conekta_spei_gateway.php');
                    break;
                }
            }
        } else {
            include_once('conekta_gateway_helper.php');
            include_once('conekta_plugin.php');
            include_once('conekta_card_gateway.php');
            include_once('conekta_cash_gateway.php');
            include_once('conekta_spei_gateway.php');
            include_once('conekta_banorte_gateway.php');
        }

    }
}

add_action('plugins_loaded', 'conekta_checkout_init_your_gateway', 0);

/**
* Add Conekta.js to all pages
*/
function add_conekta_script() {
	wp_register_script('the_conekta_js', 'https://conektaapi.s3.amazonaws.com/v0.3.2/js/conekta.js',array('jquery'),false, false);
  wp_enqueue_script('the_conekta_js');
}

add_action('wp_enqueue_scripts', 'add_conekta_script');
