<?php

include_once "../config.php";

$_SESSION['user'] = 'user' . mt_rand();

function getAll ($connect, $table) {
    $sql = "select * from {$table}";
    $res = mysqli_query($connect, $sql);
    $result = [];
    for ($i = 0; $i < mysqli_num_rows($res); $i++) {
        $result[] = mysqli_fetch_assoc($res);
    }

    return $result;
}

function getOne($connect, $id, $table) {
    $sql = sprintf("select * from {$table} where id=%d", (int)$id);
    $res = mysqli_query($connect, $sql);
    return mysqli_fetch_assoc($res);
}

