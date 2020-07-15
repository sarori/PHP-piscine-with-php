<?php
    session_start();

    $id = $_POST['login'];
    $passwd = $_POST['passwd'];

    if ((isset($_POST['login']) == true) && strlen($passwd) !==0 && $_POST['submit'] === "OK" )
    {
        if (!file_exists('../private'))
        {
            mkdir("../private");
        }
        if (!file_exists('../private/passwd'))
        {
            file_put_contents('../private/passwd', null);
        }
        $tmp= unserialize(file_get_contents('../private/passwd'));
        if ($tmp) {
            $cnt = 0;
            foreach($tmp as $ele => $p){
                if ($p['login'] === $_POST['login'])
                {
                    $cnt = 1;
                    
                }
            }
        }
        if ($cnt)
        {
            echo "ERROR\n";
            exit();
        }
        $_SESSION['login'] = $id;
        $_SESSION['passwd'] = $passwd;
        $arr = array(
            "login" =>$id, "passwd" => hash('sha256', $passwd)
        );
        $test_serialize = serialize($arr);
        echo $test_serialize;
        file_put_contents('../private/passwd', $test_serialize);
        
        echo "\nOK\n";
    }

    else
    {
        echo "ERROR\n"; 
    }
 
?>


