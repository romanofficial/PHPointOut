<?php
require 'CoffeeShop.php';
require 'Coffee.php';
require 'Espresso.php';
require 'Latte.php';
require 'Cappuccino.php';


use Coffee\CoffeeShop;
use Coffee\Espresso;
use Coffee\Latte;
use Coffee\Cappuccino;

$coffeeShop = new CoffeeShop();

// Registering coffee types with the shop
$coffeeShop->register('espresso', function() {
    return new Espresso();
});

$coffeeShop->register('latte', function() {
    return new Latte();
});

$coffeeShop->register('cappuccino', function() {
    return new Cappuccino();
});

// Serving the coffee
echo $coffeeShop->serve('espresso'); // Output: Serving an Espresso!
echo "\n";
echo $coffeeShop->serve('latte');    // Output: Serving a Latte!
echo "\n";
echo $coffeeShop->serve('Cappuccino');    // Output: Serving a Latte!
echo "\n";
