<?php
declare(strict_types=1);

namespace App;

interface Duck
{
    public function quack(): void;

    public function fly(): void;
}