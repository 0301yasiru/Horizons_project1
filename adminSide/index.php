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
    
    <?php 
    $_SESSION['active'] = 'home';
    include_once "header.php";
    ?>



    <div class = 'text-center mt-5'>
      <h1 class = "h3 mt-5"> Puck Off 🤨🤨🤨</h1>
    </div>

    <div class = 'container'>
      <div class = 'row'>
        <div class = 'col-3'></div>
        <div class = 'col-6'>
          <hr>

          <p> ආව මෙතන ඇඩ්මින් ඇඩ්මින් ගගා ඇඩ්මින් පේජ් එකට.😒😒😒. මෙතන තිබ්බ පේජ් එක අයින් කරල තියෙන්නෙ🙄. දාන්න මගුලක් මට තාම සෙට් උනෙ නෑ. ඒ නිසා නිකන් හොල්මනක් දැක්ක වගෙ බලන් ඉන්නෙ නැතුව පලයන් User Search එකට. ඒකෙ තමා මෙතන තිබ්බ පේජ් එක තියෙන්නෙ. </p>
          <p> ඇඩ්මින් පේජ් ඇවිත්🖕. දෙන්නෙ හොම්බ රිවට්ටෙන්න.</p>
          <p> මීට, සයිට් එකේ පොර 😎</p>

        </div>
        <div class = 'col-3'></div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
