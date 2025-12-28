

 <?php
  session_start();
  if(isset($_SESSION['valid'])!==true){
    header("location:../../AuthenticationSystem/Views/Login.html");
  }
  if(isset($_COOKIE['valid'])!==true){
    header("location:../../AuthenticationSystem/Views/Login.html");
  }

 ?>