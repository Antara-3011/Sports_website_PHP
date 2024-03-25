<?php

// Include configuration file if needed (e.g., for database connection)
include '../config/config.php';
if(!empty($_POST)){
  $inputTounamentName= isset($_POST['inputTounamentName']) ? $_POST['inputTounamentName']:"";
  $inputTounamentID= isset($_POST['inputTounamentID']) ? $_POST['inputTounamentID']:"";
  $tournamentDate= isset($_POST['tournamentDate']) ? $_POST['tournamentDate'] : "";
  $tournamentVenue= isset($_POST['tournamentVenue']) ? $_POST['tournamentVenue'] : "";
  $tournamentRegSt= isset($_POST['tournamentRegSt']) ? $_POST['tournamentRegSt'] : "";
  $tournamentRegEd= isset($_POST['tournamentRegEd']) ? $_POST['tournamentRegEd'] : "";
  $orgName= isset($_POST['orgName']) ? $_POST['orgName'] : "";
  $orgEmail= isset($_POST['orgEmail']) ? $_POST['orgEmail'] : "";
  $orgNumber= isset($_POST['orgNumber']) ? $_POST['orgNumber'] : "";
  

  $sql = "INSERT INTO tournament (Tname,Tid,DOE,Tvenue,Treg_start_date,Treg_end_date,organizer_name,organizer_email,organiser_number) VALUES ('$inputTounamentName','$inputTounamentID','$tournamentDate','$tournamentVenue','$tournamentRegSt','$tournamentRegEd','$orgName','$orgEmail','$orgNumber')";
  $res = mysqli_query($conn, $sql);
  echo "<div class='message'>
    <p>Create Tournament Successfully!</p>
    </div><br>";
 }
//else{
//   echo json_encode(array("Status" => "Error", "Message" => "Invalid request method"));
// }

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
      <label for="orgName" class="inputHeading"> Coach Name</label>
      <input type="text" class="form-control" id="orgName">
    </div>
    <div class="form-group col-md-12">
      <label for="orgEmail" class="inputHeading">Email</label>
      <input type="email" class="form-control" id="orgEmail">
    </div>
    <div class="form-group col-md-12">
      <label for="orgNumber" class="inputHeading">Phone Number</label>
      <input type="number" class="form-control" id="orgNumber">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary" style="margin-top:10px;">Create Tournament</button>
</form>
</div>
</div>
</body>
</html>