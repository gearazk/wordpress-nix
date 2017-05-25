<?php
/**
 * Offer post type
 *
 * @package     AffiliatePromotions\Offers\PostType
 * @since       1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/*
 * Register Custom Post Type
 */
function affpromos_register_offer_post_type() {

    $labels = array(
        'name'                  => _x( 'Offers', 'Post Type General Name', 'affiliate-promotions' ),
        'singular_name'         => _x( 'Offer', 'Post Type Singular Name', 'affiliate-promotions' ),
        'menu_name'             => __( 'Offers', 'affiliate-promotions' ),
        'name_admin_bar'        => __( 'Offer', 'affiliate-promotions' ),
        'archives'              => __( 'Offer Archives', 'affiliate-promotions' ),
        'parent_item_colon'     => __( 'Parent Offer:', 'affiliate-promotions' ),
        'all_items'             => __( 'Offers', 'affiliate-promotions' ), // Submenu name
        'add_new_item'          => __( 'Add New Offer', 'affiliate-promotions' ),
        'add_new'               => __( 'Add Offer', 'affiliate-promotions' ),
        'new_item'              => __( 'New Offer', 'affiliate-promotions' ),
        'edit_item'             => __( 'Edit Offer', 'affiliate-promotions' ),
        'update_item'           => __( 'Update Offer', 'affiliate-promotions' ),
        'view_item'             => __( 'View Offer', 'affiliate-promotions' ),
        'search_items'          => __( 'Search Offer', 'affiliate-promotions' ),
        'not_found'             => __( 'Not found', 'affiliate-promotions' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'affiliate-promotions' ),
        'featured_image'        => __( 'Featured Image', 'affiliate-promotions' ),
        'set_featured_image'    => __( 'Set featured image', 'affiliate-promotions' ),
        'remove_featured_image' => __( 'Remove featured image', 'affiliate-promotions' ),
        'use_featured_image'    => __( 'Use as featured image', 'affiliate-promotions' ),
        'insert_into_item'      => __( 'Insert into offer', 'affiliate-promotions' ),
        'uploaded_to_this_item' => __( 'Uploaded to this offer', 'affiliate-promotions' ),
        'items_list'            => __( 'Offers list', 'affiliate-promotions' ),
        'items_list_navigation' => __( 'Offers list navigation', 'affiliate-promotions' ),
        'filter_items_list'     => __( 'Filter offers list', 'affiliate-promotions' ),
    );
    $rewrite = array(
        'slug'                  => 'offer',
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => __( 'Offer', 'affiliate-promotions' ),
        'description'           => __( 'Offers', 'affiliate-promotions' ),
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
        'has_archive'           => 'offers',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => $rewrite,
        'capability_type'       => 'page',
    );
    register_post_type( 'affpromos_offer', $args );

}
add_action( 'init', 'affpromos_register_offer_post_type', 0 );