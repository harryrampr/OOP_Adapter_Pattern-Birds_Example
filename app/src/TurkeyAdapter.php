<?php
declare(strict_types=1);

namespace App;

/**
 * Class TurkeyAdapter
 *
 * Represents a TurkeyAdapter which extends the WildTurkey class and implements the Duck interface.
 */
class TurkeyAdapter extends WildTurkey implements Duck
{
    /**
     * Make the TurkeyAdapter quack by gobbling.
     *
     * @return string
     */
    public function quack(): string
    {
        return $this->gobble();
    }

    /**
     * Make the TurkeyAdapter fly by performing a series of short flights.
     *
     * @return string
     */
    public function fly(): string
    {
        $output = '';
        for ($i = 0; $i < 5; $i++) {
            $output .= parent::fly();
        }
        return $output;
    }
}