<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
<div id="message" class="updated displayproduct-message dp-connect">
	<div class="squeezer">
		<p><?php _e( '<strong>This plugin require the WooCommerce plugin By WooThemes</strong>. If you already  have a  woocommerce please activate them.', DP_TEXTDOMAN ); ?></p>
                <?php 
                if(file_exists( WP_PLUGIN_DIR. "/woocommerce/woocommerce.php"  )&&!is_plugin_active( 'woocommerce/woocommerce.php' )){?>
                    <p class="submit"><a href="<?php echo add_query_arg('Activated WooCommerce', 'true', admin_url('plugins.php') ); ?>" class="button-primary">Activate WooCommerce</a></p>
                <?php }else{ ?>
                    <p class="submit"><a href="<?php echo add_query_arg('Install WooCommerce', 'true', admin_url('plugin-install.php?tab=search&s=woocommerce') ); ?>" class="button-primary">Install WooCommerce</a></p>
                <?php }?>
	</div>
</div>