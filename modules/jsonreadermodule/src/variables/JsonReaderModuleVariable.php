<?php
/**
 * JSON Reader module for Craft CMS 3.x
 *
 * Pull in a JSON file and use it in a template.
 *
 * @link      https://twitter.com/mijewe
 * @copyright Copyright (c) 2018 Michael Westwood
 */

namespace modules\jsonreadermodule\variables;

use modules\jsonreadermodule\JsonReaderModule;

use Craft;

/**
 * JSON Reader Variable
 *
 * Craft allows modules to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.jsonReaderModule }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Michael Westwood
 * @package   JsonReaderModule
 * @since     1.0.0
 */
class JsonReaderModuleVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.jsonReaderModule.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.jsonReaderModule.exampleVariable(twigValue) }}
     *
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

    public function get($file) {
      return JsonReaderModule::$instance->jsonReaderModuleService->get($file);
    }
}
