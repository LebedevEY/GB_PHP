<?php
$a = $_POST['first_value'] ?? null;
$b = $_POST['second_value'] ?? null;
$operation = $_POST['operation'];

function mathOperation($a, $b, $operation) {

    if ($a != null && $b != null) {
        switch ($operation){
            case '+':
                return $a + $b;
            case '-':
                return $a - $b;
            case '*':
                return $a * $b;
            case '/':
                if ($b == 0) {
                    print_r('<h1>Нельзя делить на ноль! Вселенная погибнет!!!</h1>');
                } else {
                    return $a / $b;
                }
        }
    }
}

$res = mathOperation($a, $b, $operation);