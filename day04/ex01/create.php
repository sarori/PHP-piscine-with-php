<?php
    session_start();

    $id = $_POST['login'];
    $passwd = $_POST['passwd'];

    if ((isset($_POST['login']) == true) && strlen($passwd) !==0 && $_POST['submit'] === "OK" )
    {
        echo "OK";

        $_SESSION['login'] = $id;
        $_SESSION['passwd'] = $passwd;
    }

    // if (!isset($_POST['login']) || !isset($_POST['passwd']))
    else
    {
        echo "ERROR"; 
    }
    // else
    // {
    //     echo "OK";
    //     $id = $_POST['login'];
    //     $passwd = $_POST['passwd'];

    //     $_SESSION['login'] = $id;
    //     $_SESSION['passwd'] = $passwd;
       
        
    // }
?>


