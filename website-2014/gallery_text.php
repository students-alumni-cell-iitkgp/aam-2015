<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
		<title>Sequence Theme Demo - Sliding Horizontal Parallax</title>
		<link rel="stylesheet" type="text/css" media="screen" href="slide_text/css/gallery_text.css" />
		<link href="http://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet" type="text/css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script>
		 if (typeof jQuery == 'undefined'){
		    document.write(unescape('%3Cscript src="slide_text/scripts/jquery-min.js" %3E%3C/script%3E'));
		 }
		</script>
		<script src="slide_text/scripts/jquery.sequence.js"></script>
		<script src="slide_text/sequencejs-options.sliding-horizontal-parallax.js"></script>
	</head>
	<body>	
		<div id="sequence">
			<img class="sequence-prev" src="slide_text/images/bt-prev.png" alt="Previous" />
			<img class="sequence-next" src="slide_text/images/bt-next.png" alt="Next" />

			<ul class="sequence-canvas">
				<li class="animate-in">
					<div class="info">
						
						<?php include("gallery_slider.php");?>
					</div>

				<img class="sky" src="slide_text/images/back.png" alt="Blue Sky" />
				</li>
				<li>
					<div class="info">
						<h2>Creative Control</h2>
						<p>Create unique sliders using CSS3 transitions -- no jQuery knowledge required!</p>
					</div>
					<img class="sky" src="slide_text/images/bg-clouds.png" alt="Blue Sky" />
					<img class="aeroplane" src="slide_text/images/aeroplane.png" alt="Aeroplane" />
				</li>
				<li>
					<div class="info">
						<h2>Cutting Edge</h2>
						<p>Supports modern browsers, old browsers (IE7+), touch devices and responsive designs</p>
					</div>
					<img class="sky" src="slide_text/images/bg-clouds.png" alt="Blue Sky" />
					<img class="kite" src="slide_text/images/kite.png" alt="Kite" />
				</li>
			</ul>
		</div>
	</body>
</html>