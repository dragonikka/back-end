<?php
    if (isset($_GET['arr'])) {
        $stringArr = $_GET['arr'];
        $array = explode(',', $stringArr);
        $numberOfItems = count($array);
        for ($i = 0; $i < intdiv(count($array), 2); $i++) {
            list($array[$i], $array[$numberOfItems - 1 - $i]) = array($array[$numberOfItems - 1 - $i], $array[$i]);
        }
        print_r($array);
    }
    else {
        header("Status: 400 Bad Request");
    }