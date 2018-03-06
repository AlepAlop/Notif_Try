<?php
include('conn.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

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

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Demo of Notification System</strong></h1>
                            <div class="description">
                            	<p>
	                            	Ini adalah demo sistem notifikasi dengan menggunakan AJAX, javascript, font awesome dan bootstrap. 
                                    Downloadlah dari <a href="#"><strong>ALIF</strong></a>, dan ubahlah sesuka hati anda!
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login</h3>
                            		<p id="usernamereminder">Enter your username</p>
                                    <p id="passwordreminder">Enter your password</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="POST" class="login-form" id="login_form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username" autofocus="">
			                        </div>
			                        <div class="form-group" id ="pass">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
                                    <div class="form-group" id ="back">
			                             <button type="submit" class="btn btn-danger">Next</button>
                                    </div>
                                    <div class="form-group" id ="back">
                                        <div class="row">
                                            <div class="col-sm-3 col-sm-offset-4.5">
                                                <button type="reset" class="btn btn-success" id="back-button">Reset</button>
                                            </div>
                                        </div>
                                    </div>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>...or you can create new account:</h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-2" href="register.php">
	                        		<i class="fa fa-edit"></i> Register Now!
	                        	</a>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--Coding javascript yg berkaitan dgn verify login form-->
<script type = "text/javascript">
    $(document.login).ready(function(){
        var stat = 1;
        $("#back-button").addClass('collapse');
        $("#pass").addClass('collapse');
        $("#passwordreminder").addClass('collapse');

        $('#login_form').on('submit', function(event){
            event.preventDefault(); // prevent dri submit secara normal, Let do it in our own way.. 

            if(stat == 1){
                if($('#form-username').val() != ''){
                    var form_data = $(this).serialize();
                    $.ajax({
                        url:"login.php",
                        method:"POST",
                        data:form_data,
                        dataType:"json",
                        success:function(data){
                            if(data.success == 1){
                                $("#pass").removeClass('collapse');
                                $("#passwordreminder").removeClass('collapse');
                                $("#usernamereminder").addClass('collapse');
                                $("#back-button").removeClass('collapse');
                               document.getElementById("form-username").disabled = true;
                                stat=2;
                            }
                            else if(data.success == 2){
                                alert("Opss! It seems your account is not activated yet. Our team is working on it. Try again later...");
                            }
                            else{
                                alert("Username is invalid!");
                            }
                    }
                });

                }
                else{
                    alert("Enter Username First");
                }
            }

            else if(stat == 2){
                if($('#form-password').val() != '' && $('#form-username').val() != ''){
                    document.getElementById("form-username").disabled = false;

                    var form_data = $(this).serialize();
                    $.ajax({
                        url:"login.php",
                        method:"POST",
                        data:form_data,
                        dataType:"json",
                        success:function(data){
                            if(data.success == 1){
                                window.location = 'admin.php';
                            }
                            else if(data.success == 2){
                                window.location = 'home.php';
                            }
                            else{
                                alert("Wrong password!");
                            }
                        }
                    });
                document.getElementById("form-username").disabled = true;
                }
                else{
                    alert("Enter Password First");
                }
            }
        });

        $('#login_form').on('reset', function(event){ //untuk reset balik form display
            stat = 1;
            $("#back-button").addClass('collapse');
            $("#pass").addClass('collapse');
            $("#passwordreminder").addClass('collapse');
            $("#usernamereminder").removeClass('collapse');
             document.getElementById("form-username").disabled = false;

        });
    });
</script>

    </body>

</html>