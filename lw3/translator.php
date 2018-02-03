<?php
    if (isset($_GET['word'])) {
        $arrayTranslate = array(
            'Keyboard'  => 'Клавиатура',
            'Something' => 'Что-либо',
            'Time'      => 'Время',
            'Quality'   => 'Качество',
            'Number'    => 'Число',
            'Engineer'  => 'Инжинер',
            'Nothing'   => 'Ничего'
        );
        $word = $_GET['word'];
        if (array_key_exists($word, $arrayTranslate)) {
            echo $arrayTranslate[$word];
        }
        elseif (array_search($word, $arrayTranslate)) {
            echo array_search($word, $arrayTranslate);
        }
        else {
            header('Status: 404 Not Found');
        }
    }
    else {
        header("Status: 400 Bad Request");
    }