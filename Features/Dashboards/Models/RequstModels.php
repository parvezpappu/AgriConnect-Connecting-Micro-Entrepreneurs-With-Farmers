<?php
    require_once("../../AuthenticationSystem/Models/db.php");

    function insertRequest($name,$email,$address,$password,$role){
        $con=getConnection();
        $sql="INSERT INTO request VALUES('$name','$email','$address','$password','$role')";
        return mysqli_query($con,$sql);
    }

    function getAllRequests(){
        $con=getConnection();
        $sql="SELECT * FROM request";
        $res=mysqli_query($con, $sql);
        $count=mysqli_num_rows($res);

        $requests=[];
        while($row=mysqli_fetch_assoc($res)){
            $requests[]=$row;
        }
        return [$requests,$count];
    }
    ?>
