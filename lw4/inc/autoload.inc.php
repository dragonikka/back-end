<?php

function load() {
    $dir = './inc';
    $files = scandir($dir);
    foreach ($files as $key => $value) {
        if (preg_match('/.*\.inc\.php/', $value)) {
            require_once ($value);
        }
    }
}