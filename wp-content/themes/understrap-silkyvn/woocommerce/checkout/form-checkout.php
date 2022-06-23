<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! wc_coupons_enabled() ) { // @codingStandardsIgnoreLine.
	return;
}


do_action('product_style');
do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col" id="customer_details">
			<div class="col-12 col-sm-7">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
				<form class="checkout_coupon woocommerce-form-coupon" method="post" style="display:block">

					<p><?php esc_html_e( 'If you have a coupon code, please apply it below.', 'woocommerce' ); ?></p>

					<p class="form-row form-row-first">
						<input type="text" name="coupon_code" class="form-control" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" id="coupon_code" value="" />
					</p>

					<p class="form-row form-row-last">
						<button type="submit" class="btn btn-outline-primary" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?></button>
					</p>

					<div class="clear"></div>
				</form>
			</div>

			<div class="col-12 col-sm-5">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>

	
	<div id="order_review" class="woocommerce-checkout-review-order">
		<?php //do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php //do_action( 'woocommerce_checkout_after_order_review' ); ?>
	
		
</form>
<div>
<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>

	<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
		tttttttttttttttttttttttttt
	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
eeeeeeeeeeeeeeeee
</div>


<?php
do_action( 'woocommerce_after_checkout_form', $checkout );
