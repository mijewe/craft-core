<?php
/**
 * File Size module for Craft CMS 3.x
 *
 * Returns the size of a file
 *
 * @link      https://twitter.com/mijewe
 * @copyright Copyright (c) 2018 Michael Westwood
 */

namespace modules\filesizemodule\twigextensions;

use modules\filesizemodule\FileSizeModule;

use Craft;

/**
 * Twig can be extended in many ways; you can add extra tags, filters, tests, operators,
 * global variables, and functions. You can even extend the parser itself with
 * node visitors.
 *
 * http://twig.sensiolabs.org/doc/advanced.html
 *
 * @author    Michael Westwood
 * @package   FileSizeModule
 * @since     1.0.0
 */
class FileSizeModuleTwigExtension extends \Twig_Extension
{
    // Public Methods
    // =========================================================================

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'FileSizeModule';
    }

    /**
     * Returns an array of Twig filters, used in Twig templates via:
     *
     *      {{ 'something' | someFilter }}
     *
     * @return array
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('someFilter', [$this, 'someInternalFunction']),
        ];
    }

    /**
     * Returns an array of Twig functions, used in Twig templates via:
     *
     *      {% set this = someFunction('something') %}
     *
    * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('getFileSize', [$this, 'getFileSize']),
        ];
    }

    /**
     * Our function called via Twig; it can do anything you want
     *
     * @param null $text
     *
     * @return string
     */
     public function getFileSize($filename) {

   		$fullpath = getenv('CRAFTENV_BASE_PATH') . $filename;

   		if (file_exists($fullpath)) {
   			return filesize($fullpath);
   		} else {
   			return null;
   		}

   	}
}
