<?php

// Include configuration file if needed (e.g., for database connection)
require '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Get form data (sanitize and validate with basic examples)
  $tournamentName = isset($_POST['inputTounamentName']) ? trim($_POST['inputTounamentName']) : '';
  $tournamentID = isset($_POST['inputTounamentID']) ? trim($_POST['inputTounamentID']) : '';
  $tournamentDate = isset($_POST['tournamentDate']) ? trim($_POST['tournamentDate']) : '';
  $tournamentVenue = isset($_POST['tournamentVenue']) ? trim($_POST['tournamentVenue']) : '';
  $tournamentRegSt = isset($_POST['tournamentRegSt']) ? trim($_POST['tournamentRegSt']) : '';
  $tournamentRegEd = isset($_POST['tournamentRegEd']) ? trim($_POST['tournamentRegEd']) : '';
  $coachName = isset($_POST['coachName']) ? trim($_POST['coachName']) : '';
  $coachEmail = isset($_POST['coachEmail']) ? trim($_POST['coachEmail']) : '';
  $coachNumber = isset($_POST['coachNumber']) ? trim($_POST['coachNumber']) : '';

  // Basic validation examples (you can improve these)
  $errors = [];
  if (empty($tournamentName)) {
    $errors[] = 'Tournament Name is required.';
  }
  if (empty($tournamentID)) {
    $errors[] = 'Tournament ID is required.';
  }
  if (empty($tournamentDate)) {
    $errors[] = 'Tournament Date is required.';
  }
  if (empty($tournamentVenue)) {
    $errors[] = 'Tournament Venue is required.';
  }
  if (empty($tournamentRegSt)) {
    $errors[] = 'Registration Start Date is required.';
  }
  if (empty($tournamentRegEd)) {
    $errors[] = 'Registration End Date is required.';
  }
  if (empty($coachName)) {
    $errors[] = 'Coach Name is required.';
  }
  if (empty($coachEmail) || !filter_var($coachEmail, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid Email format.';
  }

  // If no errors, proceed with data storage (replace with your database logic)
  if (empty($errors)) {
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // Prepare SQL statement (example, modify as needed)
      $sql = "INSERT INTO tournaments (name, tournament_id, date, venue, registration_start, registration_end, coach_name, coach_email, coach_phone)
              VALUES (:name, :tournament_id, :date, :venue, :registration_start, :registration_end, :coach_name, :coach_email, :coach_phone)";

      $stmt = $conn->prepare($sql);
      $stmt->bindParam(":name", $tournamentName);
      $stmt->bindParam(":tournament_id", $tournamentID);
      $stmt->bindParam(":date", $tournamentDate);
      $stmt->bindParam(":venue", $tournamentVenue);
      $stmt->bindParam(":registration_start", $tournamentRegSt);
      $stmt->bindParam(":registration_end", $tournamentRegEd);
      $stmt->bindParam(":coach_name", $coachName);
      $stmt->bindParam(":coach_email", $coachEmail);
      $stmt->bindParam(":coach_phone", $coachNumber);

      $stmt->execute();

      echo "Tournament created successfully!"; // Replace with a success message or redirect

    } catch(PDOException $e) {
      echo "Error creating tournament: " . $e->getMessage();
    }

    $conn = null;
  } else {
    // Display errors if any
    echo '<ul style="color: red;">';
    foreach ($errors as $error) {
      echo "<li>$error</li>";
    }
    echo '</ul>';
  }
}

// Rest of your HTML code (form and everything else)

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/tournamentCreateForm.css" />
</head>
<body>
<div class="tournament_body">
    <div style="text-align:center;">
      <h1 style="padding-top:20px;"><b>Create Tournament</b></h1>
    </div>
    <div class="fromWrap">
  <form action="process_tournament.php" method="POST">
  <div class="form-row">
   <div class="form-group col-md-12">
      <label for="inputTounamentName" class="inputHeading">Tournament Name</label>
      <input type="text" class="form-control" id="inputTounamentName" placeholder="Tournament name">
    </div>
    <div class="form-group col-md-12">
      <label for="inputTounamentID" class="inputHeading">Tournament ID</label>
      <input type="text" class="form-control" id="inputTounamentID" placeholder="Tournament ID">
    </div>
    <div class="form-group col-md-12">
      <label for="tournamentDate" class="inputHeading">Date of Event</label>
      <input type="date" class="form-control" id="tournamentDate" placeholder="Date">
    </div>
    <div class="form-group col-md-12">
      <label for="tournamentVenue" class="inputHeading">Venue</label>
      <input type="text" class="form-control" id="tournamentVenue" placeholder="Venue">
    </div>
  </div>
  <div class="form-group col-md-12">
      <label for="tournamentRegSt" class="inputHeading">Registration start date</label>
      <input type="date" class="form-control" id="tournamentRegSt" placeholder="Date">
    </div>
    <div class="form-group col-md-12">
      <label for="tournamentRegEd" class="inputHeading">Registration end date</label>
      <input type="date" class="form-control" id="tournamentRegEd" placeholder="Date">
    </div>
    <h4 style="padding:6px;padding-top:20px;"><b>Single Point Of Contact</b></h4>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="coachName" class="inputHeading"> Coach Name</label>
      <input type="text" class="form-control" id="coachName">
    </div>
    <div class="form-group col-md-12">
      <label for="coachEmail" class="inputHeading">Email</label>
      <input type="email" class="form-control" id="coachEmail">
    </div>
    <div class="form-group col-md-12">
      <label for="coachNumber" class="inputHeading">Phone Number</label>
      <input type="number" class="form-control" id="coachNumber">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary" style="margin-top:10px;">Create Tournament</button>
</form>
</div>
</div>
</body>
</html>