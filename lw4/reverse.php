<?php

    require_once ('include/common.inc.php');
    if ((!isset($_GET['str'])) || (empty($_GET['str']))) {
        exit();
    }
    echo revers($_GET['str']);