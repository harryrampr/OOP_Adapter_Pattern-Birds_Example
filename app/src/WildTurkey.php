<?php

namespace App;

class WildTurkey implements Turkey
{

    public function gobble(): void
    {
        echo '<li>Gobble gobble', PHP_EOL;
    }

    public function fly(): void
    {
        echo '<li>I am flying a short distance', PHP_EOL;
    }
}