<?php
/**
* Refresh String module for Craft CMS 3.x
*
* Adds a refresh string to a file based on its mtime.
*
* @link      https://twitter.com/mijewe
* @copyright Copyright (c) 2018 Michael Westwood
*/

namespace modules\refreshstringmodule\twigextensions;

use modules\refreshstringmodule\RefreshStringModule;

use Craft;

/**
* Twig can be extended in many ways; you can add extra tags, filters, tests, operators,
* global variables, and functions. You can even extend the parser itself with
* node visitors.
*
* http://twig.sensiolabs.org/doc/advanced.html
*
* @author    Michael Westwood
* @package   RefreshStringModule
* @since     1.0.0
*/
class RefreshStringModuleTwigExtension extends \Twig_Extension
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
    return 'RefreshStringModule';
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
    new \Twig_SimpleFilter('refreshString', [$this, 'refreshString']),
    ];
  }

  public function refreshString($filename) {

		$fullpath = Craft::getAlias('@webroot') . $filename;

		if (file_exists($fullpath)) {
			return $filename . '?' . $this->getModDate($fullpath);
		} else {
			return $filename;
		}

	}

  public function getModDate($filename) {

    return filemtime($filename);

  }
}
