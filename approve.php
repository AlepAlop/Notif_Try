<?php 
include('check_admin.php');
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Approve</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		    <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

        <!-- Javascript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

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
              <li><a href="admin.php">Home</a></li>
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

		<div class="row">
            <div class="col-sm-6 col-sm-offset-3 form-box">
                <div class="form-top">
                	<div class="table-responsive"> 
						<table class="table table-striped table-hover">  
						<tr>   
							<th>No</th>
							<th>Username</th> 
							<th>Account Type</th>
              <th>Approve</th>   
							<th>Reject</th>  
						</tr>
<?php

	$sql=mysqli_query($conn,"SELECT * FROM user WHERE status = '0'");
	
	if(mysqli_num_rows($sql) == 0){   
		echo '
			<div class="form-top-left">
                <p>No data retrived...</p>
            </div>';
	}
	else{
		echo'<div class="form-top">';
		$no = 1; // start from number 1  
		while($row = mysqli_fetch_object($sql)){

			$type='';
			if($row->type =='0'){
				$type='Normal User';
			}
			else{
				$type='Admin';
			}
			echo '   
			<tr class="data">    
				<td class="data">'.$no.'</td>    
				<td class="data">'.$row->username.'</td>    
				<td class="data">'.$type.'</a></td>
				<td><button" id="'.$row->username.'" title="Approve" data-toggle="tooltip" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
				</td>    
				<td><button" id="'.$row->username.'" title="Reject" data-toggle="tooltip" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
				</td>   
			</tr>  
			';
			$no++;
		}
		echo'</div>';
	}
?>
				</div>
			</div>
			<p id="demo"></p>
		</div>
    <form role="form" method="post" class="">
    </form>
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

  $(function(){
    $('.btn-danger').click(function(){
      var rej_user= $(this).attr('id');
      var $ele = $(this).parent().parent();
      $.ajax({
          url:"reject.php",
          method:'POST',
          data:{rej_user,rej_user},
          success:function(data)
          {
            if(data!="YES"){
              $ele.fadeOut().remove();
              load();
            }
            else{
                alert("Can't delete the row");
            }
          }
      });
    });
  });

  $(function(){
    $('.btn-success').click(function(){
      var app_user= $(this).attr('id');
      var $ele = $(this).parent().parent();
      $.ajax({
          url:"reject.php",
          method:'POST',
          data:{app_user,app_user},
          success:function(data)
          {
            if(data!="YES"){
              $ele.fadeOut().remove();
              load();
            }
            else{
                alert("Can't approve the account");
            }
          }
      });
    });
  });

  load();
  setInterval(function(){   //function untuk refresh setiap 5 second.. Wow!!! Finally this is what I try to find out!
    load();
  }, 1000);
  });
</script>
</html>
