<?php
/**
 * Promotion post type
 *
 * @package     AffiliatePromotions\Promotions\PostType
 * @since       1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/*
 * egister Custom Post Type
 */
function affpromos_register_promotion_post_type() {

    $labels = array(
        'name'                  => _x( 'Promotions', 'Post Type General Name', 'affiliate-promotions' ),
        'singular_name'         => _x( 'Promotion', 'Post Type Singular Name', 'affiliate-promotions' ),
        'menu_name'             => __( 'Promotions', 'affiliate-promotions' ),
        'name_admin_bar'        => __( 'Promotion', 'affiliate-promotions' ),
        'archives'              => __( 'Promotion Archives', 'affiliate-promotions' ),
        'parent_item_colon'     => __( 'Parent Promotion:', 'affiliate-promotions' ),
        'all_items'             => __( 'All Promotions', 'affiliate-promotions' ),
        'add_new_item'          => __( 'Add New Promotion', 'affiliate-promotions' ),
        'add_new'               => __( 'Add Promotion', 'affiliate-promotions' ),
        'new_item'              => __( 'New Promotion', 'affiliate-promotions' ),
        'edit_item'             => __( 'Edit Promotion', 'affiliate-promotions' ),
        'update_item'           => __( 'Update Promotion', 'affiliate-promotions' ),
        'view_item'             => __( 'View Promotion', 'affiliate-promotions' ),
        'search_items'          => __( 'Search Promotion', 'affiliate-promotions' ),
        'not_found'             => __( 'Not found', 'affiliate-promotions' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'affiliate-promotions' ),
        'featured_image'        => __( 'Featured Image', 'affiliate-promotions' ),
        'set_featured_image'    => __( 'Set featured image', 'affiliate-promotions' ),
        'remove_featured_image' => __( 'Remove featured image', 'affiliate-promotions' ),
        'use_featured_image'    => __( 'Use as featured image', 'affiliate-promotions' ),
        'insert_into_item'      => __( 'Insert into promotion', 'affiliate-promotions' ),
        'uploaded_to_this_item' => __( 'Uploaded to this promotion', 'affiliate-promotions' ),
        'items_list'            => __( 'Promotions list', 'affiliate-promotions' ),
        'items_list_navigation' => __( 'Promotions list navigation', 'affiliate-promotions' ),
        'filter_items_list'     => __( 'Filter promotions list', 'affiliate-promotions' ),
    );
    $rewrite = array(
        'slug'                  => 'promotion',
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => __( 'Promotion', 'affiliate-promotions' ),
        'description'           => __( 'Promotions', 'affiliate-promotions' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'page-attributes', ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 25,
        'menu_icon'             => 'dashicons-tickets-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => 'promotions',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => $rewrite,
        'capability_type'       => 'page',
    );
    register_post_type( 'affpromos_promotion', $args );

}
add_action( 'init', 'affpromos_register_promotion_post_type', 0 );

