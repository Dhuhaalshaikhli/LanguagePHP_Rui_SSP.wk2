<?php   
  session_start();  
?>
<html>
<head>
  <title>Home</title>
  <link href="../../../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
    <?php
      if(!isset($_SESSION['use'])) { // If session is not set then redirect to Login Page
          header("Location: login.php");  
      }
        echo "Session Name: " . $_SESSION['use'];
        echo "</br>";
        echo "Login Success";
        echo "</br>";
        echo "</br>";
        echo "<a href='logout.php'> Logout</a> "; 
    ?>
  </div>
</body>
</html>