<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/config/themes/bootstrap-blog.yaml',
    'modified' => 1561702868,
    'data' => [
        'enabled' => true,
        'cdn_enabled' => false,
        'back_to_top_button' => false,
        'fluid_container' => false,
        'favicon' => [
            'user/themes/quark/images/logo.png' => [
                'name' => 'logo.png',
                'type' => 'image/png',
                'size' => 6779,
                'path' => 'user/themes/quark/images/logo.png'
            ]
        ],
        'navbar' => [
            'image' => [
                'user/themes/quark/images/logo.png' => [
                    'name' => 'logo.png',
                    'type' => 'image/png',
                    'size' => 6779,
                    'path' => 'user/themes/quark/images/logo.png'
                ]
            ],
            'icon' => 'AdrianBlog',
            'style' => 'light',
            'override_page_style' => false,
            'dropdown' => true,
            'sticky' => false,
            'display_site_name' => false
        ],
        'sidebar' => [
            'enabled' => false,
            'align' => 'left',
            'twitter' => [
                'enabled' => false,
                'user' => 'garciaa94',
                'height' => 600,
                'theme' => 'dark'
            ],
            'about' => [
                'enabled' => false,
                'title' => 'About me',
                'content' => 'Some text about you...',
                'page' => '/home'
            ]
        ],
        'item' => [
            'featured_image' => '0',
            'show_prev_next' => false,
            'related_pages' => true,
            'category' => 'category',
            'tag' => 'tag'
        ],
        'comments' => [
            'enabled' => false
        ],
        'footer' => [
            'style' => 'dark',
            'text' => '<a href="http://facebook.com/garciaa94">Adrian Garcia</a>'
        ],
        'simplesearch' => [
            'layout' => 'boxed'
        ]
    ]
];
