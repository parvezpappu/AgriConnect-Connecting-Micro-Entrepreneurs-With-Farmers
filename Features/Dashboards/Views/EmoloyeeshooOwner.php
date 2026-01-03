<?php
require_once("../Models/ShopOwnerModels.php");

if (isset($_POST['shopEmail'])) {
    deleteShopOwner($_POST['shopEmail']);
}

[$shopOwners,$shopOwnerCount]=getAllShopOwners();
$_SESSION['countOfShopOwner']=$shopOwnerCount;
?>

<div id="shopOwnerView" style="display:none;">
  <h1>Shop Owners</h1>

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
    <?php
     if (!empty($shopOwners)) { 
     ?>
    <?php 
        foreach($shopOwners as $owner) { 
            ?>
            <tr>
                <td>
                <?=$owner['Name']?></td>
                <td><?=$owner['Address']?></td>
                <td><?=$owner['Email']?></td>
                <td>
                    <form   method="post">
                    <input  type="hidden"name="shopEmail" value="<?= $owner['Email'] ?>">
                    <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php 
        } 
        
        ?>
    <?php 
  }
 else
 { ?>
    <tr>
    <td colspan="4" style="text-align:center;">No shop owners found</td>
    </tr>
    <?php 
} 
?>
    </tbody>
  </table>
</div>
