<?php
    session_start();

    if (!isset($_SESSION['name']) || !isset($_SESSION['passwd']))
    {
        unset($_SESSION['name']);
        unset($_SESSION['passwd']);
        // session_destory();
    }
    else
    {
        $id = $_GET['login'];
        // $passwd = $_GET['passwd'];

        $_SESSION['name'] = $id;
        // $_SESSION['name'] = $passwd;

        // echo "<br />id is {$id} passwd is {$passwd}<br />";
    }

    
    // $_SESSION['password'] = ;
    // $id = session_id();
    // print_r($_SESSION);

    // 특정 세션 변수의 등록 해지

    /* if(!isset($_SESSION["city"])) {
        echo "{$_SESSION['city']} 세션 변수가 삭제되었습니다.";
        unset($_SESSION["city"]);
    } else {
        echo "해당 세션 변수가 등록되어 있지 않습니다.";
    } */

// session_unset();   // 모든 세션 변수의 등록 해지
// session_destroy(); // 세션 아이디의 삭제

?>
<html><body>
<form ...>
    Username: <input ... name="login" value="" />
    <br />
    Password: <... value="" />
    <input type="submit" ... />
</form>
</body></html>