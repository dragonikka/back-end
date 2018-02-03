<?php

if (isset($_GET['numbers'])) {
    $stringArr = $_GET['numbers'];
    $array = explode(',', $stringArr);

    $countElements = count($array);
    $sorted = true;
    $i = 0;
    while ($sorted) {
        $sorted = false;
        for ($j = 0; $j < $countElements - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                list($array[$j], $array[$j + 1]) = array($array[$j + 1], $array[$j]);
                $sorted = true;
            }
        }
        $i++;
        Var_dump($i);
    }

    $string = implode($array, ', ');
    print_r($string);
}
else {
    header("Status: 400 Bad Request");
}