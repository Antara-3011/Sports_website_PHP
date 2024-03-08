<?php
  include '../config/config.php';
  include '../include/login-validation-admin.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin.css" />

  </head>
  <body>
  <header>
      <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">
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
                <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-white"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Settings
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="/login.html">Log out</a>
                  </li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success bg-success text-white" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>

    <h1 style="margin-top:1rem"><b>Welcome, Sai</b></h1>
   
    <div class="tournament-header">
      <p>UPCOMING EVENTS<span>see all</span></p>
    </div>
    <div class="flex">
      <div
        class="card"
        style="width: 18rem; text-align: center; margin-bottom: 1rem"
      >
        <img src="./imageadmin/tour3.jpg" class="card-img-top" alt="Card image" />
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
        <button class=" btn-lg bg-primary border-0 rounded text-white" style="height: 50px; width: 150px;border:rounded">More details</button>
        </div>
      </div>

      <div
        class="card"
        style="width: 18rem; text-align: center; margin-bottom: 1rem"
      >
        <img src="./imageadmin/tour3.jpg" class="card-img-top" alt="Card image" />
        <div class="card-body">
          <h5 class="card-title" style="font-weight: bold">Tour Id: 113</h5>
          <h5 class="card-text" style="font-weight: bold">
            Inter District Open Karate Championship
          </h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item ">February 11, 2024</li>
          <li class="list-group-item ">
            TDP Hall, near India Spring School, India
          </li>
          <li class="list-group-item">
            Reg. Deadline: Sat 10 February 2024 11.59 pm IST
          </li>
        </ul>
        <div class="card-body">
        <button class=" btn-lg bg-primary border-0 rounded text-white" style="height: 50px; width: 150px;border:rounded">More details</button>
        </div>
      </div>

      <div
        class="card"
        style="width: 18rem; text-align: center; margin-bottom: 1rem"
      >
        <img src="./imageadmin/tour3.jpg" class="card-img-top" alt="Card image" />
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
         <button class=" btn-lg bg-primary border-0 rounded text-white" style="height: 50px; width: 150px;border:rounded">More details</button>
        </div>
      </div>
    </div>

    <div class="tournament-header">
      <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" style="height: 50px; width:190px; margin-top:10px;font-weight:bold;margin-bottom:20px;" src="./tournamentCreate.php">Create Tounament</button>
    </div>

    <footer>
      <p>&copy; 2024 Martial Tour. All rights reserved.</p>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
