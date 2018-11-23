<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1542949500,
    'checksum' => '1a082a00f2038a2e075ef637aee3c60d',
    'files' => [
        'user/config' => [
            'media' => [
                'file' => 'user/config/media.yaml',
                'modified' => 1534389666
            ],
            'plugins/admin' => [
                'file' => 'user/config/plugins/admin.yaml',
                'modified' => 1536227610
            ],
            'plugins/admin-power-tools' => [
                'file' => 'user/config/plugins/admin-power-tools.yaml',
                'modified' => 1535081103
            ],
            'plugins/cookiesnotice' => [
                'file' => 'user/config/plugins/cookiesnotice.yaml',
                'modified' => 1536638514
            ],
            'plugins/form' => [
                'file' => 'user/config/plugins/form.yaml',
                'modified' => 1534912586
            ],
            'plugins/form-database' => [
                'file' => 'user/config/plugins/form-database.yaml',
                'modified' => 1537169335
            ],
            'plugins/gdprprivacysetup' => [
                'file' => 'user/config/plugins/gdprprivacysetup.yaml',
                'modified' => 1535432126
            ],
            'plugins/page-inject' => [
                'file' => 'user/config/plugins/page-inject.yaml',
                'modified' => 1537166861
            ],
            'plugins/simple_form' => [
                'file' => 'user/config/plugins/simple_form.yaml',
                'modified' => 1532993368
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1534389504
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1538643074
            ],
            'streams' => [
                'file' => 'user/config/streams.yaml',
                'modified' => 1534389666
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1536639248
            ],
            'themes/woo' => [
                'file' => 'user/config/themes/woo.yaml',
                'modified' => 1536292885
            ]
        ],
        'system/config' => [
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1536564900
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1538722679
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1535097699
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1536564878
            ]
        ],
        'user/plugins' => [
            'plugins/admin' => [
                'file' => 'user/plugins/admin/admin.yaml',
                'modified' => 1535097729
            ],
            'plugins/admin-power-tools' => [
                'file' => 'user/plugins/admin-power-tools/admin-power-tools.yaml',
                'modified' => 1535079708
            ],
            'plugins/cookiesnotice' => [
                'file' => 'user/plugins/cookiesnotice/cookiesnotice.yaml',
                'modified' => 1535432332
            ],
            'plugins/core-service-manager' => [
                'file' => 'user/plugins/core-service-manager/core-service-manager.yaml',
                'modified' => 1535079699
            ],
            'plugins/editor' => [
                'file' => 'user/plugins/editor/editor.yaml',
                'modified' => 1535079715
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1534389609
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1532993368
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1535097733
            ],
            'plugins/form-database' => [
                'file' => 'user/plugins/form-database/form-database.yaml',
                'modified' => 1537169301
            ],
            'plugins/gdprprivacysetup' => [
                'file' => 'user/plugins/gdprprivacysetup/gdprprivacysetup.yaml',
                'modified' => 1536292865
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/login.yaml',
                'modified' => 1534389605
            ],
            'plugins/page-inject' => [
                'file' => 'user/plugins/page-inject/page-inject.yaml',
                'modified' => 1537166854
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1532993368
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'admin' => [
                'enabled' => true,
                'route' => '/admin',
                'cache_enabled' => false,
                'theme' => 'grav',
                'logo_text' => 'AIMING',
                'body_classes' => '',
                'content_padding' => true,
                'twofa_enabled' => true,
                'sidebar' => [
                    'activate' => 'tab',
                    'hover_delay' => 100,
                    'size' => 'auto'
                ],
                'dashboard' => [
                    'days_of_stats' => 7
                ],
                'widgets' => [
                    'dashboard-maintenance' => true,
                    'dashboard-statistics' => true,
                    'dashboard-notifications' => false,
                    'dashboard-feed' => false,
                    'dashboard-pages' => true
                ],
                'pages' => [
                    'show_parents' => 'both'
                ],
                'session' => [
                    'timeout' => 1800
                ],
                'warnings' => [
                    'delete_page' => true
                ],
                'edit_mode' => 'normal',
                'frontend_preview_target' => 'inline',
                'show_github_msg' => true,
                'pages_list_display_field' => 'title',
                'google_fonts' => false,
                'admin_icons' => 'line-awesome',
                'enable_auto_updates_check' => true,
                'notifications' => [
                    'feed' => true,
                    'dashboard' => true,
                    'plugins' => true,
                    'themes' => true
                ],
                'popularity' => [
                    'enabled' => true,
                    'ignore' => [
                        0 => '/test*',
                        1 => '/modular'
                    ],
                    'history' => [
                        'daily' => '30',
                        'monthly' => '12',
                        'visitors' => '20'
                    ]
                ],
                'pagemedia' => [
                    'resize_width' => 0,
                    'resize_height' => 0,
                    'res_min_width' => 0,
                    'res_min_height' => 0,
                    'res_max_width' => 0,
                    'res_max_height' => 0,
                    'resize_quality' => 0.8
                ]
            ],
            'admin-power-tools' => [
                'enabled' => true,
                'edit_page_enabled' => false,
                'edit_section_enabled' => false,
                'edit_section_syntax_enabled' => true,
                'add_page_enabled' => true,
                'reports_enabled' => true,
                'child_reordering_enabled' => true,
                'child_reordering_immediate' => true,
                'move_page_enabled' => false,
                'rename_page_enabled' => false
            ],
            'cookiesnotice' => [
                'enabled' => false,
                'jqcookie' => false,
                'possition' => 'top',
                'url' => 'http://localhost:8888/woo/cookies',
                'customcss' => false,
                'urlcss' => 'http://example.com/assets/css/style.css',
                'position' => 'bot'
            ],
            'core-service-manager' => [
                'enabled' => true,
                'override_admin_twigs' => true,
                'show_samples' => false
            ],
            'editor' => [
                'enabled' => true,
                'js_enabled' => true,
                'php_enabled' => true,
                'twig_enabled' => true,
                'css_enabled' => true,
                'yaml_enabled' => true,
                'markdown_enabled' => true
            ],
            'email' => [
                'enabled' => true,
                'from' => NULL,
                'from_name' => NULL,
                'to' => NULL,
                'to_name' => NULL,
                'mailer' => [
                    'engine' => 'sendmail',
                    'smtp' => [
                        'server' => 'localhost',
                        'port' => 25,
                        'encryption' => 'none',
                        'user' => '',
                        'password' => ''
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail -bs'
                    ]
                ],
                'content_type' => 'text/html',
                'debug' => false
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'form' => [
                'enabled' => true,
                'built_in_css' => true,
                'inline_css' => true,
                'refresh_prevention' => false,
                'client_side_validation' => true,
                'inline_errors' => false,
                'files' => [
                    'multiple' => false,
                    'limit' => 10,
                    'destination' => 'self@',
                    'avoid_overwriting' => false,
                    'random_name' => false,
                    'filesize' => 0,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'recaptcha' => [
                    'site_key' => '6LeUCmoUAAAAADOtrCnDfl-rZIH7ZK6FvGx8JnMd',
                    'secret_key' => '6LeUCmoUAAAAADGRSWjJVci59QmuBPApLObCZiWN'
                ]
            ],
            'form-database' => [
                'enabled' => true,
                'mysql_server' => 'localhost',
                'mysql_port' => '3306',
                'mysql_username' => 'fs',
                'mysql_password' => 'fs'
            ],
            'gdprprivacysetup' => [
                'enabled' => false,
                'privacy_page_route' => '/gdpr_privacy_info_page',
                'inputPrefix' => 'gdpr_',
                'modalWindowId' => 'privacyModalWindow',
                'denyRedirectionTarget' => 'http://google.com',
                'privacySettingsBtnClass' => 'gdpr-privacy-open-settings',
                'consentButtonText' => 'I accept privacy policy',
                'consentButtonClass' => 'tingle-btn tingle-btn--primary tingle-btn--pull-right',
                'denyButtonText' => 'I don`t accept site policy',
                'denyButtonClass' => 'tingle-btn tingle-btn--danger',
                'deferInfoPopupTime' => 0,
                'consentExpiresTime' => 30,
                'consentPolicyList' => [
                    0 => [
                        'consent' => 'site',
                        'policy' => 'default-src \'self\' data: \'unsafe-inline\' \'unsafe-eval\'',
                        'default' => true
                    ],
                    1 => [
                        'consent' => 'webfonts',
                        'policy' => '*.googleapis.com fonts.gstatic.com',
                        'default' => false
                    ],
                    2 => [
                        'consent' => 'analytics',
                        'policy' => '*.googletagmanager.com *.google-analytics.com',
                        'default' => false
                    ]
                ],
                'privacyInfo' => 'Visitor must accept this option to use page
<input type="checkbox" name="gdpr_site" id="gdpr_site" checked disabled>
<label for="gdpr_site">Site</label>

This option is optional for visitor
<input type="checkbox" name="gdpr_analytics" id="gdpr_analytics">
<label for="gdpr_analytics">Google Analitycs</label>

This option is also optional for visitor
<input type="checkbox" name="gdpr_webfonts" id="gdpr_webfonts">
<label for="gdpr_webfonts">Google Fonts</label>',
                'privacySHA1' => '69ff065fcf8a052450b54292cc2f867fd1bd324a'
            ],
            'login' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => NULL,
                'redirect_to_login' => true,
                'redirect_after_login' => NULL,
                'redirect_after_logout' => '/',
                'route_activate' => '/activate_user',
                'route_forgot' => '/forgot_password',
                'route_reset' => '/reset_password',
                'route_profile' => '/user_profile',
                'route_register' => '/user_register',
                'route_unauthorized' => '/user_unauthorized',
                'dynamic_page_visibility' => false,
                'parent_acl' => false,
                'protect_protected_page_media' => false,
                'rememberme' => [
                    'enabled' => true,
                    'timeout' => 604800,
                    'name' => 'grav-rememberme'
                ],
                'max_pw_resets_count' => 0,
                'max_pw_resets_interval' => 60,
                'max_login_count' => 0,
                'max_login_interval' => 2,
                'user_registration' => [
                    'enabled' => false,
                    'fields' => [
                        0 => 'username',
                        1 => 'password',
                        2 => 'email',
                        3 => 'fullname',
                        4 => 'title',
                        5 => 'level'
                    ],
                    'default_values' => [
                        'level' => 'Newbie'
                    ],
                    'access' => [
                        'site' => [
                            'login' => 'true'
                        ]
                    ],
                    'redirect_after_registration' => '',
                    'options' => [
                        'validate_password1_and_password2' => true,
                        'set_user_disabled' => false,
                        'login_after_registration' => false,
                        'send_activation_email' => false,
                        'send_notification_email' => false,
                        'send_welcome_email' => false
                    ]
                ]
            ],
            'page-inject' => [
                'enabled' => true,
                'active' => true,
                'processed_content' => true
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'simple_form' => [
                'enabled' => true,
                'token' => '',
                'template_file' => 'simple_form',
                'fields' => NULL,
                'messages' => [
                    'success' => 'Your message has been sent.'
                ]
            ]
        ],
        'media' => [
            'types' => [
                'defaults' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'application/octet-stream',
                    'image' => [
                        'filters' => [
                            'default' => [
                                0 => 'enableProgressive'
                            ]
                        ]
                    ]
                ],
                'jpg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpe' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpeg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'png' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-png.png',
                    'mime' => 'image/png'
                ],
                'gif' => [
                    'type' => 'animated',
                    'thumb' => 'media/thumb-gif.png',
                    'mime' => 'image/gif'
                ],
                'svg' => [
                    'type' => 'vector',
                    'thumb' => 'media/thumb-svg.png',
                    'mime' => 'image/svg+xml'
                ],
                'mp4' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mp4.png',
                    'mime' => 'video/mp4'
                ],
                'mov' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mov.png',
                    'mime' => 'video/quicktime'
                ],
                'm4v' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-m4v.png',
                    'mime' => 'video/x-m4v'
                ],
                'swf' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-swf.png',
                    'mime' => 'video/x-flv'
                ],
                'flv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-flv.png',
                    'mime' => 'video/x-flv'
                ],
                'webm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-webm.png',
                    'mime' => 'video/webm'
                ],
                'ogv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'video/ogg'
                ],
                'mp3' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-mp3.png',
                    'mime' => 'audio/mp3'
                ],
                'ogg' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'audio/ogg'
                ],
                'wma' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wma.png',
                    'mime' => 'audio/wma'
                ],
                'm4a' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-m4a.png',
                    'mime' => 'audio/m4a'
                ],
                'wav' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wav.png',
                    'mime' => 'audio/wav'
                ],
                'aiff' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-aif.png',
                    'mime' => 'audio/aiff'
                ],
                'aif' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-aif.png',
                    'mime' => 'audio/aif'
                ],
                'txt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-txt.png',
                    'mime' => 'text/plain'
                ],
                'xml' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xml.png',
                    'mime' => 'application/xml'
                ],
                'doc' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-doc.png',
                    'mime' => 'application/msword'
                ],
                'docx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-docx.png',
                    'mime' => 'application/msword'
                ],
                'xls' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xls.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlsx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xlsx.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'ppt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ppt.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pptx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pptx.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pps' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pps.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'rtf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-rtf.png',
                    'mime' => 'application/rtf'
                ],
                'bmp' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-bmp.png',
                    'mime' => 'image/bmp'
                ],
                'tiff' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tiff.png',
                    'mime' => 'image/tiff'
                ],
                'mpeg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpe' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpe.png',
                    'mime' => 'video/mpeg'
                ],
                'avi' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-avi.png',
                    'mime' => 'video/msvideo'
                ],
                'wmv' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-wmv.png',
                    'mime' => 'video/x-ms-wmv'
                ],
                'html' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'htm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'ics' => [
                    'type' => 'iCal',
                    'thumb' => 'media/thumb-ics.png',
                    'mime' => 'text/calendar'
                ],
                'pdf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pdf.png',
                    'mime' => 'application/pdf'
                ],
                'ai' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ai.png',
                    'mime' => 'image/ai'
                ],
                'psd' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-psd.png',
                    'mime' => 'image/psd'
                ],
                'zip' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-zip.png',
                    'mime' => 'application/zip'
                ],
                '7z' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-7z.png',
                    'mime' => 'application/x-7z-compressed'
                ],
                'gz' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-gz.png',
                    'mime' => 'application/gzip'
                ],
                'tar' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tar.png',
                    'mime' => 'application/x-tar'
                ],
                'css' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-css.png',
                    'mime' => 'text/css'
                ],
                'js' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-js.png',
                    'mime' => 'application/javascript'
                ],
                'json' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-json.png',
                    'mime' => 'application/json'
                ]
            ]
        ],
        'site' => [
            'title' => 'aiming',
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
                'description' => 'Aiming Site'
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
            ],
            'Product' => [
                'route' => '/blog'
            ],
            'email' => 'your-email@domain.com',
            'description' => 'Write an awesome description for your new site here. You can edit this line in _config.yml. It will appear in your document head meta (for Google search results) and in your feed.xml site description.',
            'social' => [
                0 => [
                    'url' => '#',
                    'icon' => 'facebook'
                ]
            ],
            'menu' => [
                0 => [
                    'text' => 'Pricing',
                    'link' => '#pricing'
                ],
                1 => [
                    'text' => 'Contact Us',
                    'link' => '#contact'
                ],
                2 => [
                    'text' => '<i class="fa fa-phone-square"></i> 09989605873'
                ]
            ],
            'footer' => [
                'text' => 'We are a group of engineers passionate about network technology. We want to make network and systems management affordable for SMBs and easy for larger organizations. We are delivering consolidated, intelligent solutions - built for low overhead, automatic insights, and simple, streamlined configuration.',
                'address' => [
                    'title' => 'COME VISIT',
                    'lines' => [
                        0 => [
                            'line' => '6th Flr. Kings Court Building,'
                        ],
                        1 => [
                            'line' => 'Makati City, Metro Manila'
                        ],
                        2 => [
                            'line' => 'Philippines'
                        ]
                    ]
                ],
                'social_title' => 'Socialize',
                'contact' => [
                    'title' => 'CONTACT US',
                    'lines' => [
                        0 => [
                            'text' => '(02) 810-0239',
                            'url' => '#'
                        ],
                        1 => [
                            'text' => 'admin@aiming-inc.com.ph',
                            'url' => 'mailto:admin@aiming-inc.com.ph'
                        ]
                    ]
                ]
            ]
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => 'Asia/Manila',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'force_ssl' => false,
            'force_lowercase_urls' => true,
            'custom_base_url' => '',
            'username_regex' => '^[a-z0-9_-]{3,16}$',
            'pwd_regex' => '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}',
            'intl_enabled' => true,
            'languages' => [
                'supported' => [
                    
                ],
                'include_default_lang' => true,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/home',
                'hide_in_urls' => false
            ],
            'pages' => [
                'theme' => 'woo',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => NULL,
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'twig_first' => false,
                'never_cache_twig' => false,
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => true,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'txt',
                    1 => 'xml',
                    2 => 'html',
                    3 => 'htm',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => '',
                'expires' => 604800,
                'cache_control' => NULL,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => '302',
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'url_taxonomy_filters' => true,
                'frontmatter' => [
                    'process_twig' => false,
                    'ignore_fields' => [
                        0 => 'form',
                        1 => 'forms'
                    ]
                ]
            ],
            'cache' => [
                'enabled' => false,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'clear_images_by_default' => true,
                'cli_compatibility' => false,
                'lifetime' => 604800,
                'gzip' => false,
                'allow_webserver_gzip' => false,
                'redis' => [
                    'socket' => false
                ]
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true,
                'umask_fix' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_pipeline_include_externals' => true,
                'css_pipeline_before_excludes' => true,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_pipeline_include_externals' => true,
                'js_pipeline_before_excludes' => true,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
                ]
            ],
            'errors' => [
                'display' => 0,
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'shutdown' => [
                    'close_connection' => true
                ],
                'twig' => true
            ],
            'images' => [
                'default_image_quality' => 85,
                'cache_all' => false,
                'cache_perms' => '0755',
                'debug' => false,
                'auto_fix_orientation' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ],
                'auto_metadata_exif' => false,
                'upload_limit' => 8388608
            ],
            'session' => [
                'enabled' => true,
                'initialize' => true,
                'timeout' => 1800,
                'name' => 'fun-server',
                'secure' => false,
                'httponly' => true,
                'split' => true,
                'path' => NULL
            ],
            'gpm' => [
                'releases' => 'stable',
                'proxy_url' => NULL,
                'method' => 'auto',
                'verify_peer' => true,
                'official_gpm_only' => true
            ],
            'strict_mode' => [
                'yaml_compat' => true,
                'twig_compat' => true
            ]
        ],
        'security' => [
            'salt' => 'OQtDd3U2EPV7We'
        ],
        'themes' => [
            'woo' => [
                'enabled' => true,
                'color' => 'green',
                'dropdown' => [
                    'enabled' => true
                ]
            ]
        ]
    ]
];
