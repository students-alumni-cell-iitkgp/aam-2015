<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Last Meet</title>
  

  <?php include("mainStyle.php"); ?>


  <link rel="stylesheet" type="text/css" media="all" href="css/events_styles.css">
  
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="js/scrollview.js"></script>
</head>
<style type="text/css" media="screen">
.header_1{
  font-size: 35px;
  font-family: exomedium;
  text-align: center;
  color:white;

}

img
{
  border:5px double lightgrey;
  border-radius: 5px;
  margin: 10px;
}


.image_text
{
  margin: 0px 0px 40px 0px;
}

.10
{
  margin: 0px 0px 0px 0px;
}


</style>

<body class="container" style="overflow-x:hidden">

  <div class="container">

    <?php include("top_home.php"); ?>

    <div class="row">

      <div class="col-md-2">
      </div>
      <div class="col-md-8 arihant">
        <div id="event_slide">

          <?php include("content_lastmeet.php"); ?>

        </div><!-- @end #content -->
      </div>
      <div class="col-md-2" style="background:; text-align:center; ">
       <?php include("socialIcons.php");?>	
     </div>
   </div>
 </div>
</body>
</html>
