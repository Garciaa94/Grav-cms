<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/config/site.yaml',
    'modified' => 1560320490,
    'data' => [
        'title' => 'Blog',
        'default_lang' => 'en ',
        'author' => [
            'name' => 'Adrian Garcia Bloggs',
            'email' => 'adrian1994215@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Materia Graficacion y animacion 6to Pucese'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
