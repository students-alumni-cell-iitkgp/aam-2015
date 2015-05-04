<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
		<title>Sequence Theme Demo - Sliding Horizontal Parallax</title>
		<link rel="stylesheet" type="text/css" media="screen" href="slide_text/css/yoy_text.css" />
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
					<div class="info"></br></br></br></br>
						<img src="slide_text/images/old.png" alt="" style="position:relative;width:600px;left:200px;top:-50px" />
						<h2>Yearnings of Yore</h2>
<p align="justify"></br>Yearnings of Yore is an assorted collection of memoirs, which contains literary pieces and photographs/ sketches of your most cherished memories during your stay in KGP.
 This magazine is our exclusive Annual Alumni Meet souvenir to be given to all the alumni attending the Meet in January, 2014. 
 We encourage you to share your stories and past experiences with us so that we could publish it in the magazine.</p>
 </br><a href="mailto:alumni@hijli.iitkgp.ernet.in"><p style="font-size:24px;position:relative;top:20px;left:200px">Send via mail</h3></a>
  <p  class="sequence-next1" style="font-size:22px;position:relative;top:0px;left:500px;color:#A34719">Upload here</h3>

					</div>
				<img class="sky" src="slide_text/images/back.png" alt="Blue Sky" />
					
				</li>
				<li>
					<div class="info">
						<div id="stylized" class="myform" >
<form id="form" name="form" action="thankyou.php" method="post" enctype="multipart/form-data" onsubmit="return signupValidate();">

<h2>Submit your entry for Yearnings of Yore</h2>
</br>
<table>
<label>Full Name:<?php for($i=1;$i<=11;$i++){echo("&nbsp");}?>
</label>
<input type="text" name="name" placeholder="Add your name" id="name" maxlength="30"/>
<?php for($i=1;$i<=25;$i++){echo("&nbsp");}?>

<label>Department:
</label>
<input type="text" name="dept" placeholder="Add your department" id="dept" maxlength="30"/>


<label>Degree:<?php for($i=1;$i<=16;$i++){echo("&nbsp");}?>
<span class="small"></span>
</label>
<input type="text" name="degree" placeholder="Add your degree"  id="degree" maxlength="30"/>
<?php for($i=1;$i<=25;$i++){echo("&nbsp");}?>


<label>Hall:<?php for($i=1;$i<=17;$i++){echo("&nbsp");}?>
</label>
<input type="text" name="hall" placeholder="Add your hall"  id="hall" maxlength="6"/></br>

<label>Year of passing:
</label>
<input type="number" name="batch" placeholder="Add your batch"  id="batch" maxlength="4"/>
<?php for($i=1;$i<=25;$i++){echo("&nbsp");}?>

<label>Email:<?php for($i=1;$i<=14;$i++){echo("&nbsp");}?>
</label>
<input type="text" name="email" placeholder="Add a valid address"  id="email" maxlength="30"/></br>

<label>Title:<?php for($i=1;$i<=22;$i++){echo("&nbsp");}?>
</label>
<input type="text" name="title" placeholder="Add your title"  id="title" maxlength="30"/>
<?php for($i=1;$i<=10;$i++){echo("&nbsp");}?></br>

<label style="position:relative;top:-50px">Write-up:
</label>
<textarea rows="4" cols="50" name="writeup" placeholder="Fill your entry"  id="writeup"/></textarea></br>

<label>Your File:<?php for($i=1;$i<=18;$i++){echo("&nbsp");}?>
</label>
<input type="file" name = "file"  id="file"/>
<?php for($i=1;$i<=28;$i++){echo("&nbsp");}?></br>


<label>Your Photograph:
</label>
<input type="file" name = "photo"   id="photo"/>
</table>
<button type="submit">Submit</button>
<div class="spacer"></div>

</form>
</div>
					</div>
					<img class="sky" src="slide_text/images/back.png" alt="Blue Sky" />
				</li>
				
			</ul>
		</div>
	</body>
</html>