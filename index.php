<?php

require_once __DIR__ . '/autoload.php';

$coffeeMaker = new App\CoffeeMaker();
$coffeeMaker->makeCoffee();

$latterMaker = new App\LatteMaker();
$latterMaker->makeCoffee();
$latterMaker->makeLatte();

$cappuccinoMaker = new App\CappuccinoMaker();
$cappuccinoMaker->makeCoffee();
$cappuccinoMaker->makeCappuccino();

$allInOneCoffeeMaker = new App\AllInOneCoffeeMaker();
$allInOneCoffeeMaker->makeCoffee();
$allInOneCoffeeMaker->makeLatte();
$allInOneCoffeeMaker->makeCappuccino(); 
