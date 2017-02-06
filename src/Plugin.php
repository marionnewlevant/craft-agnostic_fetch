<?php
/**
 * Agnostic Fetch plugin for Craft CMS 3.x
 *
 * uniform syntax for fetching elements whether or not they have been eager loaded
 *
 * @link      http://marion.newlevant.com
 * @copyright Copyright (c) 2017 Marion Newlevant
 */

namespace marionnewlevant\agnosticfetch;

use marionnewlevant\agnosticfetch\variables\AgnosticFetchVariable;
use marionnewlevant\agnosticfetch\twigextensions\AgnosticFetchTwigExtension;

use Craft;

/**
 * Craft plugins are very much like little applications in and of themselves. We’ve made
 * it as simple as we can, but the training wheels are off. A little prior knowledge is
 * going to be required to write a plugin.
 *
 * For the purposes of the plugin docs, we’re going to assume that you know PHP and SQL,
 * as well as some semi-advanced concepts like object-oriented programming and PHP namespaces.
 *
 * https://craftcms.com/docs/plugins/introduction
 *
 * @author    Marion Newlevant
 * @package   AgnosticFetch
 * @since     1.0.0
 */
class Plugin extends \craft\base\Plugin
{
    // Static Properties
    // =========================================================================

    // Public Methods
    // =========================================================================

    /**
     * Called after the plugin class is instantiated; do any one-time initialization
     * here such as hooks and events.
     *
     * If you have a '/vendor/autoload.php' file, it will be loaded for you automatically;
     * you do not need to load it in your init() method.
     *
     */
    public function init()
    {
        parent::init();

        // Add in our Twig extensions
        Craft::$app->view->twig->addExtension(new AgnosticFetchTwigExtension());
    }

    /**
     * Returns the component definition that should be registered on the
     * [[\craft\web\twig\variables\CraftVariable]] instance for this plugin’s handle.
     *
     * @return mixed|null The component definition to be registered.
     * It can be any of the formats supported by [[\yii\di\ServiceLocator::set()]].
     */
    public function defineTemplateComponent()
    {
        return AgnosticFetchVariable::class;
    }

}
