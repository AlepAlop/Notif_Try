<?php 
include('check_admin.php');
include('conn.php'); 

 $username=$_SESSION['username'];
 $sql=mysqli_query($conn,"SELECT * FROM user WHERE username='$username'");
 $row = mysqli_fetch_assoc($sql);
 if($row['type']=='0')
 {
    die( Header("Location: home.php"));
 }
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

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
    <div class="container-fluid">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
          </div>    
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse-2">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Works</a></li>
              <li><a href="#">News</a></li>
              <li class="dropdown">
                <a href="approve.php"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-globe" style="font-size:18px;"></span></a>
            </li>
            <li>
              <a  href="logout.php" class="btn btn-default btn-outline btn-circle collapsed">Sign out</a>
            </li>
          </ul>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
  </div>


<div class="top-content">
          
  <div class="inner-bg">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2 text">
          <div class="text-center">
            <h1><kbd><strong>HELLO!</strong> Ini adalah page ADMIN<kbd></h1>
          </div>
          <div class="description">
            <p>
              Ini adalah demo sistem notifikasi dengan menggunakan AJAX, javascript, font awesome dan bootstrap. 
              Downloadlah dari <a href="#"><strong>ALIF</strong></a>, dan ubahlah sesuka hati anda!
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script type = "text/javascript">
$(document).ready(function(){

  function load(view = '')
  {
    $.ajax({
      url:"check_noti.php",
      method:"POST",
      data:{view:view},
      dataType:"json",
      success:function(data)
      {
        $('.count').html(data.count);
      }
    });
  }

  load();
  setInterval(function(){   //function untuk refresh setiap 5 second.. Wow!!! Finally this is what I try to find out!
    load();
  }, 5000);
  });
</script>