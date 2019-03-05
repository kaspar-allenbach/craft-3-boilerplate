<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see craft\config\GeneralConfig
 */

return [
  // Global settings
  '*' => [
    'defaultWeekStartDay' => 1,
    'omitScriptNameInUrls' => true,
    'cpTrigger' => getenv('CP_TRIGGER'),
    'securityKey' => getenv('SECURITY_KEY'),
    'useProjectConfigFile' => true,
    'aliases' => [
      'assetSiteUrl' => getenv('ASSET_SITE_URL'),
      'assetSiteRoot' => getenv('ASSET_SITE_ROOT'),
    ],
    'siteUrl' => [
        'siteHandle' => getenv('SITE_URL_DE'),
        'siteHandle' => getenv('SITE_URL_FR'),
        'siteHandle' => getenv('SITE_URL_EN'),
        'siteHandle' => getenv('SITE_URL_IT'),
    ],
  ],

  // Dev environment settings
  'dev' => [
    'devMode' => true,
    'enableTemplateCaching' => false,
    'suppressTemplateErrors' => false,
  ],

  // Staging environment settings
  'staging' => [
    'devMode' => true,
    'enableTemplateCaching' => true,
    'suppressTemplateErrors' => false,
  ],

  // Production environment settings
  'production' => [
  ],
];
