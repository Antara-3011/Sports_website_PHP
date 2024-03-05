<?php

  if(!isset($_SESSION['id'])){   // is not logged in
    header("Location: ./login.php");
    exit;
  }
  else if($_SESSION['role']!='Coach'){   // is not coach
    header("Location: ./logout.php");
    exit;
  }

?>