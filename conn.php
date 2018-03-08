<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","notif");
if (!$conn) {
	$conn = mysqli_connect("eu-cdbr-west-02.cleardb.net", "bd0253e53a1f77", "3012148e", "heroku_ccbf80b0e334f69");
	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}
}
 
?>