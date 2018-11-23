<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Volumes/Data/mywiki/htdocs/fs/user/plugins/admin-power-tools/blueprints/child-pages.yaml',
    'modified' => 1535079711,
    'data' => [
        'name' => 'foo',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'advanced' => [
                            'type' => 'tab',
                            'fields' => [
                                'columns' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'column2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'order-child' => [
                                                    'type' => 'order-child',
                                                    'label' => 'Child Pages:',
                                                    'sitemap' => NULL
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
    ]
];
