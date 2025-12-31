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

        $requests=[];
        while($row=mysqli_fetch_assoc($res)){
            $requests[]=$row;
        }
        return $requests;
    }


    function getRequestByEmail($email){
        $con=getConnection();
        $sql="SELECT * FROM request";
        $res=mysqli_query($con, $sql);

        while($row=mysqli_fetch_assoc($res)){
            if($row['Email']===$email){
                return $row;
            }
        }
        return null;
    }

    function deleteRequestByEmail($email){
        $con=getConnection();
        $sql=" DELETE FROM request WHERE Email='$email' ";
        return mysqli_query($con,$sql);
    }
    ?>
