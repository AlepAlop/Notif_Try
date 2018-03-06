<?php
include('conn.php');
if(isset($_POST["rej_user"])){
    $reject_user = $_POST['rej_user'];
    $qry = "DELETE FROM `user` WHERE username ='$reject_user'";
    $result=mysqli_query($conn,$qry);
}
else if(isset($_POST["app_user"])){
	$approve_user = $_POST['app_user'];
	$qry = "UPDATE user SET status = '1' WHERE username='$approve_user'";
	$result=mysqli_query($conn,$qry);
}
    
?>