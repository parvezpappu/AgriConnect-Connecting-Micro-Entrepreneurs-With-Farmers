<?php
   session_start();

   if(isset($_POST['submit']))
   {
         $email=$_POST['email'];
         $password=$_POST['password'];

         $SignupEmail = $_SESSION['Email'];
         $SignupPass = $_SESSION['Password'];

         if($email == $SignupEmail && $password == $SignupPass)
         {
               header('location: dashboard.php');
         }
         else{
            echo "Invalid Email or Password";
         }
   }
   else if(isset($_POST['submit_signup'])){
        header('location: Signup.php');
   }
   else{
     
   }
?>