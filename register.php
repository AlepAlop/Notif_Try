<?php
include('conn.php');
$msg ="";
if(isset($_POST['btn-signup'])) {
    $username=mysqli_real_escape_string($conn,$_POST['form-username']);
    $password=mysqli_real_escape_string($conn,$_POST['form-password']);
    $repassword=mysqli_real_escape_string($conn,$_POST['form-repassword']);
    $check_username = $conn->query("SELECT username FROM user WHERE username='$username'");
    $count = $check_username->num_rows;

    if($password!=$repassword){
        $msg = "<p>
            <span class='glyphicon glyphicon-info-sign'></span> Password not match! Please try again.</p>";
    }
    else if ($count==0){
        $query = "INSERT INTO user(username,password,status,seen,type) VALUES ('$username','$password','0','0','0')";
        if ($conn->query($query))
        {
            $msg = "<p>
            <span class='glyphicon glyphicon-info-sign'></span> Successfully registered!
            </p>";
        }
        else 
        {
            $msg = "<p>
            <span class='glyphicon glyphicon-info-sign'></span> Error while registering!
            </p>";
        }
    }
    else 
    {
        $msg = "<p>
        <span class='glyphicon glyphicon-info-sign'></span> Sorry..
        Username already exist!
        </p>";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>

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
                            <h1><strong>Demo Notification System</strong></h1>
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
                                    <h3>Register</h3>
                                    <p id="usernamereminder">Isi ja suma hat yang kosong2 tuh!</p>
                                    <p id="error"></p>
                                    <?php
                                        if (isset($msg)) {
                                        echo $msg;
                                        }
                                    ?>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-pencil"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="" method="POST" class="login-form" id="login_form">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username" autofocus>
                                    </div>
                                    <div class="form-group" id ="pass">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                                    </div>
                                    <div class="form-group" id ="pass">
                                        <label class="sr-only" for="form-password">Re-Password</label>
                                        <input type="password" name="form-repassword" placeholder="Re-Password..." class="form-password form-control" id="form-repassword">
                                    </div>
                                    <div class="form-group" id ="back">
                                         <button type="submit" class="btn btn-danger" name="btn-signup">Register</button>
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
                            <div class="social-login-buttons">
                                <a class="btn btn-link-2" href="index.php">
                                    <i class="fa fa-edit"></i> Sign In Now!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        $(document.login).ready(function(){
            $('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function() {
                $(this).removeClass('input-error');
                $('.login-form').on('submit', function(e) {
                    $(this).find('input[type="text"], input[type="password"], textarea').each(function(){
                        if( $(this).val() == "" ) {
                        e.preventDefault();
                        document.getElementById("error").innerHTML = "Please fill in the blank!";
                        $(this).addClass('input-error');
                        }
                        else {
                        $(this).removeClass('input-error');
                        }
                    });
                });
            });
        });
    </script>
</html>