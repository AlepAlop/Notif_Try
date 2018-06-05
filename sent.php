<?php
    include('conn.php');
    include('_lib.php');

$name = "Alep";
$to = "damaix1@gmail.com";
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
<p style='font-size:20px;'>Hi! ,</p>
<hr />
<p style='font-size:25px;'>Notice of Reservation Status</p>
<p style='font-size:15px; font-family:Verdana, Geneva, sans-serif;'>Your reservation status is</p>
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
$headers .= 'From: UiTM-Activity & Funding System (A.F.S) <	6d85e84f07fbe2>' . "\r\n";
$headers .= 'Cc: 	6d85e84f07fbe2' . "\r\n";
$mail = mail($to,$subject,$message,$headers);
echo "hello" ;
if(!$mail) {
echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error sending email !</div>';
} else {
echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Your email was sent successfully..</div>';
	$errorMessage = error_get_last()['message'];
	echo $errorMessage;
	}
?>
<head>
	
</head>
<body>
	
</body>