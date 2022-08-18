<!-- INSERT INTO `gsstore-bugs` (`Sr no.`, `bug report`, `suggestions`, `timestamp`) VALUES ('1', '1', '1', current_timestamp()); -->
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
    <title>Document</title>
</head>
<body>
     <!-- this is navbar section -->

     <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">WEBCHEAT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/upload.php" >Upload</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="documents.php">documents</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/about.html">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/report.php">Report-a-bug</a>
                      </li>
                    
                </ul>
                
            </div>
        </div>
    </nav>
    
    
    <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Bug = $_POST["Bug"];
    $Suggestion = $_POST["Suggestion"];
    $sql = "INSERT INTO `Reported-bugs` ( `bug report`, `suggestions`, `tstamp`) VALUES ( '$Bug ', '$Suggestion', current_timestamp());";
    $result = mysqli_query($conn, $sql);
    if($result){
    echo "<div class='alert alert-success' role='alert'>
  Upload successfull ! 
</div>";
}
else{
      echo "<div class='alert alert-danger' role='alert'>
  Upload unsuccessfull ! please try again.
</div>";   

    }
}
?>

      <!-- form section  -->
      <form action="/report.php" method="post">
      <div class="container-fluid my-4" id="form1">
          <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label my-3">Help us to improve the site</label>
              <textarea class="form-control" id="Bug" name="Bug" rows="5" placeholder="@Explain The bug here"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Suggestion regarding the  website</label>
                <textarea class="form-control" id="Suggestion" name="Suggestion" rows="5" placeholder="(optional)"></textarea>
            </div>
            <button class="btn my-3">
                submit
            </button>
        </div>

        </form>

     <!-- external links -->
     <script src="/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
     <script src="js/script.js"></script>
     <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
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