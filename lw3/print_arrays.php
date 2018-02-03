<?php

header('Content-Type: text/plain');

/*prime numbers*/
$arrayPrimeNumbers = array(
  2, 3, 5, 7, 11, 13, 17, 19, 23, 29
);
print_r($arrayPrimeNumbers);

/*assoc array*/
$assoc = array(
    'count'    => 'Посчитает количество элементов массива или количество свойств объекта',
    'is_array' => 'Определяет является ли переменная масивом',
    'array_merge' => 'Сливает один или большее количество массивов',
    'empty' => 'Проверяет, пуста ли переменная',
    'print_r' => 'Выводит удобочитаемую информацию о переменной ',
);
print_r($assoc);

/*array(array)*/
$matrix = array(
    array(1, 1, 1, 1),
    array(1, 1, 1, 1),
    array(1, 1, 1, 1),
    array(1, 1, 1, 1)
);
print_r($matrix);