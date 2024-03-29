<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/plugins/highlight/blueprints.yaml',
    'modified' => 1561605427,
    'data' => [
        'name' => 'Highlight',
        'version' => '1.4.0',
        'description' => 'This plugin provides code highlighting functionality via the [Highlight.js](https://highlightjs.org/) jQuery plugin.',
        'icon' => 'code',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-highlight',
        'demo' => 'http://learn.getgrav.org',
        'keywords' => 'highlight, plugin, code',
        'bugs' => 'https://github.com/getgrav/grav-plugin-highlight/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
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
                'lines' => [
                    'type' => 'toggle',
                    'label' => 'Line Numbers',
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
                'theme' => [
                    'type' => 'select',
                    'label' => 'CSS Theme',
                    'default' => 'default',
                    'options' => [
                        'default' => 'Default',
                        'monokai' => 'Monokai',
                        'learn' => 'Grav Learn',
                        'railscasts' => 'Railscasts',
                        'arta' => 'Arta',
                        'ascetic' => 'Ascetic',
                        'brown-paper' => 'Brown Paper',
                        'atelier-cave.dark' => 'Atelier Cave Dark',
                        'atelier-cave.light' => 'Atelier Cave Light',
                        'atelier-dune.dark' => 'Atelier Dune Dark',
                        'atelier-dune.light' => 'Atelier Dune Light',
                        'atelier-estuary.dark' => 'Atelier Estuary Dark',
                        'atelier-estuary.light' => 'Atelier Estuary Light',
                        'atelier-forest.dark' => 'Atelier Forest Dark',
                        'atelier-forest.light' => 'Atelier Forest Light',
                        'atelier-heath.dark' => 'Atelier Heath Dark',
                        'atelier-heath.light' => 'Atelier Heath Light',
                        'atelier-lakeside.dark' => 'Atelier Lakeside Dark',
                        'atelier-lakeside.light' => 'Atelier Lakeside Light',
                        'atelier-plateau.dark' => 'Atelier Plateau Dark',
                        'atelier-plateau.light' => 'Atelier Plateau Light',
                        'atelier-savanna.dark' => 'Atelier Savanna Dark',
                        'atelier-savanna.light' => 'Atelier Savanna Light',
                        'atelier-seaside-dark' => 'Atelier Seaside Dark',
                        'atelier-seaside-light' => 'Atelier Seaside Light',
                        'atelier-sulphurpool.dark' => 'Atelier Sulphurpool Dark',
                        'atelier-sulphurpool.light' => 'Atelier Sulphurpool Light',
                        'atom-one-dark' => 'Atom One Dark',
                        'atom-one-light' => 'Atom One Light',
                        'codepen-embed' => 'Codepen Embed',
                        'color-brewer' => 'Color Brewer',
                        'darcula' => 'Darcula',
                        'dark' => 'Dark',
                        'dracula' => 'Dracula',
                        'docco' => 'Docco',
                        'far' => 'Far',
                        'foundation' => 'Foundation',
                        'github' => 'Github',
                        'googlecode' => 'GoogleCode',
                        'grayscale' => 'Grayscale',
                        'gruvbox-dark' => 'Gruvbox Dark',
                        'gruvbox-light' => 'Gruvbox Light',
                        'hopscotch' => 'Hopscotch',
                        'hybrid' => 'Hybrid',
                        'idea' => 'Idea',
                        'ir-black' => 'IR-Black',
                        'kimbie-dark' => 'Kimbie Dark',
                        'kimbie-light' => 'Kimbie Light',
                        'magula' => 'Magula',
                        'mono-blue' => 'Mono Blue',
                        'monokai-sublime' => 'Monokai Sublime',
                        'obsidian' => 'Obsidian',
                        'ocean' => 'Ocean',
                        'paraiso-dark' => 'Paraiso Dark',
                        'paraiso-light' => 'Paraiso Light',
                        'pojoaque' => 'Pojoaque',
                        'purebasic' => 'Purebasic',
                        'qtcreator-dark' => 'Qt Creator Dark',
                        'qtcreator-light' => 'Qt Creator Light',
                        'rainbow' => 'Rainbow',
                        'routeros' => 'Routeros',
                        'school-book' => 'School Book',
                        'solarized-dark' => 'Solarized Dark',
                        'solarized-light' => 'Solarized Light',
                        'sunburst' => 'Sunburst',
                        'tomorrow-night-blue' => 'Tomorrow Night Blue',
                        'tomorrow-night-bright' => 'Tomorrow Night Bright',
                        'tomorrow-night-eighties' => 'Tomorrow Night Eighties',
                        'tomorrow-night' => 'Tomorrow Night',
                        'tomorrow' => 'Tomorrow',
                        'vs' => 'VS',
                        'vs2015' => 'Visual Studio 2015',
                        'xcode' => 'XCode',
                        'xt256' => 'xt256',
                        'zenburn' => 'Zenburn'
                    ]
                ]
            ]
        ]
    ]
];
