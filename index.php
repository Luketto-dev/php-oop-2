<?php
require_once "classi/Foods.php";
require_once "classi/Games.php";
require_once "classi/Kennel.php";
require_once "classi/User.php";

$user1 = new User("luca.francesconi1995@gmail.com", true);
$user2 = new User("ludovica.capodivento@libero.it", false);

var_dump($user1);
var_dump($user2);


$food = new Foods(6.99, "Orecchie di bovino senza pelo", "14/08/2022");
$food->setQuantity("150g");
$food->setIngredients("Manzo");
$food->setBrand("Area dog");

var_dump($food);


$game = new Games(9.99, "Dental osso gioco per cuccioli", "Polimero Termoplastico");
$game->setBrand("ZooPlus");
$game->setColor("red");

var_dump($game);


$kennel = new Kennel(26.99, "hobbyDog", "95x99x99");
$kennel->setMaterial("resina");
$kennel->setBrand("Ferplast");

var_dump($kennel);

$user1->cart->addProduct($food);

var_dump($user1);


?>