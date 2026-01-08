    <?php
    require_once("../../AuthenticationSystem/Models/db.php");



  function insertNotification($for_role, $type, $message){
    $con = getConnection();
    $sql = "INSERT INTO notifications (for_role, type, message) VALUES ('$for_role', '$type', '$message')";
    return mysqli_query($con, $sql);  
  }


    function getLatestNotifications(){
        $con = getConnection();
        $sql = "SELECT * FROM notifications ORDER BY id DESC ";
        $res = mysqli_query($con, $sql);

        $notifications = [];
        while($row = mysqli_fetch_assoc($res)){
            $notifications[] = $row;
        }
        return $notifications;
    }

    function clearAllNotifications(){
        $con = getConnection();
        $sql = "DELETE FROM notifications";
        return mysqli_query($con, $sql);
    }



    ?>
