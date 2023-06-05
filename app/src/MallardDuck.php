<?php
declare(strict_types=1);

namespace App;

/**
 * Class MallardDuck
 *
 * Represents a MallardDuck which implements the Duck interface.
 */
class MallardDuck implements Duck
{
    /**
     * Make the MallardDuck quack.
     *
     * @return string
     */
    public function quack(): string
    {
        return '<li>Quack</li>' . PHP_EOL;
    }

    /**
     * Make the MallardDuck fly.
     *
     * @return string
     */
    public function fly(): string
    {
        return '<li>I am flying</li>' . PHP_EOL;
    }
}