#!/usr/bin/env php
<?php
    $cont = file_get_contents("./page.html", true);
    // $link = "/(<a.*>)(.*)(<\/a)/i";
    $pattern = "/(<a.*>)(.*)(<\/a)/i";
    // $result = preg_replace_callback($pattern, $cont, $match, function );
    

    $result = preg_replace_callback($pattern, function ($matches) {
        echo 'lalala';
        echo $matches[0];
        return strtolower($matches[0]);
    },
    $result
);

    echo $result;
    // echo $cont;
?>