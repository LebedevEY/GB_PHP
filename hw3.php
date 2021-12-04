<?PHP

//Первое задание

$i = 0;
while ($i <= 100) {
    if ($i % 3 == 0) {
        echo $i . ', ';
    }
    $i++;
};
echo '<br>';
echo '<br>';

//Второе задание

$j = 0;

do {
    if ($j == 0) {
        echo $j . ' - ноль.<br>';
    } elseif ($j % 2 == 0) {
        echo $j . ' - чётное число.<br>';
    } else {
        echo $j . ' - нечётное число.<br>';
    }
    $j++;
} while ($j <= 10);
echo '<br>';
echo '<br>';

//Третье задание

$arrRegions = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ростовская область' => ['Ростов-на-Дону', 'Шахты', 'Волгодонск'],
    'Краснодарский край' => ['Краснодар', 'Новороссийск', 'Геленджик']
];

foreach ($arrRegions as $region => $citys) {
    echo $region . ':<br>';
    foreach ($citys as $city) {
        echo $city . ', ';
    }
    echo '<br>';
    echo '<br>';
}

echo '<br>';



//Четвёртое задание

function translit($str)
{
    $arrLatinLetters = [
        'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
        'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
        'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
        'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
        'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
        'ш' => 'sh',   'щ' => 'sch',  'ь' => '\'',     'ы' => 'y',    'ъ' => '',
        'э' => 'e',    'ю' => 'yu',   'я' => 'ya'
    ];

    echo strtr(mb_strtolower($str), $arrLatinLetters);
}

translit('Блин, как же хочется спать!');

echo '<br>';



//Пятое задание

echo '<br>';

$firstStr = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, sequi.';
$secondStr = 'Show must go on!';

function replacer($str)
{
    return str_replace(' ', '_', $str);
}

echo replacer($firstStr);
echo '<br>';
echo replacer($secondStr);

echo '<br>';
echo '<br>';


//Шестое задание


$arrayMenu = [
    'меню 1' =>
    [
        'пункт меню',
        'пункт меню',
        'пункт меню'
    ],
    'меню 2' =>
    [
        'пункт меню',
        'пункт меню',
        'подменю' =>
        [
            'пункт подменю',
            'пункт подменю',
            'пункт подменю'
        ]
    ],
];



function createNav($array)
{
    $navigation = '<ol>';
    foreach ($array as $key => $item) {
        if (is_array($item)) {
            $navigation .= "<li>$key";
            $navigation .= createNav($item);
            $navigation .= '</li>';
        } else {
            $navigation .= "<li>$item</li>";
        }
    }
    $navigation .= '</ol>';
    return $navigation;
}

echo createNav($arrayMenu);

echo '<br>';
echo '<br>';


//Седьмое задание

for ($i = 0; $i < 10; print $i++) {
};

echo '<br>';
echo '<br>';


echo "<p>Восьмое задание</p>";

$arrRegions = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ростовская область' => ['Ростов-на-Дону', 'Шахты', 'Волгодонск'],
    'Краснодарский край' => ['Краснодар', 'Новороссийск', 'Геленджик']
];

foreach ($arrRegions as $region => $citys) {
    echo $region . ':<br>';
    foreach ($citys as $city) {
        if (mb_stripos($city, 'к') === 0) {
            echo $city . ', ';
        }
    }
    echo '<br>';
    echo '<br>';
}

//Восьмое задание

function createURL($str)
{
    $arrLatinLetters = [
        'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
        'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
        'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
        'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
        'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
        'ш' => 'sh',   'щ' => 'sch',  'ь' => '\'',     'ы' => 'y',    'ъ' => '',
        'э' => 'e',    'ю' => 'yu',   'я' => 'ya'
    ];

    echo str_replace(' ', '_', strtr(mb_strtolower($str), $arrLatinLetters));
}

createURL('Вот мой новый блог');
