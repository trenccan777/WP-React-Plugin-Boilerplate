<?php
namespace Test_Plugin;

/**
 * File where we define CPT, Taxonomies etc.
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (!class_exists('\\Test_Plugin\\CPT')) {

    class CPT
    {

        /**
         * Initialize custom post type
         * @return void
         */
        public function init()
        {

            register_post_type('custom-posts', array(
                'labels' => array(
                    'name' => __('Custom posts', 'test-plugin'),
                    'singular_name' => __('Custom post', 'test-plugin'),
                    'all_items' => __('All custom posts', 'test-plugin'),
                    'new_item' => __('New posts', 'test-plugin'),
                    'add_new' => __('Add New', 'test-plugin'),
                    'add_new_item' => __('Add New custom Post', 'test-plugin'),
                    'edit_item' => __('Edit custom post', 'test-plugin'),
                    'view_item' => __('View custom post', 'test-plugin'),
                    'search_items' => __('Search custom posts', 'test-plugin'),
                    'not_found' => __('No custom posts found', 'test-plugin'),
                    'not_found_in_trash' => __('No custom posts found in trash', 'test-plugin'),
                    'parent_item_colon' => __('Parent custom posts', 'test-plugin'),
                    'menu_name' => __('Custom posts', 'test-plugin'),
                ),
                'public' => true,
                'hierarchical' => false,
                'show_ui' => true,
                'show_in_nav_menus' => true,
                'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
                'has_archive' => true,
                'rewrite' => true,
                'query_var' => true,
                'menu_icon' => 'dashicons-book-alt',
                'show_in_rest' => true,
                'rest_base' => 'custom-posts',
                'rest_controller_class' => 'WP_REST_Posts_Controller',
            ));

            register_taxonomy('breed', array('custom-posts'), array(
                'hierarchical' => true,
                'public' => true,
                'show_in_nav_menus' => true,
                'show_ui' => true,
                'show_admin_column' => false,
                'query_var' => true,
                'rewrite' => true,
                'capability_type' => 'post',
                'labels' => array(
                    'name' => __('Breed', 'test-plugin'),
                    'singular_name' => _x('Breed', 'taxonomy general name', 'test-plugin'),
                    'search_items' => __('Search Breed', 'test-plugin'),
                    'popular_items' => __('Popular Breed', 'test-plugin'),
                    'all_items' => __('All Breed', 'test-plugin'),
                    'parent_item' => __('Parent Breed', 'test-plugin'),
                    'parent_item_colon' => __('Parent Breed:', 'test-plugin'),
                    'edit_item' => __('Edit Breed', 'test-plugin'),
                    'update_item' => __('Update Breed', 'test-plugin'),
                    'add_new_item' => __('New Breed', 'test-plugin'),
                    'new_item_name' => __('New Breed', 'test-plugin'),
                    'separate_items_with_commas' => __('Separate Breed with commas', 'test-plugin'),
                    'add_or_remove_items' => __('Add or remove Breed', 'test-plugin'),
                    'choose_from_most_used' => __('Choose from the most used Breed', 'test-plugin'),
                    'not_found' => __('No Breed found.', 'test-plugin'),
                    'menu_name' => __('Breed', 'test-plugin'),
                ),
                'show_in_rest' => true,
             
                'rest_base' => 'breed',
                'rest_controller_class' => 'WP_REST_Terms_Controller',
            ));

            $this->register_sponsors();
        }

        /**
         * Registering the Sponsors Taxonomy.
         */
        public function register_sponsors()
        {
            $labels = array(
                'name' => _x('Sponsors', 'Taxonomy General Name', 'test-plugin'),
                'singular_name' => _x('Sponsor', 'Taxonomy Singular Name', 'test-plugin'),
                'menu_name' => __('Sponsors', 'test-plugin'),
                'all_items' => __('All Sponsors', 'test-plugin'),
                'parent_item' => __('Parent Sponsor', 'test-plugin'),
                'parent_item_colon' => __('Parent Sponsor:', 'test-plugin'),
                'new_item_name' => __('New Sponsor Name', 'test-plugin'),
                'add_new_item' => __('Add New Sponsor', 'test-plugin'),
                'edit_item' => __('Edit Sponsor', 'test-plugin'),
                'update_item' => __('Update Sponsor', 'test-plugin'),
                'view_item' => __('View Sponsor', 'test-plugin'),
                'separate_items_with_commas' => __('Separate Sponsors with commas', 'test-plugin'),
                'add_or_remove_items' => __('Add or remove Sponsors', 'test-plugin'),
                'choose_from_most_used' => __('Choose from the most used', 'test-plugin'),
                'popular_items' => __('Popular Sponsors', 'test-plugin'),
                'search_items' => __('Search Sponsors', 'test-plugin'),
                'not_found' => __('Not Found', 'test-plugin'),
                'no_terms' => __('No Sponsors', 'test-plugin'),
                'items_list' => __('Sponsors list', 'test-plugin'),
                'items_list_navigation' => __('Sponsors list navigation', 'test-plugin'),
            );
            $args = array(
                'labels' => $labels,
                'hierarchical' => true,
                'public' => true,
                'show_ui' => true,
                'show_admin_column' => true,
                'show_in_nav_menus' => true,
                'show_tagcloud' => true,
            );
            register_taxonomy('sponsors', array('custom-posts'), $args);
        }
    }
}
