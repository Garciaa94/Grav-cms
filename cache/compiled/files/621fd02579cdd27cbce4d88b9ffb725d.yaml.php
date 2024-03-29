<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/themes/bootstrap-blog/blueprints.yaml',
    'modified' => 1561697626,
    'data' => [
        'name' => 'Bootstrap Blog',
        'version' => '1.3.1',
        'description' => 'Template built in default Bootstrap 4 framework',
        'icon' => 'bold',
        'author' => [
            'name' => 'Ayoze Hernandez Diaz',
            'email' => 'ayoze.dev@gmail.com',
            'url' => 'https://ayozehd.com'
        ],
        'homepage' => 'https://github.com/ayozehd/grav-theme-bootstrap-blog',
        'demo' => 'https://bootstrap-blog.ayozehd.com',
        'keywords' => 'theme, bootstrap, blog, styles, simple, flat, fluid, modular, multilanguage, carousel, layouts',
        'bugs' => 'https://github.com/ayozehd/grav-theme-bootstrap-blog/issues',
        'readme' => 'https://github.com/ayozehd/grav-theme-bootstrap-blog/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6'
            ]
        ],
        'form' => [
            'fields' => [
                'cdn_enabled' => [
                    'type' => 'toggle',
                    'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.CDN',
                    'help' => 'BOOTSTRAP_BLOG.ADMIN.THEME.CDN_HELP',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'back_to_top_button' => [
                    'type' => 'toggle',
                    'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.BACK_TO_TOP_BUTTON',
                    'help' => 'BOOTSTRAP_BLOG.ADMIN.THEME.BACK_TO_TOP_BUTTON_HELP',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'fluid_container' => [
                    'type' => 'toggle',
                    'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.FLUID_CONTAINER',
                    'help' => 'BOOTSTRAP_BLOG.ADMIN.THEME.FLUID_CONTAINER_HELP',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'favicon' => [
                    'type' => 'file',
                    'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.FAVICON',
                    'help' => 'BOOTSTRAP_BLOG.ADMIN.THEME.FAVICON_HELP',
                    'destination' => 'theme@:/images',
                    'multiple' => false,
                    'avoid_overwriting' => false,
                    'random_name' => false,
                    'toggleable' => true,
                    'filesize' => 3,
                    'accept' => [
                        0 => 'image/png',
                        1 => '.ico'
                    ]
                ],
                'navbar' => [
                    'type' => 'section',
                    'title' => 'BOOTSTRAP_BLOG.ADMIN.THEME.NAVBAR',
                    'underline' => true,
                    'fields' => [
                        'navbar.dropdown' => [
                            'type' => 'toggle',
                            'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.DROPDOWN',
                            'help' => 'BOOTSTRAP_BLOG.ADMIN.THEME.DROPDOWN_HELP',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'navbar.sticky' => [
                            'type' => 'toggle',
                            'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.NAVBAR_STICKY',
                            'help' => 'BOOTSTRAP_BLOG.ADMIN.THEME.NAVBAR_STICKY_HELP',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'navbar.display_site_name' => [
                            'type' => 'toggle',
                            'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.DISPLAY_SITE_NAME',
                            'help' => 'BOOTSTRAP_BLOG.ADMIN.THEME.DISPLAY_SITE_NAME_HELP',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'navbar.image' => [
                            'type' => 'file',
                            'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.BRAND_LOGO_IMAGE',
                            'help' => 'BOOTSTRAP_BLOG.ADMIN.THEME.BRAND_LOGO_IMAGE_HELP',
                            'destination' => 'theme@:/images',
                            'multiple' => false,
                            'avoid_overwriting' => false,
                            'random_name' => false,
                            'toggleable' => true,
                            'filesize' => 3,
                            'accept' => [
                                0 => 'image/*'
                            ]
                        ],
                        'navbar.icon' => [
                            'type' => 'text',
                            'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.BRAND_ICON',
                            'help' => 'BOOTSTRAP_BLOG.ADMIN.ICON_HELP',
                            'description' => 'BOOTSTRAP_BLOG.ADMIN.FONTAWESOME_5_ICONS',
                            'toggleable' => true,
                            'validate' => [
                                'type' => 'text'
                            ]
                        ],
                        'navbar.override_page_style' => [
                            'type' => 'toggle',
                            'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.OVERRIDE_PAGE_STYLE',
                            'help' => 'BOOTSTRAP_BLOG.ADMIN.THEME.OVERRIDE_PAGE_STYLE_HELP',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'navbar.style' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.NAVBAR_STYLE',
                            'help' => 'BOOTSTRAP_BLOG.ADMIN.STYLE_HELP',
                            'description' => 'BOOTSTRAP_BLOG.ADMIN.STYLE_DESCRIPTION',
                            'default' => 'light',
                            'options' => [
                                'dark' => 'Dark',
                                'light' => 'Light',
                                'primary' => 'Primary',
                                'secondary' => 'Secondary',
                                'success' => 'Success',
                                'warning' => 'Warning',
                                'info' => 'Info',
                                'danger' => 'Danger',
                                'blue' => 'Blue',
                                'orange' => 'Orange',
                                'red' => 'Red',
                                'indigo' => 'Indigo',
                                'pink' => 'Pink',
                                'purple' => 'Purple',
                                'teal' => 'Teal',
                                'cyan' => 'Cyan'
                            ]
                        ]
                    ]
                ],
                'item' => [
                    'type' => 'section',
                    'title' => 'BOOTSTRAP_BLOG.ADMIN.THEME.ITEMS',
                    'underline' => true,
                    'fields' => [
                        'item.featured_image' => [
                            'type' => 'toggle',
                            'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.FEATURED_IMAGE',
                            'help' => 'BOOTSTRAP_BLOG.ADMIN.THEME.FEATURED_IMAGE_HELP',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ]
                        ],
                        'item.show_prev_next' => [
                            'type' => 'toggle',
                            'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.SHOW_PREV_NEXT_BUTTONS',
                            'help' => 'BOOTSTRAP_BLOG.ADMIN.THEME.SHOW_PREV_NEXT_BUTTONS_HELP',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'simplesearch' => [
                            'type' => 'conditional',
                            'condition' => 'config.plugins.relatedpages.enabled',
                            'fields' => [
                                'item.related_pages' => [
                                    'type' => 'toggle',
                                    'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.RELATED_PAGES_BOTTOM',
                                    'help' => 'BOOTSTRAP_BLOG.ADMIN.THEME.RELATED_PAGES_BOTTOM_HELP',
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
                        'comments.enabled' => [
                            'type' => 'toggle',
                            'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.ENABLE_COMMENTS',
                            'help' => 'BOOTSTRAP_BLOG.ADMIN.THEME.ENABLE_COMMENTS_HELP',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'comments.disqus_shortname' => [
                            'type' => 'text',
                            'size' => 'medium',
                            'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.DISQUS_SHORTNAME',
                            'help' => 'BOOTSTRAP_BLOG.ADMIN.THEME.DISQUS_SHORTNAME_HELP',
                            'description' => 'BOOTSTRAP_BLOG.ADMIN.THEME.DISQUS_SHORTNAME_DESCRIPTION'
                        ]
                    ]
                ],
                'simplesearch' => [
                    'type' => 'conditional',
                    'condition' => 'config.plugins.simplesearch.enabled',
                    'fields' => [
                        'simplesearch.section' => [
                            'type' => 'section',
                            'title' => 'Search',
                            'underline' => true,
                            'fields' => [
                                'simplesearch.layout' => [
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
                ],
                'sidebar' => [
                    'type' => 'section',
                    'title' => 'BOOTSTRAP_BLOG.ADMIN.THEME.SIDEBAR',
                    'underline' => true,
                    'fields' => [
                        'sidebar.enabled' => [
                            'type' => 'toggle',
                            'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.ENABLE_SIDEBAR',
                            'help' => 'BOOTSTRAP_BLOG.ADMIN.THEME.ENABLE_SIDEBAR_HELP',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'sidebar.align' => [
                            'type' => 'select',
                            'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.SIDEBAR_ALIGN',
                            'size' => 'medium',
                            'options' => [
                                'left' => 'BOOTSTRAP_BLOG.ADMIN.LEFT',
                                'right' => 'BOOTSTRAP_BLOG.ADMIN.RIGHT'
                            ],
                            'validate' => [
                                'pattern' => '(left|right)'
                            ]
                        ],
                        'sidebar_widgets' => [
                            'type' => 'columns',
                            'fields' => [
                                'sidebar_column1' => [
                                    'type' => 'column',
                                    'fields' => [
                                        'twitter' => [
                                            'type' => 'fieldset',
                                            'title' => 'BOOTSTRAP_BLOG.ADMIN.THEME.TWITTER_TIMELINE',
                                            'icon' => 'twitter',
                                            'collapsible' => true,
                                            'collapsed' => false,
                                            'fields' => [
                                                'sidebar.twitter.enabled' => [
                                                    'type' => 'toggle',
                                                    'highlight' => 1,
                                                    'default' => 0,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ],
                                                'sidebar.twitter.user' => [
                                                    'type' => 'text',
                                                    'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.TWITTER_USERNAME',
                                                    'help' => 'BOOTSTRAP_BLOG.ADMIN.THEME.TWITTER_USERNAME_HELP'
                                                ],
                                                'sidebar.twitter.theme' => [
                                                    'type' => 'select',
                                                    'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.TWITTER_THEME',
                                                    'size' => 'medium',
                                                    'default' => 'light',
                                                    'options' => [
                                                        'light' => 'BOOTSTRAP_BLOG.ADMIN.BOOTSTRAP_STYLES.LIGHT',
                                                        'dark' => 'BOOTSTRAP_BLOG.ADMIN.BOOTSTRAP_STYLES.DARK'
                                                    ],
                                                    'validate' => [
                                                        'pattern' => '(light|dark)'
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'sidebar_column2' => [
                                    'type' => 'column',
                                    'fields' => [
                                        'about' => [
                                            'type' => 'fieldset',
                                            'title' => 'BOOTSTRAP_BLOG.ADMIN.THEME.ABOUT_ME',
                                            'icon' => 'user-circle',
                                            'collapsible' => true,
                                            'collapsed' => false,
                                            'fields' => [
                                                'sidebar.about.enabled' => [
                                                    'type' => 'toggle',
                                                    'highlight' => 1,
                                                    'default' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ],
                                                'sidebar.about.title' => [
                                                    'type' => 'text',
                                                    'label' => 'BOOTSTRAP_BLOG.ADMIN.TITLE'
                                                ],
                                                'sidebar.about.content' => [
                                                    'type' => 'textarea',
                                                    'label' => 'BOOTSTRAP_BLOG.ADMIN.TEXT',
                                                    'help' => 'BOOTSTRAP_BLOG.ADMIN.ADMIT_HTML_CONTENT',
                                                    'validate' => [
                                                        'type' => 'text'
                                                    ]
                                                ],
                                                'sidebar.about.page' => [
                                                    'type' => 'pages',
                                                    'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.ABOUT_PAGE_CONTENT',
                                                    'help' => 'BOOTSTRAP_BLOG.ADMIN.THEME.ABOUT_PAGE_CONTENT_HELP',
                                                    'description' => 'BOOTSTRAP_BLOG.ADMIN.THEME.ABOUT_PAGE_CONTENT_DESCRIPTION',
                                                    'toggleable' => true,
                                                    'show_modular' => false
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'footer' => [
                    'type' => 'section',
                    'title' => 'BOOTSTRAP_BLOG.ADMIN.THEME.FOOTER',
                    'underline' => true,
                    'fields' => [
                        'footer.style' => [
                            'type' => 'select',
                            'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.FOOTER_STYLE',
                            'help' => 'BOOTSTRAP_BLOG.ADMIN.STYLE_HELP',
                            'size' => 'medium',
                            'default' => 'dark',
                            'options' => [
                                'dark' => 'Dark',
                                'light' => 'Light',
                                'primary' => 'Primary',
                                'secondary' => 'Secondary',
                                'success' => 'Success',
                                'warning' => 'Warning',
                                'info' => 'Info',
                                'danger' => 'Danger',
                                'blue' => 'Blue',
                                'orange' => 'Orange',
                                'red' => 'Red',
                                'indigo' => 'Indigo',
                                'pink' => 'Pink',
                                'purple' => 'Purple',
                                'teal' => 'Teal',
                                'cyan' => 'Cyan'
                            ]
                        ],
                        'footer.text' => [
                            'type' => 'textarea',
                            'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.FOOTER_TEXT',
                            'help' => 'BOOTSTRAP_BLOG.ADMIN.THEME.FOOTER_TEXT_HELP',
                            'description' => 'BOOTSTRAP_BLOG.ADMIN.ADMIT_HTML_CONTENT'
                        ],
                        'footer.legal' => [
                            'type' => 'text',
                            'label' => 'BOOTSTRAP_BLOG.ADMIN.THEME.FOOTER_LEGAL_TEXT',
                            'help' => 'BOOTSTRAP_BLOG.ADMIN.THEME.FOOTER_LEGAL_TEXT_HELP',
                            'placeholder' => 'BOOTSTRAP_BLOG.ADMIN.THEME.FOOTER_LEGAL_TEXT_PLACEHOLDER'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
