<?php
  include './config/config.php';

  if(isset($_SESSION['userId'])){       // is already logged in
    if($_SESSION['roll']=='Admin'){   // is not admin
      header("Location: ./admin");
    }
    if($_SESSION['roll']=='Coach'){   // is not admin
      header("Location: ./coach");
    }
    if($_SESSION['roll']=='Athlete'){   // is not admin
      header("Location: ./athlete");
    }
    else{ 
      header("Location: ./logout.php");
    }
    exit;
  }

  if(isset($_POST['email']) && isset($_POST['pswd'])){

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users where email='$email' and password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $_SESSION['userId'] = $row['id'];
      $_SESSION['userName'] = $row['name'];
      $_SESSION['role'] = $row['role'];
      if($row['role']=='Admin')
        header('Location: ./admin');
      else if($row['role']=='Coach')
        header('Location: ./coach');
    }
    else{
      $err = "Invalid User Details";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

  <div class="container mt-3">
    <h2>Stacked form</h2>
    <form action="" method="post">
      <div class="mb-3 mt-3">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <div class="mb-3">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
      <div class="form-check mb-3">
        <label class="form-check-label">
          <A href="./signup.php"> Register Now</A>
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <?php 
        if(isset($err))
          echo "<H4 class='text-center text-danger'>$err</H4";
      ?>
    </form>
  </div>


  </body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
