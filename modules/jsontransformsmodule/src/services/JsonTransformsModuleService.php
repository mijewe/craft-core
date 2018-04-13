<?php
/**
 * JSON Transforms module for Craft CMS 3.x
 *
 * A simple Craft 3 module to read in image transforms from a JSON file.
 *
 * @link      https://twitter.com/mijewe
 * @copyright Copyright (c) 2018 Michael Westwood
 */

namespace modules\jsontransformsmodule\services;

use modules\jsontransformsmodule\JsonTransformsModule;

use Craft;
use craft\base\Component;

/**
 * @author    Michael Westwood
 * @package   JsonTransformsModule
 * @since     1.0.0
 */
class JsonTransformsModuleService extends Component
{
    // Public Methods
    // =========================================================================

    /*
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }

    public function getTransforms() {

      $string = file_get_contents( JsonTransformsModule::$instance->path->getSiteTemplatesPath() . '/json/transforms.json');
      return json_decode($string, true);

    }

    public function getTransform($transform, $size, $multiplier=1) {

      $transforms = $this->getTransforms();

      $default = $transforms['default'];
      $overrides = $transforms[$transform]['default'];
      $settings = $transforms[$transform][$size];

      $thisTransform = array_merge($default, $overrides, $settings);

      if ( array_key_exists('width', $thisTransform) ) {
        $thisTransform['width'] = $thisTransform['width'] * $multiplier;
      }

      if ( array_key_exists('height', $thisTransform) ) {
        $thisTransform['height'] = $thisTransform['height'] * $multiplier;
      }

      return $thisTransform;
    }
}
