<?php
    /* Database credentials. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    define ('URL','http://localhost/dashboard/testmvc/');

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DB', 'smabd');
    define('CHARSET', 'utf8mb4');

    $link = mysqli_connect(HOST, USER, PASSWORD,DB);

    if($link === false){
        die("ERROR: Could not connect. " .
    mysqli_connect_error());
    }
?>