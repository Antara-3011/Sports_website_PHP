<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>editProfile</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!-- <link rel="stylesheet" href="/coach.css" /> -->
    <link rel="stylesheet" href="../css/dashboard.css" />
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
                <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../logout.php">Log out</a>
              </li>
              <!-- <li class="nav-item dropdown">
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
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="../logout.php">Log out</a>
                  </li>
                </ul>
              </li> -->
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
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
    <div class="profile-head">
      <h3>PROFILE INFORMATION</h3>
    </div>
    <div class="container my-3 bg-info-subtle text-info-emphasis border border-3">
        <div class="row">
          <div class="col-md-4 border border-2 border-stone-600 rounded-lg bg-slate-500">
            <p>IMAGE</p>
            <input type="file" onChange={handleChange} />
            <img src={file} />
          </div>
        <div class="col-md-1"></div>
        <div class="col-md-7">
          <div class="row mt-3">
            <div class="col-md-6">
              <div class="col-md-6">Name:</div>
              <div class="col-md-6"><input type="text"
                placeholder="type here"
                name="username"></div>
            </div>
            <div class="col-md-6">
            <div class="col-md-6">Email:</div>
              <div class="col-md-6"><input type="email"></div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-6">
              <div class="col-md-6">Age:</div>
              <div class="col-md-6"><input type="number"
                placeholder="type here"
                name="username"></div>
            </div>
            <div class="col-md-6">
            <div class="col-md-6">Gender:</div>
              <div class="col-md-6"><input type="text"></div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-6">
              <div class="col-md-6">Height(cm):</div>
              <div class="col-md-6"><input type="number"
                placeholder="type here"
                name="username"></div>
            </div>
            <div class="col-md-6">
            <div class="col-md-6">Weight:</div>
              <div class="col-md-6"><input type="number"></div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-6">
              <div class="col-md-6">Coach Name:</div>
              <div class="col-md-6"><input type="text"
                placeholder="type here"
                name="username"></div>
            </div>
            <div class="col-md-6">
            <div class="col-md-6">Coach Email:</div>
              <div class="col-md-6"><input type="email"></div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-6">
              <div class="col-md-6">Club Name:</div>
              <div class="col-md-6"><input type="text"
                placeholder="type here"
                name="username"></div>
            </div>
            <div class="col-md-6">
            <div class="col-md-6">Experience(in yrs):</div>
              <div class="col-md-6"><input type="number"></div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col">
              <div>Achievements:</div>
              <div><input type="text"></div>
            </div>
          </div>
          <div class="row my-3">
            <div class="col-md-2"></div>
            <div class="col-md-4">
              <button><a href="./index.php">Save</a></button>
            </div>
            <div class="col-md-4">
              <button><a href="./index.php">Cancel</a></button>
            </div>
            <div class="col-md-2"></div>
          </div>
        </div>
      </div>
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