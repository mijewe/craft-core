<?php
/**
 * Yii Application Config
 *
 * Edit this file at your own risk!
 *
 * The array returned by this file will get merged with
 * vendor/craftcms/cms/src/config/app.php and app.[web|console].php, when
 * Craft's bootstrap script is defining the configuration for the entire
 * application.
 *
 * You can define custom modules and system components, and even override the
 * built-in system components.
 *
 * If you want to modify the application config for *only* web requests or
 * *only* console requests, create an app.web.php or app.console.php file in
 * your config/ folder, alongside this one.
 */

 return [
     'modules' => [
         'my-module' => \modules\Module::class,
         'json-transforms-module' => [
           'class' => \modules\jsontransformsmodule\JsonTransformsModule::class,
           'components' => [
             'jsonTransformsModuleService' => [
               'class' => 'modules\jsontransformsmodule\services\JsonTransformsModuleService',
             ],
           ],
         ],
         'file-size-module' => [
             'class' => \modules\filesizemodule\FileSizeModule::class,
         ],
         'json-reader-module' => [
             'class' => \modules\jsonreadermodule\JsonReaderModule::class,
             'components' => [
                 'jsonReaderModuleService' => [
                     'class' => 'modules\jsonreadermodule\services\JsonReaderModuleService',
                 ],
             ],
         ],
         'refresh-string-module' => [
             'class' => \modules\refreshstringmodule\RefreshStringModule::class,
         ],
     ],
     'bootstrap' => ['json-transforms-module', 'file-size-module', 'json-reader-module', 'refresh-string-module'],
 ];
