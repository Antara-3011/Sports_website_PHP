<?php
include './config/config.php';
if(!empty($_POST)){
  $name = isset($_POST['name']) ? $_POST['name'] : "";
  $email = isset($_POST['email']) ? $_POST['email'] : "";
  $password =isset($_POST['password']) ? md5($_POST['password']) : ""; 
  $role = isset($_POST['role']) ? $_POST['role'] : "";

  //email verifaction
  $sql ="SELECT email from users where email='$email'";
  $verify_query = mysqli_query($conn, $sql);
  if(mysqli_num_rows($verify_query)!=0){
    echo "<div class='message'>
    <p>This email is used, Try another one</p>
    </div><br>";
    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";
  }else{
    $sql = "INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$password', '$role')";
    //insert record of coach data in coach table
    //insert record of athlete data in athlete table
    $res = mysqli_query($conn, $sql);
    echo "<div class='message'>
    <p>Registered Successfully!</p>
    </div><br>";
    echo "<a href='login.php'><button class='btn'>Login Now</button></a>";
  }
}else{
  echo json_encode(array("Status" => "Error", "Message" => "Invalid request method"));
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup Form</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container mt-3 signup-form">
      <h1>Create Account</h1>
      <form class="row g-3" method="post" action="">
        <div class="col-12">
          <label for="name" class="form-label">Name</label>
          <input
            type="text"
            class="form-control"
            name="name"
            id="name"
            placeholder="Enter name"
          />
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email" />
        </div>
        <div class="col-md-6">
          <label for="password" class="form-label">Password</label>
          <input
            type="password"
            name="password"
            class="form-control"
            id="password"
          />
        </div>
        <div class="col-md-12">
          <label for="inputState" class="form-label">Select Role</label>
          <select id="inputState" name="role" class="form-select">
            <option selected>Choose...</option>
            <option>Coach</option>
            <option>Athlete</option>
          </select>
        </div>
        <div class="col-12">
          <button type="submit" name="submit" class="btn btn-primary">
            Create Account
          </button>
        </div>
        <div class="col-12">
          <p>
            Already have an account?
            <span style="display: inline-block; margin-left: 5px"
              ><a href="login.php">Login</a></span
            >
          </p>
        </div>
      </form>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
