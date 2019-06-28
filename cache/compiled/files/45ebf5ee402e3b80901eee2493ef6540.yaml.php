<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/plugins/presentation/presentation.yaml',
    'modified' => 1561605429,
    'data' => [
        'enabled' => true,
        'theme' => 'moon',
        'order' => [
            'by' => 'folder',
            'dir' => 'asc'
        ],
        'all_assets' => false,
        'theme_css' => true,
        'builtin_css' => true,
        'builtin_js' => true,
        'plugin_css' => true,
        'plugin_js' => true,
        'textsizing' => true,
        'sync' => 'none',
        'api_route' => 'presentationapi',
        'poll_timeout' => 2000,
        'poll_retry_limit' => 10,
        'token_auth' => false,
        'token' => 'Hd4HFdPvbpKzTqz',
        'admin_async_save' => false,
        'admin_async_save_typing' => false,
        'footer' => '',
        'transition' => true,
        'shortcodes' => true,
        'shortcode_classes' => 'presentation-iframe',
        'shortcode_parser' => 'RegularParser',
        'unwrap_images' => true,
        'content' => 'Content',
        'parser' => 'Parser',
        'transport' => 'Transport',
        'breakpoints' => [
            240 => '16',
            320 => '20',
            576 => '24',
            768 => '28',
            992 => '32',
            1200 => '36',
            1600 => '40'
        ],
        'options' => [
            'width' => '100%',
            'height' => '100%',
            'margin' => '0',
            'minScale' => '1',
            'maxScale' => '1',
            'transition' => 'fade',
            'controlsTutorial' => 'false',
            'history' => 'true',
            'display' => 'flex',
            'pdfSeparateFragments' => false
        ]
    ]
];
