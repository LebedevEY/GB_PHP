<?PHP

//Первое задание

$a = rand(-100, 100);
$b = rand(-100, 100);

function firstTask($a, $b)
{
    if ($a >= 0 && $b >= 0) {
        echo "$a - $b =" . " " . ($a - $b) . "<br>";
    } elseif ($a <= 0 && $b <= 0) {
        echo "$a * $b =" . " " . ($a * $b) . "<br>";
    } else {
        echo "$a + $b =" . " " . ($a + $b) . "<br>";
    }
}

firstTask($a, $b);

//Второе задание

echo "<br>";

$c = rand(0, 15);

switch ($c) {
    case 0:
        echo 0 . "<br>";
        $c++;
    case 1:
        echo 1 . "<br>";
        $c++;
    case 2:
        echo 2 . "<br>";
        $c++;
    case 3:
        echo 3 . "<br>";
        $c++;
    case 4:
        echo 4 . "<br>";
        $c++;
    case 5:
        echo 5 . "<br>";
        $c++;
    case 6:
        echo 6 . "<br>";
        $c++;
    case 7:
        echo 7 . "<br>";
        $c++;
    case 8:
        echo 8 . "<br>";
        $c++;
    case 9:
        echo 9 . "<br>";
        $c++;
    case 10:
        echo 10 . "<br>";
        $c++;
    case 11:
        echo 11 . "<br>";
        $c++;
    case 12:
        echo 12 . "<br>";
        $c++;
    case 13:
        echo 13 . "<br>";
        $c++;
    case 14:
        echo 14 . "<br>";
        $c++;
    case 15:
        echo 15 . "<br>";
        $c++;
}

echo "<br>";

//Третье задание

function sum($a, $b)
{
    return $a + $b;
}

function diff($a, $b)
{
    return $a - $b;
}

function mult($a, $b)
{
    return $a * $b;
}

function div($a, $b)
{
    return $a / $b;
}

echo "сложение: " . sum(3, 2) . "<br>";
echo "вычитание: " . diff(6, 4) . "<br>";
echo "умножение: " . mult(2, 2) . "<br>";
echo "деление: " . div(10, 2) . "<br>";

echo "<br>";

//Четвёртое задание

function mathOperation($a, $b, $operation)
{
    switch ($operation) {
        case '+':
            echo sum($a, $b);
            break;
        case '-':
            echo diff($a, $b);
            break;
        case '*':
            echo mult($a, $b);
            break;
        case '/':
            echo div($a, $b);
            break;
        default:
            echo "Невеный оператор";
    }
}

echo mathOperation(1, 1, '+') . "<br>";
echo mathOperation(3, 2, '-') . "<br>";
echo mathOperation(3, 2, '*') . "<br>";
echo mathOperation(6, 2, '/') . "<br>";
echo mathOperation(4, 2, '<') . "<br>";

echo "<br>";

//Шестое задание

function power($val, $pow)
{
    if ($pow <= 0) {
        return 1;
    }
    return $val * power($val, $pow - 1);
}

echo power(2, 10) . "<br>";

echo "<br>";
