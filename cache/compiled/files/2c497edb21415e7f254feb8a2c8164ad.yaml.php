<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Volumes/Data/mywiki/htdocs/fs/user/plugins/gdprprivacysetup/gdprprivacysetup.yaml',
    'modified' => 1536292865,
    'data' => [
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
<label for="gdpr_webfonts">Google Fonts</label>'
    ]
];
