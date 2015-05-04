<?php 
include_once("session.php");
include_once("include/database.php");
$objDB = new Database();	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Yearbook, 2013</title>
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
</head>
<body>
<style>
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:400px;
padding:14px;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 2px #b7ddf2;
background:#ebf4fb;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
#stylized p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized textarea{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized button{
clear:both;
margin-left:150px;
width:125px;
height:31px;
background:#666666 url(img/button.png) no-repeat;
text-align:center;
line-height:31px;
color:#FFFFFF;
font-size:11px;
font-weight:bold;
}
</style>
<div id="stylized" class="myform">
<form id="form" name="form" action="thankyou3.php" method="post" enctype="multipart/form-data" onsubmit="return signupValidate();">
<h1>Yearbook</h1>
<p>Submit your entry</p>

<label>Full Name:
<span class="small">Add your name</span>
</label>
<input type="text" name="name" id="name" maxlength="50"/>

<label>Hall and Wing:
<span class="small">Add your hall and wing</span>
</label>
<input type="text" name="hall" id="hall" maxlength="50"/>

<label>Email:
<span class="small">Add your email address</span>
</label>
<input type="text" name="email" id="email" maxlength="50"/>

<label>Mobile:
<span class="small">Add your phone no.</span>
</label>
<input type="number" name="mobile" id="mobile" maxlength="50"/>

<label>Writeup:
<span class="small">a few lines about the good times the group shared</span>
</label>
<textarea rows="4" cols="50" name="writeup" id="writeup"/></textarea>

<label>Write-up:
<span class="small">(doc/pdf/docx/txt/odt)<2MB</span>
</label>
<input type="file" name = "file" id="file"/>

<label>People:
<span class="small">People in the photo(left to right). Write respective nicknames and departments also.</span>
</label>
<textarea rows="4" cols="50" name="people" id="people"/></textarea>

<label>Your Group's Photograph:
<span class="small">(jpg/jpeg/gif/png)<10MB</span>
</label>
<input type="file" name = "photo" id="photo"/>

<button type="submit">Submit</button>
<div class="spacer"></div>

</form>
</div>
<footer><center>&copy; Office of Alumni Affairs & International Relations, IIT Kharagpur</center></footer>
</body>
</html>