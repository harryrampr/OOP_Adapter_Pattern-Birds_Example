<?php
declare(strict_types=1);

namespace App;

class MallardDuck implements Duck
{

    public function quack(): void
    {
        echo '<li>Quack', PHP_EOL;
    }

    public function fly(): void
    {
        echo '<li>I am flying', PHP_EOL;
    }
}