<?php
/**
 * JSON Transforms module for Craft CMS 3.x
 *
 * A simple Craft 3 module to read in image transforms from a JSON file.
 *
 * @link      https://twitter.com/mijewe
 * @copyright Copyright (c) 2018 Michael Westwood
 */

namespace modules\jsontransformsmodule\variables;

use modules\jsontransformsmodule\JsonTransformsModule;

use Craft;

/**
 * @author    Michael Westwood
 * @package   JsonTransformsModule
 * @since     1.0.0
 */
class JsonTransformsModuleVariable
{
    // Public Methods
    // =========================================================================

    /**
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }

    public function getTransform($transform, $size, $multiplier=1) {
      return JsonTransformsModule::$instance->jsonTransformsModuleService->getTransform($transform, $size, $multiplier);
    }
}
