<?php 
/** 
 * Charts 4 PHP 
 * 
 * @author Shani <support@chartphp.com> - http://www.chartphp.com 
 * @version 2.0 
 * @license: see license.txt included in package 
 */ 

include_once("chart/config.php"); 
include_once("chart/lib/inc/chartphp_dist.php"); 

$p = new chartphp();


$line_chart_data=array(
                array(
                    array("Jan",480.25),
                    array("Feb",2308.75),
                    array("Mar",905.50),
                    array("Apr",3000.50),
                    array("May",2086.80),
                    array("Jun",4000)),
                array(
                    array("Jan",3000.25),
                    array("Feb",2025.75),
                    array("Mar",440.50),
                    array("Apr",2509.50),
                    array("May",2500.80),
                    array("Jun",3000)),
                array(
                    array("Jan",1408.25),
                    array("Feb",2408.75),
                    array("Mar",1095.50),
                    array("Apr",2300.50),
                    array("May",2600.80),
                    array("Jun",3650)),
                array(
                    array("Jan",2056.25),
                    array("Feb",1025.75),
                    array("Mar",3044.50),
                    array("Apr",2099.50),
                    array("May",1050.80),
                    array("Jun",3070))
                    ); 

// data array is populated from example data file
$p->data = $line_chart_data; 
$p->chart_type = "line"; 

// Common Options 
$p->title = "Approved Funding History"; 
$p->xlabel = "Months"; 
$p->ylabel = "Approved Funding"; 
$p->series_label = array("2014","2015","2016","2017"); 

$out = $p->render('c1'); 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="assets/img/logo.png">
  <title>A.F.S. (UiTM)</title>

  <?php 
    include('_lib.php');
  ?>


  <link rel="stylesheet" href="chart/lib/js/chartphp.css"> 
  <script src="chart/lib/js/jquery.min.js"></script> 
  <script src="chart/lib/js/chartphp.js"></script> 
  </head>
<body>
<?php 
	include('_hed.php');
?>

<div> 
    <?php echo $out; ?> 
</div> 
<br/>
<br/>
<br/>
<br/>
<br/>

<footer class="container-fluid text-center">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
        <p>Activity & Funding System (A.F.S) - Universiti Teknologi Mara (UiTM)</p>
        <p class="h6" style="color: #b1afaf;">&copy All right Reversed <i>by Alif Fitri</i>.</p>
      </div>
    </div>
</footer>
<script>
  var element = document.getElementById("navHome");
  element.classList.add("active");
</script>
</body>