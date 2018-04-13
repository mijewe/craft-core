<?php
/**
 * Yii Application Config
 *
 * Edit this file at your own risk!
 *
 * The array returned by this file will get merged with
 * vendor/craftcms/cms/src/config/app/main.php and [web|console].php, when
 * Craft's bootstrap script is defining the configuration for the entire
 * application.
 *
 * You can define custom modules and system components, and even override the
 * built-in system components.
 */
return [
    'modules' => [
        'json-transforms-module' => [
            'class' => \modules\jsontransformsmodule\JsonTransformsModule::class,
            'components' => [
                'jsonTransformsModuleService' => [
                    'class' => 'modules\jsontransformsmodule\services\JsonTransformsModuleService',
                ],
            ],
        ],
    ],
    'bootstrap' => ['json-transforms-module'],
];
