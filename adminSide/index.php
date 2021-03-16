<?php
    include_once "..\includes\dbh.php";
    session_start();

    if (!isset($_SESSION['id'])){
        header("Location: login_page.php");
        exit();
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Admin</title>
  </head>



  <body>
    
    <?php include_once "header.php";?>



    <table class="table mt-5" style="max-width: 1000px; margin:auto;">
        <thead class="table-dark">
        <tr> <th>ID</th> <th>Name</th> <th>Address</th> <th>Date</th> <th>Consumtion</th> </tr>
        </thead>
        
        <?php

            $sql = "SELECT * FROM consumption";
            $stmt = mysqli_stmt_init($conn);
            mysqli_stmt_prepare($stmt, $sql);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while($row = mysqli_fetch_assoc($result)){
                $sql = "SELECT * FROM users WHERE id=?";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_bind_param($stmt, "i", $row['id']);
                mysqli_stmt_execute($stmt);
                $users = mysqli_stmt_get_result($stmt);
                $user_data = mysqli_fetch_assoc($users);


                $name = $user_data['fname']." ".$user_data['lname'];
                $addr = $user_data['home'].", ".$user_data['road'].", ".$user_data['city'];
                $date = mb_substr($row['date'], 0, 2)."-".mb_substr($row['date'],2, 2)."-".mb_substr($row['date'], 4, 8);

                echo "<tr> <td>".$row['id']."</td> <td>".$name."</td> <td>".$addr."</td> <td>".$date."</td> <td>".$row['consumption']."</td> </tr>";
            }
        ?>    
    
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
