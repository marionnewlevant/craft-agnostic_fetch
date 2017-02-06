<?php
/**
 * Agnostic Fetch plugin for Craft CMS 3.x
 *
 * uniform syntax for fetching elements whether or not they have been eager loaded
 *
 * @link      http://marion.newlevant.com
 * @copyright Copyright (c) 2017 Marion Newlevant
 */

namespace marionnewlevant\agnosticfetch\twigextensions;

use marionnewlevant\agnosticfetch\helpers\AgnosticFetchHelper;

use Craft;

/**
 * Twig can be extended in many ways; you can add extra tags, filters, tests, operators,
 * global variables, and functions. You can even extend the parser itself with
 * node visitors.
 *
 * http://twig.sensiolabs.org/doc/advanced.html
 *
 * @author    Marion Newlevant
 * @package   AgnosticFetch
 * @since     1.0.0
 */
class AgnosticFetchTwigExtension extends \Twig_Extension
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
        return 'Agnostic Fetch';
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
            new \Twig_SimpleFilter('isEager', function($stuff) {
                return AgnosticFetchHelper::isEager($stuff);
            }),
            new \Twig_SimpleFilter('all', function($stuff) {
                return AgnosticFetchHelper::all($stuff);
            }),
            new \Twig_SimpleFilter('one', function($stuff) {
                return AgnosticFetchHelper::one($stuff);
            }),
            new \Twig_SimpleFilter('nth', function($stuff, $n) {
                return AgnosticFetchHelper::nth($stuff, $n);
            }),
            new \Twig_SimpleFilter('ids', function($stuff) {
                return AgnosticFetchHelper::ids($stuff);
            }),
            new \Twig_SimpleFilter('count', function($stuff) {
                return AgnosticFetchHelper::count($stuff);
            }),
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
            new \Twig_SimpleFunction('isEager', function($stuff) {
                return AgnosticFetchHelper::isEager($stuff);
            }),
            new \Twig_SimpleFunction('all', function($stuff) {
                return AgnosticFetchHelper::all($stuff);
            }),
            new \Twig_SimpleFunction('one', function($stuff) {
                return AgnosticFetchHelper::one($stuff);
            }),
            new \Twig_SimpleFunction('nth', function($stuff, $n) {
                return AgnosticFetchHelper::nth($stuff, $n);
            }),
            new \Twig_SimpleFunction('ids', function($stuff) {
                return AgnosticFetchHelper::ids($stuff);
            }),
            new \Twig_SimpleFunction('count', function($stuff) {
                return AgnosticFetchHelper::count($stuff);
            }),
        ];
    }

}
