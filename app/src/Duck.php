<?php
declare(strict_types=1);

namespace App;

/**
 * Represents a Duck interface.
 */
interface Duck
{
    /**
     * Make the duck quack.
     *
     * @return string
     */
    public function quack(): string;

    /**
     * Make the duck fly.
     *
     * @return string
     */
    public function fly(): string;
}