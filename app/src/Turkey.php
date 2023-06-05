<?php
declare(strict_types=1);

namespace App;

/**
 * Represents a Turkey interface.
 */
interface Turkey
{
    /**
     * Make the turkey gobble.
     *
     * @return string
     */
    public function gobble(): string;

    /**
     * Make the turkey fly a short distance.
     *
     * @return string
     */
    public function fly(): string;
}