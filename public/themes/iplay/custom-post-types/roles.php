<?php
declare(strict_types=1);

add_action('init', function () {
    register_post_type('roles', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add Roles'),
            'edit_item' => __('Edit Roles'),
            'name' => __('Roles'),
            'search_items' => __('Search Roles'),
            'singular_name' => __('Roles'),
        ],
        'menu_position' => 30,
        'public' => true,
    ]);
});
