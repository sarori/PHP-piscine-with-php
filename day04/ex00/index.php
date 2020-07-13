<?php
    session_start();

    if (!isset($_GET['login']) || !isset($_GET['passwd']))
    {
        unset($_SESSION['login']);
        unset($_SESSION['passwd']);
    }
    else
    {
        $id = $_GET['login'];
        $passwd = $_GET['passwd'];

        $_SESSION['login'] = $id;
        $_SESSION['passwd'] = $passwd;

        echo "<html><body><br /> <form ...>";
        echo "Username: <input ... name='login' value='$id' /> <br />";
        echo "Password: <... value='$passwd' /><br /><input type='submit' ... />";
        echo "</form><br /></body></html>"; 
    }
?>