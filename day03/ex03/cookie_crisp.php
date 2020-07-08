<?php
    $key = $_GET['name'];
    $val = $_GET['value'];
    setcookie($key, $val, time() + 1000);
    echo $_COOKIE['plat'];
?>