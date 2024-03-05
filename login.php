<?php
  include './config/config.php';

  if(isset($_SESSION['id'])){       // is already logged in
    if($_SESSION['role']=='Admin'){   // is admin
      header("Location: ./admin");
    }
    if($_SESSION['role']=='Coach'){   // is coach
      header("Location: ./coach");
    }
    if($_SESSION['role']=='Athlete'){   // is athlete
      header("Location: ./athlete");
    }
    else{ 
      header("Location: ./logout.php");
    }
    exit;
  }

  if(isset($_POST['email']) && isset($_POST['password'])){

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users where email='$email' and password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $_SESSION['id'] = $row['id'];
      $_SESSION['name'] = $row['name'];
      $_SESSION['role'] = $row['role'];
      if($row['role']=='Admin')
        header('Location: ./admin');
      else if($row['role']=='Coach')
        header('Location: ./coach');
      else if($row['role']=='Athlete')
        header('Location: ./athlete');
    }
    else{
      $err = "Invalid User Details";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

  <div class="container mt-3 signup-form">
      <h1>Login</h1>
      <p style="color: grey">Please enter your login details to signin</p>
      <form class="row g-3" method="post" action="">
        <div class="col-md-12">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email" />
        </div>
        <div class="col-md-12">
          <label for="password" class="form-label">Password</label>
          <input
            type="password"
            name="password"
            class="form-control"
            id="password"
          />
        </div>
        <div class="col-12">
          <div
            class="form-check"
            style="display: flex; justify-content: space-between"
          >
            <div>
              <input class="form-check-input" type="checkbox" id="gridCheck" />
              <label class="form-check-label" for="gridCheck">
                Keep me logged in
              </label>
            </div>
            <div>
              <a href="#" style="color: blueviolet">Forgot password?</a>
            </div>
          </div>
        </div>

        <div class="col-12">
          <button type="submit" name="submit" class="btn btn-primary">
            Log In
          </button>
          <?php 
        if(isset($err))
          echo "<h4 class='text-center text-danger'>$err</h4>";
      ?>
        </div>
        <div class="col-12">
          <p>
            Dont't have an account?
            <span style="display: inline-block; margin-left: 5px"
              ><a href="signup.php">Sign Up</a>
            </span>
          </p>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
