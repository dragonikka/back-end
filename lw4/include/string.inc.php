<?php

    function last($str) {
        return substr($str, -1);
    }

    function withoutLast($str) {
        return substr($str, 0, strlen($str) - 1);
    }

    function revers($str) {
        $array = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
        for ($i = 0; $i < intdiv(count($array), 2); $i++) {
            list($array[$i], $array[count($array) - 1 - $i]) = array($array[count($array) - 1 - $i], $array[$i]);
        }
        $str = implode($array);
        return $str;
    }

    function removeExtraBlanks($text) {
        return preg_replace("/  +/"," ", $text);
    }

    function calcStrengthByLength($password)
    {
        return 4 * strlen($password);
    }

    function calcStrengthByNumberOfDigits($password)
    {
        return 4 * strlen(preg_replace('/[^\d]/','', $password));
    }

    function calcStrengthByNumberOfUppercase($password)
    {
        return 2 * (strlen($password) - strlen(preg_replace('/[^A-Z]/', '', $password)));
    }

    function calcStrengthByNumberOfLowercase($password)
    {
        return 2 * (strlen($password) - strlen(preg_replace('/[^a-z]/','', $password)));
    }

    function calcStrengthByNumberOfCharacter($password)
    {
        if (ctype_alpha($password)) {
            return - strlen($password);
        }
        else
            return 0;
    }

    function calcStrengthByNumberOfNumbers($password)
    {
        if (ctype_digit($password)) {
            return - strlen($password);
        }
        else
            return 0;
    }

    function calcStrengthByNumberOfCountsCharacter($password)
    {
        $reliability = 0;
        $arrayPassword = preg_split('//u', $password, -1, PREG_SPLIT_NO_EMPTY);
        $arrayCount = array_count_values($arrayPassword);
        foreach ($arrayCount as $key => $value) {
            if ($value > 1) {
                $reliability = $reliability - $value;
            }
        }
        return $reliability;
    }

    function checkPassword($password) {
        $strength = 0;
        $strength = calcStrengthByLength($password);
        $strength += calcStrengthByNumberOfDigits($password);
        $strength += calcStrengthByNumberOfUppercase($password);
        $strength += calcStrengthByNumberOfLowercase($password);
        $strength += calcStrengthByNumberOfCharacter($password);
        $strength += calcStrengthByNumberOfNumbers($password);
        $strength += calcStrengthByNumberOfCountsCharacter($password);
        return $strength;
    }