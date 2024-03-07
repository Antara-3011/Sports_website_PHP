<?php
  include '../../config/config.php';
  include '../../include/login-validation-coach.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coach Tournament</title>
    <link rel="stylesheet" href="../../css/coach.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!--- navbar -->
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
      <!--- Tournament name header-->
      <a href="../index.php">Go Back</a>
      <div
        class="d-flex justify-content-around m-3 px-lg-5 py-lg-5 rounded-3 bg-info-subtle"
      >
        <div>
          <img src="../../images/logoTour.png" style="width: 7rem; height: 7rem" />
        </div>
        <div>
          <h5>T101</h5>
          <h5>Inter District Open Karate Championship</h5>
          <h6>February 11, 2024</h6>
          <h6>TDP Hall, near India Spring School, India</h6>
        </div>
      </div>
      <!--- Menu bar -->
      <div class="mx-3 mb-3 p-2 rounded bg-success-subtle">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a
              class="nav-link active"
              aria-current="page"
              href="../CoachTour/register.php"
              >Register here</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Participant list</a>
          </li>
        </ul>
      </div>
      <div class="container">
        <div class="row">
          <!--- Left Column -->
          <div class="col-md-4">
            <div class="card" style="width: 18rem; margin-bottom: 3rem">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Details</li>
                <li class="list-group-item">
                  Registration deadline: Sat 10 February 2024 11.59 pm IST
                </li>
                <li class="list-group-item">
                  Entry fees: <br />
                  First category: ₹1,000 <br />
                  Additional categories: ₹1,000 each
                </li>
              </ul>
            </div>

            <div class="card" style="width: 18rem">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">HOSTED BY:</li>
                <li class="list-group-item">SENSEI MAHESH BABU</li>
                <li class="list-group-item">
                  Martial Arts Organisation<br />
                  baludojo@gmail.com<br />
                  8142541065
                </li>
              </ul>
            </div>
          </div>
          <!--- Right Column -->
          <div class="col-md-8 bg-info-subtle">
            <!--- General Information -->
            <div>
              <h5 class="py-2">General Information</h5>
              <div>
                <p className="mt-3">
                  Dear Colleagues, <br />I hope you are all keeping well. <br />
                  Attached please find the updated invitation for the Boland
                  Dragons Karate League as well as the Indemnity Form. Once all
                  the entries have been received, a detailed events program will
                  be made available. <br />
                  Also attached is the worksheet for competitor entries as well
                  as the worksheet (please note the tabs at the bottom of the
                  first page) for referees, jury table judges, and coaches. The
                  closing date for all entries, orders and payments is the 20Feb
                  2024. I request that all federation and dojo-heads adhere to
                  this deadline. <br />
                  Kindly read through the invitation and distribute to your
                  affiliates. <br />
                  Thank you. <br />
                  Kind regards
                </p>
              </div>
            </div>
            <!--- Download tournament guidelines -->
            <div>
              <button class="p-2 rounded">
                Download Tournament_Guidelines
              </button>
            </div>
            <!--- Events -->
            <div class="flex my-3">
              <h5>Events</h5>
              <div class="card my-2">
                <div class="card-body">KATA</div>
              </div>
              <div class="card my-2">
                <div class="card-body">KUMITE</div>
              </div>
            </div>

            <!--- Venue -->
            <div>
              <h5>Venue</h5>
              <div
                class="my-3"
                style="height: 20rem; background-color: rgb(243, 236, 236)"
              ></div>
            </div>
          </div>
        </div>
      </div>
    </main>

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
