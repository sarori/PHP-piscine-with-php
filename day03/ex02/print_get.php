<?php
    if(isset($_GET["login"]))
    {
        foreach($_GET as $key => $value)
        {
            echo "$key: $value\n";
        }
    }  
?>