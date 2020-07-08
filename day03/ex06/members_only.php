<?php
    if(!isset($_SERVER['PHP_AUTH_USER']))
    {
        header('WWW-Authenticate: Basic realm="My realm"');
        header('HTTP/1.0 401 Unauthorized');
    }
    {
        
        $path = file_get_contents("../img/42.png");
        header('Content-Type: image/png;base64');
        $s = $_SERVER['PHP_AUTH_USER'];
        echo "<html><body>\n";
        echo "Hello ". $s. "<br />";
        echo "<img src=data:image/png;base64". base64_encode($path). " </body></html>";
    } 
   
?> 