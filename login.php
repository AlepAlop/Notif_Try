<?php
if(isset($_POST["form-username"])){

	session_start();
    include('conn.php');
	$username = mysqli_real_escape_string($conn, $_POST['form-username']);
	$password = mysqli_real_escape_string($conn, $_POST['form-password']);
	$success=3;

    if($password == '' && $username != '')// check username
    {
    	$query=mysqli_query($conn, "SELECT * FROM `user` WHERE username='$username'");
    	if(mysqli_num_rows($query) == 0)
    	{
    		$success=3;
    	}
    	else
    	{
    		$row = mysqli_fetch_assoc($query);
    		if($row['status'] == 1 )
    		{
    			$success=1;
    		}
    		else
    		{
    			$success=2;
    		}
    	}
    }//---------------------------------------------------------------------
    else// check password
    {
		$query=mysqli_query($conn, "SELECT * FROM `user` WHERE username='$username' and password ='$password'");
    	if(mysqli_num_rows($query) == 0)
    	{
    		$success=3;
    	}
    	else
    	{
    		$row = mysqli_fetch_assoc($query);
    		if($row['type'] == 2 )
    		{
    			$success=1;
    			$_SESSION['username']=$row['username'];
    		}
    		else if($row['type'] == 0 )
    		{
    			$success=2;
                $_SESSION['username']=$row['username'];
    		}
    	}
	}

	$data = array(
		'success'   => $success
	);
	echo json_encode($data);
}