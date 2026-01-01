
 <?php
  require_once("db.php");

  

  function getAdmin(){
  $con=getConnection();
  $sql="select * from admin";
  $res=mysqli_query($con,$sql);
 // $count=mysqli_num_rows($res);
  $row=mysqli_fetch_assoc($res);
  $admins=[];
  
  $admins=$row;
  return $admins;

  }
 
  

 
  
 ?>