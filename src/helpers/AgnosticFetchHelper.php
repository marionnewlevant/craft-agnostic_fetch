<?php
namespace marionnewlevant\agnosticfetch\helpers;

class AgnosticFetchHelper
{
    public static function isEager($stuff)
    {
        return is_array($stuff);
    }

    public static function all($stuff)
    {
        if (is_null($stuff))
        {
            return [];
        }
        if (is_array($stuff))
        {
            return ($stuff);
        }
        return $stuff->all();
    }

    public static function one($stuff)
    {
        if (is_null($stuff))
        {
            return null;
        }
        if (is_array($stuff))
        {
            return (count($stuff) ? $stuff[0] : null);
        }
        return $stuff->one();
    }

    public static function nth($stuff, $n=0)
    {
        if (is_null($stuff))
        {
            return null;
        }
        if (is_array($stuff))
        {
            $count = count($stuff);
            return (0 <= $n && $n < $count ? $stuff[$n] : null);
        }
        return $stuff->nth($n);
    }

    public static function ids($stuff)
    {
        if (is_null($stuff))
        {
            return [];
        }
        if (is_array($stuff))
        {
            $result = [];
            foreach ($stuff as $thing) {
                $result[] = $thing->id;
            }
            return $result;
        }
        return $stuff->ids();
    }

    public static function count($stuff)
    {
        if (is_null($stuff))
        {
            return 0;
        }
        if (is_array($stuff))
        {
            return count($stuff);
        }
        return $stuff->count();
    }
}
