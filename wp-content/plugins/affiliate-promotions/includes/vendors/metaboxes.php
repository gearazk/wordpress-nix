<?php
/**
 * Metaboxes
 *
 * @package     AffiliatePromotions\Vendors\Metaboxes
 * @since       1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/*
 * Add Metaboxes
 */
function affpromos_register_vendor_meta_boxes( $meta_boxes ) {

    $fields = array(
        array(
            'name'             => esc_html__( 'Image', 'affiliate-promotions' ),
            'id'               => AFFILIATE_PROMOTIONS_PREFIX . 'vendor_image',
            'type'             => 'image_advanced',
            'max_file_uploads' => 1,
        ),
        array(
            'name' => esc_html__( 'URL', 'affiliate-promotions' ),
            'id'   => AFFILIATE_PROMOTIONS_PREFIX . 'vendor_url',
            'desc' => esc_html__( 'This will be the default url of the selected vendor or its promotions.', 'affiliate-promotions' ),
            'type' => 'url'
        ),
        array(
            'name' => esc_html__( 'Description', 'affiliate-promotions' ),
            'id'   => AFFILIATE_PROMOTIONS_PREFIX . 'vendor_description',
            'type' => 'textarea',
            'cols' => 20,
            'rows' => 3,
        ),
    );

    $fields = apply_filters( 'affpromos_vendor_details_meta_fields', $fields );

    $meta_boxes[] = array(
        'id'         => AFFILIATE_PROMOTIONS_PREFIX . 'vendor_details',
        'title'      => __( 'Vendor: Details', 'affiliate-promotions' ),
        'post_types' => array( 'affpromos_vendor' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => $fields
    );

    $meta_boxes = apply_filters( 'affpromos_vendor_meta_boxes', $meta_boxes );

    return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'affpromos_register_vendor_meta_boxes',11 );