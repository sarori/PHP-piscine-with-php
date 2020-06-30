#!/usr/bin/env php

<?php

    $arr = array();

    for ($x = 0; $x < $argc; $x++)
    {
        $arr[$x] = array_filter($argv[$x]);
    }
    sort($arr);
    print_r($arr);


    $arg = 1;
    $arr = array();
    foreach ($argv as $elem)
    {
        if ($arg++ > 1)
        {
            $temp = preg_split("/ +/", trim($elem));
            if ($temp[0] != "")
                $arr = array_merge($arr, $temp);
        }
    }
    sort($arr);
    foreach ($arr as $elem)
        echo "$elem"."\n";

?>
