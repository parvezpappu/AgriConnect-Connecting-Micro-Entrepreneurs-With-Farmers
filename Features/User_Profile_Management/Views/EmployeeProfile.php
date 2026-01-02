  <?php
  require_once("../../AuthenticationSystem/Controllers/authCheck.php");
  require_once("../../User_Profile_Management/Models/ProfileModels.php");

 
  if(!isset($_SESSION['EmployeeEmail'])){
    $_SESSION['EmployeeEmail'] = "";
  } 
   
  $employeeEmail = $_SESSION['EmployeeEmail'];

  $emp = getEmployeeByEmail($employeeEmail);

  ?>

  <div id="employeeProfileView" style="display:none;">
    <h2>Employee Profile</h2>

    <form method="post" action="../../User_Profile_Management/Controllers/UpdateProfile.php">
      <input type="hidden" name="role" value="Employee">

      <label>Email</label><br>
      <input type="text" name="email" value="<?= $emp['Email'] ?>" readonly><br><br>

      <label>Name</label><br>
      <input type="text" name="name" value="<?= $emp['Name'] ?>"><br><br>

      <label>Password</label><br>
      <input type="text" name="password" value="<?= $emp['Password'] ?>"><br><br>

      <button type="submit">Update Profile</button>
    </form>
  </div>
