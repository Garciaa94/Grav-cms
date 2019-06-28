<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/themes/learn2-git-sync/blueprints/docs.yaml',
    'modified' => 1561605434,
    'data' => [
        'title' => 'Docs',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'fields' => [
                                'content' => [
                                    'markdown' => true,
                                    'default' => 'Your page content goes here.'
                                ]
                            ]
                        ],
                        'options' => [
                            'fields' => [
                                'taxonomies' => [
                                    'fields' => [
                                        'header.taxonomy' => [
                                            'unset@' => true
                                        ],
                                        'header.taxonomy.category' => [
                                            'type' => 'selectize',
                                            'label' => 'Category',
                                            'classes' => 'fancy',
                                            'data-default@' => '\\Grav\\Theme\\Learn2GitSync::getdefaulttaxonomycategory',
                                            'validate' => [
                                                'type' => 'commalist'
                                            ]
                                        ],
                                        'header.taxonomy.tag' => [
                                            'type' => 'selectize',
                                            'label' => 'Tag',
                                            'classes' => 'fancy',
                                            'validate' => [
                                                'type' => 'commalist'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'advanced' => [
                            'fields' => [
                                'overrides' => [
                                    'fields' => [
                                        'header.visible' => [
                                            'default' => 1
                                        ]
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
