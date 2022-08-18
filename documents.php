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
                        <a class="nav-link active" href="/upload.php">Upload</a>
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



    <!-- table -->

    <div class="container my-4" id="table1">

        <section class="bg-light p-5">

            <div class="table-responsive" id="no-more-tables">
                <table class="table bg-white" id="myTable">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th>Sr no.</th>
                            <th>Title</th>
                            <th>Unique key</th>
                            <th>Notes</th>
                            <th>Actions</th>
                            
                        </tr>
                    </thead>
                    <?php 
          $sql = "SELECT * FROM `gsstore-notes`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['Title'] . "</td>
            <td>". $row['unq-key'] . "</td>
            <td>". $row['Notes'] . "</td>
            <td> <button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button>  </td>
          </tr>";
        } 
?>

                </table>
            </div>
        </section>


    </div>
    
    <!-- external links -->
    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/28d1170533.js" crossorigin="anonymous"></script>
    <script>

        $(document).ready(function () {
            $('#myTable').DataTable();
        });

    </script>
</body>

<footer class="text text-white " style="background-color: rgb(216, 149, 25)">

    <!-- Copyright -->
    <div class="text p-1" id="foot1">
        © 2022 Copyright:
        <a class="text-black" style="font-weight: bolder " href="https://www.instagram.com/_ganesh_sabat_45/"
            target="">Developed by Ganesh Sabat </a>
    </div>
    <!-- Copyright -->
</footer>

</html>