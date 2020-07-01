#!/usr/bin/env php
<?php
    $arr = array();
    if ($argc == 1)
    {
        echo "Incorrect Parameters";
        exit();
    }
    else if ($argc == 2)
    {
        $tmp = str_replace(" ", "", $argv[1]);
        $num1 = intval($tmp);
        $op = substr(substr($tmp, strlen((string)$num1)), 0, 1);
        $num2 = substr(substr($tmp, strlen((string)$num1)), 1);
        if (!is_numeric($num1) || !is_numeric($num2))
        {
            echo "Syntax Error\n";
            exit();
        }
        switch($op) {
            case ("*") :
                echo $num1 * $num2;
            break;
            case ("+") :
                echo $num1 + $num2;
                break;
            case ("-") :
                echo $num1 - $num2;
                break;
            case ("/") :
                echo $num1 / $num2;
                break;
            case ("%") :
                echo $num1 % $num2;
                break;
            default:
                echo "Syntax Error\n";
                exit();
        }
    }
    else
        echo "Syntax Error\n";
    echo "\n";
?>
