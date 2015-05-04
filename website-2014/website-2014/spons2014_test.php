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
<div id="text1" style="position:relative;top:70px ;height:2000px;width:1100px;background:transparent;left:83px;background-image:url('slide_text/images/back.png');padding-left:65px;padding-right:0px;padding-top:30px;margin-bottom:0px"> 
	<div id="tabs" style="position:relative;top:0px;left:-60px; height:50px; width:380px;;z-index :1000; background-image:url('slide_text/images/back.png');text-align:center;">
	
	<a href="spons2014_test.php" style="position:relative; top:-20px;padding-left:25px;" >Sponsors 2014 </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="spons2013_test.php" style="position:relative; top:-20px;" >Sponsors 2013 </a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="spons2012_test.php" style="position:relative; top:-20px;" >Sponsors 2012 </a>
			
	</div><br /><br />
	<div id="spons">
		<h2 class="title" style="width:104%;position:relative;left:-65px;">CO SPONSOR</h2><br />
			<a href="http://www.bnpparibas.co.in/en/contact-us/srei-equipment-finance/"> <img src="spons2014/cosponsor.png" style="position:relative;width:500px;left:260px;"/> </a><br /><br />
		
	<h2 class="title" style="width:104%;position:relative;left:-65px;">MAJOR SPONSOR</h2><br />
	
	<a href="http://www.hmel.in"> <img src="spons2014/major.png" style="position:relative;width:200px;left:410px;"/> </a><br /><br />
	
	<h2 class="title" style="width:104%;position:relative;left:-65px;">HEALTHCARE PARTNER</h2><br />
	<a href="http://www.hillemanlabs.org/" target="_blank">	<img  src="spons2014/e3.jpg" alt="" style="position:relative;left:410px; width:200px;" /></a><br /><br />
	
	
	<h2 class="title" style="width:104%;position:relative;left:-65px;">EVENT SPONSORS</h2>
				<a href="http://www.wbsedcl.in/irj/go/km/docs/internet/webpage/HomePage.html" target="_blank">	<img  src="spons2014/e1.png" alt="" style="position:relative;left:0px; width:200px;" /> </a>
				<a href="http://vanheusenindia.com/" target="_blank">	<img  src="spons2014/e5.jpg" alt="" style="position:relative;top:-70px;left:200px; width:200px;" /></a>
				<a href="http://www.bseindia.com/" target="_blank">	<img  src="spons2014/e2.png" alt="" style="position:relative;left:400px; width:200px;" /> </a><br />
				<a href="https://www.vodafone.in/" target="_blank">	<img  src="spons2014/e4.png" alt="" style="position:relative;left:0px; width:200px;" /></a>
				
				<a href="http://www.kalikasteels.com/">	<img  src="spons2014/e6.png" alt="" style="position:relative;left:600px; width:200px;" /> </a><br />
				
	<h2 class="title" style="width:104%;position:relative;left:-65px;">GIFT SPONSORS</h2><br />
				<a href="http://www.sardamagnets.com/" target="_blank">	<img src="spons2014/reg2.jpg" alt="" style="position:relative;left:0px; width:200px;" /> </a>
				<a href="http://www.staedtler-india.com/" target="_blank">	<img  src="spons2014/reg.png" alt="" style="position:relative;left:200px;top:-70px; width:200px;" /> </a>
				<a href="http://www.coca-colaindia.com/" target="_blank">	<img  src="spons2014/bev.png" alt="" style="position:relative;left:400px; width:200px;" /> </a><br />
				<a href="http://www.idasystems.net/" target="_blank">	<img src="spons2014/mar.png" alt="" style="position:relative;top:-15px;left:0px; width:200px;" /> </a>
				<a href="http://www.ssdindia.in" target="_blank">	<img  src="spons2014/sms.png" alt="" style="position:relative;left:200px;top:-70px; width:200px;" /></a>
				<a href=" http://www.iwt.in "><img  src="spons2014/rec.png" alt="" style="position:relative;left:400px; width:200px;" /> </a><br /><br /><br />
				<a href="http://www.tatonka.com/defaulten.aspx" target="_blank">	<img  src="spons2014/fart.jpg" alt="" style="position:relative;left:0px;top:20px; width:200px;" /> </a>
				<a href="http://www.indiaskylanterns.com/" target="_blank">	<img  src="spons2014/lantern.png" alt="" style="position:relative;top:10px;left:200px; width:200px;" /></a>
				<a href="http://www.vanguardworld.com/" target="_blank">	<img src="spons2014/fart2.jpg" alt="" style="position:relative;left:410px;top:0px; width:200px;" /> </a>
				<br /><br /><br />
				
				<a href="http://www.gatikwe.com/" target="_blank">	<img  src="spons2014/gg.jpg" alt="" style="position:relative;top:50px;left:400px; width:200px;" /></a>
				
	
	
	
	
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
