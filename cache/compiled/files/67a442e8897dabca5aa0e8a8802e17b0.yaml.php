<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/plugins/facebook/blueprints.yaml',
    'modified' => 1561613472,
    'data' => [
        'name' => 'Facebook',
        'version' => '1.7.1',
        'description' => '**Facebook** is a plugin that embeds Facebook page content, album or events into your Grav website.',
        'icon' => 'facebook',
        'author' => [
            'name' => 'Mika Hänninen',
            'email' => 'mika.hanninen@gmail.com'
        ],
        'homepage' => 'https://github.com/mikahanninen/grav-plugin-facebook',
        'keywords' => 'facebook',
        'bugs' => 'https://github.com/mikahanninen/grav-plugin-facebook/issues',
        'docs' => 'https://github.com/mikahanninen/grav-plugin-facebook/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'Basics' => [
                    'type' => 'section',
                    'title' => 'Basics',
                    'underline' => false
                ],
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'PostSettings' => [
                    'type' => 'section',
                    'title' => 'Post settings',
                    'underline' => true
                ],
                'facebook_page_settings.section_title' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'Title for Posts',
                    'help' => 'Title for section of Facebook Posts',
                    'placeholder' => 'title',
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'facebook_page_settings.page_name' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'Posts page name',
                    'help' => 'Facebook page name whose posts will be shown. Used in a link.',
                    'placeholder' => 'page name',
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'facebook_page_settings.page_id' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Posts page ID',
                    'help' => 'Facebook page id whose POSTS will be shown',
                    'placeholder' => 'page id',
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'facebook_page_settings.date_format' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Post date format',
                    'help' => 'Date format for Facebook post',
                    'placeholder' => 'date format',
                    'default' => 'd.m.Y \\k\\l\\o H:i',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'facebook_page_settings.count' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Amount of posts to show',
                    'placeholder' => 'Defaults to 7',
                    'default' => 7,
                    'validate' => [
                        'type' => 'number',
                        'min' => 1,
                        'max' => 65535
                    ]
                ],
                'facebook_page_settings.filter_by_tags' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'Tag filter',
                    'help' => 'Tag(s) to filter posts with',
                    'placeholder' => 'tag(s)',
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'EventSettings' => [
                    'type' => 'section',
                    'title' => 'Event settings',
                    'underline' => true
                ],
                'facebook_event_settings.section_title' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'Title for Events',
                    'help' => 'Title for section of Facebook Events',
                    'placeholder' => 'title',
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'facebook_event_settings.show_cover' => [
                    'type' => 'toggle',
                    'label' => 'Show Events Cover image',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'facebook_event_settings.page_name' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'Events page name',
                    'help' => 'Facebook page name whose events will be shown. Used in a link.',
                    'placeholder' => 'page name',
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'facebook_event_settings.events_page_id' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Events page ID',
                    'help' => 'Facebook page id whose EVENTS will be shown. If empty, shows events for same page as posts.',
                    'placeholder' => 'events page id',
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'facebook_event_settings.count' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Amount of events to show',
                    'placeholder' => 'Defaults to 7',
                    'default' => 7,
                    'validate' => [
                        'type' => 'number',
                        'min' => 1,
                        'max' => 65535
                    ]
                ],
                'AlbumSettings' => [
                    'type' => 'section',
                    'title' => 'Album settings',
                    'underline' => true
                ],
                'facebook_album_settings.use_unitegallery' => [
                    'type' => 'toggle',
                    'label' => 'Use Unitegallery for Albums',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'facebook_album_settings.album_page_id' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Album page ID',
                    'help' => 'Facebook page id whose ALBUM will be shown. If empty, shows album for same page as posts.',
                    'placeholder' => 'album page id',
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'facebook_album_settings.album_name' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'Album name',
                    'help' => 'Album name whose photos will be shown.',
                    'placeholder' => 'album name',
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'facebook_album_settings.unitegallery_theme' => [
                    'type' => 'select',
                    'label' => 'Unitegallery Theme',
                    'size' => 'small',
                    'default' => 'default',
                    'options' => [
                        'default' => 'default',
                        'compact' => 'compact',
                        'grid' => 'grid',
                        'slider' => 'slider',
                        'video' => 'video'
                    ]
                ],
                'CommonSettings' => [
                    'type' => 'section',
                    'title' => 'Facebook API settings',
                    'underline' => true
                ],
                'facebook_common_settings.application_id' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'Application ID',
                    'help' => 'Facebook API application id',
                    'placeholder' => 'application id',
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'facebook_common_settings.application_secret' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'Application secret',
                    'help' => 'Facebook API application secret',
                    'placeholder' => 'application secret',
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ]
            ]
        ]
    ]
];
