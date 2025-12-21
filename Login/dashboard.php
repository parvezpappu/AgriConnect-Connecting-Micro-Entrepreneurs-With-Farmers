<?php
  session_start();
  echo "Welcome ", $_SESSION['Email'];
?>
<html>
<head><title>Dashboard</title></head>
<body>
<p>
   <a href="logout.php">Logout</a>
</p>
</body>
</html>