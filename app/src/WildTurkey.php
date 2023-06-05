<?php

namespace App;

/**
 * Class WildTurkey
 *
 * Represents a WildTurkey which implements the Turkey interface.
 */
class WildTurkey implements Turkey
{
    /**
     * Make the WildTurkey gobble.
     *
     * @return string
     */
    public function gobble(): string
    {
        return '<li>Gobble gobble</li>' . PHP_EOL;
    }

    /**
     * Make the WildTurkey fly a short distance.
     *
     * @return string
     */
    public function fly(): string
    {
        return '<li>I am flying a short distance</li>' . PHP_EOL;
    }
}