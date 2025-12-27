<?php
  session_start();

  if(isset($_POST['submit'])){

    $userEmail=$_POST['emailS'];
    $fullName=$_POST['fullname'];
    $address=$_POST['address'];
    $passwordCreate=$_POST['createPass'];
    $passwordConfirm=$_POST['confirmPass'];


    $_SESSION['email']=$userEmail;
    $_SESSION['password']=$passwordConfirm;
    $_SESSION['Fullname']=$fullName;

    if($userEmail==""||$fullName==""||$address==""||$passwordCreate==""||$passwordConfirm==""){
       echo"Null Submission!";
    }
    else{
        if($passwordConfirm==$passwordCreate){
          header('location:../Views/Login.html');
        }
        else{
          echo"Create Password And Confirm Passwod Should Be Mathced";
        }
        
    }
  }
  else{
    header('location:SignupCheck.php');
  }
?>