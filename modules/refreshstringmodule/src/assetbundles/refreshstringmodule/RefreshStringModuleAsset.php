<?php
/**
 * Refresh String module for Craft CMS 3.x
 *
 * Adds a refresh string to a file based on its mtime.
 *
 * @link      https://twitter.com/mijewe
 * @copyright Copyright (c) 2018 Michael Westwood
 */

namespace modules\refreshstringmodule\assetbundles\RefreshStringModule;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * RefreshStringModuleAsset AssetBundle
 *
 * AssetBundle represents a collection of asset files, such as CSS, JS, images.
 *
 * Each asset bundle has a unique name that globally identifies it among all asset bundles used in an application.
 * The name is the [fully qualified class name](http://php.net/manual/en/language.namespaces.rules.php)
 * of the class representing it.
 *
 * An asset bundle can depend on other asset bundles. When registering an asset bundle
 * with a view, all its dependent asset bundles will be automatically registered.
 *
 * http://www.yiiframework.com/doc-2.0/guide-structure-assets.html
 *
 * @author    Michael Westwood
 * @package   RefreshStringModule
 * @since     1.0.0
 */
class RefreshStringModuleAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * Initializes the bundle.
     */
    public function init()
    {
        // define the path that your publishable resources live
        $this->sourcePath = "@modules/refreshstringmodule/assetbundles/refreshstringmodule/dist";

        // define the dependencies
        $this->depends = [
            CpAsset::class,
        ];

        // define the relative path to CSS/JS files that should be registered with the page
        // when this asset bundle is registered
        $this->js = [
            'js/RefreshStringModule.js',
        ];

        $this->css = [
            'css/RefreshStringModule.css',
        ];

        parent::init();
    }
}
