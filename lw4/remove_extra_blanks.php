<?php

    require_once ('include/common.inc.php');
    if ((!isset($_GET['text'])) || (empty($_GET['text']))) {
        exit();
    }
    echo removeExtraBlanks($_GET['text']);