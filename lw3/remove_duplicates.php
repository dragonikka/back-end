<?php
    $numberOfArg = count($argv);
    if ($numberOfArg == 2) {
        $stringOfArg = $argv[1];
        $arrayArg = str_split($stringOfArg);
        $uniqueArray = [];
        $uniqueArray = array_unique($arrayArg, SORT_LOCALE_STRING);
        $stringUnique = implode($uniqueArray);
        echo $stringUnique;
    }
    else {
        echo 'Incorrect number of arguments!' . "\n" . 'Usage php remove_duplicates.php <input string>';
    }