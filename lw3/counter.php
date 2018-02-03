<?php
    if (isset($_GET['string'])) {
        $string = $_GET['string'];
        $string = strtoupper($string); /*без регистра*/
        $array = preg_split('//u', $string, -1, PREG_SPLIT_NO_EMPTY);
        $arrayCount = array_count_values($array);
        foreach ($arrayCount as $key => $value) {
            echo '<p>' . $key . ' - ' . $value . '</p>';
        }
    }
    else {
            header("Status: 400 Bad Request");
    }