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
    <div class="flex justify-around p-3 mb-2 bg-info-subtle text-info-emphasis border border-3">
        <div class="border border-stone-600 rounded-lg px-5 w-60 border border-2">
          <div class="mt-5 mb-6 px-20 py-20 bg-slate-500 h-16 ">
            <p>IMAGE</p>
            <input type="file" onChange={handleChange} />
            <img src={file} />
          </div>
        </div>
        <div class="flex-col">
          <div class="flex">
          <div class="flex">
          <div class="editmarg" >
              <label htmlFor="username">Name</label></div>
              <div>
              <input
                type="text"
                placeholder="type here"
                class="border ml-3 p-1 mb-2 rounded-lg"
                name="username"
                id="username"
              ></input></div>
            </div>

            <div class="flex">
              <div class="editmarg">
              <label htmlFor="email">Email</label></div>
              <div>
              <input
                type="text"
                placeholder="type here"
                class="border ml-3 p-1 mb-2 rounded-lg"
                name="email"
                id="email"
              ></input>
            </div>
          </div>
          </div>
          <div class="flex">
          <div class="flex">
            <div class="editmarg" >
              <label htmlFor="Age">Age</label></div>
              <div>
              <input
                type="number"
                placeholder="type here"
                class="border ml-3 p-2 rounded-lg"
                name="age"
                id="age"
              ></input></div>
            </div>
            <div class="flex">
            <div class="editmarg" >
              <label htmlFor="gender">Gender</label></div>
              <div>
              <input
                type="text"
                placeholder="type here"
                class="border ml-3 p-2 rounded-lg"
                name="gender"
                id="gender"
              ></input>
            </div>
          </div>
          </div>
          <div class="flex">
            <div class="ml-3 mt-3">
              <label htmlFor="height">Height</label>
              <input
                type="number"
                placeholder="type here"
                class="border ml-3 p-2 rounded-lg"
                name="height"
                id="height"
              ></input>
            </div>
            <div class="ml-3 mt-3">
              <label htmlFor="weight">Weight(kg)</label>
              <input
                type="number"
                placeholder="type here"
                class="border ml-3 p-2 rounded-lg w-24"
                name="weight"
                id="weight"
              ></input>
            </div>
          </div>
          <div class="flex">
            <div class="ml-3 mt-3">
              <label htmlFor="coachname">Coach</label>
              <input
                type="text"
                placeholder="type here"
                class="border ml-3 p-2 rounded-lg"
                name="coachname"
                id="coachname"
              ></input>
            </div>
            <div class="ml-3 mt-3">
              <label htmlFor="experience">Experience(yrs)</label>
              <input
                type="number"
                placeholder="type here"
                class="w-24 border ml-3 p-2 rounded-lg"
                name="experience"
                id="experience"
              ></input>
            </div>
          </div>
          <div class="ml-3 mt-3">
            <label htmlFor="club">Club</label>
            <input
              type="text"
              placeholder="type here"
              class="border ml-3 p-2 rounded-lg"
              name="club"
              id="club"
            ></input>
          </div>

          <div class="ml-3 mt-3">
            <label htmlFor="eachievement">Achievements</label>
            <textarea cols={50}></textarea>
          </div>
          <div class="d-flex flex-row mt-3">
            <div class="editmarg">
                <button id="seeMoreBtn" onclick="toggleContent()">Cancel</button>
              </div>
              <div>
                <button id="seeMoreBtn" onclick="toggleContent()">Save</button>
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