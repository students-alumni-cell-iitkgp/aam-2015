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
<?php include("all.js");?>
<style>
.title{
text-align:center;
color:black;
background-color:white;
padding:10px;
}

</style>
</head>
<body>

<!-- This is the main page -->
<?php include("header.php");?>
<div id="text1" style="position:relative;top:70px ;height:1800px;width:1100px;background:transparent;left:83px;background-image:url('slide_text/images/back.png');padding-left:65px;padding-right:0px;padding-top:30px;margin-bottom:0px"> 
	<div id="tabs" style="position:relative;top:0px;left:-60px; height:50px; width:380px;z-index :1000; background-image:url('slide_text/images/back.png');text-align:center;">
	
	<a href="spons2014_test.php" style="position:relative; top:-20px;padding-left:25px;" >Sponsors 2014 </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="spons2013_test.php" style="position:relative; top:-20px;" >Sponsors 2013 </a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="spons2012_test.php" style="position:relative; top:-20px;" >Sponsors 2012 </a>
			
	</div><br /><br />
	
	<div id="spons">
	<h2 class="title" style="width:104%;position:relative;left:-65px;" >CO SPONSOR</h2>
	
			<a href="http://www.adhunikgroup.com/" target="_blank"><img src="spons_image/7a.png" alt="" style="position:relative;left:430px;width:200px" /></a>
	
	<h2 class="title" style="width:104%;position:relative;left:-65px;">MAJOR SPONSORS</h2><br />
				<a href="http://www.in.issworld.com/Pages/FrontPage.aspx" target="_blank">	<img  src="spons_image/1a.png" alt="" style="position:relative;left:200px; width:200px" /> </a>
				<a href="http://www.tetrapak.com/in/pages/default.aspx" target="_blank">	<img  src="spons_image/2a.png" alt="" style="position:relative;left:400px;width:200px" /> </a>
	
	
	<h2 class="title" style="width:104%;position:relative;left:-65px;">EVENT SPONSORS</h2>
	
				<a href="http://www.sardamagnets.com/" target="_blank">	<img  src="spons_image/6a.png" alt="" style="position:relative;left:0px; width:200px" /> </a>
				<a href="http://www.signotron.com/" target="_blank">	<img  src="spons_image/12a.png" alt="" style="position:relative;left:200px;width:200px" /> </a>
				<a href="http://www.bseindia.com/" target="_blank">	<img src="spons_image/17a.png" alt="" style="position:relative;left:400px;width:200px" /> </a><br />
				<a href="http://www.airtel.in/forme/home" target="_blank">	<img src="spons_image/3a.png" alt="" style="position:relative;left:0px;width:200px" /> </a>
				<a href="http://www.wbsedcl.in/irj/go/km/docs/internet/webpage/HomePage.html" target="_blank">	<img  src="spons_image/9a.png" alt="" style="position:relative;left:200px;width:200px" /> </a>
				<a href="http://www.ddccis4.org/">	<img  src="spons_image/8a.png" alt="" style="position:relative;left:400px;width:200px" /> </a><br />
				<a href="http://www.itchotels.in/hotels/itcsonar.aspx" target="_blank">	<img  src="spons_image/10a.png" alt="" style="position:relative;left:0px;width:200px" /> </a>
				<a href="http://www.coca-colaindia.com/" target="_blank">	<img  src="spons_image/5a.png" alt="" style="position:relative;left:200px;width:200px" /> </a>
				<a href="http://www.nepamills.co.in/" target="_blank"><img  src="spons_image/13a.png" alt="" style="position:relative;left:400px;width:200px" /> </a><br />
				<a href="http://www.haymarket.com/home.aspx" target="_blank">	<img  src="spons_image/11a.png" alt="" style="position:relative;left:0px;width:200px" /> </a>
				<a href="http://www.bulforio.com/" target="_blank"><img  src="spons_image/4a.png" alt="" style="position:relative;left:200px;width:200px" /></a>
				<a href="http://www.angesbags.com/home.html" target="_blank">	<img  src="spons_image/16a.png" alt="" style="position:relative;left:400px;width:200px" /></a><br />
				<a href="http://www.rechargeguru.com/do/" target="_blank">	<img src="spons_image/15a.png" alt="" style="position:relative;left:200px;width:200px" /></a>
				<a href="http://kapsystem.com/" target="_blank"><img  src="spons_image/18a.png" alt="" style="position:relative;left:400px;width:200px" /> </a>
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
