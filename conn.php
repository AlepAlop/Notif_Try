<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","notif");
if (!$conn) {
	$conn = mysqli_connect("host=eu-cdbr-west-02.cleardb.net dbname=heroku_ccbf80b0e334f69 user=bd0253e53a1f77 password=3012148e");
	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}
}
 
?>