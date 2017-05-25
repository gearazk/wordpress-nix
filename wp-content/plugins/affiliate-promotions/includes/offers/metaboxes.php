<?php
/**
 * Metaboxes
 *
 * @package     AffiliatePromotions\Offers\Metaboxes
 * @since       1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/*
 * Add Metaboxes
 */
function affpromos_register_offer_meta_boxes( $meta_boxes ) {

    $fields = array(
        array(
            'name'             => esc_html__( 'Thumbnail URL', 'affiliate-promotions' ),
            'id'               => AFFILIATE_PROMOTIONS_PREFIX . 'offer_image_url',
            'type'             => 'url',
            'max_file_uploads' => 1,
        ),
        array(
            'name'        => esc_html__( 'Vendor', 'affiliate-promotions' ),
            'id'          => AFFILIATE_PROMOTIONS_PREFIX . 'offer_vendor',
            'type'        => 'post',
            'post_type'   => 'affpromos_vendor',
            'field_type'  => 'select_advanced',
            'placeholder' => esc_html__( 'Please select...', 'affiliate-promotions' ),
            'query_args'  => array(
                'orderby'        => 'title',
                'order'          => 'ASC',
                'post_status'    => 'publish',
                'posts_per_page' => - 1
            ),
        ),
        array(
            'name' => esc_html__( 'URL', 'affiliate-promotions' ),
            'id'   => AFFILIATE_PROMOTIONS_PREFIX . 'offer_url',
            'desc' => esc_html__( 'This will be the default url of the selected offer or its promotions.', 'affiliate-promotions' ),
            'type' => 'url'
        ),
        array(
            'name' => esc_html__( 'Specs', 'affiliate-promotions' ),
            'id'   => AFFILIATE_PROMOTIONS_PREFIX . 'offer_specs',
            'type' => 'textarea',
            'cols' => 20,
            'rows' => 3,
        ),
        array(
            'name' => esc_html__( 'Price', 'affiliate-promotions' ),
            'id'   => AFFILIATE_PROMOTIONS_PREFIX . 'offer_price',
            'type' => 'text',
            'placeholder' => esc_html__( 'e.g. 1.99 $', 'affiliate-promotions' ),

        ),
        array(
            'name' => esc_html__( 'Price Sale', 'affiliate-promotions' ),
            'id'   => AFFILIATE_PROMOTIONS_PREFIX . 'offer_price_sale',
            'type' => 'text',
            'placeholder' => esc_html__( 'e.g. 0.99 $', 'affiliate-promotions' ),

        ),
        array(
            'name'       => esc_html__( 'Valid from', 'affiliate-promotions' ),
            'id'         => AFFILIATE_PROMOTIONS_PREFIX . 'offer_valid_from',
            'type'       => 'date',
            'timestamp'  => true,
            // jQuery date picker options. See here http://api.jqueryui.com/datepicker
            'js_options' => array(
                'dateFormat'      => esc_html__( 'yy-mm-dd', 'affiliate-promotions' ),
                'changeMonth'     => true,
                'changeYear'      => true,
                'showButtonPanel' => true,
            ),
        ),
        array(
            'name'       => esc_html__( 'Valid until', 'affiliate-promotions' ),
            'id'         => AFFILIATE_PROMOTIONS_PREFIX . 'offer_valid_until',
            'type'       => 'date',
            'timestamp'  => true,
            // jQuery date picker options. See here http://api.jqueryui.com/datepicker
            'js_options' => array(
                'dateFormat'      => esc_html__( 'yy-mm-dd', 'affiliate-promotions' ),
                'changeMonth'     => true,
                'changeYear'      => true,
                'showButtonPanel' => true,
            ),
        ),

    );

    $fields = apply_filters( 'affpromos_offer_details_meta_fields', $fields );

    $meta_boxes[] = array(
        'id'         => AFFILIATE_PROMOTIONS_PREFIX . 'offer_details',
        'title'      => __( 'Offer: Details', 'affiliate-promotions' ),
        'post_types' => array( 'affpromos_offer' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => $fields
    );

    $meta_boxes = apply_filters( 'affpromos_offer_meta_boxes', $meta_boxes );

    return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'affpromos_register_offer_meta_boxes',11 );