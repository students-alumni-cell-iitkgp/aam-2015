<!DOCTYPE html>
<html lang="en">

<head>

	<title>12th Annual Alumni Meet</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include("mainStyle.php");?>

	<script type="text/javascript" src="sponsor-cycle/cycle.js"></script>
	<script type="text/javascript" src="sponsor-cycle/cycle-script.js"></script>
	
</head>
<body class="container" id="page"> 
	
	<?php //include("back.php");?>

	<div id="mainpage" class="container">


		<?php include("top_home.php"); ?>


		<div class="row">
			<div class="col-md-3">

				<?php include('noticeboard.php'); ?>

				<br/>			

				<br/>

                <!-- <a href="http://antoniobernini.com">	<img src="images/timekeeper.png" width="100%"/></a> -->

			</div>

			<div class="col-md-6" style="">

				<?php include("imageSlider.php");?>

				<br/>

			</div>

			<div class="col-md-1">

				<br/>

			</div>

			<div class="col-md-2" >

				<?php include("socialIcons.php");?>

				<br/>

				<?php include("sponsorsSlider.php");?>

			</div> 

		</div>
	</div>

</body>

<script>

$(document).ready(function(){
	$(".carousel").carousel({
		interval: 2000,
		pause: "hover"
	});
});

</script>

</script>

</html>
