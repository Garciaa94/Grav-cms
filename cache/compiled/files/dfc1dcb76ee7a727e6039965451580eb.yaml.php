<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/system/blueprints/pages/external.yaml',
    'modified' => 1561696789,
    'data' => [
        'title' => 'PLUGIN_ADMIN:EXTERNAL',
        'extends@' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.title' => [
                                    'type' => 'text',
                                    'autofocus' => true,
                                    'style' => 'horizontal',
                                    'label' => 'PLUGIN_ADMIN.TITLE'
                                ],
                                'content' => [
                                    'unset@' => true
                                ],
                                'header.media_order' => [
                                    'unset@' => true
                                ],
                                'header.external_url' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.EXTERNAL_URL',
                                    'placeholder' => 'https://getgrav.org',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ]
                            ]
                        ],
                        'options' => [
                            'fields' => [
                                'publishing' => [
                                    'fields' => [
                                        'header.date' => [
                                            'unset@' => true
                                        ],
                                        'header.metadata' => [
                                            'unset@' => true
                                        ]
                                    ]
                                ],
                                'taxonomies' => [
                                    'unset@' => true
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
