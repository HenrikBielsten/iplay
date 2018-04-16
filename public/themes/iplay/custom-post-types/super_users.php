<?php
declare(strict_types=1);

add_action('init', function () {
    register_post_type('super_users', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Super User'),
            'edit_item' => __('Edit Super User'),
            'name' => __('Super User'),
            'search_items' => __('Search Super User'),
            'singular_name' => __('Super User'),
        ],
        'menu_icon' => 'dashicons-businessman',
        'menu_position' => 20,
        'public' => true,
    ]);
});
