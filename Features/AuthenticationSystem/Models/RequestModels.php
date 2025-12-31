
<?php
require_once("db.php");

function insertRequest($name, $email, $address, $password, $role){

    $con=getConnection();
    $sql="INSERT INTO request VALUES('$name','$email','$address','$password','$role')";
    $status = mysqli_query($con, $sql);
    return $status;
}
?>
