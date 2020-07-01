#!/usr/bin/env php
<?php
    $arr = array();
    if ($argc >= 1)
    {
        $tmp = preg_split("/[\s,]+/", $argv[1]);
        $arr = array_merge($arr, $tmp);
    }
    $first = array_shift($arr);
    array_push($arr, $first);
    foreach($arr as $elem)
        $str .= $elem." ";
    echo trim($str);
?>