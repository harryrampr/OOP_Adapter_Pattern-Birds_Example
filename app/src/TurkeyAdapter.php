<?php
declare(strict_types=1);

namespace App;

class TurkeyAdapter extends WildTurkey implements Duck
{

    public function quack(): void
    {
        $this->gobble();
    }

    public function fly(): void
    {
        for ($i = 0; $i < 5; $i++) {
            parent::fly();
        }
    }
}