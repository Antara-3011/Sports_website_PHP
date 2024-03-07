<?php
  include '../config/config.php';
  include '../include/login-validation-coach.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="../css/coach.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!--- Navbar -->
    <header>
      <nav class="navbar bg-body-tertiary">
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
        </div>
      </nav>
    </header>

    <main>
      <a href="./index.php">Go Back</a>
      <div
        class="d-flex p-3 m-10 bg-success-subtle justify-content-center align-items-center"
      >
        <h4>My Personal Details</h4>
      </div>
      <div class="container mt-5">
        <div class="row mb-4">
          <div class="col-md-3"></div>
          <div class="col-md-3">Name:</div>
          <div class="col-md-3"><input type="text" /></div>
          <div class="col-md-3"></div>
        </div>
        <div class="row mb-4">
          <div class="col-md-3"></div>
          <div class="col-md-3">Email:</div>
          <div class="col-md-3"><input type="email" /></div>
          <div class="col-md-3"></div>
        </div>
        <div class="row mb-4">
          <div class="col-md-3"></div>
          <div class="col-md-3">Contact:</div>
          <div class="col-md-3"><input type="number" /></div>
          <div class="col-md-3"></div>
        </div>
        <div class="row mb-4">
          <div class="col-md-3"></div>
          <div class="col-md-3">Club-name:</div>
          <div class="col-md-3"><input type="text" /></div>
          <div class="col-md-3"></div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-2">
            <a
              href="./index.php"
              class="p-2 rounded bg-success text-white border-0"
            >
              Save
            </a>
          </div>
          <div class="col-md-2">
            <a
              href="./index.php"
              class="p-2 rounded border-0 text-white bg-success"
              >Edit</a
            >
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </main>

    <!-- Footer -->
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
