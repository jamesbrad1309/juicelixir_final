<?php

add_filter( 'post_thumbnail_html', 'remove_thumbnail_width_height', 10, 5 );

function remove_thumbnail_width_height( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

function woocommerce_template_loop_add_to_cart( $args = array() ) {
    global $product;

    if ( $product ) {
        $defaults = array(
            'quantity' => 1,
            'class'    => implode( ' ', array_filter( array(
                'btn btn-link btn-sm',
                'product_type_' . $product->product_type,
                $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
                $product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : ''
            ) ) )
        );

        $args = apply_filters( 'woocommerce_loop_add_to_cart_args', wp_parse_args( $args, $defaults ), $product );

        wc_get_template( 'loop/add-to-cart.php', $args );
    }
}

?>