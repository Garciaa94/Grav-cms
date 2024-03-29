<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/plugins/presentation/blueprints/slide.yaml',
    'modified' => 1561605429,
    'data' => [
        'title' => 'Presentation Slide Options',
        'extends@' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'fields' => [
                                'links' => [
                                    'type' => 'presentation_button_bar',
                                    'ordering@' => 'content',
                                    'fields' => [
                                        'view' => [
                                            'type' => 'presentation_dropdown',
                                            'ordering@' => 'links',
                                            'fields' => [
                                                'view' => [
                                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.LINKS.VIEW',
                                                    'mode' => 'view'
                                                ],
                                                'view_notes' => [
                                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.LINKS.VIEW_NOTES',
                                                    'mode' => 'view_notes'
                                                ]
                                            ]
                                        ],
                                        'speaker' => [
                                            'type' => 'presentation_dropdown',
                                            'ordering@' => 'view',
                                            'fields' => [
                                                'speaker' => [
                                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.LINKS.SPEAKER',
                                                    'mode' => 'admin'
                                                ],
                                                'speaker_notes' => [
                                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.LINKS.SPEAKER_NOTES',
                                                    'mode' => 'admin_notes'
                                                ]
                                            ]
                                        ],
                                        'print' => [
                                            'type' => 'presentation_dropdown',
                                            'ordering@' => 'speaker',
                                            'fields' => [
                                                'print' => [
                                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.LINKS.PRINT',
                                                    'mode' => 'print'
                                                ],
                                                'print_notes' => [
                                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.LINKS.PRINT_NOTES',
                                                    'mode' => 'print_notes'
                                                ],
                                                'print_styled' => [
                                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.LINKS.PRINT_STYLED',
                                                    'mode' => 'print_styled'
                                                ],
                                                'print_styled_notes' => [
                                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.LINKS.PRINT_STYLED_NOTES',
                                                    'mode' => 'print_styled_notes'
                                                ]
                                            ]
                                        ],
                                        'save' => [
                                            'type' => 'presentation_dropdown',
                                            'ordering@' => 'print',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SAVE.ASYNC.LABEL',
                                            'prefix' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SAVE.PREFIX'
                                        ]
                                    ]
                                ],
                                'textsize' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.TEXTSIZE.TITLE',
                                    'underline' => true,
                                    'fields' => [
                                        'header.textsize.scale' => [
                                            'type' => 'select',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.TEXTSIZE.SCALE.LABEL',
                                            'description' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.TEXTSIZE.SCALE.DESCRIPTION',
                                            'data-options@' => '\\Grav\\Plugin\\PresentationPlugin::getModularScaleBlueprintOptions'
                                        ],
                                        'header.textsize.modifier' => [
                                            'type' => 'number',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.TEXTSIZE.MODIFIER.LABEL',
                                            'description' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.TEXTSIZE.MODIFIER.DESCRIPTION',
                                            'default' => 1,
                                            'validate' => [
                                                'type' => 'int',
                                                'min' => 0,
                                                'max' => 100,
                                                'step' => 0.05
                                            ]
                                        ]
                                    ]
                                ],
                                'style' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.TITLE',
                                    'underline' => true,
                                    'fields' => [
                                        'header.style.header-font-family' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.HEADER.LABEL',
                                            'description' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.HEADER.DESCRIPTION'
                                        ],
                                        'header.style.header-color' => [
                                            'type' => 'colorpicker',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.HEADER_COLOR.LABEL',
                                            'description' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.HEADER_COLOR.DESCRIPTION'
                                        ],
                                        'header.style.block-font-family' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.BLOCK.LABEL',
                                            'description' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.BLOCK.DESCRIPTION'
                                        ],
                                        'header.style.block-color' => [
                                            'type' => 'colorpicker',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.BLOCK_COLOR.LABEL',
                                            'description' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.BLOCK_COLOR.DESCRIPTION'
                                        ],
                                        'header.style.background-color' => [
                                            'type' => 'colorpicker',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-COLOR.LABEL',
                                            'help' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-COLOR.HELP'
                                        ],
                                        'header.style.background-image' => [
                                            'type' => 'filepicker',
                                            'folder' => '@self',
                                            'preview_images' => true,
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-IMAGE.LABEL',
                                            'help' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-IMAGE.HELP',
                                            'accept' => [
                                                0 => '.png',
                                                1 => '.jpg',
                                                2 => '.gif',
                                                3 => 'image/*'
                                            ]
                                        ],
                                        'header.style.background-size' => [
                                            'type' => 'select',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-SIZE.LABEL',
                                            'help' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-SIZE.HELP',
                                            'options' => [
                                                '' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.NONE',
                                                'auto' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-SIZE.OPTIONS.AUTO',
                                                'cover' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-SIZE.OPTIONS.COVER',
                                                'contain' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-SIZE.OPTIONS.CONTAIN',
                                                'initial' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.INITIAL',
                                                'inherit' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.INHERIT'
                                            ]
                                        ],
                                        'header.style.background-repeat' => [
                                            'type' => 'select',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.LABEL',
                                            'help' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.HELP',
                                            'options' => [
                                                '' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.NONE',
                                                'no-repeat' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.OPTIONS.NO-REPEAT',
                                                'repeat' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.OPTIONS.REPEAT',
                                                'repeat-x' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.OPTIONS.REPEAT-X',
                                                'repeat-y' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.OPTIONS.REPEAT-Y',
                                                'space' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.OPTIONS.SPACE',
                                                'round' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.OPTIONS.ROUND',
                                                'initial' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.INITIAL',
                                                'inherit' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.INHERIT'
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
    ]
];
