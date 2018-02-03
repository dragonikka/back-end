<?php

header('Content-Type: text/plain');

if ((isset($_GET['arg1'])) && (isset($_GET['arg2'])) && (isset($_GET['operation'])))
{
    $arg1 = $_GET['arg1'];
    $arg2 = $_GET['arg2'];
    $operation = $_GET['operation'];
	if ($operation == 'add')
	{
	    echo $arg1 + $arg2;
	}
	elseif ($operation == 'sub')
	{
	    echo $arg1 - $arg2;
	}
	elseif ($operation == 'mul')
	{
	    echo $arg1 * $arg2;
	}
	elseif ($operation == 'div')
	{
	    echo $arg1 / $arg2;
	}
}
else
{
    echo 'Некорректные данные';
}