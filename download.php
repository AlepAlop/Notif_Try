<?php 
include('conn.php'); 
session_start();

 if(!isset($_SESSION['down'])){     
  die( Header("Location: index.php")); 
} 

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Download</title>

        <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
  </head>

  <body>

<div class="top-content">
          
  <div class="inner-bg">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2 text">

          <a href="logout.php"  class="btn btn-warning btn-sm">BACK</a>

          <div class="text-center">
            <h1><kbd><strong>HELLO!</strong> Silalah download.<kbd></h1>
          </div>
          <div class="description">
            <p>
              Selamat Mencuba!</p><p>
              Goodluck!
            </p>
          </div>
          <a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="Notif_Try.rar"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;<a href="#"  class="btn btn-success btn-sm">Download!</a>&nbsp;
        </div>
      </div>
    </div>
  </div>
</body>
</html>