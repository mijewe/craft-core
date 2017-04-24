<?php

/**
* General Configuration
*
* All of your system's general configuration settings go in here.
* You can see a list of the default settings in craft/app/etc/config/defaults/general.php
*/

// $_ENV constants are loaded by craft-multi-environment from .env.php via public/index.php
return array(

  // All environments
  '*' => array(
    'defaultFilePermissions' => 0664,
    'defaultFolderPermissions' => 0775,
    'addTrailingSlashesToUrls' => true,
    'limitAutoSlugsToAscii' => true,
    'useEmailAsUsername' => true,
    'convertFilenamesToAscii' => true,
    'defaultImageQuality' => 82,
    'maxUploadFileSize' => 40000000,
    'omitScriptNameInUrls' => true,
    'overridePhpSessionLocation' => true,
    // 'defaultCookieDomain' => '.example.com',
    'defaultWeekStartDay' => 1,
    'preserveImageColorProfiles' => true,
    'usePathInfo' => true,
    'cacheDuration' => false,
    'siteUrl' => getenv('CRAFTENV_SITE_URL'),
    'craftEnv' => CRAFT_ENVIRONMENT,
    'environmentVariables' => array(
      'baseUrl'  => getenv('CRAFTENV_BASE_URL'),
      'basePath' => getenv('CRAFTENV_BASE_PATH'),
    ),
    'rootUrl' => trim( getenv('CRAFTENV_BASE_URL'), '/' ),

    'gaCode' => false,
    'locales' => array(
      'en_gb' => array(
        'languageCode' => 'en',
        'niceLanguage' => 'English',
        'dateFormat' => 'jS F Y'
      )
    ),
    'mainLocale' => 'en_gb'
  ),

  // Live (production) environment
  'live'  => array(
    'devMode' => false,
    'trackUsers' => true,
  ),

  // Staging (pre-production) environment
  'staging'  => array(
    'devMode' => false,
    'trackUsers' => false,
  ),

  // Local (development) environment
  'local'  => array(
    'devMode' => true,
    'trackUsers' => false,
    'omitScriptNameInUrls' => false,
    'defaultCookieDomain' => ''
  ),
);
