<?php
/**
 * Cart: Empty
 *
 * @package UNI
 * @version 3.5.0
 */

use Timber\{ Timber, Post };

$context = Timber::get_context();

$context['page'] = array(
	'id'        => wc_get_page_id( 'shop' ),
	'permalink' => wc_get_page_permalink( 'shop' ),
);

Timber::render( 'woocommerce/cart/cart-empty.html.twig', $context );
