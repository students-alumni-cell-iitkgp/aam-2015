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
<!--
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/start/jquery-ui.css"
    rel="stylesheet" type="text/css" />
<script type="text/javascript">
    $(function () {
        $("#dialog").dialog({
            title: "Welcome Alumni",
            buttons: {
				'Not Registered':function () {
				window.location.href = "https://www.iitkgp.org/index.php/event/campus-events/973-11th-annual-alumni-meet";},
                'Registered': function () {
                    $(this).dialog('close');
				

				}
				
            }
        });
    });
</script>
<div id="dialog" style="display: none">

	</div>-->
<!-- This is the main page -->
<?php include("header.php");?>


<div style="position:relative;top:-60px;left:0px">

<?php include_once("slider/slider.php") ?>
		</div>
<div id="wrapper">
<div id="featured" class="container">
	
		<h2 class="detail">
		<?php include ("basiccontent.php") ?>
		</h2></div>
		<div style="position:relative;top:-180px;left:-520px;">
		
	<div class="sidewrapper">
<?php include("sponsors.php") ?>
</div>	
</div></div>

		<div id="content1">


	<!-- change this div to a nav tag if you're not planning on supporting IE users -->
	<div class="menu">
		<ul class="primary-menu">
			<li class="facebook"><a class="social-item" href="https://www.facebook.com/iitkgp.alumnicell" target="_blank">f</a><span class="social-span">Become a fan on Facebook</span></li>
			<li class="twitter"><a class="social-item" href="https://www.facebook.com/IIT.Kgp/app_116943498446376" target="_blank">t</a><span class="social-span">Follow us on Twitter</span></li>
			<!--<li class="flickr"><a class="social-item" href="#">c</a><span class="social-span">Add us on Flickr</span></li>
			<li class="rss"><a class="social-item" href="#">a</a><span class="social-span">Follow our updates through RSS</span></li>
			<li class="mail"><a class="social-item" href="#">k</a><span class="social-span">Subscribe to our newsletter</span></li>-->
		</ul>
	</div></div>
	<!--<div id="footer" style="top:-260px;left:0px;background-color:#000;opacity:0.6;font-color:white;width:100%">
	<font color="white"><p><b><center>&copy; Office of Alumni Affairs & International Relations, IIT Kharagpur</b></p></center></font>
</div> -->
<!-- The container for the background-image -->
<img id="bg" style="display:none" />

<!-- The container for the grid on top of the background-image -->
<div id="bg_grid">
</div>

</body>
</html>
