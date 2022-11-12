<?php

ini_set('display_errors', true);

require('Classes/ShopProduct.php');
require('Classes/ShopProductWriter.php');


$product = new ShopProduct(
    "Собачье сердце", 
    "Михаил", 
    "Булгаков", 
    5.99
);
$product->newProperty = "Новое свойство, которого нету в Классе"; // Можно записывать новые свойства в объект

$writer = new ShopProductWriter();
$writer->write($product);
