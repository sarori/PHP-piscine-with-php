#!/usr/bin/env php
<?php
    $arr = array();
    $num = array();
    $alpha = array();
    $other = array();

    if ($argc >= 1)
    {
       for ($x = 1; $x < $argc; $x++)
       {
            $tmp = preg_split("/ +/", trim($argv[$x]));
            $arr = array_merge($arr, $tmp);
            
       }
       foreach($arr as $elem)
       {

            if (is_numeric($elem) === true)
            {
                array_push($num, $elem);
                sort($num);
                echo "$elem";
            }
                
            else if (is_string($elem))
                array_push($alpha, $elem);
            else
                array_push($other, $elem);
       }

       sort($num);
       sort($alpha);
       sort($other);
       foreach($num as $value){
            echo "$value";
       }
       print_r($num);
    }
?>


