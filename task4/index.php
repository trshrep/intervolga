<?php

$arr = [];

// Генерация 100 чисел
for ($i = 0; $i < 50; $i++)
{
    echo $arr[] = rand(0, 15) . "<br>";
}

echo "<br>";

// Сбор количества последовательных цифр
$result = 0;
$prev = 0;

foreach ($arr as $number)
{
    if ($number == $prev)
    {
        $result++;
    }

    $prev = $number;
}

var_dump($result);
?>