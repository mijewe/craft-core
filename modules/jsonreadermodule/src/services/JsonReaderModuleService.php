<?php
/**
 * JSON Reader module for Craft CMS 3.x
 *
 * Pull in a JSON file and use it in a template.
 *
 * @link      https://twitter.com/mijewe
 * @copyright Copyright (c) 2018 Michael Westwood
 */

namespace modules\jsonreadermodule\services;

use modules\jsonreadermodule\JsonReaderModule;

use Craft;
use craft\base\Component;

/**
 * JsonReaderModuleService Service
 *
 * All of your module’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other modules can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Michael Westwood
 * @package   JsonReaderModule
 * @since     1.0.0
 */
class JsonReaderModuleService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin/module file, call it like this:
     *
     *     JsonReaderModule::$instance->jsonReaderModuleService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }

    public function get($file) {
      $string = file_get_contents( JsonReaderModule::$instance->path->getSiteTemplatesPath() . '/json/' . $file . '.json');
      return json_decode($string, true);
    }
}
