<?php

$numberOfOption = count($argv);
if ($args != 1) {
    $stringArg = '';
    for ($i = 1; $i <= $numberOfOption - 1; $i++) {
        $stringArg .= $argv[$i] . ' ';
    }
    echo 'Number of arguments: ' . ($numberOfOption - 1) . "\n" . 'Arguments: ' . $stringArg ;
}
else {
    echo 'No parameters were specified!';
}