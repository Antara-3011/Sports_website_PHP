<?php
  include '../config/config.php';
  include '../include/login-validation-coach.php';
  // function get_name_from_db() {
  //   include '../config/config.php';
  //   $sql = "SELECT name FROM users WHERE id = ?";
  //   $stmt = mysqli_prepare($conn, $sql); 
  //   mysqli_stmt_bind_param($stmt, "i", $_SESSION['id']);
  //   mysqli_stmt_execute($stmt);
  //   $result = mysqli_stmt_get_result($stmt);
  
  //   if (mysqli_num_rows($result) > 0) {
  //     $row = mysqli_fetch_assoc($result);
  //     return $row["name"];
  //   } else {
  //     echo "No name found"; // Handle the case where no name is found
  //   }
  
  //   mysqli_close($conn);
  // }
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Retrieve the search query from the URL
    $search_query = isset($_GET['query']) ? $_GET['query'] : '';

    $query = "SELECT * FROM tournament WHERE Tname LIKE '%$search_query%'";
    $result = $conn->query($query);

    if ($result && $search_query) {
        while ($row = $result->fetch_assoc()) {
            echo "<p>{$row['Tname']}</p>";
        }
    }
} 
  $sql_user = "SELECT * FROM users WHERE id = ?";
  $stmt = mysqli_prepare($conn, $sql_user); 
  mysqli_stmt_bind_param($stmt, "i", $_SESSION['id']);
  mysqli_stmt_execute($stmt);
  $result_user = mysqli_stmt_get_result($stmt);
  if (mysqli_num_rows($result_user) > 0) {
    $row = mysqli_fetch_assoc($result_user);
  } else {
    echo "No name found"; // Handle the case where no name is found
  }

  $sql = "SELECT * FROM tournament WHERE status=1 ORDER BY DOE DESC"; // Adjust query as needed
  $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coach Dashboard</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/coach.css" />
  </head>
  <body>
    <!--- Navbar -->
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="2em"
              height="2em"
              viewBox="0 0 24 24"
            >
              <path
                fill="currentColor"
                d="m12.5 12l-.45 9.05q-.025.4-.312.675T10.95 22q-.4 0-.687-.275t-.313-.675L9.5 13l-3.175-1.825l-.35 1.3L7.5 15.15q.2.35.088.75t-.463.6q-.35.2-.75.1t-.6-.45l-1.75-3.025q-.1-.175-.125-.375t.025-.4L5 8.45l5.75-3.3L8.7 3.1q-.275-.275-.288-.687T8.7 1.7q.275-.275.7-.275t.7.275l2.975 2.95q.35.35.288.838t-.488.737L10.4 7.65l1.2 1.05l7.5-6.125q.275-.25.663-.212t.687.387q.225.275.213.625T20.4 4zM5 7q-.825 0-1.412-.587T3 5q0-.825.588-1.412T5 3q.825 0 1.413.588T7 5q0 .825-.587 1.413T5 7"
              ></path>
            </svg>
            Martial Tour
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Upload Excel File</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Cart </a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Settings
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="./profile.php">Profile</a>
                  </li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="../logout.php">Log out</a>
                  </li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search" method="get">
              <input
                class="form-control me-2"
                type="search"
                name="query"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
            
          </div>
        </div>
      </nav>
    </header>
    <!--- Body -->
    <h1>Welcome, <b class="name"><?php echo $row['name']; ?></b></h1>

    <div class="tournament-header">
      <p>UPCOMING TOURNAMENTS <span>see all</span></p>
    </div>
    <!-- <div class="d-flex justify-content-around">
      <div
        class="card"
        style="width: 18rem; text-align: center; margin-bottom: 1rem"
      >
        <img src="..." class="card-img-top" alt="Card image" />
        <div class="card-body">
          <h5 class="card-title" style="font-weight: bold">Tour Id: 112</h5>
          <h5 class="card-text" style="font-weight: bold">
            Dojo Inhouse Tournament
          </h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">February 10, 2024</li>
          <li class="list-group-item">
            Kenwyn Martial arts centre, South Africa
          </li>
          <li class="list-group-item">
            Reg. Deadline: Thu 8 February 2024 11.59 pm SAST
          </li>
        </ul>
        <div class="card-body">
          <a href="./CoachTour/index.php" class="card-link"
            >Click here to Register</a
          >
        </div>
      </div>

      <div
        class="card"
        style="width: 18rem; text-align: center; margin-bottom: 1rem"
      >
        <img src="..." class="card-img-top" alt="Card image" />
        <div class="card-body">
          <h5 class="card-title" style="font-weight: bold">Tour Id: 113</h5>
          <h5 class="card-text" style="font-weight: bold">
            Inter District Open Karate Championship
          </h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">February 11, 2024</li>
          <li class="list-group-item">
            TDP Hall, near India Spring School, India
          </li>
          <li class="list-group-item">
            Reg. Deadline: Sat 10 February 2024 11.59 pm IST
          </li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Click here to Register</a>
        </div>
      </div>

      <div
        class="card"
        style="width: 18rem; text-align: center; margin-bottom: 1rem"
      >
        <img src="..." class="card-img-top" alt="Card image" />
        <div class="card-body">
          <h5 class="card-title" style="font-weight: bold">Tour Id: 114</h5>
          <h5 class="card-text" style="font-weight: bold">
            Eagles Karate Challenge
          </h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">February 17, 2024</li>
          <li class="list-group-item">Tshwane Korfball Park, South Africa</li>
          <li class="list-group-item">
            Reg. Deadline: Thu 15 February 2024 11.59 pm SAST
          </li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Click here to Register</a>
        </div>
      </div>
    </div> -->
    <?php
if ($result->num_rows > 0) {
  echo "<div class='scrollable-container d-flex' style='overflow-x: auto;'>";
  while($row = $result->fetch_assoc()) {
    $tournament_id = $row["Tid"]; 
    $tournament_name = $row["Tname"];
    $image_url = $row["Timage"]; 
    $doe = $row["DOE"]; 
    $location = $row["Tvenue"]; 
    $registration_deadline = $row["Treg_end_date"];
    // Build the HTML structure with fetched data
    echo "<div class='card' style='width: 18rem; text-align: center; flex: 0 0 auto; margin-right: 1rem;'>";
    
    if ($image_url) { 
      echo "<img src='$image_url' class='card-img-top' alt='Card image'>";
    }
    echo "<div class='card-body'>";
    echo "<h5 class='card-title' style='font-weight: bold'>Tour Id: $tournament_id</h5>";
    echo "<h5 class='card-text' style='font-weight: bold'>$tournament_name</h5>";
    echo "</div>";
    echo "<ul class='list-group list-group-flush'>";
    echo "<li class='list-group-item'>$doe</li>";
    echo "<li class='list-group-item'>$location</li>";
    if ($registration_deadline) { 
      echo "<li class='list-group-item'>Reg. Deadline: $registration_deadline</li>";
    }
    echo "</ul>";
    echo "<div class='card-body'>";
    
    // echo "<a href='./CoachTour/index.php' class='card-link'>Click here to Register</a>";
    echo "<a href='./CoachTour/index.php?tournament_id=$tournament_id' class='card-link'>Click here to Register</a>";
    echo "</div>";
    echo "</div>";
    echo "</a>";
  }
  echo "</div>";
} else {
  echo "No tournaments found";
}
?>
<?php
$conn->close();
?>
    <div class="tournament-header">
      <p style="margin-top: 1rem">UPDATES <span>see all</span></p>
    </div>

    <footer>
      <p>&copy; 2024 Martial Tour. All rights reserved.</p>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
