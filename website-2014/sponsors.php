<style type="text/css">
.slideshow1 { height: 162px; width: 184px; margin: auto;}
.slideshow1 img { padding: 15px; border: 1px solid #ccc; background-color: #fff; }
</style> 
<!-- include jQuery library -->
<!-- include Cycle plugin -->
<script type="text/javascript" src="jquery.cycle.all.latest.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.slideshow1').cycle({
		fx: 'scrollUp', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		timeout:2000
	});
});
</script>
<div class="slideshow1">
<?php
foreach (glob("sponsors2/e*.*") as $filename) {
echo "<img src='".
		$filename. "'  style='width:160px;height:130px;' />";
}
?>
</div>
</center>