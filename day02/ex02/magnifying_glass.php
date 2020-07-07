#!/usr/bin/env php
<?php
    $fp = fopen("./page.html", "r") or die("can't read stdin");

    while (!feof($fp)) {
        $result = fgets($fp);
        $pattern = "/(<a )(.*?)(>)(.*)(<\/a>)/si";
        $result = preg_replace_callback($pattern, function ($matches) {
            // echo 'lalala';
            // echo $matches[0];
            var_dump($matches);
            return ;
            // return strtolower($matches[0]);
        },
        $result
    );
    
        // echo $result;
    }
    fclose($fp);
?>