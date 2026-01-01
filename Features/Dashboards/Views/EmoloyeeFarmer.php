<?php
require_once("../Models/FarmerModels.php");

if (isset($_POST['email'])) {
    deleteFarmer($_POST['email']);
    $showFarmer=true;
}
[$farmers,$FarmerCount] = getAllFarmers();
 $_SESSION['countOfFarmer']=$FarmerCount;
?>

<div id="farmersView" style="display:none;">
  <h1>Farmers</h1>
  <table border="1" width="100%">
    <thead>
      <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
    </thead>

    <tbody>
    <?php if (!empty($farmers)) { ?>
        <?php foreach ($farmers as $farmer) { ?>
            <tr>
                <td><?= $farmer['Name'] ?></td>
                <td><?= $farmer['Address'] ?></td>
                <td><?= $farmer['Email'] ?></td>
                <td>
            <form method="post">
                <input type="hidden" name="email" value="<?= $farmer['Email'] ?>">
                <button type="submit">Delete</button>
            </form>
        </td>
               

            </tr>
        <?php }?>
    <?php }
     else { ?>
        <tr>
            <td colspan="7" style="text-align:center;">No farmers found</td>
        </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
