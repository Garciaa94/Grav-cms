<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/system/config/site.yaml',
    'modified' => 1560325211,
    'data' => [
        'title' => 'Adrian Garcia',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Adrian Garcia',
            'email' => 'adrian1994215@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Materia Grafica y Animacion'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ],
        'menu' => [
            0 => [
                'icon' => 'github',
                'url' => 'https://github.com/garciaa94'
            ],
            1 => [
                'icon' => 'twitter',
                'url' => 'https://twitter.com/adrian94garcia'
            ],
            2 => [
                'icon' => 'facebook',
                'url' => 'https://facebook.com/garciaa94'
            ]
        ]
    ]
];
