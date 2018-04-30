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
    'enableCsrfProtection' => true,
    'securityKey' => getenv('SECURITY_KEY'),
    'addTrailingSlashesToUrls' => true,
    'limitAutoSlugsToAscii' => true,
    'useEmailAsUsername' => true,
    'convertFilenamesToAscii' => true,
    'defaultImageQuality' => 82,
    'omitScriptNameInUrls' => true,
    'overridePhpSessionLocation' => true,
    'defaultWeekStartDay' => 1,
    'trackUsers' => getenv('ENVIRONMENT') == 'live',
    'allowRobots' => getenv('ENVIRONMENT') == 'live',
    'dateFormat' => 'jS F Y'
  ],

  // Dev environment settings
  'dev' => [
    'devMode' => true,
    'cacheDuration' => false,
  ],
];
