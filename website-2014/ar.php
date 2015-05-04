<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="icon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>11th Annual Alumni Meet IITKGP</title>
<meta name="keywords" content="alumni meet,kgp,kharagpur,iit,diamond jubilee,iitkgp,iitkgp.org" />

<meta name="description" content="IIT-KGP is organizing the 11th Annual Alumni Meet from 17th to 19th January, 2014. All the esteemed alumni are cordially invited to be a part of the Meet." />
<meta property="og:title" content="11th Alumni Meet, IITKGP"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="http://alumnimeet.iitkgp.ernet.in/"/>
<meta property="og:image" content="http://mentorship.iitkgp.ernet.in/images/kgp-logo.jpg"/>
<meta property="og:site_name" content="11th Alumni Meet, IITKGP"/>
<meta property="og:description"
          content="IIT-KGP is organizing the 11th Annual Alumni Meet from 17th to 19th January, 2014. All the esteemed alumni are cordially invited to be a part of the meet."/>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Archivo+Narrow:400,700" rel="stylesheet" type="text/css" />
<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="./style.css" rel="stylesheet" type="text/css" media="all" />


		
<!-- 
Easy fullscreen background slideshow in jQuery
By: Jasper Rooswinkel - www.jasperrooswinkel.com
Feel free to use and distribute but this notice must stay intact 
-->

<style>
	body, html {
		margin:0;
		padding:0;
		font-family:arial;
	}
	
	#header{
	  width:100%;
	  background-color:#FFFFCC;
	  height:0px;
	  position:absolute;
	  top:0px;
	  left:0px;
	  z-index:2;
	}
	
	#logo{
	background-color:#FFFFCC;
	height:150px;
	width:250px;
	position:absolute;
	top:0px;
	left:100px;
	z-index:2;
	}

	#page_overlay {
		width:100%;
		z-index:2;
	}
	
	#page_content {
	width:100%;
	height:52px;
		font-size:30px;
		padding-left:0px;
		background-color:#000000;
		color:#ff11ff;
		margin-top:60px;
		
		/* Display on top of slideshow */
		z-index:100;	
		position:relative; /* This is very important! */	
	}
	#upperslid{
	width:100%;
	height:270px;
	background-color:#000000;
	position:absolute;
	top:250px;
	left:0px;
	opacity:.67;
	z-index:2;
	}
	
	
	
	img#bg {
		/* Stretch background */
		position:fixed;
		top:0;
		left:0;
		height:100%;
		width:100%;
		z-index:-1;
	}
	
	#bg_grid {
		position:fixed; /* This is very important! */
		top:0;
		left:0;
		height:100%;
		width:100%;
	    background: url(grid.png) repeat;
			
		/* Display on top of background */
		z-index:-1;
	}

	#image_description {
		position:fixed; /* This is very important! */
		right:-150px;
		bottom:60px;
		width:140px;
		height:38px;
		background-color:#dddddd;
		filter:alpha(opacity=80);
		-moz-opacity:0.8;
		-khtml-opacity: 0.8;
		opacity: 0.8;
		z-index:2;
		padding:5px;
		font-size:10px;
		line-height:12px;
		color:#333333;
	}
	
	a, a:link, a:visited, a:active {
		text-decoration:none;
		color:#A62F00;
	}
	
	a:hover {
		text-decoration:underline;
	}
/*Menu Bar*/
	
#nav,#nav ul {
    list-style: none outside none;
    margin: 0;
    padding: 0;
	position: relative;
	
}
#menu{
    height: 58px;
left:190px;
    position : relative;
	margin:auto;
}
#nav {
    clear: both;
    font-size: 13px;
    height: 60px;

	border-radius:5px 5px 5px 5px;
    padding: 0 0 0 9px;
    position : relative;
	
}
#nav ul {
    background-color: #222;
    border:1px solid #222;
    border-radius: 0 5px 5px 5px;
    border-width: 0 1px 1px;
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.5);
    left: -9999px;
    overflow: hidden;
    position: absolute;
    top: -9999px;
    z-index:3005;

    -moz-transform: scaleY(0);
    -ms-transform: scaleY(0);
    -o-transform: scaleY(0);
    -webkit-transform: scaleY(0);
    transform: scaleY(0);

    /*-moz-transform-origin: 0 0;
    -ms-transform-origin: 0 0;
    -o-transform-origin: 0 0;
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;

    -moz-transition: -moz-transform 0.1s linear;
    -ms-transition: -ms-transform 0.1s linear;
    -o-transition: -o-transform 0.1s linear;
    -webkit-transition: -webkit-transform 0.1s linear;
    transition: transform 0.1s linear;*/
}
#nav li {
    background: url('images/menu_line.png') no-repeat scroll right 5px transparent;
    float: left;
    position: relative;
	
}
#nav li a {
    color: #FFFFFF;
    display: block;
    float: left;
    font-weight: normal;
    height: 25px;
    padding: 23px 20px 0;
    position: relative;
    text-decoration: none;
    text-shadow: 1px 1px 1px #000000;
}
#nav li:hover > a {
    color: #00B4FF;
}
#nav li:hover, #nav a:focus, #nav a:hover, #nav a:active {
    background: none repeat scroll 0 0 #121212;
    outline: 0 none;
}
#nav li:hover ul.subs {
    left: 0;
    top: 53px;
    width: 180px;
	
    -moz-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -o-transform: scaleY(1);
    -webkit-transform: scaleY(1);
    transform: scaleY(1);

}
#nav ul li {
    background: none;
    width: 100%;
}
#nav ul li a {
    float: none;
	border-top: 1px solid #ffffff;
}
#nav ul li:hover > a {
    background-color: #121212;
    color: #00B4FF;
}
#lavalamp {
    background: url('images/lavalamp.png') no-repeat scroll 0 0 transparent;
    height: 16px;
    left: 40px;
    position: absolute;
    top: 0px;
    width: 64px;
	z-index: 1005;

    -moz-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    -webkit-transition: all 300ms ease;
    transition: all 300ms ease;
}
#lavalamp:hover {
    -moz-transition-duration: 3000s;
    -ms-transition-duration: 3000s;
    -o-transition-duration: 3000s;
    -webkit-transition-duration: 3000s;
    transition-duration: 3000s;
}

#nav li:nth-child(1):hover ~ #lavalamp {
    left: 40px;
}	
	
#nav li:nth-child(2):hover ~ #lavalamp {
    left: 165px;
}
#nav li:nth-child(3):hover ~ #lavalamp {
    left: 310px;
}
#nav li:nth-child(4):hover ~ #lavalamp {
    left: 440px;
}
#nav li:nth-child(5):hover ~ #lavalamp {
    left: 580px;
}
#nav li:nth-child(6):hover ~ #lavalamp {
    left: 750px;
}
#nav li:nth-child(7):hover ~ #lavalamp {
    left: 890px;
}

pre{

    display: block;
    float: left;
    font-weight: normal;
    height: 30px;
    padding: 0px 0px 0;
    position: relative;
    text-decoration: none;
    text-shadow: 1px 1px 1px #000000;
	font-size:13px;
	font-family: 'Open Sans', sans-serif;
	top:-12px;
}
#page-wrap { width: 50%; height: 100%; margin:0 30% 0 26%; padding: 40px; background: #fff; -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black; overflow:auto;}
		h1 {color:#2e3192; font-family: engraversgothic; font-size:60px;}
		h2 {font-family: engraversgothic; font-size:30px;}
		.horiz{margin-top:-20px;margin-left:-20px}.horiz td{padding:20px 0 0 20px}
		input,textarea,select,.uneditable-input{display:inline-block;width:300px;max-width:100%;padding:4px;margin-bottom:9px;font-size:13px;color:#555555;border:1px solid #ccc;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;}
</style>


<script type="text/javascript">
	var aImages = new Array();
	var aURL = new Array();
	var aArtists = new Array();
	var iPrev = -1;
	var iRnd = -1;
	
	aImages[0] = "background image/01.jpg";
	aImages[1] = "background image/02.jpg";
	aImages[2] = "background image/03.jpg";
	aImages[3] = "background image/04.jpg";



	
	
	
	$(document).ready(function() {
	
		/* Define the function that triggers to fade in the background as soon as the image has loaded */
		$("img#bg").load(function()
			{
				/* Fade in during 3 seconds */
				$("img#bg").fadeTo(1000,1);
				
				/* Animate the picture description during 1 second */
				setTimeout(function() { $("#image_description").animate({right: '+=150'}, 1000) }, 1000);
			
				/* Set the timeout to fade out the image and the description after 10 seconds*/
		    	setTimeout(function() 
			    	{
			    		$("#image_description").animate({right: '-=150'}, 1000);
			    		$("img#bg").fadeOut(1000);
			    		
			    		/* Load the next image after 4 seconds */
			    		setTimeout(LoadImages,1000);
			    	}
			    	,7000);
			}			
		)
	
		/* Start the slideshow one second after the page is ready */ 
		setTimeout(LoadImages,1000);
		
    });

    function LoadImage(iNr)
	{
	
		/* Assign the new image to the background */
		$("img#bg").attr("src", aImages[iNr]);
 		
 		/* Assign the artist name to the description */
 		$("#image_artist").html(aArtists[iNr]);
 		
 		/* Assign the image url to the description */
        $("a#image_url").attr("href", aURL[iNr]);
        $("a#image_url").html("");
                        	
    };
    
    function LoadImages()
    {
    	
    	/* Select a random image number and make sure this is not equal to the previous image */
    	while(iPrev == iRnd)
    	{
    		iRnd = Math.floor(Math.random()*aImages.length);
    	}
    	
    	/* Show the selected image */
    	LoadImage(iRnd);
    	
    	iPrev = iRnd;
    	
    };
</script>
</head>
<body>

<!-- This is the main page -->
<div id="header">

</div>

	<div id="page_content">
	<div id="logo">
	<a href="index.php"><img src="images/060.jpg" style="height:170px;width:280px"/></a>
	

</div>
	<?php include("menu.php") ?>
	
<div style="position:relative;left:870px; top:0px;width:500px; height:96px" >
			<a id="eg2" class="button" href="#" style="float:left;position:relative;top:20px;left:-20px">REGISTER</a>		

<a href="#"><img src="images/061.png" /> </a>
</div>

</div>


<div style="position:relative;top:-60px;left:0px">

<?php include_once("slider/slider.php") ?>
		</div>
<div id="wrapper">
<div id="featured" class="container">
	
		<h2 class="detail">
		<?php include ("basiccontent.php") ?>
		</h2></div></div>

		<div id="content1">


	<!-- change this div to a nav tag if you're not planning on supporting IE users -->
	<div class="menu">
		<ul class="primary-menu">
			<li class="facebook"><a class="social-item" href="https://www.facebook.com/iitkgp.alumnicell" target="_blank">f</a><span class="social-span">Become a fan on Facebook</span></li>
			<li class="twitter"><a class="social-item" href="#">t</a><span class="social-span">Follow us on Twitter</span></li>
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
