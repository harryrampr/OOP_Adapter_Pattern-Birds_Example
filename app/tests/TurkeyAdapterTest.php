<?php

namespace Tests;

use App\TurkeyAdapter;
use PHPUnit\Framework\TestCase;

/**
 * Class TurkeyAdapterTest
 *
 * Test case for the TurkeyAdapter class.
 */
class TurkeyAdapterTest extends TestCase
{
    /**
     * Test that calling `quack()` method on TurkeyAdapter invokes `gobble()` method on WildTurkey.
     *
     * @return void
     */
    public function testQuackInvokesGobbleOnWildTurkey(): void
    {
        $turkeyAdapter = new TurkeyAdapter();
        $expected = '<li>Gobble gobble</li>' . PHP_EOL;

        $this->assertSame($expected, $turkeyAdapter->quack());
    }

    /**
     * Test that calling `fly()` method on TurkeyAdapter performs a series of short flights.
     *
     * @return void
     */
    public function testFlyPerformsShortFlights(): void
    {
        $turkeyAdapter = new TurkeyAdapter();
        $expected = '';
        for ($i = 1; $i <= 5; ++$i) {
            $expected .= '<li>I am flying a short distance</li>' . PHP_EOL;
        }

        $this->assertSame($expected, $turkeyAdapter->fly());
    }
}