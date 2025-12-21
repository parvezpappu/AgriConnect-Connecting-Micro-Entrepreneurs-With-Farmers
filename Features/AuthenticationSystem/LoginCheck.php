<?php
session_start();
   if(isset($_POST['submit'])){
    $userame=$_SESSION['email'];
    $passord=$_SESSION['password'];
    if($userame==""||$passord==""){
        header('location:Login.php');
    }
    $userNameL=$_POST['email'];
    $passwordL=$_POST['password'];
    if($userame===$userNameL && $passord===$passwordL){
        header('location:DashBoard.php');
    }
    else{
     header('location:Login.php');
    }
   }
   else{
    header('location:Login.php');
   }
  
?>
