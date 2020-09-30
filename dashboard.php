<?php
include 'count.php';

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dashboard</title>
  </head>
  <body bgcolor="#b4cde4">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="vehicle.php">Vehicle</a>
      <a class="nav-item nav-link" href="insurance.php">Insurance</a>
      <a class="nav-item nav-link" href="pollution.php">Pollution</a>
      <a class="nav-item nav-link" href="fine.php">Traffic Fine</a>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
    </div>
  </div>
</nav>
<br>
<center>
<span class="d-inline p-2 bg-primary text-white">Welcome to the Regional Transport Office System</span></center>
<br>
<div class="card-deck">
  <div class="card bg-info text-white">
    <div class="card-header">Vehicle Registered</div>
    <div class="card-body">
      <h5 class="card-title"><?php echo $countv; ?></h5>
      <p class="card-text">Number of vehicle registered in RTO.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card bg-secondary text-white">
    <div class="card-header">Insurance Issued</div>
    <div class="card-body">
      <h5 class="card-title"><?php echo $counti; ?></h5>
      <p class="card-text">Number of insurance issued for vehicle.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card bg-info text-white ">
    <div class="card-header">Pollution Issued</div>
    <div class="card-body">
      <h5 class="card-title"><?php echo $countp; ?></h5>
      <p class="card-text">Number of pollution paper tested for vehicle.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>