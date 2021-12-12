<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="calc_2.css">
    <title>Calculator</title>
</head>
<body>
<?php
    require 'calc.php'
?>
<form class="calc_form" action="calc_2.php" method="post">
    <h1>Результат: <?= $res ?></h1>
    <input style="margin-bottom: 10px" type="number" name="first_value">
    <input type="number" name="second_value">
    <div class="submit_buttons">
        <input class="submit_button" type="submit" value="+" name="operation">
        <input class="submit_button" type="submit" value="-" name="operation">
        <input class="submit_button" type="submit" value="*" name="operation">
        <input class="submit_button" type="submit" value="/" name="operation">
    </div>
</form>
</body>
</html>
