<?php

include_once "../model.php";

$count = 1;
$user = $_SESSION['user'];
$id = $_POST['id'];

//Доделать авторизацию
//if (isset($_POST['id'])) {
//    $id = (int)($_POST['id']);
//    if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
//        $_SESSION['user'] = $_SESSION['login'];
//    }
//}

if (isset($_POST['action'])  and $_POST['action'] === 'add') {
    $good = getOne($connect, $id, 'goods');
    $cart_sql = "SELECT * FROM `cart` WHERE `good_id` = {$id}";
    $cart_res = mysqli_query($connect, $cart_sql);
    $i = mysqli_fetch_assoc($cart_res);

    if (isset($i)){
        $count = $i['count'];
        $count++;
        cartCounter($connect, $id, $count);
    } else {
        $sql = "INSERT INTO `cart` (`id`, `good_id`, `name`, `img`, `price`, `count`, `user`) VALUES (NULL, '{$id}', '{$good['name']}', '{$good['img']}', '{$good['price']}', '{$count}', '{$user}');";
        $res = mysqli_query($connect, $sql);
    }
}

if (isset($_POST['action'])  and $_POST['action'] === 'delete') {
    $sql = "DELETE FROM `cart` WHERE `id` = {$id}";
    $res = mysqli_query($connect, $sql);
}

if (isset($_POST['action']) and $_POST['action'] === 'clear') {
    $sql = "DELETE FROM `cart`";
    $res = mysqli_query($connect, $sql);
}

if (isset($_POST['action'])) {
    $cart_sql = "SELECT * FROM `cart` WHERE `good_id` = {$id}";
    $cart_res = mysqli_query($connect, $cart_sql);
    $i = mysqli_fetch_assoc($cart_res);
    if (isset($i) and $_POST['action'] === 'count+') {
        $count = $i['count'];
        $count++;
        cartCounter($connect, $id, $count);
    } elseif (isset($i) and $_POST['action'] === 'count-') {
        $count = $i['count'];
        $count--;
        cartCounter($connect, $id, $count);
    }
}