<?php
include_once "../model.php";

$catalog = getAll($connect, 'goods');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$good = getOne($connect, $id, 'goods');

$_SESSION['user'] = 'user_' . mt_rand();