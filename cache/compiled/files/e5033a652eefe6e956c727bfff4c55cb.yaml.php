<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Volumes/Data/mywiki/htdocs/fs/user/themes/woo/blueprints.yaml',
    'modified' => 1536292822,
    'data' => [
        'name' => 'FS',
        'version' => '1.2.0',
        'description' => '',
        'icon' => 'group',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-woo',
        'demo' => 'http://demo.getgrav.org/woo-skeleton',
        'keywords' => 'woo, theme, modern, fast, responsive, html5, css3',
        'bugs' => 'https://github.com/getgrav/grav-theme-woo/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
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
                'color' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Color',
                    'default' => 'blue',
                    'validate' => [
                        'type' => 'text'
                    ]
                ]
            ]
        ]
    ]
];
