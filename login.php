<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/Sports_Website_PHP/Signup/signup.css" />
  </head>
  <body>
    <div class="signup-form">
      <?php

      $servername = "127.0.0.1";
      $username = "root";
      $password = "";
      $dbname = "tour";
    
    // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      echo "Connection successful";
      if(isset($_POST["submit"])){
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,md5($_POST['password']));
        $res = mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$password'") or die("select error");
        
        $row = mysqli_fetch_assoc($res);
        if(is_array($row) && !empty($row)){
          $_SESSION['valid'] = $row['email'];
          $_SESSION['name'] = $row['name'];
          $_SESSION['role'] = $row['role'];
          $_SESSION['id'] = $row['id'];
        }else{
          echo "<div class='message'>
              <p>Wrong email or password</p>
              </div><br>";
          echo "<a href='login.php'><button class='btn'>Go Back</button></a>";
        }
        if(isset($_SESSION['valid'])){
          switch ($_SESSION['role']) {
            case "Admin":
              header("Location: Admin1/admin.php");
              break;
            case "Coach":
              header("Location: Coach1/coach.php");
              break;
            case "Athlete":
              header("Location: hello.php");
              break;
            default:
              header("Location: hello.php");
          }
        }
    }else{
      ?>
      <h1>Login</h1>
      <p style="color: grey">Please enter your login details to signin</p>
      <form class="row g-3">
        <div class="col-md-6">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email" />
        </div>
        <div class="col-md-6">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="password" />
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
          <button type="submit" name="submit" class="btn btn-primary">Log In</button>
        </div>
        <div class="col-12">
          <p>
            Dont't have an account?
            <span style="display: inline-block; margin-left: 5px"
              ><a href="/Sports_Website_PHP/Signup/signup.php">Sign Up</a>
            </span>
          </p>
        </div>
      </form>
      <?php } ?>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
