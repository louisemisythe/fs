<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Volumes/Data/mywiki/htdocs/fs/user/plugins/gdprprivacysetup/blueprints.yaml',
    'modified' => 1536292864,
    'data' => [
        'name' => 'GDPR Privacy Setup',
        'version' => '0.1.0',
        'description' => 'Show privacy information popup and manage CSP (Content Security Policy) based on visitor privacy consents',
        'icon' => 'shield',
        'author' => [
            'name' => 'Krzysztof Gał',
            'email' => 'dev@krzysztofgal.pl',
            'url' => 'http://krzysztofgal.pl'
        ],
        'homepage' => 'https://github.com/krzysztofgal/GravGdprPrivacySetupPlugin',
        'bugs' => 'https://github.com/krzysztofgal/GravGdprPrivacySetupPlugin/issues',
        'keywords' => 'GDPR, CSP, Privacy, Popup',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '~1.5'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'pluginTab' => [
                            'type' => 'tab',
                            'title' => 'Plugin',
                            'fields' => [
                                'enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Plugin Enabled',
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
                                'privacy_page_route' => [
                                    'type' => 'text',
                                    'label' => 'Url to site policy page',
                                    'help' => 'If page not exists, then plugin Privacy Information field will be used'
                                ],
                                'modalWindowId' => [
                                    'type' => 'text',
                                    'label' => 'Modal popup content Id'
                                ],
                                'denyRedirectionTarget' => [
                                    'type' => 'text',
                                    'label' => 'Deny consent redirect url',
                                    'help' => 'Redirect is performed to given url if there is no referrer'
                                ],
                                'inputPrefix' => [
                                    'type' => 'text',
                                    'label' => 'Input prefix',
                                    'help' => 'Only inputs with this prefix will be processed'
                                ],
                                'privacySettingsBtnClass' => [
                                    'type' => 'text',
                                    'label' => 'Button Class to open popup',
                                    'help' => 'On any page You can put button or link to reopen popup'
                                ],
                                'deferInfoPopupTime' => [
                                    'type' => 'text',
                                    'label' => 'Time to show up Privacy Information Popup (seconds)',
                                    'help' => 'if greater than 0, then countdown will start on window scroll (on first site visit)',
                                    'size' => 'x-small',
                                    'validate' => [
                                        'type' => 'number',
                                        'min' => 0
                                    ]
                                ],
                                'consentExpiresTime' => [
                                    'type' => 'text',
                                    'label' => 'Consent Cookie expire time (days)',
                                    'size' => 'x-small',
                                    'help' => 'Cookie is refreshing by this time setting on every user page visit',
                                    'validate' => [
                                        'type' => 'number',
                                        'min' => 0,
                                        'max' => 365
                                    ]
                                ]
                            ]
                        ],
                        'contentTab' => [
                            'type' => 'tab',
                            'title' => 'Content',
                            'fields' => [
                                'consentButtonText' => [
                                    'type' => 'text',
                                    'label' => 'Button Text for privacy setup consent'
                                ],
                                'consentButtonClass' => [
                                    'type' => 'text',
                                    'label' => 'Consent button class'
                                ],
                                'denyButtonText' => [
                                    'type' => 'text',
                                    'label' => 'Button Text for deny any consent'
                                ],
                                'denyButtonClass' => [
                                    'type' => 'text',
                                    'label' => 'Deny button class'
                                ],
                                'privacyInfo' => [
                                    'type' => 'editor',
                                    'label' => 'Privacy Information'
                                ]
                            ]
                        ],
                        'cspTab' => [
                            'type' => 'tab',
                            'title' => 'CSP',
                            'fields' => [
                                'consentPolicyList' => [
                                    'type' => 'list',
                                    'label' => 'Consents and Content Seciurity Policy',
                                    'fields' => [
                                        '.consent' => [
                                            'type' => 'text',
                                            'label' => 'Consent Name',
                                            'required' => true
                                        ],
                                        '.policy' => [
                                            'type' => 'text',
                                            'label' => '(Optional) Url or CSP value',
                                            'help' => 'Url or valid meta CSP value to allow external resources on consent'
                                        ],
                                        '.default' => [
                                            'type' => 'toggle',
                                            'label' => 'Default Consent State',
                                            'help' => 'Consent state if visitor not give any consent yet',
                                            'default' => 0,
                                            'validate' => [
                                                'type' => 'bool'
                                            ],
                                            'options' => [
                                                1 => 'Enabled',
                                                0 => 'Disabled'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'whitelistTab' => [
                            'type' => 'tab',
                            'title' => 'Whitelist',
                            'fields' => [
                                'whitelistPages' => [
                                    'type' => 'pages',
                                    'label' => 'Whitelisted Pages',
                                    'help' => 'Select pages where popup won`t be shown',
                                    'show_modular' => false,
                                    'multiple' => true,
                                    'validate' => [
                                        'type' => 'array'
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
