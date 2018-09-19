<?php

$vendorDir = dirname(__DIR__);

return array (
  'mmikkel/cp-clearcache' => 
  array (
    'class' => 'mmikkel\\cpclearcache\\CpClearCache',
    'basePath' => $vendorDir . '/mmikkel/cp-clearcache/src',
    'handle' => 'cp-clearcache',
    'aliases' => 
    array (
      '@mmikkel/cpclearcache' => $vendorDir . '/mmikkel/cp-clearcache/src',
    ),
    'name' => 'CP Clear Cache',
    'version' => '1.0.2',
    'description' => 'Fewer clicks to get clearin\'',
    'developer' => 'Mats Mikkel Rummelhoff',
    'developerUrl' => 'https://vaersaagod.no',
    'documentationUrl' => 'https://github.com/mmikkel/CpClearCache-Craft/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/mmikkel/CpClearCache-Craft/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
  'craftcms/redactor' => 
  array (
    'class' => 'craft\\redactor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/redactor/src',
    'handle' => 'redactor',
    'aliases' => 
    array (
      '@craft/redactor' => $vendorDir . '/craftcms/redactor/src',
    ),
    'name' => 'Redactor',
    'version' => '2.1.6',
    'description' => 'Edit rich text content in Craft CMS using Redactor by Imperavi.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/redactor',
  ),
);
