<?php
declare(strict_types=1);

add_action('init', function () {
    register_post_type('socials', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Socials'),
            'edit_item' => __('Edit Socials'),
            'name' => __('Socials'),
            'search_items' => __('Search Socials'),
            'singular_name' => __('Socials'),
        ],
        'menu_position' => 30,
        'public' => true,
    ]);
});
