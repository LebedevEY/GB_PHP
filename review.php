<?php
require 'config.php';

$sql_set = "insert into `reviews` (`name`, `review`) values ('{$_POST['name']}', '{$_POST['review']}')";
$res_set = mysqli_query($connect, $sql_set);

function goback()
{
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
}

goback();