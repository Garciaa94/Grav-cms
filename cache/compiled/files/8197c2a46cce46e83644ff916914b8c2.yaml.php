<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/config/themes/learn2-git-sync.yaml',
    'modified' => 1561702222,
    'data' => [
        'enabled' => true,
        'top_level_version' => false,
        'github' => [
            'position' => 'top',
            'icon' => 'Adrian Garcia'
        ],
        'default_taxonomy_category' => 'docs',
        'style' => 'default',
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user/themes/learn2-git-sync',
                            1 => 'user/themes/learn2'
                        ]
                    ]
                ]
            ]
        ],
        'enable_doc_versioning' => false,
        'hide_site_title' => false
    ]
];
