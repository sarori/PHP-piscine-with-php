#!/usr/bin/env php

<?php
    $arr = array();
    for ($x= 1; $x < $argc; $x++)
    {
        $tmp = preg_split("/ +/", trim($argv[$x]));
        $arr = array_merge($arr, $tmp);
        
    }
    sort($arr);
    foreach($arr as $elem)
        echo "$elem\n";

?>
