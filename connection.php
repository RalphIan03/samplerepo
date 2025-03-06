<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test_db";

    //mysql:host=localhost;dbname=test_db
    $con = new PDO("mysql:host=".$servername.
                        "; dbname=".$dbname, 
                        $username, 
                        $password);
    $con -> setAttribute(PDO::ATTR_ERRMODE, 
                            PDO::ERRMODE_EXCEPTION);
    // echo("connected");


?>