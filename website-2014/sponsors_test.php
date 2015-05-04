<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("head.php");?>

		
<!-- 
Easy fullscreen background slideshow in jQuery
By: Jasper Rooswinkel - www.jasperrooswinkel.com
Feel free to use and distribute but this notice must stay intact 
-->

<?php include("all.css");?>
<?php include("all.js");?></head>
<body>

<!-- This is the main page -->
<?php include("header.php");?>
<div id="text1" style="position:relative;top:70px ;height:1255px;width:1100px;background:transparent;left:83px;background-image:url('slide_text/images/back.png');padding-left:65px;padding-right:0px;padding-top:30px;margin-bottom:0px"> 
	<div id="tabs" style="position:relative;top:0px ; height:50px; width:380px;;z-index :1000; background-image:url('slide_text/images/back.png');text-align:center;">
	
	<a href="spons2014.php" style="position:relative; top:-20px;padding-left:25px;" >Sponsors 2014 </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="spons2013.php" style="position:relative; top:-20px;" >Sponsors 2013 </a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="spons2012.php" style="position:relative; top:-20px;" >Sponsors 2012 </a>
			
	</div>
</div>
<div>


<!-- The container for the background-image -->
<img id="bg" style="display:none" />

<!-- The container for the grid on top of the background-image -->
<div id="bg_grid">
</div>

</body>
</html>
