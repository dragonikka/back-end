<?php

    require_once ('include/common.inc.php');
    if ((isset($_GET['str'])) && (!empty($_GET['str']))) {
        echo withoutLast($_GET['str']);
    }
    else {
        exit();
    }