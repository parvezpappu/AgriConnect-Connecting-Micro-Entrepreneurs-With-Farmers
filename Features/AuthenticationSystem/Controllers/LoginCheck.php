<?php
session_start();
   if(isset($_POST['subMit'])){

      $userEmailSignUp=$_SESSION['email'];
      $passwordSignUp=$_SESSION['password'];

      $userEmailLogin=$_POST['email'];
      $passwordLogin=$_POST['pasword'];

    if($userEmailLogin==""||$passwordLogin==""){
        echo"Null Submission !";
    }

 else{

  if($userEmailSignUp===$userEmailLogin && $passwordSignUp===$passwordLogin){
        $_SESSION['valid']=true;
        setcookie("valid","true",time()+5000,"/");
        header('location:../Views/DashBoard.php');
    }
     else{
     echo"Email and Password Should Be Same From SignUp";
    }

   }
}


  
?>
