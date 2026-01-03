    <?php

    require_once("../../AuthenticationSystem/Controllers/authCheck.php");
    require_once("../../User_Profile_Management/Models/ProfileModels.php");

    if(!isset($_SESSION['AdminEmail'])){
        $_SESSION['AdminEmail']="";
    } 

    $adminEmail = $_SESSION['AdminEmail'];

    $admin=getAdminByEmail($adminEmail);

    ?>
    <div id="adminProfileView" style="display:none;">
    <h2>Admin Profile</h2>
    <form method="post" action="../../User_Profile_Management/Controllers/UpdateProfile.php">

        <input type="hidden" name="role" value="Admin">

        <label>Email</label><br>
        <input type="text" name="email" value="<?= $admin['Email'] ?>" readonly><br><br>

        <label>Name</label><br>
        <input type="text" name="name" value="<?= $admin['Name'] ?>"><br><br>
        
        <label>Password</label><br>
        <input type="text" name="password" value="<?= $admin['Password'] ?>"><br><br>
        <button type="submit">Update Profile</button>     
    </form>
    </div>
