<?php
  include '../config/config.php';
 
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
  <form>
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