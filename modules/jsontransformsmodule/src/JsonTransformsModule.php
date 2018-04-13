<?php
/**
 * JSON Transforms module for Craft CMS 3.x
 *
 * A simple Craft 3 module to read in image transforms from a JSON file.
 *
 * @link      https://twitter.com/mijewe
 * @copyright Copyright (c) 2018 Michael Westwood
 */

namespace modules\jsontransformsmodule;

use modules\jsontransformsmodule\assetbundles\jsontransformsmodule\JsonTransformsModuleAsset;
use modules\jsontransformsmodule\services\JsonTransformsModuleService as JsonTransformsModuleServiceService;
use modules\jsontransformsmodule\variables\JsonTransformsModuleVariable;

use Craft;
use craft\events\RegisterTemplateRootsEvent;
use craft\events\TemplateEvent;
use craft\i18n\PhpMessageSource;
use craft\web\View;
use craft\web\twig\variables\CraftVariable;

use yii\base\Event;
use yii\base\InvalidConfigException;
use yii\base\Module;

/**
 * Class JsonTransformsModule
 *
 * @author    Michael Westwood
 * @package   JsonTransformsModule
 * @since     1.0.0
 *
 * @property  JsonTransformsModuleServiceService $jsonTransformsModuleService
 */
class JsonTransformsModule extends Module
{
    // Static Properties
    // =========================================================================

    /**
     * @var JsonTransformsModule
     */
    public static $instance;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function __construct($id, $parent = null, array $config = [])
    {
        Craft::setAlias('@modules/jsontransformsmodule', $this->getBasePath());
        $this->controllerNamespace = 'modules\jsontransformsmodule\controllers';

        // Translation category
        $i18n = Craft::$app->getI18n();
        /** @noinspection UnSafeIsSetOverArrayInspection */
        if (!isset($i18n->translations[$id]) && !isset($i18n->translations[$id.'*'])) {
            $i18n->translations[$id] = [
                'class' => PhpMessageSource::class,
                'sourceLanguage' => 'en-US',
                'basePath' => '@modules/jsontransformsmodule/translations',
                'forceTranslation' => true,
                'allowOverrides' => true,
            ];
        }

        // Base template directory
        Event::on(View::class, View::EVENT_REGISTER_CP_TEMPLATE_ROOTS, function (RegisterTemplateRootsEvent $e) {
            if (is_dir($baseDir = $this->getBasePath().DIRECTORY_SEPARATOR.'templates')) {
                $e->roots[$this->id] = $baseDir;
            }
        });

        // Set this as the global instance of this module class
        static::setInstance($this);

        parent::__construct($id, $parent, $config);
    }

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$instance = $this;

        if (Craft::$app->getRequest()->getIsCpRequest()) {
            Event::on(
                View::class,
                View::EVENT_BEFORE_RENDER_TEMPLATE,
                function (TemplateEvent $event) {
                    try {
                        Craft::$app->getView()->registerAssetBundle(JsonTransformsModuleAsset::class);
                    } catch (InvalidConfigException $e) {
                        Craft::error(
                            'Error registering AssetBundle - '.$e->getMessage(),
                            __METHOD__
                        );
                    }
                }
            );
        }

        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('jsonTransformsModule', JsonTransformsModuleVariable::class);
            }
        );

        Craft::info(
            Craft::t(
                'json-transforms-module',
                '{name} module loaded',
                ['name' => 'JSON Transforms']
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================
}
