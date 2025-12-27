

 <?php
  session_start();
  if(isset($_SESSION['valid'])!==true){
    header("location: ../Views/Login.html");
  }
  if(isset($_COOKIE['valide'])!==true){
    header("location: ../Views/Login.html");
  }
 ?>