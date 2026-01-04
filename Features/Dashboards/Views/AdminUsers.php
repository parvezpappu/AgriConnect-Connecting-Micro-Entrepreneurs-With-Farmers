  <?php
  require_once("../../AuthenticationSystem/Models/EmployeeModels.php");

  if (isset($_POST['empEmail'])) {
      deleteEmployee($_POST['empEmail']);
  }

  [$employees, $count] = getAllEmployees();
  $_SESSION['CountEmployee'] = $count;
  ?>

 <div id="employeeView" style="display:none;">
  <h1>Employee List</h1>

  <table border="1" width="100%">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody>
    <?php 
    if 
    (!empty($employees)) {
       ?>
        <?php 
        foreach ($employees as $emp){ 
        ?>
            <tr>
                <td><?php  echo$emp['Name'] ?></td>
                <td><?php  echo$emp['Email'] ?></td>
                <td><?php  echo$emp['Password'] ?></td>
                <td>
                    <form method="post">
                        <input type="hidden" name="empEmail" value="<?= $emp['Email'] ?>">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php
       }

      ?>
    <?php 
  } else{
     ?>
        <tr>
            <td colspan="4" style="text-align:center;">No employees found</td>
        </tr>
    <?php 
  } 
  ?>
    </tbody>
  </table>
</div>
