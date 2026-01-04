 

 <?php
 session_start();
 unset($_SESSION['valid']);
 //setcookie("valid","true",time()-5000,"/");
 header('location:../Views/Login.html');
 ?>