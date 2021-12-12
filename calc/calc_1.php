<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="calc_1.css">
    <title>Calculator</title>
</head>
<body>
<?php
require 'calc.php'
?>
    <form class="calc_form" action="calc_1.php" method="post">
        <input style="width: 50px" autofocus type="number" name="first_value">
        <select name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input style="width: 50px" type="number" name="second_value">
        <p>=</p>
        <p><?= $res ?></p>
        <input type="submit" value="Посчитать">
    </form>
</body>
</html>



