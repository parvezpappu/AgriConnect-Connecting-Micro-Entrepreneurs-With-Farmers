<?php
   session_start();

   if(isset($_POST['submit']))
   {

         $Email = $_POST['email'];
         $Password= $_POST['password'];

         if($Email=="" || $Password=="")
         {
              header('location: Signup.php');
         }
         
         else{
             $_SESSION['Email'] =  $Email;
             $_SESSION['Password'] =$Password;
             header('location: login.php');   
         }  
   }
?>