<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include_once("session.php");
include_once("include/database.php");
	extract($_POST);
$objDB = new Database();
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" href="icon.ico">
<title>Thank You</title>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19055295-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<style>
		html {
		overflow:hidden;
		}
		
		img.bg {
			/* Set rules to fill background */
			min-height: 100%;
			
			/* Set up proportionate scaling */
			width: 100%;
			height: 100%;
			
			/* Set up positioning */
			position: fixed;
			top: 0;
			left: 0;
		}
		
		#page-wrap { position: absolute; width: 50%; max-height:60%; margin: 30% auto auto 10%; padding: 20px; background: white; -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black; overflow:auto;}
		p { font: 15px/2 Georgia, Serif; margin: 0 0 30px 0; text-indent: 40px; }
		
</style>
</head>
<body>

<?php 
$rs=$objDB->addSurvey($name,$roll,$hall,$hallinfra,$faca,$gymkhanac,$gymkhanas,$ihi,$mnm,$iha,$pic,$sip,$sev,$fsio,$penca,$uic,$iitsm,$usf,$uis,$suggestions);
	$msg ="Entry registered";
?>
<?php 
echo '<img src="images/survey_th.jpg" class="bg">';

?>


</html>
