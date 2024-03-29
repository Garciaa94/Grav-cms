<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/plugins/socialbuttons/blueprints.yaml',
    'modified' => 1561739199,
    'data' => [
        'name' => 'SocialButtons',
        'version' => '1.0.3',
        'description' => 'Porting of Ridiculously Responsive Social Sharing Buttons for Grav CMS',
        'icon' => 'share-alt',
        'author' => [
            'name' => 'Giansimon Diblas',
            'email' => 'info@diblas.net',
            'url' => 'http://diblas.net'
        ],
        'homepage' => 'https://github.com/giansi/grav-plugin-social-buttons',
        'demo' => 'https://github.com/giansi/grav-plugin-social-buttons',
        'keywords' => 'plugin, social, share, buttons',
        'bugs' => 'https://github.com/giansi/grav-plugin-social-buttons/issues',
        'license' => 'MIT',
        'form' => [
            'fields' => [
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
                'buttons.facebook.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Facebook button',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable or disable the facebook button'
                ],
                'buttons.facebook.label' => [
                    'type' => 'text',
                    'label' => 'Facebook button label',
                    'highlight' => 1,
                    'validate' => [
                        'type' => 'text'
                    ],
                    'help' => 'Enable or disable the facebook button'
                ],
                'buttons.twitter.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Twitter button',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable or disable the twitter button'
                ],
                'buttons.twitter.label' => [
                    'type' => 'text',
                    'label' => 'Twitter button label',
                    'highlight' => 1,
                    'validate' => [
                        'type' => 'text'
                    ],
                    'help' => 'Enable or disable the twitter button'
                ],
                'buttons.googleplus.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Google plus button',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable or disable the google plus button'
                ],
                'buttons.googleplus.label' => [
                    'type' => 'text',
                    'label' => 'Google plus button label',
                    'highlight' => 1,
                    'validate' => [
                        'type' => 'text'
                    ],
                    'help' => 'Enable or disable the google plus button'
                ],
                'buttons.linkedin.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Linkedin button',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable or disable the linkedin button'
                ],
                'buttons.linkedin.label' => [
                    'type' => 'text',
                    'label' => 'Linkedin button label',
                    'highlight' => 1,
                    'validate' => [
                        'type' => 'text'
                    ],
                    'help' => 'Enable or disable the linkedin button'
                ],
                'buttons.reddit.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Reddit button',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable or disable the reddit button'
                ],
                'buttons.reddit.label' => [
                    'type' => 'text',
                    'label' => 'Reddit button label',
                    'highlight' => 1,
                    'validate' => [
                        'type' => 'text'
                    ],
                    'help' => 'Enable or disable the reddit button'
                ],
                'buttons.youtube.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Youtube button',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable or disable the youtube button'
                ],
                'buttons.youtube.label' => [
                    'type' => 'text',
                    'label' => 'Youtube button label',
                    'highlight' => 1,
                    'validate' => [
                        'type' => 'text'
                    ],
                    'help' => 'Enable or disable the youtube button'
                ],
                'buttons.hackernews.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Hackernews button',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable or disable the hackernews button'
                ],
                'buttons.hackernews.label' => [
                    'type' => 'text',
                    'label' => 'Hackernews button label',
                    'highlight' => 1,
                    'validate' => [
                        'type' => 'text'
                    ],
                    'help' => 'Enable or disable the hackernews button'
                ],
                'buttons.pinterest.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Pinterest button',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable or disable the pinterest button'
                ],
                'buttons.pinterest.label' => [
                    'type' => 'text',
                    'label' => 'Pinterest button label',
                    'highlight' => 1,
                    'validate' => [
                        'type' => 'text'
                    ],
                    'help' => 'Enable or disable the pinterest button'
                ],
                'buttons.pocket.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Pocket button',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable or disable the pocket button'
                ],
                'buttons.pocket.label' => [
                    'type' => 'text',
                    'label' => 'Pocket button label',
                    'highlight' => 1,
                    'validate' => [
                        'type' => 'text'
                    ],
                    'help' => 'Enable or disable the pocket button'
                ],
                'buttons.tumblr.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Tumblr button',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable or disable the tumblr button'
                ],
                'buttons.tumblr.label' => [
                    'type' => 'text',
                    'label' => 'Tumblr button label',
                    'highlight' => 1,
                    'validate' => [
                        'type' => 'text'
                    ],
                    'help' => 'Enable or disable the tumblr button'
                ],
                'buttons.vk.enabled' => [
                    'type' => 'toggle',
                    'label' => 'VK button',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable or disable the vk button'
                ],
                'buttons.vk.label' => [
                    'type' => 'text',
                    'label' => 'VK button label',
                    'highlight' => 1,
                    'validate' => [
                        'type' => 'text'
                    ],
                    'help' => 'Enable or disable the vk button'
                ],
                'buttons.github.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Github button',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable or disable the github button'
                ],
                'buttons.github.label' => [
                    'type' => 'text',
                    'label' => 'Github button label',
                    'highlight' => 1,
                    'validate' => [
                        'type' => 'text'
                    ],
                    'help' => 'Enable or disable the github button'
                ],
                'buttons.email.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Email button',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable or disable the email button'
                ],
                'buttons.email.label' => [
                    'type' => 'text',
                    'label' => 'Email button label',
                    'highlight' => 1,
                    'validate' => [
                        'type' => 'text'
                    ],
                    'help' => 'Enable or disable the email button'
                ]
            ]
        ]
    ]
];
