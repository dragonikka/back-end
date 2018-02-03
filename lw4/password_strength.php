<?php

    require_once ('include/common.inc.php');
    if ((!isset($_GET['password'])) || (empty($_GET['password']))) {
        exit();
    }
    echo 'Сложность пароля = ' . checkPassword($_GET['password']);