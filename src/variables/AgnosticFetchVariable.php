<?php
/**
 * Agnostic Fetch plugin for Craft CMS 3.x
 *
 * uniform syntax for fetching elements whether or not they have been eager loaded
 *
 * @link      http://marion.newlevant.com
 * @copyright Copyright (c) 2017 Marion Newlevant
 */

namespace marionnewlevant\agnosticfetch\variables;

use marionnewlevant\agnosticfetch\helpers\AgnosticFetchHelper;

/**
 * Agnostic Fetch Variable
 *
 * @author    Marion Newlevant
 * @package   AgnosticFetch
 * @since     1.0.0
 */
class AgnosticFetchVariable
{
    // Public Methods
    // =========================================================================

    public function isEager($stuff)
    {
        return AgnosticFetchHelper::isEager($stuff);
    }

    public function all($stuff)
    {
        return AgnosticFetchHelper::all($stuff);
    }

    public function one($stuff)
    {
        return AgnosticFetchHelper::one($stuff);
    }

    public function nth($stuff, $n)
    {
        return AgnosticFetchHelper::nth($stuff, $n);
    }

    public function ids($stuff)
    {
        return AgnosticFetchHelper::ids($stuff);
    }

    public function count($stuff)
    {
        return AgnosticFetchHelper::count($stuff);
    }
}
