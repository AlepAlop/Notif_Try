<?php 
/** 
 * Charts 4 PHP 
 * 
 * @author Shani <support@chartphp.com> - http://www.chartphp.com 
 * @version 2.0 
 * @license: see license.txt included in package 
 */ 

include_once("config.php"); 
include_once("lib/inc/chartphp_dist.php"); 

$p = new chartphp();


$line_chart_data=array(
                array(
                    array("Jan",48.25),
                    array("Feb",238.75),
                    array("Mar",95.50),
                    array("Apr",300.50),
                    array("May",286.80),
                    array("Jun",400)),
                array(
                    array("Jan",300.25),
                    array("Feb",225.75),
                    array("Mar",44.50),
                    array("Apr",259.50),
                    array("May",250.80),
                    array("Jun",300)),
                array(
                    array("Jan",148.25),
                    array("Feb",248.75),
                    array("Mar",195.50),
                    array("Apr",230.50),
                    array("May",260.80),
                    array("Jun",365)),
                array(
                    array("Jan",256.25),
                    array("Feb",125.75),
                    array("Mar",344.50),
                    array("Apr",299.50),
                    array("May",150.80),
                    array("Jun",370))
                    ); 

// data array is populated from example data file
$p->data = $line_chart_data; 
$p->chart_type = "line"; 

// Common Options 
$p->title = "Line Chart"; 
$p->xlabel = "Months"; 
$p->ylabel = "Sales"; 
$p->series_label = array("2014","2015","2016","2017"); 

$out = $p->render('c1'); 
?> 
<!DOCTYPE html> 
<html> 
    <head> 
        <link rel="stylesheet" href="lib/js/chartphp.css"> 
        <script src="lib/js/jquery.min.js"></script> 
        <script src="lib/js/chartphp.js"></script> 
    </head> 
    <body> 
        <div> 
            <?php echo $out; ?> 
        </div> 
    </body> 
</html> 