  <?php
  require_once("../../AuthenticationSystem/Controllers/authCheck.php");
  require_once("../../User_Profile_Management/Models/ProfileModels.php");

  if(!isset($_SESSION['FarmerEmail'])){
    $_SESSION['FarmerEmail'] = "";
  } 

  $emailFarmer = $_SESSION['FarmerEmail'];

  $farmer = getFarmerByEmail($emailFarmer);
  ?>

 <div id="farmerProfileView" style="display:none;">
  <h2>Farmer Profile</h2>

  <form method="post" action="../../User_Profile_Management/Controllers/UpdateProfile.php">
   
    <input type="hidden" name="role" value="Farmer">

    <label>Email</label><br>
    <input type="text" name="email" value="<?= $farmer['Email'] ?>" readonly><br><br>

    <label>Name</label><br>
    <input type="text" name="name" value="<?= $farmer['Name'] ?>"><br><br>

    <label>Address</label><br>
    <input type="text" name="address" value="<?= $farmer['Address'] ?>"><br><br>

    <label>Password</label><br>
    <input type="text" name="password" value="<?= $farmer['Password'] ?>"><br><br>

    <button type="submit">Update Profile</button>

  </form>
</div>
