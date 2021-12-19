<?php

include_once "../model.php";
include_once "../config.php";

$count = 1;

$_SESSION['cart_empty'] = 1;
$user = $_SESSION['user'];

if (isset($_POST['id'])) {
    $id = (int)($_POST['id']);
    if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
        $_SESSION['user'] = $_SESSION['login'];
    }
    $user = $_SESSION['user'];
}

$good = getOne($connect, $id, 'goods');
$i = getOne($connect, $id, 'cart');

if (isset($i)){
    print_r($i);
    $count = $i['count'];
    $count++;
    $sql = "update cart set count = {$count} where good_id = {$id}";
    $res = mysqli_query($connect, $sql);
}

$sql = "insert into `cart` (`good_id`, `name`, `price`, `count`, `login`) values ('$id', '{$good['name']}', '{$good['price']}', '$count', '$user')";
$res = mysqli_query($connect, $sql);

print_r("<h1>Success</h1>");