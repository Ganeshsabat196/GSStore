<?php
$servername = "localhost";
$username = "id19415460_ganesh1122";
$password = "Ganeshs0605@";
$database = "id19415460_reported_bugs";

$conn = mysqli_connect($servername, $username, $password, $database );

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBCHEAT</title>
</head>
<body>
    <!-- this is navbar section -->

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">WEBCHEAT</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/upload.php">Upload</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/documents.php">documents</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/report.php">Report-a-bug</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <!-- HEading -->
      <div class="container">

        <div class="heading mt-3" id="heading1" >
          <h1>WELCOME TO WEBCHEAT</h1>
        </div>
      </div>

   
      
  <!-- it contains the card section -->
      <div class="container mt-3">
        <h3 class="my-3">3 easy steps to start with this website</h3>
        <div class="row"  id="card1">
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="media/3.png" class="card-img-top" alt="...">
              <div class="card-body" id="card2" >
                <h5 class="card-title">Upload</h5>
                <p class="card-text">Upload by setting a unique key</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="media/4.jfif" class="card-img-top" alt="...">
              <div class="card-body"  id="card2">
                <h5 class="card-title">Search</h5>
                <p class="card-text">search you file with the unique key</p>        
              </div>
            </div>
          </div>
          <div class="col-md-4"  >
            <div class="card" style="width: 18rem;">
              <img src="media/5.jpg" class="card-img-top" alt="...">
              <div class="card-body"id="card2">
                <h5 class="card-title">Download</h5>
                <p class="card-text">Access you file from anywhere</p>
            
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- external links -->
      <script src="/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
     
      <script src="js/script.js"></script>
      
      <script src="https://kit.fontawesome.com/28d1170533.js" crossorigin="anonymous"></script>
</body>
<footer class="text text-white " style="background-color: rgb(216, 149, 25)">
 
  <!-- Copyright -->
  <div class="text p-1" id="foot1">
    © 2022 Copyright:
    <a class="text-black" style="font-weight: bolder " href="https://www.instagram.com/_ganesh_sabat_45/" target="">Developed by Ganesh Sabat </a>
  </div>
  <!-- Copyright -->
</footer>
</html>