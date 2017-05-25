<?php
/**
 * Type Taxonomy
 *
 * @package     AffiliatePromotions\Promotions\TypeTaxonomy
 * @since       1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/*
 * Register Custom Taxonomy
 */
function affpromos_register_promotion_type_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Types', 'Taxonomy General Name', 'affiliate-promotions' ),
        'singular_name'              => _x( 'Type', 'Taxonomy Singular Name', 'affiliate-promotions' ),
        'menu_name'                  => __( 'Types', 'affiliate-promotions' ),
        'all_items'                  => __( 'All Types', 'affiliate-promotions' ),
        'parent_item'                => __( 'Parent Type', 'affiliate-promotions' ),
        'parent_item_colon'          => __( 'Parent Type:', 'affiliate-promotions' ),
        'new_item_name'              => __( 'New Type Name', 'affiliate-promotions' ),
        'add_new_item'               => __( 'Add New Type', 'affiliate-promotions' ),
        'edit_item'                  => __( 'Edit Type', 'affiliate-promotions' ),
        'update_item'                => __( 'Update Type', 'affiliate-promotions' ),
        'view_item'                  => __( 'View Type', 'affiliate-promotions' ),
        'separate_items_with_commas' => __( 'Separate types with commas', 'affiliate-promotions' ),
        'add_or_remove_items'        => __( 'Add or remove types', 'affiliate-promotions' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'affiliate-promotions' ),
        'popular_items'              => __( 'Popular Types', 'affiliate-promotions' ),
        'search_items'               => __( 'Search Types', 'affiliate-promotions' ),
        'not_found'                  => __( 'Not Found', 'affiliate-promotions' ),
        'no_terms'                   => __( 'No types', 'affiliate-promotions' ),
        'items_list'                 => __( 'Types list', 'affiliate-promotions' ),
        'items_list_navigation'      => __( 'Types list navigation', 'affiliate-promotions' ),
    );
    $rewrite = array(
        'slug'                       => 'promotions/type',
        'with_front'                 => true,
        'hierarchical'               => true,
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => false,
        'rewrite'                    => $rewrite,
    );
    register_taxonomy( 'affpromos_promotion_type', array( 'affpromos_promotion' ), $args );

}
add_action( 'init', 'affpromos_register_promotion_type_taxonomy', 0 );