<?php
declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Duck;
use App\MallardDuck;
use App\TurkeyAdapter;
use App\WildTurkey;

$duck = new MallardDuck();

$turkey = new WildTurkey();
$turkeyAdapter = new TurkeyAdapter;

echo "<div class=\"bird\">\n<h2>The turkey says:</h2>\n<ul>", PHP_EOL;
$turkey->gobble();
$turkey->fly();
echo "</ul>\n</div>", PHP_EOL;

echo "<div class=\"bird\">\n<h2>The duck says:</h2>\n<ul>", PHP_EOL;
testDuck($duck);
echo "</ul>\n</div>", PHP_EOL;

echo "<div class=\"bird\">\n<h2>The turkey adapter says:</h2>\n<ul>", PHP_EOL;
testDuck($turkeyAdapter);
echo "</ul>\n</div>", PHP_EOL;

function testDuck(Duck $duck): void
{
    $duck->quack();
    $duck->fly();
}