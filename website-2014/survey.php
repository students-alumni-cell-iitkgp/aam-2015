<?php 
include_once("include/database.php");
$objDB = new Database();	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" href="icon.ico">
<title>Survey Form</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="jquery.formalize.min.js"></script>
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
<script>
$(document).ready(function () {
    $("#button").click(function () {
        // Radios
        $(".rad:checked").each(function() {
            console.log("Radio: " + $(this).val());
        });
    });
})
</script>
<script type='text/javascript' >

function startCalc(){
  interval = setInterval("calc()",1);
}
function calc(){
  one = document.form.ihi.value;
  two = document.form.mnm.value; 
  three = document.form.iha.value; 
  four = document.form.pic.value; 
  five = document.form.sip.value; 
  six = document.form.sev.value; 
  seven = document.form.fsio.value; 
  eight = document.form.penca.value; 
  nine = document.form.uic.value; 
  ten = document.form.iitsm.value; 
  eleven = document.form.usf.value; 
  twelve = document.form.uis.value;
 
  w = (one * 1) + (two * 1)+ (three * 1)+ (four * 1)+ (five * 1)+ (six * 1)+ (seven * 1)+ (eight * 1)+ (nine * 1)+ (ten * 1)+ (eleven * 1)+ (twelve * 1);

  
  }
  function myFunction()
{
if (w > 100){
alert("You have exceeded the amount allocated to you!!!");
return false;
}
else if(w <100 )
{
alert("You still have Rs." + (100-w) + " left with you.");
return false;
}
else
return true;

}
 
function stopCalc(){
  clearInterval(interval);
}
</script>
<style>
		html {
		overflow:auto;
		}
		@font-face {
			font-family: engraversgothic;
			src: url('css/engraversgothic.ttf');
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
			
			z-index: -1;
		}
		
		#page-wrap { width: 50%; height: 100%; margin:0 10% 0 10%; padding: 40px; background: #fff; -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black; overflow:auto;}
		h1 {color:#2e3192; font-family: engraversgothic; font-size:60px;}
		h2 {font-family: engraversgothic; font-size:30px;}
		.horiz{margin-top:-20px;margin-left:-20px}.horiz td{padding:20px 0 0 20px}
		input,textarea,select,.uneditable-input{display:inline-block;width:px;max-width:100%;padding:4px;margin-bottom:9px;font-size:13px;color:#555555;border:1px solid #ccc;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;}
		
		 .ss-gridnumbers{text-align:center;border-bottom:0px solid #d3d8d3}.ss-gridnumber{display:block;padding:0 0 0}.ss-gridrow{text-align:center;color:#666;border-bottom:1px solid #d3d8d3;padding:.5em .25em}.ss-gridrow-leftlabel{min-width:100px;max-width:200px;padding-left:5px;text-align:left}.ss-grid-row-even{background-color:#fff}.ss-grid-row-odd{background-color:#f2f2f2}.ss-gridrow-leftlabel{min-width:100px;max-width:200px;padding-left:15px;text-align:left}
		
</style>
<style>
#customers
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
width:100%;
border-collapse:collapse;
}
#customers td, #customers th 
{
font-size:1em;
border:1px solid #98bf21;
padding:3px 7px 2px 7px;
}
#customers th 
{
font-size:1.1em;
text-align:left;
padding-top:5px;
padding-bottom:4px;
background-color:#A7C942;
color:#ffffff;
}
#customers tr.alt td 
{
color:#000000;
background-color:#EAF2D3;
}
</style>
</head>
<body>



<style type="text/css">
body{
overflow-x:hidden;}
</style>
	<img src="images/survey.jpg" class="bg">
	
	<div id="page-wrap">
		<center>
			<img src="images/lohoh.jpg" "width:200px"/></br>
			<h2>Utilization of Funds for Students' Services</h2>
			<p align="justify">Students' Alumni Cell is conducting this survey with the sole purpose of effectively utilizing the funds collected through the My Imprint Program  for the betterment of Students' Services. Since the money in question is for the students, it is the student community that should decide how this money should be spent. This survey will help us decide the allocation of funds for developing Students' Services.</p>
		</center>
		<form id="form" name="form" action="survey_process.php"  method="post" >
			  <tr>
				<td>
				  <label for="name">
					Name
				  </label><br />
				  <input type="name" id="name" name="name" value="Full name" onFocus="if(this.value=='Full name')(this.value='')" onBlur="if(this.value=='')(this.value='Full name')" />
				</td>
			</tr></br>
			<tr>
				<td>
					<label for="roll">Roll Number</label><br />	
					<input type="text" name="roll" id="roll"  value="Roll Number" onFocus="if(this.value=='Roll Number')(this.value='')" onBlur="if(this.value=='')(this.value='Roll Number')" />
				</td>
				</br>
			</tr>
			<tr>
				<td>
					<label for="hall">Hall</label><br />					
					<select id="hall" name="hall" class="required">
						<option value="AshutoshMukherjeeHall">Ashutosh Mukherjee Hall</option>
						<option value="AzadHall">Azad Hall</option>
						<option value="BCRoyHall">B C Roy Hall</option>
						<option value="GokhaleHall">Gokhale Hall</option>
						<option value="HomiBhabhaHall">Homi Bhabha Hall</option>
						<option value="JCBoseHall">J C Bose Hall</option>
						<option value="LalaLajpatRaiHall">Lala Lajpat Rai Hall</option>
						<option value="LalBahadurShastriHall">Lal Bahadur Shastri Hall</option>
						<option value="MadanMohanMalviyaHall">Madan Mohan Malviya Hall</option>
						<option value="MegnadSahaHall">Megnad Saha Hall</option>
						<option value="MotherTeresaHall">Mother Teresa Hall</option>
						<option value="NehruHall">Nehru Hall</option>
						<option value="PatelHall">Patel Hall</option>
						<option value="RajendraPrasadHall">Rajendra Prasad Hall</option>
						<option value="RaniLaxmibaiHall">Rani Laxmibai Hall</option>
						<option value="RadhaKrishnanHall">Radha Krishnan Hall</option>
						<option value="SarojiniNaiduIndiraGandhiHall">Sarojini Naidu/Indira Gandhi Hall</option>
						<option value="VidyasagarHall">Vidyasagar Hall</option>
						<option value="ZakirHussainHall">Zakir Hussain Hall</option>
						<option value="VikramSarabhaiResidentialComplex">Vikram Sarabhai Residential Complex</option>
						<option value="InstituteQuarter">Institute Quarter</option>
						<option value="BachelorsFlat">Bachelors Flat</option>
						<option value="Others">Others</option>
					</select>
				</td>
				
			</tr></br>
						<tr><td>Rate the present quality of Students' Services offered by IIT Kharagpur.</br>
			<tr><td> </br></td></tr>
			<table id="customers">
			<tr>
			<center>
			<th style="width:16.666666666666668%"> </th>
			<th style="width:16.666666666666668%">Excellent</th>
			<th style="width:16.666666666666668%">Very Good</th>
			<th style="width:16.666666666666668%">Average</th>
			<th style="width:16.666666666666668%">Needs Work</th>
			<th style="width:16.666666666666668%">Terrible</th>
			</center>
			</tr>
			
			<tr>
			<td style="width:16.666666666666668%">Hall Infrastructure:</td>
			<td style="width:16.666666666666668%"><input type="radio" name="hallinfra" value="Excellent"></td>
			<td style="width:16.666666666666668%"><input type="radio" name="hallinfra" value="Very Good"></td>
			<td style="width:16.666666666666668%"><input type="radio" name="hallinfra" value="Average"></td>
			<td style="width:16.666666666666668%"><input type="radio" name="hallinfra" value="Needs Work"></td>
			<td style="width:16.666666666666668%"><input type="radio" name="hallinfra" value="Terrible"></td>
			</tr>
			
			
			<tr>
			<td style="width:16.666666666666668%">Financial Assistance for Co-curricular Activities:</td>
			<td style="width:16.666666666666668%"><input type="radio" name="faca" value="Excellent"></td>
			<td style="width:16.666666666666668%"><input type="radio" name="faca" value="Very Good"></td>
			<td style="width:16.666666666666668%"><input type="radio" name="faca" value="Average"></td>
			<td style="width:16.666666666666668%"><input type="radio" name="faca" value="Needs Work"></td>
			<td style="width:16.666666666666668%"><input type="radio" name="faca" value="Terrible"></td>
			</tr>
			
			<tr>
			<td style="width:16.666666666666668%">Technology Students' Gymkhana(Cultural):</td>
			<td style="width:16.666666666666668%"><input type="radio"  name="gymkhanac" value="Excellent"></td>
			<td style="width:16.666666666666668%"><input type="radio"  name="gymkhanac" value="Very Good"></td>
			<td style="width:16.666666666666668%"><input type="radio"  name="gymkhanac" value="Average"></td>
			<td style="width:16.666666666666668%"><input type="radio"  name="gymkhanac" value="Needs Work"></td>
			<td style="width:16.666666666666668%"><input type="radio"  name="gymkhanac" value="Terrible"></td>
			</tr>
			
			<tr>
			<td style="width:16.666666666666668%">Technology Students' Gymkhana(Sports):</td>
			<td style="width:16.666666666666668%"><input type="radio"  name="gymkhanas" value="Excellent"></td>
			<td style="width:16.666666666666668%"><input type="radio"  name="gymkhanas" value="Very Good"></td>
			<td style="width:16.666666666666668%"><input type="radio"  name="gymkhanas" value="Average"></td>
			<td style="width:16.666666666666668%"><input type="radio"  name="gymkhanas" value="Needs Work"></td>
			<td style="width:16.666666666666668%"><input type="radio"  name="gymkhanas" value="Terrible"></td>
			</tr>
			
			</table>
			</tr>
			<tr></br>
			
				<td><p align="justify">You have been given Rs.100 to be spent for the upheaval of Students' Services at IIT Kgp. Allocate the money as per your discretion among the following categories.</br></br>
				<strong>NOTE: It is not necessary to distribute the money among all the categories. It is up to you to decide on which aspects you would like to spend the money.</p></strong>
				
				
			<table id="customers">
			<tr>
			<center>
			<br />
			<th style="width:20%"></th>
			<th style="width:20%"></th>
			<th style="width:20%"></th>
			<th style="width:20%"></th>
			</center>
			</tr>
			<tr>
			
			<td style="width:30%">Halls of Residence</td>
			<td style="width:20%"> Improvement of Hall Infrastructure<br /><br /><input type="text" name="ihi" size="8px" placeholder="" onFocus="startCalc();" onBlur="stopCalc();" ></td>
			<td style="width:20%">  Mess and Maintenance<br /><br /><input type="text" name="mnm" size="8px" style="position:relative;top:11px" placeholder=""onFocus="startCalc();" onBlur="stopCalc();"></td>
			<td style="width:20%"> Inter-Hall Activities<input type="text" name="iha" size="8px" style="position:relative;top:11px" placeholder="" onFocus="startCalc();" onBlur="stopCalc();"></td>
			</tr>
			<tr>
			
			<td style="width:30%">Financial Assistance for Co-curricular Activities</td>
			<td style="width:20%"> Participation in International Competitions<input type="text" name="pic" size="8px" placeholder="" onFocus="startCalc();" onBlur="stopCalc();" ></td>
			<td style="width:20%"> Student Initiated Projects &nbsp;<br /><br /> <input type="text" name="sip" size="8px" placeholder="" onFocus="startCalc();" onBlur="stopCalc();"></td>
			<td style="width:20%"> Student Entrepreneurial Ventures<input type="text" name="sev" size="8px" placeholder="" onFocus="startCalc();" onBlur="stopCalc();"></td>
			</tr>
			<tr>
			
			<td style="width:30%">Technology Students' Gymkhana(Cultural)</td>
			<td style="width:20%"> Funding of societies for inhouse and outstation events
			<input type="text" name="fsio" size="8px" placeholder="" onFocus="startCalc();" onBlur="stopCalc();"></td>
			<td style="width:20%">Promotion of existing  and new clubs and activities<br /><br /><input type="text" name="penca" size="8px" placeholder=""></td>
			<td style="width:20%"> Upgradation of infrastructure<br /><br /><br />
			<input type="text" name="uic" size="8px" placeholder="" onFocus="startCalc();" onBlur="stopCalc();"></td>
			
			</tr>
			
			<tr>
			
			<td style="width:30%">Technology Students' Gymkhana(Sports)</td>
			<td style="width:20%">Inter IIT Sports Meet<br /><br />
			<input type="text" name="iitsm" size="8px" placeholder="" onFocus="startCalc();" onBlur="stopCalc();"></td>
			<td style="width:20%">Upgrading sports facilities(Sports equipment,Coaches)<input type="text" name="usf" size="8px" placeholder="" onFocus="startCalc();" onBlur="stopCalc();"></td>
			<td style="width:20%"> Upgradation of infrastructure<br /><br /><input type="text" name="uis" size="8px" placeholder="" onFocus="startCalc();" onBlur="stopCalc();"></td>
			
			</tr>
			
			</table>
	
				<td>
					<label for="suggestion"></br>Please give your suggestions and ideas for improving Students' Services:</label><br />
					</br>
					<textarea id="suggestions" name="suggestions" rows="5" cols="50" placeholder="suggestions"></textarea>
				</td>
			</tr>
			
			<tr>				
				<td>
					</br><input  id = "submit" name = "submit" type="submit"  value="Submit" onclick="return myFunction()" />
				</td>
			</tr>
			
			
			
		</form>
		
		</table>
	</div>

</body>
</html>