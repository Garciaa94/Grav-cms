<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/config/site.yaml',
    'modified' => 1561707220,
    'data' => [
        'title' => 'GarciaBlog',
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
            'description' => 'Estudio y Desarrollo practico de la materia Graficacion y Animacion'
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
