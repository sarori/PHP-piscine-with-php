#!/usr/bin/env php

<?php
    $new_arr = array_filter(explode(' ', $argv[1]));
    $str = "";

    foreach ($new_arr as $value)
    {
        $str .= $value." ";
            
    }
    echo trim($str);
?>