<?php 
session_start();
$matricID = $_SESSION['matricID'];
$refID = $_GET['refID']; 
include('check_admin.php'); //check if applicant logged in 
include("connection.php"); // connection to database 
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>VRMS UiTM Perlis</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="icon" type="image/png" href="images/icons/logo.png"/>
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    VRMS System
                </a>
            </div>

            <ul class="nav">

				<li class="active">
                    <a href="admin.php">
                        <i class="ti-list"></i>
                        <p>View Reservation</p>
                    </a>
                </li>
				<li>
                    <a href="add_user.php">
                        <i class="ti-plus"></i>
                        <p>Add User</p>
                    </a>
                </li>
				
				<li>
                    <a href="update_user.php">
                        <i class="ti-pencil"></i>
                        <p>Update User Data</p>
                    </a>
                </li>
				
				<li>
                    <a href="today.php">
                        <i class="ti-stats-up"></i>
                        <p>View Report</p>
                    </a>
                </li>

            </ul>
			
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
					<img src="images/icons/logo.png" width="100" height="100"/><b>VRMS UiTM Perlis</b>
                </div>

			<div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
					
						<li>
                            <a href="logout.php">
								<i class="ti-truck"></i>
								<p>Logout</p>
                            </a>
                        </li>
                    </ul>
				</div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
<?php
	
	$check = mysqli_query($connection, "SELECT * FROM reservation WHERE refID='$refID'"); // query for selected ic number 
	if(mysqli_num_rows($check) == 0){ // check if matric id do not exist in database 
	
	echo " Please insert the infomation";
	}
	
	else{
		$row = mysqli_fetch_assoc($check);
	}
	
if(isset($_POST['approve']))
{

		$approve = mysqli_query($connection, "UPDATE reservation SET status='Approved' WHERE refID='$refID'"); // query for removing data
		if($approve){ // if delete query successful
			echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Successfully approved.</div>'; // display message data removed'
		}else{ // if delete query unsuccessful
			echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Cannot approve.</div>'; // display message cannot remove data'
		}
	
$name = $row['name'];
$to = $row['email'];
$status = "Approved";
$subject = "Reservation Status";
$message = "<html><body>";
$message .= "<table width='100%' bgcolor='#e0e0e0' cellpadding='0' cellspacing='0' border='0'>";
$message .= "<tr><td>";
$message .= "<table align='center' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;'>";
$message .= "<thead>
<tr height='80'>
<th style='background-color:#f5f5f5; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:28px;' >
<img src='https://jonlejeng.000webhostapp.com/cclub/assets/img/cclub.png' height='100' width='200' /></th>
<th style='background-color:#f5f5f5; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:28px;' >UITM PERLIS VRMS </th>
</tr>
</thead>";
$message .= "<tbody>
<tr align='center' height='50' style='background-color:#00a2d1;'>
<td colspan='4' style='background-color:#00a2d1;'></td>
</tr>
<tr>
<td colspan='4' style='padding:15px;'>
<p style='font-size:20px;'>Hi! ".$name.",</p>
<hr />
<p style='font-size:25px;'>Notice of Reservation Status</p>
<p style='font-size:15px; font-family:Verdana, Geneva, sans-serif;'>Your reservation status is ".$status."</p>
<p style='font-size:15px; font-family:Verdana, Geneva, sans-serif;'>Contact us if you have any enquiries</p>
</td>
</tr>
</tbody>";
$message .= "</table>";
$message .= "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: UiTM-Activity & Funding System (A.F.S) <damaix1@gmail.com>' . "\r\n";
$headers .= 'Cc: damaix1@gmail.com' . "\r\n";
$mail = mail($to,$subject,$message,$headers);
if(!$mail) {
echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error sending email !</div>';
} else {
echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Your email was sent successfully..</div>';
}
}


if(isset($_POST['reject']))
{
		$note=$_POST['note'];
		$reject = mysqli_query($connection, "UPDATE reservation SET status='Rejected', note='$note' WHERE refID='$refID'"); // query for removing data
		if($reject){ // if delete query successful
			echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Successfully rejected.</div>'; // display message data removed'
		}else{ // if delete query unsuccessful
			echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Cannot reject.</div>'; // display message cannot remove data'
		}
		
$name = $row['name'];
$to = $row['email'];
$status = "Rejected";
$subject = "Reservation Status";
$message = "<html><body>";
$message .= "<table width='100%' bgcolor='#e0e0e0' cellpadding='0' cellspacing='0' border='0'>";
$message .= "<tr><td>";
$message .= "<table align='center' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;'>";
$message .= "<thead>
<tr height='80'>
<th style='background-color:#f5f5f5; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:28px;' >
<img src='https://jonlejeng.000webhostapp.com/cclub/assets/img/cclub.png' height='100' width='200' /></th>
<th style='background-color:#f5f5f5; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:28px;' >UITM PERLIS VRMS </th>
</tr>
</thead>";
$message .= "<tbody>
<tr align='center' height='50' style='background-color:#00a2d1;'>
<td colspan='4' style='background-color:#00a2d1;'></td>
</tr>
<tr>
<td colspan='4' style='padding:15px;'>
<p style='font-size:20px;'>Hi! ".$name.",</p>
<hr />
<p style='font-size:25px;'>Notice of Reservation Status</p>
<p style='font-size:15px; font-family:Verdana, Geneva, sans-serif;'>Your reservation status is ".$status."</p>
<p style='font-size:15px; font-family:Verdana, Geneva, sans-serif;'>Note: ".$_POST['note']."</p>
<p style='font-size:15px; font-family:Verdana, Geneva, sans-serif;'>Contact us if you have any enquiries</p>
</td>
</tr>
</tbody>";
$message .= "</table>";
$message .= "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: VRMS Administrator <izyanamira@gmail.com>' . "\r\n";
$headers .= 'Cc: izyanamira@gmail.com' . "\r\n";
$mail = mail($to,$subject,$message,$headers);
if(!$mail) {
echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error sending email !</div>';
} else {
echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Your email was sent successfully..</div>';
}
}
?> 

<form class="form-horizontal" action="" method="post" id="reserv" enctype="multipart/form-data">			
<!-- Display reservation detail -->
<center>
<img src="images/logouitm.png" width="50" height="50">
<h4>Unit Kenderaan Bahagian Pentadbiran </br>UITM Perlis</h4></center><br/>
<b>Applicant Details</b></br></br>
<table class="table table-bordered table-striped table-condensed">
<tr>
<th>Reference ID</th>
<td><?php echo $row['refID']; ?></td>
<th>Reservation Date & Time</th>
<td><?php echo $row['reserveDate']; ?></td>
</tr>

<tr>
<th>Name</th>
<td><?php echo $row['name']; ?></td>
<th>Department</th>
<td><?php echo $row['department']; ?></td>
</tr>

<tr>
<th>Matric ID</th>
<td><?php echo $row['matricID']; ?></td>
<th>Level</th>
<td><?php echo $row['level']; ?></td>
</tr>

<tr>
<th>Email</th>
<td><?php echo $row['email']; ?></td>
<th>Telephone</th>
<td><?php echo $row['tel_no']; ?></td>
</tr>
</table>

<b>Booking Details</b></br></br>
<table class="table table-bordered table-striped table-condensed">
<tr>
<th>Booking Type</th>
<td><?php echo $row['book_type']; ?></td>
</tr>
<th>Vehicle Type</th>
<td><?php echo $row['vehicle_type']; ?></td>
</tr>
<?php if($row['numPass']==NULL){
}
else{
	?>
<tr>
<th>Num of Passenger</th>
<td><?php echo $row['numPass']; ?></td>
</tr>
<?php } ?>

<?php if($row['passName']==NULL){
}
else{
	?>
<tr>
<th>Passengers Name</th>
<td><?php echo $row['passName']; ?></td>
</tr>
<?php } ?>

<?php if($row['carryLoad']==NULL){
}
else{
	?>
<tr>
<th>Load to Carry</th>
<td><?php echo $row['carryLoad']; ?></td>
</tr>
<?php } ?>

<tr>
<th>Location</th>
<td><?php echo $row['location']; ?></td>
</tr>
<tr>
<th>Program</th>
<td><?php echo $row['program']; ?></td>
</tr>
<?php if($row['dateBook']==NULL){
}
else{
	?>
<tr>
<th>Booking Date</th>
<td><?php echo $row['dateBook']; ?></td>
</tr>
<?php } ?>
<?php if($row['dateSend']==NULL){
}
else{
	?>
<tr>
<th>Send Date</th>
<td><?php echo $row['dateSend']; ?></td>
</tr>
<?php } ?>
<?php if($row['dateFetch']==NULL){
}
else{
	?>
<tr>
<th>Pickup Date</th>
<td><?php echo $row['dateFetch']; ?></td>
</tr>
<?php } ?>
<th>Pickup Point</th>
<td><?php echo $row['pickupPoint']; ?></td>
</tr>
<th>Drop Point</th>
<td><?php echo $row['dropPoint']; ?></td>
</tr>
<th>Pickup Time</th>
<td><?php echo $row['pickupTime']; ?></td>
</tr>

<?php
if(($row['status']) == 'Approved'){ ?>
<tr>
<th>Status</th>
<td><?php echo $row['status'];?></td>
</tr>
<?php } 
else{
}
?> 
</table>

<b>Links</b></br></br>
<table class="table table-bordered table-striped table-condensed">
<?php if($row['progDoc']==NULL){
}
else{
	?>
<tr>
<th>Program Details</th>
<td><a target="_blank" href="<?php echo $row['progDoc'];?>"><?php echo $row['progDoc'];?></a></td>
</tr>
<?php } ?>

<?php if($row['document']==NULL){
}
else{
	?>
<tr>
<th>Passengger's List Name</th>
<td><a target="_blank" href="<?php echo $row['document'];?>"><?php echo $row['document'];?></a></td>
</tr>
<?php } ?>
<?php
if(($row['status']) == 'Rejected'){ ?>
<tr>
<th>Note of Rejection</th>
<td><?php echo $row['note'];?></td>
</tr>
<?php } 
else{
}
?> 
</table>
Note of Rejection :</br></br>
<textarea name="note" rows="5" cols="80"></textarea>
</br></br>
<input type="submit" name="approve" class="btn btn-sm btn-primary" onclick="return confirm(\'Do you really want to approve this booking\')" value="Approve" data-toggle="tooltip" title="Approve Reservation"> 
<input type="submit" name="reject" class="btn btn-sm btn-danger" onclick="return confirm(\'Do you really want to reject this booking\')" value="Reject" data-toggle="tooltip" title="Reject Reservation"> 
<a href="admin.php" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Back">Back</a> 
<a href="email.php?refID=<?php echo $row['refID']; ?>" class="btn btn-sm btnsuccess"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Email Notification</a>
</form><br/><br/>

                </div>
            </div>
        </div>


        <footer class="footer">
				<div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by UiTM Perlis</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
