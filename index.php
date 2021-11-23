<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <?php
    $a = "Hello";
    $b = true;
    $c = 45;
    $d = 45.5;
    ?>

    <nav>
        <a href="./minimalistica.php">Четвёртое задание</a>
    </nav>

    <h1>Hello world!</h1>
    <h2>Первое задание</h2>
    <p>Всё настроено и рабоатет!</p>
    <hr>
    <h2>Второе задание</h2>
    <h3>Типы данных:</h3>
    <p class="from_php"><?= var_dump($a) ?></p>
    <p class="from_php"><?= var_dump($b) ?></p>
    <p class="from_php">Неявное преобразование типа при выводе переменной bollean: <?= $b ?></p>
    <p class="from_php"><?= var_dump($c) ?></p>
    <p class="from_php"><?= var_dump($d) ?></p>
    <hr>

    <?php
    echo '<h3>Вывод данных с помощью PHP:</h3>';
    echo 'Hello world from PHP!' . '<br>';
    $name = "Evgen";
    echo "Hello, $name!" . '<br>';

    echo "<hr>";

    echo '<h3>Особенности вывода строк:</h3>';
    $e = 'Hello';
    $f = "world";
    $g = "$e, $f"; //В двойных кавычках значения переменных выводится в HTML
    $h = '$e, $f'; //В одинарных кавычка интерпритатор не разворачивает значения переменных
    $j = $e . ' ' . $f;
    echo $g . '<br>';
    echo $h . '<br>';
    echo $j; //Использование конкатинации
    echo '<hr>';

    echo '<h3>Математические операции:</h3>';
    $aa = 4;
    $bb = 5;
    echo $aa + $bb . '<br>'; // сложение 
    echo $aa * $bb . '<br>'; // умножение 
    echo $aa - $bb . '<br>'; // вычитание 
    echo $aa / $bb . '<br>'; // деление 
    echo $aa % $bb . '<br>'; // остаток от деления 
    echo $aa ** $bb . '<br>'; // возведение в степень
    echo '<hr>';

    echo '<h2>Третье задание</h2>';
    $x = 5;
    $z = '05';
    var_dump($x == $z);         // Почему true? - '05' при сравнении неявно приводится к типу int, 0 при этом отбрасывается
    echo '<br>';
    var_dump((int)'012345');     // Почему 12345? - аналогично предыдущему примеру
    echo '<br>';
    var_dump((float)123.0 === (int)123.0); // Почему false? - при приведении к типу int отбрасывается 0 у второго аргумента, в итоге 123.0 != 123
    echo '<br>';
    var_dump((int)0 === (int)'hello, world'); // Почему true? - При приведении строки к int, в случае отсутствия чисел в строке, она приобразовывается в 0

    echo '<h2>Пятое задание</h2>';
    $first = 1;
    $second = 2;
    $second = $first++;

    echo "\$a = $first, \$b = $second";

    ?>

</body>

</html>