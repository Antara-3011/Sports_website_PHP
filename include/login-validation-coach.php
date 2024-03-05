<?php

  if(!isset($_SESSION['userId'])){   // is not logged in
    header("Location: login.php");
    exit;
  }
  else if($_SESSION['roll']!='Coach'){   // is not coach
    header("Location: logout.php");
    exit;
  }

?>