<?php

    if ((!isset($_GET['identifier'])) || (empty($_GET['identifier']))) {
        exit();
    }
    $identifier = $_GET['identifier'];
    $isIdentifier = true;
    if (!ctype_alnum($identifier)) {
        $isIdentifier = false;
        echo '<p>no</p>' . '<p>Символы не буквенно-циферные</p>';
    }
    if ((!ctype_alpha(substr($identifier, 0, 1))) && ($isIdentifier)) {
        $isIdentifier = false;
        echo '<p>no</p>' . '<p>Первый символ не буква</p>';
    }
    if ($isIdentifier) {
        echo '<p>yes</p>';
    }