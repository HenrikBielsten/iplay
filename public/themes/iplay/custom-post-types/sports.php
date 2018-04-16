<?php
declare(strict_types=1);

add_action('init', function () {
    register_post_type('sports', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add Sports'),
            'edit_item' => __('Edit Sports'),
            'name' => __('Sports'),
            'search_items' => __('Search Sports'),
            'singular_name' => __('Sports'),
        ],
        'menu_position' => 30,
        'public' => true,
    ]);
});
