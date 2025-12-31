<?php

    $host = "127.0.0.1";
    $dbname = "authentication";
    $dbuser = "root";
    $dbpass = "";


    function getConnection(){
        global $host;
        global $dbname;
        global $dbpass;

        $con = mysqli_connect($host, $GLOBALS['dbuser'], $dbpass, $dbname);
        return $con;
    }

?>