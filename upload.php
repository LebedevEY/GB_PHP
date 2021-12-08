<?php
require "config.php";

$sql = "INSERT INTO `images` (`name`, `path`, `size`, `views`) VALUES ('{$_FILES['photo']['name']}', '{$_SERVER['DOCUMENT_ROOT']}/img/', '{$_FILES['photo']['size']}', '1')";
$res = mysqli_query($connect, $sql);

function goback()
{
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
}

$path = "{$_SERVER['DOCUMENT_ROOT']}/img/{$_FILES['photo']['name']}";
if (move_uploaded_file($_FILES['photo']['tmp_name'], $path)) {
    goback();
} else {
    print_r('Загрузка не удалась');
}
