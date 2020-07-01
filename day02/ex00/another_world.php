#!/usr/bin/env php

<?php
    $tmp = preg_split("/ +/", trim($argv[1]));
    $str = "";
    foreach ($tmp as $elem)
        $str .= $elem." ";
    echo trim($str);
?>

