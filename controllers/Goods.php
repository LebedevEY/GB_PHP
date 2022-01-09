<?php
include_once "../model.php";

$catalog = getAll($connect, 'goods');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$good = getOne($connect, $id, 'goods');
$cart = getAll($connect, 'cart');
$sum = getSum($connect, 'price', 'count', 'cart');

if ($sum[0] == '') {
    $sum[0] = 0;
}

if (count($cart) != 0) {
    $_SESSION['cart_empty'] = 0;
} else {
    $_SESSION['cart_empty'] = 1;
}