<html>

<head>

	<?php include("mainStyle.php"); ?>
	
	<script src="registration_form/script.js"></script>

	<style>

	input{
		border-radius: 6px;
		width:15em;
	}

	.browse{
		border:none;
	}


	.rb{
		height:1em;
		width:1em;
	}

	</style>

</head>

<body class="container">
	<div id="topbar" class="navbar">
		
		<?php include("menubar.php"); ?>

	</div>

	<br/>
	<br/>

	<div class="container">

		<div class="col-md-2"><p></p></div>

		<div class="col-md-8 " style="background-color:white;">

			<?php // include("form_input.php"); ?>

			<iframe src="https://docs.google.com/forms/d/1LH4rj458udltL0gtZ6RjCuwsiRHmQP-uHeA3g5s7DEE/viewform?embedded=true" width="760" height="760" style="margin-top: 50px" frameborder="0" marginheight="0" marginwidth="0">
				Loading...
			</iframe>

		</div>

		<div class="col-md-2" style="text-align:center">
		<?php include("socialIcons.php");?>
		</div>

	</div>


</body>

</html>