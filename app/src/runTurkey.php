<?php
declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Duck;
use App\MallardDuck;
use App\TurkeyAdapter;
use App\WildTurkey;

/**
 * Display the title of the Bird Adapter Simulation.
 */
echo '<h1>Bird Adapter Simulation</h1>';

$duck = new MallardDuck();
$turkey = new WildTurkey();
$turkeyAdapter = new TurkeyAdapter();

// Show turkey behavior
echo displayBirdSays('The turkey says:');
echo $turkey->gobble();
echo $turkey->fly();
echo "</ul>\n</div>", PHP_EOL;

// Show duck behavior
echo displayBirdSays('The duck says:');
echo testDuck($duck);

// Show turkey adapter behavior
echo displayBirdSays('The turkey adapter says:');
echo testDuck($turkeyAdapter);

/**
 * Test the behavior of a Duck object.
 *
 * @param Duck $duck The Duck object to test.
 * @return string The output representing the behavior of the Duck.
 */
function testDuck(Duck $duck): string
{
    $output = $duck->quack();
    $output .= $duck->fly();
    $output .= "</ul>\n</div>" . PHP_EOL;
    return $output;
}

/**
 * Display the title for a bird's behavior.
 *
 * @param string $text The title of the bird's behavior.
 * @return string The HTML string representing title.
 */
function displayBirdSays(string $text): string
{
    return "<div class=\"bird\">\n<h2>{$text}</h2>\n<ul>" . PHP_EOL;
}