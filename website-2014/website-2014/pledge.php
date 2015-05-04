<?php 
include_once("include/database.php");
$objDB = new Database();	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Pledge form</title>
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
			height: auto;
			
			/* Set up positioning */
			position: fixed;
			top: 0;
			left: 0;
			
			z-index: -1;
		}
		
		#page-wrap { width: 50%; height: 100%; margin:0 30% 0 20%; padding: 40px; background: #fff; -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black; overflow:auto;}
		h1 {color:#2e3192; font-family: engraversgothic; font-size:60px;}
		h2 {font-family: engraversgothic; font-size:30px;}
		.horiz{margin-top:-20px;margin-left:-20px}.horiz td{padding:20px 0 0 20px}
		input,textarea,select,.uneditable-input{display:inline-block;width:300px;max-width:100%;padding:4px;margin-bottom:9px;font-size:13px;color:#555555;border:1px solid #ccc;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;}
		
		
</style>
</head>
<body>
	<img src="images/bg_pledge.jpg" class="bg">
	<div id="page-wrap">
		<center>
			<h1>FOUNDING ENDOWMENT</h1>
			<h2>PLEDGE FORM</h2>
		</center>
		<form id="form" name="form" action="pledge_process.php" method="post" >
		<table class="horiz">
			  <tr>
				<td>
				  <label for="name">
					Name
				  </label><br />
				  <input type="name" id="name" name="name" value="Full name" onFocus="if(this.value=='Full name')(this.value='')" onBlur="if(this.value=='')(this.value='Full name')" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="degree">Degree</label><br />
					<select id="degree" name="degree" class="required">
						<option value="BTech">Bachelor of Technology</option>
						<option value="MTech">Master of Technology</option>
						<option value="BSc">Bachelor of Science</option>
						<option value="MSc">5 Years Master of Science</option>
						<option value="MSc">2 Years Master of Science</option>
						<option value="BArch">Bachelor of Architecture</option>
						<option value="PhD">Doctor of Philosophy</option>
						<option value="MS">Master of Science (in Research)</option>
						<option value="MCP">Master of City Planning</option>
						<option value="LLB">Bachelor of Law</option>
						<option value="BLIPR">Bachelor of Laws Intellectual Property Rights</option>
						<option value="MBA">Master of Business Administration</option>
						<option value="MMST">Master of Medical Science And Technology</option>
						<option value="Dual">Dual Degree</option>
						<option value="MBM">Master of Business Management</option>
						<option value="MHRM">Master of Human Resource Management</option>
						<option value="MRP">Master in Regional Planning</option>
						<option value="PGDMOM">Post Graduate Diploma in Maritime Opeartion And Management</option>
						<option value="PGDIT">Post Graduate Diploma in Information Technology</option>
						<option value="PGDM">Post Graduate Diploma in Management</option>
						<option value="PGDBM">Post Graduate Diploma in Business Management</option>
						<option value="PGDBA">Post Graduate Diploma in Business Administration</option>
						<option value="PGDRD">Post Graduate Diploma in Rural Development</option>
						<option value="PGDST">Post Graduate Diploma in Steel Technology</option>
						<option value="PGDIPL">Post Graduate Diploma in Intellectual Property Law</option>
						<option value="PGDTNPM">Post Graduate Diploma in Telecommunication Network Planning And Management</option>
					</select>
				</td>
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
			</tr>
			<tr>
				<td>
					<label for="department">Department</label><br />					
					<select id="department" name="department" class="required">
						<option value="AerospaceEngineering">Aerospace Engineering</option>
						<option value="AgriculturalFoodEngineering">Agricultural And Food Engineering</option>
						<option value="ArchitectureRegionalPlanning">Architecture And Regional Planning</option>
						<option value="Biotechnology">Biotechnology</option>
						<option value="ChemicalEngineering">Chemical Engineering</option>
						<option value="Chemistry">Chemistry</option>
						<option value="CivilEngineering">Civil Engineering</option>
						<option value="ComputerScienceEngineering">Computer Science And Engineering</option>
						<option value="CryogenicEngineering">Cryogenic Engineering</option>
						<option value="CenterforEducationalTechnology">Center for Educational Technology</option>
						<option value="ElectricalEngineering">Electrical Engineering</option>
						<option value="ElectronicsElectricalCommunicationEngineering">Electronics And Electrical Communication Engineering</option>
						<option value="GSSanyalSchoolofTelecommunications">G S Sanyal School of Telecommunications</option>
						<option value="GeologyGeophysics">Geology And Geophysics</option>
						<option value="HumanitiesSocialSciences">Humanities And Social Sciences</option>
						<option value="IndustrialEngineeringManagement">Industrial Engineering And Management</option>
						<option value="InformationTechnology">Information Technology</option>
						<option value="MaterialsScience">Materials Science</option>
						<option value="Mathematics">Mathematics</option>
						<option value="MechanicalEngineering">Mechanical Engineering</option>
						<option value="MedicalScienceTechnology">Medical Science And Technology</option>
						<option value="MetallurgicalMaterialsEngineering">Metallurgical And Materials Engineering</option>
						<option value="MiningEngineering">Mining Engineering</option>
						<option value="OceanEngineeringAndNavalArchitecture">Ocean Engineering And Naval Architecture</option>
						<option value="OceansRiversAtmosphereLandSciences">Oceans, Rivers, Atmosphere and Land Sciences</option>
						<option value="PhysicsMeteorology">Physics And Meteorology</option>
						<option value="RajendraMishraSchoolofEngineeringEntrepreneurship">Rajendra Mishra School of Engineering Entrepreneurship</option>
						<option value="RajivGandhiSchoolofIntellectualPropertyLaw">Rajiv Gandhi School of Intellectual Property Law</option>
						<option value="RanbirandChitraGuptaSchoolofInfrastructureDesignandManagement">Ranbir and Chitra Gupta School of Infrastructure Design and Management</option>
						<option value="ReliabilityEngineeringCentre">Reliability Engineering Centre</option>
						<option value="RubberTechnologyCentre">Rubber Technology Centre</option>
						<option value="RuralDevelopmentCentre">Rural Development Centre</option>
						<option value="SchoolofWaterResources">School of Water Resources</option>
						<option value="VinodGuptaSchoolofManagement">Vinod Gupta School of Management</option>
					</select>
				</td>
				<td>
					<label for="year">Year of Passing</label><br />	
					<input type="text" name="year" id="year" maxlength="4" value="Year of Passing" onFocus="if(this.value=='Year of Passing')(this.value='')" onBlur="if(this.value=='')(this.value='Year of Passing')" />
				</td>
			</tr>
			
			<tr><td>I here by pledge<label for="amount"> an amount of Rupees</label><br />	
					<input type="text" name="amount" id="amount" maxlength="50" value="In Rupees" onFocus="if(this.value=='In Rupees')(this.value='')" onBlur="if(this.value=='')(this.value='In Rupees')" />
				</td>
				<td>
					<label for="duration">Duration</label><br />	
					<select name="duration"> 
						<option>Monthly</option>
						<option>Quarterly</option>
						<option>Annually</option>
						<option>One time</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label for="time"> by </label><br />	
					<input type="text" name="time" id="time" maxlength="50" value="Expected Month/Year" onFocus="if(this.value=='Expected Month/Year')(this.value='')" onBlur="if(this.value=='')(this.value='Expected Month/Year')" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="phone1">Contact: </label><br />
					<input type="text" name="phone1" id="phone1" maxlength="20" value="Phone 1" onFocus="if(this.value=='Phone 1')(this.value='')" onBlur="if(this.value=='')(this.value='Phone 1')" /> 
				</td>
				<td>
					<label for="phone2">&nbsp; </label><br />
					<input type="text" name="phone2" id="phone2" maxlength="20" value="Phone 2" onFocus="if(this.value=='Phone 2')(this.value='')" onBlur="if(this.value=='')(this.value='Phone 2')" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="email1">&nbsp;  </label><br />
					<input type="text" name="email1" id="email1" maxlength="50" value="E-mail 1" onFocus="if(this.value=='E-mail 1')(this.value='')" onBlur="if(this.value=='')(this.value='E-mail 1')" />
				</td>
				<td>
					<label for="email2">&nbsp; </label><br />
					<input type="text" name="email2" id="email2" maxlength="50" value="E-mail 2" onFocus="if(this.value=='E-mail 2')(this.value='')" onBlur="if(this.value=='')(this.value='E-mail 2')" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="address1">Postal Address: </label><br />
					<input type="text" name="address1" id="address1" maxlength="30" value="Address 1" onFocus="if(this.value=='Address 1')(this.value='')" onBlur="if(this.value=='')(this.value='Address 1')" />
				</td>
				<td>
					<label for="address2">&nbsp; </label><br />
					<input type="text" name="address2" id="address2" maxlength="30" value="Address 2" onFocus="if(this.value=='Address 2')(this.value='')" onBlur="if(this.value=='')(this.value='Address 2')" />
				</td>
			</tr>			
			<tr>
				<td>
					<label for="city">&nbsp;  </label><br />
					<input type="text" name="city" id="city" maxlength="30" value="City" onFocus="if(this.value=='City')(this.value='')" onBlur="if(this.value=='')(this.value='City')" />
				</td>
				<td>
					<label for="state">&nbsp; </label><br />
					<input type="text" name="state" id="state" maxlength="30" value="State" onFocus="if(this.value=='State')(this.value='')" onBlur="if(this.value=='')(this.value='State')" />
				</td>
			</tr>			
			<tr>
				<td>
					<label for="country">&nbsp;  </label><br />
					<input type="text" name="country" id="country" maxlength="30" value="Country" onFocus="if(this.value=='Country')(this.value='')" onBlur="if(this.value=='')(this.value='Country')" />
				</td>
				<td>
					<label for="zip">&nbsp; </label><br />
					<input type="text" name="zip" id="zip" maxlength="30"  value="Zip" onFocus="if(this.value=='Zip')(this.value='')" onBlur="if(this.value=='')(this.value='Zip')"/>
				</td>
			</tr>
			<tr>
				<td>
					<label for="spouse_name">Name of Spouse</label><br />
					<input type="text" name="spouse_name" id="spouse_name" maxlength="50"/></br>
				</td>
				<td>
					<input name="spouse" type="checkbox" value="yes" style="width:30px;"/>
					<label for="spouse">My Spouse is KGPian</label>
				</td>
			</tr>
			<tr>
				<td>
					(Additionally)</br>
					<input name="gift" type="checkbox" value="yes" style="width:30px;" /><label for="gift">Yes, my company will match my gift</label><br />
					<input name="batch_campaign" type="checkbox" value="yes" style="width:30px;" /><label for="batch_campaign">Yes, I would like to volunteer for my batch campaign</label><br />
					<input name="mentorship" type="checkbox" value="yes" style="width:30px;" /><label for="mentorship">Yes, I am interested in mentoring the students of IIT Kharagpur</label><br />
				</td>
			</tr>
			<tr>
				<td>
					<label for="remark">Remarks:</label><br />
					<textarea id="remark" name="remark" rows="5" cols="50" placeholder="Remarks"></textarea>
				</td>
			</tr>
			<tr>				
				<td>
					<input  id = "submit" name = "submit" type="submit"  value="Submit" />
				</td>
			</tr>
			
		</table>
		<font color="red">Please note: All donations from India can avail up to 100% tax exemption. US donations are subject to IRS exemption under section 501(c) of the Internal Revenue Code.
					For more details, write to us at </font><font color="blue">anupam.sarkar@adm.iitkgp.ernet.in</font><font color="red"> or call us at +91 9007883789.</font>
		</form>
		</center>
	
	</div>
</body>
</html>