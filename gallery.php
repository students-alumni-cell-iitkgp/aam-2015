<!DOCTYPE html>
<html lang="en">
<head>
	<title>GALLERY</title>
	<meta charset="utf-8" />
	<meta name="viewport" id="jb-viewport" content="minimal-ui" />
	<meta name="description" content="" />

	<!-- START OPEN GRAPH TAGS-->
	<meta property="og:title" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:description" content="Mycontent" />
	<!-- END OPEN GRAPH TAGS-->

	<style type="text/css">
	body {
	
		margin: 0px;
		
	}
	
	#juice a{
		color: red;
	}
	</style>
</head>
<body>
	<span id="juice" style="z-index:1000;position:fixed;font:bold 20px Tahoma;color:red;"><a href="home.php" ><img src="images/home1.png" width="60px" height="60px" /></a></span>
	<!--START JUICEBOX EMBED-->
	<script src="jbcore/juicebox.js"></script>
	<script>
	new juicebox({
		containerId: 'juicebox-container',
		galleryWidth: '100%',
		galleryHeight: '100%',
		backgroundColor: 'rgba(206,206,206,0.25)',
		
	});
	</script>
	<div id="juicebox-container"></div>
	<!--END JUICEBOX EMBED-->
</body>
</html>
