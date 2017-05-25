<?php
/**
 * Vendor post type
 *
 * @package     AffiliatePromotions\Vendors\PostType
 * @since       1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/*
 * Register Custom Post Type
 */
function affpromos_register_vendor_post_type() {

    $labels = array(
        'name'                  => _x( 'Vendors', 'Post Type General Name', 'affiliate-promotions' ),
        'singular_name'         => _x( 'Vendor', 'Post Type Singular Name', 'affiliate-promotions' ),
        'menu_name'             => __( 'Vendors', 'affiliate-promotions' ),
        'name_admin_bar'        => __( 'Vendor', 'affiliate-promotions' ),
        'archives'              => __( 'Vendor Archives', 'affiliate-promotions' ),
        'parent_item_colon'     => __( 'Parent Vendor:', 'affiliate-promotions' ),
        'all_items'             => __( 'Vendors', 'affiliate-promotions' ), // Submenu name
        'add_new_item'          => __( 'Add New Vendor', 'affiliate-promotions' ),
        'add_new'               => __( 'Add Vendor', 'affiliate-promotions' ),
        'new_item'              => __( 'New Vendor', 'affiliate-promotions' ),
        'edit_item'             => __( 'Edit Vendor', 'affiliate-promotions' ),
        'update_item'           => __( 'Update Vendor', 'affiliate-promotions' ),
        'view_item'             => __( 'View Vendor', 'affiliate-promotions' ),
        'search_items'          => __( 'Search Vendor', 'affiliate-promotions' ),
        'not_found'             => __( 'Not found', 'affiliate-promotions' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'affiliate-promotions' ),
        'featured_image'        => __( 'Featured Image', 'affiliate-promotions' ),
        'set_featured_image'    => __( 'Set featured image', 'affiliate-promotions' ),
        'remove_featured_image' => __( 'Remove featured image', 'affiliate-promotions' ),
        'use_featured_image'    => __( 'Use as featured image', 'affiliate-promotions' ),
        'insert_into_item'      => __( 'Insert into vendor', 'affiliate-promotions' ),
        'uploaded_to_this_item' => __( 'Uploaded to this vendor', 'affiliate-promotions' ),
        'items_list'            => __( 'Vendors list', 'affiliate-promotions' ),
        'items_list_navigation' => __( 'Vendors list navigation', 'affiliate-promotions' ),
        'filter_items_list'     => __( 'Filter vendors list', 'affiliate-promotions' ),
    );
    $rewrite = array(
        'slug'                  => 'vendor',
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => __( 'Vendor', 'affiliate-promotions' ),
        'description'           => __( 'Vendors', 'affiliate-promotions' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'page-attributes', ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => 'edit.php?post_type=affpromos_promotion',
        'menu_position'         => 25,
        'menu_icon'             => false,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => 'vendors',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => $rewrite,
        'capability_type'       => 'page',
    );
    register_post_type( 'affpromos_vendor', $args );

}
add_action( 'init', 'affpromos_register_vendor_post_type', 0 );