    <?php
    require_once("../../AuthenticationSystem/Models/db.php");


    function getAdminByEmail($email){

        $con = getConnection();
        $sql = "SELECT * FROM admin WHERE Email='$email'";
        $res = mysqli_query($con, $sql);
        $array = mysqli_fetch_assoc($res);
        return $array;
    }

    function getEmployeeByEmail($email){

        $con = getConnection();
        $sql = "SELECT * FROM employee WHERE Email='$email'";
        $res = mysqli_query($con, $sql);
        $array = mysqli_fetch_assoc($res);
        return $array;
    }

    function getFarmerByEmail($email){

        $con = getConnection();
        $sql = "SELECT * FROM Farmer WHERE Email='$email'";
        $res = mysqli_query($con, $sql);
        $array = mysqli_fetch_assoc($res);
        return $array;
    }

    function getShopOwnerByEmail($email){
        
        $con = getConnection();
        $sql = "SELECT * FROM ShopOwner WHERE Email='$email'";
        $res = mysqli_query($con, $sql);
        $array = mysqli_fetch_assoc($res);
        return $array;
    }




    function updateAdminProfile($email, $name, $password){
        $con = getConnection();
        $sql = "UPDATE admin SET Name='$name',Password='$password' WHERE Email='$email'";
        $res= mysqli_query($con, $sql);
        return $res;
    }

    function updateEmployeeProfile($email,$name,$password){
        $con = getConnection();
        $sql = "UPDATE employee SET Name='$name', Password='$password' WHERE Email='$email'";
        $res= mysqli_query($con, $sql);
        return $res;
    }

    function updateFarmerProfile($email,$name,$address,$password){
        $con = getConnection();
        $sql = "UPDATE Farmer SET Name='$name',Address='$address',Password='$password'WHERE Email='$email'";
        $res= mysqli_query($con, $sql);
        return $res;
    }

    function updateShopOwnerProfile($email, $name, $address, $password){
        $con = getConnection();
        $sql = "UPDATE ShopOwner SET Name='$name',Address='$address',Password='$password' WHERE Email='$email'";
        $res= mysqli_query($con, $sql);
        return $res;
 
    }
    ?>
