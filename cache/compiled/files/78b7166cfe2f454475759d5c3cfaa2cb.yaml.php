<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/themes/bootstrap-blog/blueprints/blog.yaml',
    'modified' => 1561697626,
    'data' => [
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'bootstrap-blog' => [
                            'type' => 'tab',
                            'title' => 'BOOTSTRAP_BLOG.ADMIN.BLOG',
                            'fields' => [
                                'is_sidebar_enabled' => [
                                    'type' => 'conditional',
                                    'condition' => 'config.themes[\'bootstrap-blog\'].sidebar.enabled',
                                    'fields' => [
                                        'header.sidebar.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.SIDEBAR',
                                            'help' => 'BOOTSTRAP_BLOG.ADMIN.ITEM.ITEM_SIDEBAR_HELP',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ]
                                    ]
                                ],
                                'header.layout' => [
                                    'type' => 'select',
                                    'label' => 'BOOTSTRAP_BLOG.ADMIN.MODULAR.ITEMS_LAYOUT',
                                    'help' => 'BOOTSTRAP_BLOG.ADMIN.MODULAR.ITEMS_LAYOUT_HELP',
                                    'size' => 'medium',
                                    'default' => 'boxed',
                                    'options' => [
                                        'boxed' => 'Boxed',
                                        'masonry' => 'Masonry',
                                        'cards' => 'Cards'
                                    ],
                                    'validate' => [
                                        'pattern' => '(boxed|masonry|cards)'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
