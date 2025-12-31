  <?php
  require_once("../Models/RequstModels.php");

  $requests = getAllRequests();
  ?>

  <div id="requesttsView" style="display:none;">

    <h1>Signup Requests</h1>
    <p>Pending Users</p>

    <table border="1" width="100%">

      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Address</th>
          <th>Role</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>

  <?php
  if(empty($requests)){
  ?>
        <tr>
          <td colspan="5" style="text-align:center; font-weight:bold;">
            No pending signup requests
          </td>
        </tr>
  <?php
  }else{
      foreach($requests as $row){
    ?>
        <tr>
          <td><?php echo $row['Name']; ?></td>
          <td><?php echo $row['Email']; ?></td>
          <td><?php echo $row['Address']; ?></td>
          <td><?php echo $row['Role']; ?></td>
          <td>

            <form action="../Controllers/ApproveRequest.php"  method="post"style="display:inline;">
              <input type="hidden" name="email" value="<?php echo $row['Email']; ?>">
              <input type="submit" name="approve" value="Approve">
            </form>

        
            <form action="../Controllers/RejectRequest.php" method="post" style="display:inline;">
              <input type="hidden" name="email" value="<?php echo $row['Email']; ?>">
              <input type="submit" name="reject" value="Reject">
            </form>
          </td>
        </tr>
  <?php
      }
  } 
  ?>

      </tbody>
    </table>

  </div>
