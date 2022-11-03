<?php require 'vendor/autoload.php';

$inventory = new Market\Inventory();

$inventory->addToInventory(['milk','$ 3.00']); 
$inventory->addToInventory(['cookie','$ 1.00']); 
$inventory->addToInventory(['bean','$ 5.00']);

$inventory->removeFromInventory(2); 

$inventory->getInventory(); 

