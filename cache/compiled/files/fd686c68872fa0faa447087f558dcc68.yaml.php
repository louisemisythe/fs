<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Volumes/Data/mywiki/htdocs/fs/system/config/site.yaml',
    'modified' => 1538722679,
    'data' => [
        'title' => 'FS',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Mike Militante',
            'email' => 'michaelmilitante@yahoo.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'FS Site'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
