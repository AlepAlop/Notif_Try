<?php 
session_start(); 
 
//check if user has login..if not goto login page 
if(!isset($_SESSION['username'])){     
	die( Header("Location: index.php")); 
} 
 
?>