<?php
/**
 * JSON Transforms module for Craft CMS 3.x
 *
 * A simple Craft 3 module to read in image transforms from a JSON file.
 *
 * @link      https://twitter.com/mijewe
 * @copyright Copyright (c) 2018 Michael Westwood
 */

namespace modules\jsontransformsmodule\assetbundles\JsonTransformsModule;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    Michael Westwood
 * @package   JsonTransformsModule
 * @since     1.0.0
 */
class JsonTransformsModuleAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@modules/jsontransformsmodule/assetbundles/jsontransformsmodule/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/JsonTransformsModule.js',
        ];

        $this->css = [
            'css/JsonTransformsModule.css',
        ];

        parent::init();
    }
}
