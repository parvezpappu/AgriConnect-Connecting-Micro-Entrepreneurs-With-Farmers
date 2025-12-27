 

 <?php
 session_start();
 session_destroy();
 setcookie("valid","true",time()-5000,"/");
 header('location:../Views/Login.html');

 ?>