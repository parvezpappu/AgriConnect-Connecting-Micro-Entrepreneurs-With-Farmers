<?php

    $host = "127.0.0.1";
    $dbname = "products";
    $dbuser = "root";
    $dbpass = "";


    function getConnection(){
        global $host;
        global $dbname;
        global $dbpass;
        global $dbuser;

        $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);

        if (!$con) {
        die("DB Connection failed: " . mysqli_connect_error());
    }
        return $con;
    }


?>