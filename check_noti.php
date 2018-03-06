<?php
if(isset($_POST["view"])){
	include("conn.php");

	$query = mysqli_query($conn,"SELECT * FROM user WHERE status = '0'");
	$count = mysqli_num_rows($query);

	$data = array(
		'count'   => $count
	);
	echo json_encode($data);
}
?>