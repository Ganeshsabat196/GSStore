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
    <title>Upload</title>
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
                        <a class="nav-link active" href="/upload.html" >Upload</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="documents.php">documents</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/about.html">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/report.html">Report-a-bug</a>
                      </li>
                    
                </ul>
                
            </div>
        </div>
    </nav>
    
   
  <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Bug = $_POST["up-title"];
    $Suggestion = $_POST["up-unq-key"];
    $notes = $_POST["up-text-ar"];
     $file = $_POST["up-file"];

    $sql = "INSERT INTO `gsstore-notes` ( `Title`, `unq-key`,`Notes`, `file`,`tstamp`) VALUES ( '$Bug ', '$Suggestion','$notes','$file', current_timestamp());";
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
echo"working";
echo "the problem is ". mysqli_error($conn);
    }
}
?>
    <!-- cards section  -->
    <div id="card">

        <div class="container-fluid my-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="media/6.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Notes</h5>
                            <p class="card-text">Want to upload text notes.
                            </p>
                            <a href="#" class="btn" onclick="function1()">Click here</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="media/7.png" class="card-img-top" width="40px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Files</h5>
                        <p class="card-text">Want to upload files</p>
                        <a href="#" class="btn" onclick="function2()">Click here</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>

</div>
    <!-- form section -->
    <form action="/upload.php" method="post">
        
        <div class="container-fluid" id="form">
            
            <div class="mb-3 my-4">
                <label for="exampleFormControlInput1" class="form-label">Enter the title</label>
                <input type="Text" class="form-control" name="up-title" id="up-title" placeholder="@Title">
            </div>
            <div class="mb-3 ">
                <label for="exampleFormControlInput1" class="form-label">Set a unique key</label>
                <input type="Text" class="form-control" name="up-unq-key" id="up-unq-key" placeholder="@example: yourname_any-no_special-character">
            </div>
            <div class="mb-3 "id="filedoc">
                <label for="exampleFormControlInput1" class="form-label" >Upload your document</label>
                <input type="file" class="form-control" name="up-file" id="up-file" >
            </div>
            <div class="mb-3" id="notesec">
                <label for="exampleFormControlTextarea1" class="form-label">Notes</label>
                <textarea class="form-control" name="up-text-ar" id="up-text-ar" rows="6"
                    placeholder="Enter you text"></textarea>
            </div>
            <!-- <input type="file"> -->
            <button class="btn" >Submit</button>

        </div>
    </form>

      
    <!-- external links -->

    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
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