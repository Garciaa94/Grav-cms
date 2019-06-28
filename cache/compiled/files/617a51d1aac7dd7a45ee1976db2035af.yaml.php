<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/themes/learn2-git-sync/blueprints/chapter.yaml',
    'modified' => 1561605434,
    'data' => [
        'title' => 'Chapter',
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
                                    'default' => '### Chapter Number

# Chapter Title

Chapter description.'
                                ]
                            ]
                        ],
                        'options' => [
                            'fields' => [
                                'header.taxonomy.category' => [
                                    'type' => 'hidden',
                                    'label' => 'Default Taxonomy Category',
                                    'data-default@' => '\\Grav\\Theme\\Learn2GitSync::getdefaulttaxonomycategory'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
