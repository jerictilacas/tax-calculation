<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__.'/vendor/autoload.php');

$totals = new MyApp\Totals();
$totals->setItems([
    [
        'product_id' => 2,
        'quantity' => 1,
        'price' => 2.8,
    ],
    [
        'product_id' => 4,
        'quantity' => 21,
        'price' => 5,
    ],
]);
$totals->setDelivery(10);
$totals->setDiscountPercent(10);


$config = [
    '\MyApp\Totals\Subtotal',
    '\MyApp\Totals\Delivery',
    '\MyApp\Totals\Discount',
    '\MyApp\Totals\Tax',
];

foreach ($config as $class)
{
    /**
     * @var \MyApp\Totals\TotalsInterface $calculator
     */
    $calculator = new $class();
    $calculator->calculate($totals);
}


echo '<pre><dd>'.var_export($totals, true).'</dd></pre>';
die();





