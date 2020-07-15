<?php

session_start();

$id = $_POST['login'];
$oldpw = $_POST['oldpw'];
$newpw = $_POST['newpw'];

if ((isset($_POST['login']) == true) && strlen($oldpw) !==0 && strlen($newpw) !==0 && $_POST['submit'] === "OK" )
{
    echo "OK\n";

    $tmp = unserialize(file_get_contents('../private/passwd'));
    print_r($tmp);
    echo "\n\n";
    // print_r($tmp['login']);
    
    foreach ($tmp as $ele => $p) {
        if ($p['login'] === $_POST['login'] && $p['passwd'] === hash('sha256', $_POST['oldpw']))
        {
            echo "124";
        }
        
    }
}
else {
    echo "ERROR\n";
}
