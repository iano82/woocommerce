<?php
/**
 * Admin View: Notice - Tracking
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div id="message" class="updated woocommerce-message wc-connect">
	<p><?php printf( __( 'Want to help make WooCommerce even more awesome? Allow WooThemes to collect non-sensitive diagnostic data and usage information, and get 20%% discount on your next WooThemes purchase. %sFind out more%s.', 'woocommerce' ), '<a href="http://docs.woothemes.com/document/woocommerce-usage-tracking/" target="_blank">', '</a>' ); ?></p>
	<p class="submit">
		<a href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'wc_tracker_optin', 'true' ), 'wc_tracker_optin', 'wc_tracker_nonce' ) ); ?>" class="button-primary"><?php _e( 'Allow', 'woocommerce' ); ?></a>
		<a class="skip button" href="<?php echo esc_url( add_query_arg( 'wc-hide-notice', 'tracking' ) ); ?>"><?php _e( 'No, do not bother me again', 'woocommerce' ); ?></a>
	</p>
</div>
