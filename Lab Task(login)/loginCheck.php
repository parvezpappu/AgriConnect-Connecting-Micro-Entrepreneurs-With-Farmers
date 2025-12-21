<?php
session_start();

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){
        echo "Please provide your mail or password!";
    }
        else{
            if(!strlen($usermail) < 3){
                $_SESSION['status'] = true;
                header('location: home.php');
            }
            else{
                echo "username must contain 3 characters";
            }
        }
    }
else{
    header('location: login.html');
    }
?>