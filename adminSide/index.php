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

    <link rel="stylesheet" href="..\style\style.css">

    <title>Admin</title>
  </head>



  <body>
    
    <?php 
    $_SESSION['active'] = 'home';
    include_once "header.php";
    ?>


    <div class = 'container'>
      <div class = 'row'>
        <div class = 'text-center mt-2'>
          <h1 class = "h3 mt-2"> Welcome to Admin Side of CEB</h1>
        </div>
      </div> <!--End of the first row-->


      <div class = 'row'>
        <div class = 'col-7'></div>
        <div class = 'col-5'>
          <div id = 'map'></div>
        </div>
      </div> <!--End of the row two-->
    </div><!--End of the conatiner-->


    <script>
      function initMap(){
        var location = {lat:7.045000 ,lng:80.537643};
        var map = new google.maps.Map(document.getElementById('map'), {zoom:4, center:location});
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6-0zbOsmwHO59DZuRSpEayq36byz8mWA&callback=initMap"type="text/javascript"></script>
  </body>
</html>
