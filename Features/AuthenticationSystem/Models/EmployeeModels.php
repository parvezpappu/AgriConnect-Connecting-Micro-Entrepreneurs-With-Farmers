    <?php
    require_once("db.php");

    function getAllEmployees(){

        $con=getConnection();
        $sql ="SELECT*FROM employee";
        $res =mysqli_query($con, $sql);
        $count=mysqli_num_rows($res);

        $employees=[];
        while($row=mysqli_fetch_assoc($res)){
            $employees[]=$row;
        }
        return [$employees,$count];
    }


    function deleteEmployee($email){
        $con = getConnection();
        $sql = "DELETE FROM employee WHERE Email='$email'";
        return mysqli_query($con, $sql);
    }
