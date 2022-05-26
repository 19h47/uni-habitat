<?php
/**
 * Checkout: Coupon Form
 *
 * @package UNI/Templates
 * @version 3.4.4
 */

use Timber\{ Timber };

$context = Timber::get_context();

$context['coupons_enabled'] = wc_coupons_enabled();

Timber::render( 'woocommerce/checkout/form-coupon.html.twig', $context );
