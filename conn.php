<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","notif");
if (!$conn) {
	$conn = mysqli_connect("ec2-54-247-95-125.eu-west-1.compute.amazonaws.com","bdtcmrtidvrxym","2a668b0109111153548e54319e9ad1b185a1ca66e12df6438de4ac5731615bf7","d14pphlglvhq83");
	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}
}
 
?>