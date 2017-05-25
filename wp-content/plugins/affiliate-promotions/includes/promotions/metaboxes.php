<?php
/**
 * Metaboxes
 *
 * @package     AffiliatePromotions\Promotions\Metaboxes
 * @since       1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/*
 * Add Metaboxes
 */
function affpromos_register_promotion_meta_boxes( $meta_boxes ) {

    $fields = array(
        array(
            'name'        => esc_html__( 'Vendor', 'affiliate-promotions' ),
            'id'          => AFFILIATE_PROMOTIONS_PREFIX . 'promotion_vendor',
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
            'name'             => esc_html__( 'Image', 'affiliate-promotions' ),
            'id'               => AFFILIATE_PROMOTIONS_PREFIX . 'promotion_image',
            'desc'             => __("By default the vendor image will be taken.", 'affiliate-promotions'),
            'type'             => 'image_advanced',
            'max_file_uploads' => 1,
        ),
        array(
            'name'  => esc_html__( 'Discount', 'affiliate-promotions' ),
            'id'    => AFFILIATE_PROMOTIONS_PREFIX . 'promotion_discount',
            'type'  => 'text',
            'placeholder' => esc_html__( 'e.g. 50% OFF', 'affiliate-promotions' ),
        ),
        array(
            'name'  => esc_html__( 'Discount Code', 'affiliate-promotions' ),
            'id'    => AFFILIATE_PROMOTIONS_PREFIX . 'promotion_code',
            'type'  => 'text',
            'placeholder' => esc_html__( 'e.g. SUMMERTIME50OFF', 'affiliate-promotions' ),
        ),
        array(
            'name'       => esc_html__( 'Valid from', 'affiliate-promotions' ),
            'id'         => AFFILIATE_PROMOTIONS_PREFIX . 'promotion_valid_from',
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
            'id'         => AFFILIATE_PROMOTIONS_PREFIX . 'promotion_valid_until',
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
            'name' => esc_html__( 'URL', 'affiliate-promotions' ),
            'id'   => AFFILIATE_PROMOTIONS_PREFIX . 'promotion_url',
            'desc' => esc_html__( 'By default the vendor url will be taken.', 'affiliate-promotions' ),
            'type' => 'url'
        ),
        array(
            'name'  => esc_html__( 'Title', 'affiliate-promotions' ),
            'id'    => AFFILIATE_PROMOTIONS_PREFIX . 'promotion_title',
            'type'  => 'text',
            'desc' => esc_html__( 'By default the vendor title will be taken.', 'affiliate-promotions' ),
        ),
        array(
            'name' => esc_html__( 'Description', 'affiliate-promotions' ),
            'id'   => AFFILIATE_PROMOTIONS_PREFIX . 'promotion_description',
            'type' => 'textarea',
            'desc' => esc_html__( 'By default the vendor description will be taken.', 'affiliate-promotions' ),
            'cols' => 20,
            'rows' => 3
        ),
    );

    $fields = apply_filters( 'affpromos_promotion_details_meta_fields', $fields );

    $meta_boxes[] = array(
        'id'         => AFFILIATE_PROMOTIONS_PREFIX . 'promotion_details',
        'title'      => __( 'Promotion: Details', 'affiliate-promotions' ),
        'post_types' => array( 'affpromos_promotion' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => $fields/*,
        'validation' => array(
            'rules'    => array(
                AFFILIATE_PROMOTIONS_PREFIX . 'promotion_vendor' => array(
                    'required'  => true
                ),
            ),
            'messages' => array(
                AFFILIATE_PROMOTIONS_PREFIX . 'promotion_vendor' => array(
                    'required'  => esc_html__( 'Please select a vendor.', 'affiliate-promotions' )
                ),
            )
        )*/
    );

    $meta_boxes = apply_filters( 'affpromos_promotion_meta_boxes', $meta_boxes );
    return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'affpromos_register_promotion_meta_boxes',11);