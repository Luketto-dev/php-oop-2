<?php
require_once "classi/Foods.php";
require_once "classi/Games.php";
require_once "classi/Kennel.php";
require_once "classi/User.php";
require_once "classi/CreditCard.php";

$metodoDiPagamento = key_exists("metodo", $_GET) ? (int) $_GET["metodo"] : null;

$user = new User("luca.francesconi1995@gmail.com", "erBranda");
$user->paymentHandler->addpaymentMethod(new CreditCard("mastercard", "5333171129590033", "757", "12/22"));

$user2 = new User("ludovica.capodivento@libero.it","ludo97");
$user2->paymentHandler->addpaymentMethod(new CreditCard("visa", "6333171152347171", "532", "10/21"));

$snack = new Foods(6.99, "crocchette di manzo", "2022/10/03");
$snack2 = new Foods(9.99,"scotoletta di pollo", "2022/09/12");
$smallBall= new Games(4.49, "pallina lima unghie", "plastica");
$bigKennel = new Kennel(29.99, "Jackson cuccia", "100x90x90");

$products = [$snack, $smallBall, $bigKennel];

$user->cart->addProduct($products[0], $products[2]);
$user2->cart->addProduct($products[1], $products[2]);


if (!isset($metodoDiPagamento)) {
    echo "inserisci metodo di pagamento tramite URl";
}else{
    $user->checkOut($metodoDiPagamento);
    echo "<br>";
    $user2->checkOut($metodoDiPagamento);
}





?>