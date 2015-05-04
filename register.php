<?php
include("session.php");
if(isset($_SESSION['username'])){

echo("You have been registered and are Logged In <br/>If you want to register a friend, You can logout and then continue.");

}else{
 
if(isset($_POST['register'])){
$input = array(
					"Username"=>"username",
					"Password"=>"password",
					"Confirm Password"=>"confirm-password",
					"Email Address"=>"email",
					"Confirm Email Address"=>"confirm-email",
					"First Name"=>"first-name",
					"Last Name"=>"last-name",
					"Address 1"=>"address-1",
					"City"=>"city",
					"State"=>"state",
					"Country" =>"country",
					"Zip Code"=>"zipcode",
					"Roll Number"=>"roll",
					"Year of Joining"=>"yoj",
					"Degree1"=>"degree1",
					"Department1"=>"department1",
					"Hall of Residence1"=>"hor1",
					"Year of Passing1"=>"yop1",
					"Degree2"=>"degree2",
					"Department2"=>"department2",
					"Hall of Residence2"=>"hor2",
					"Year of Passing2"=>"yop2",
					"Degree3"=>"degree3",
					"Department3"=>"department3",
					"Hall of Residence3"=>"hor3",
					"Year of Passing3"=>"yop3",
					"Degree4"=>"degree4",
					"Department4"=>"department4",
					"Hall of Residence4"=>"hor4",
					"Year of Passing4"=>"yop4",
);
$msg = "";
foreach($input as $key=>$value){
	if(!isset($value)||($value=='')){
	$msg = $msg.",".$key;
	}
}
if($msg=="")
echo($msg);

}

}
?>
<form action="register.php" method="post">


	<div class="header_2">
	<h3 >User Registration</h3><hr>
 	</div>
	<div class="row" >

		<div class="col-md-4" >Username *<br><input type="text" class="required" id="username"></div>
		<div class="col-md-4">Password *<br><input type="password" class="required"  id="password"  ></div>
		<div class="col-md-4">Confirm Password *<br><input type="password" class="required"  id="confirm-password"></div>

	</div>

	<div class="row">

		<div class="col-md-4">Email Address *<br><input id="email" class="required"  type="text"></div>
		<div class="col-md-4">Confirm Emal Address *<br><input id="confirm-email" class="required"  type="text"></div>

	</div>

	<!-- Personal Details -->

	<h3>Personal Details</h3> <hr/>

	<div class="row">
		<div class="col-md-4">First Name *<br><input id="first-name" class="required"  type="text"></div>
		<div class="col-md-4">Middle Name<br><input  type="text"></div>
		<div class="col-md-4">Last Name *<br><input  id="last-name" class="required"  type="text"></div>

	</div>

	<div class="row"><br>

		<div class="col-md-4">Maiden Name<br><input type="text"></div>
		<div class="col-md-4">Address 1: *<br><input id="address-1" class="required"  type="text"></div>
		<div class="col-md-4">Address 2:<br><input type="text"></div>

	</div>
	<div class="row"><br>

		<div class="col-md-4">City: *<br><input id="city" class="required"  type="text"></div>
		<div class="col-md-4">State *<br><input id="state" class="required"  type="text"></div>
		<div class="col-md-4">Country: *<br><input id="country" class="required"  type="text"></div>

	</div>				
	<div class="row"><br>

		<div class="col-md-4">Postal / ZIP Code: *<br><input id="postal/zip code" class="required"  type="text"></div>
		<div class="col-md-4">Mobile<br><input type="text"></div>
		<div class="col-md-4">Landline<br><input type="text"></div>

	</div>
	<div class="row"><br>

		<div class="col-md-4">Alternate Email<br><input type="text"></div>
		<div class="col-md-4">Upload Photo<INPUT class="browse" TYPE=FILE NAME="upfile"><BR></div>
		<div class="col-md-4">Date of Birth: *<br><input id="date-of-birth" type="date"></div>

	</div>
	<div class="row">

		<div class="col-md-4">Marital Status<br>
			<input class="rb" type="radio" name="marital-status" value="married">Married<br>
			<input class="rb" type="radio" name="marital-status" value="single">Single
		</div>
		<div class="col-md-4">Spouse Name<br><input type="text"></div>
		<div class="col-md-4">Date of Birth<br><input type="text"></div>

	</div>

	<div class="row"><br>

		<div class="col-md-4">Names of Children<br><input type="text"></div>
		<div class="col-md-4">Upload Family Photo<INPUT class="browse" TYPE=FILE NAME="upfile"><br>

		</div>

	</div>

	<h3>Professional Details</h3> <hr/>

	<div class="row">
		<div class="col-md-4">Industry *<br><input id="industry" class="required"  type="text"></div>
		<div class="col-md-4">Profession *<br><input id="profession" class="required"  type="text"></div>
		<div class="col-md-4">Name of Organization *<br><input id="name-of-organization" class="required"  type="text"></div>

	</div>
	<div class="row"><br>

		<div class="col-md-4">Designation *<br><input id="designation" class="required"  type="text"></div>
		<div class="col-md-4">Company Address 1<br><input type="text"></div>
		<div class="col-md-4">Company Address 2<br><input type="text"></div>

	</div><br>
	<div class="row"><br>

		<div class="col-md-4">City:<br><input type="text"></div>
		<div class="col-md-4">State:<br><input type="text"></div>
		<div class="col-md-4">Country:<br><input type="text"></div>

	</div>
	<div class="row"><br>

		<div class="col-md-4">Postal / ZIP Code:<br><input type="text"></div>
		<div class="col-md-4">Official Phone<br><input type="text"></div>
		<div class="col-md-4">Official Email<br><input type="text"></div>

	</div>
	<div class="row"><br>

		<div class="col-md-4">Web site:<br><input type="text"></div>
		<div class="col-md-4">Upload CV<INPUT class="browse" TYPE=FILE NAME="upfile"><BR></div>
	</div>

	<h3>Alumni Details</h3><hr>

	<div class="row" >

		<div class="col-md-6" >Roll Number<br><input type="text" id="username"></div>
		<div class="col-md-6">Year of Joining<br><input type="text" id"password" ></div>


	</div><br/>
	<div id="details1" style="border:2px solid black" class="row">      
		<div class="col-md-3">Degree 1*<br><select class="required drop-down" style="width:13em">
			<option value="BTech">Bachelor of Technology</option> 
			<option value="MTech">Master of Technology</option>
			<option value="BSc">Bachelor of Science</option>
			<option value="DIIT">Doctor of IIT</option>
			<option value="DSc">Doctor of Science</option>
			<option value="MArch">Master of Architecture</option>
			<option value="MSc">Master of Science</option>
			<option value="BArch">Bachelor of Architecture</option>
			<option value="PhD">Doctor of Philosophy</option>
			<option value="MS">Master of Science (in Research)</option>
			<option value="MCP">Master of City Planning</option>                  
			<option value="LLB">Bachelor of Law</option>
			<option value="BLIPR">Bachelor of Laws Intellectual Property Rights</option>
			<option value="MBA">Master of Business Administration</option>
			<option value="MMST">Master of Medical Science And Technology</option>
			<option value="DD">Dual Degree</option>
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
		</select></div>
		<div class="col-md-3">Department 1*<br><select class="required drop-down" style="width:13em">
			
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
		</div>
		<div class="col-md-3">Hall of Residence 1*<br><select class="required" style="width:13em">
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
	</div>

	<div class="col-md-3">Year of Passing 1*<br><input type="text"></div>
</div><br/>
<div id="details2"  style="display:none" class="row">      
		<div class="col-md-3">Degree 2*<br><select class="required drop-down" style="width:13em">
			<option value="BTech">Bachelor of Technology</option> 
			<option value="MTech">Master of Technology</option>
			<option value="BSc">Bachelor of Science</option>
			<option value="DIIT">Doctor of IIT</option>
			<option value="DSc">Doctor of Science</option>
			<option value="MArch">Master of Architecture</option>
			<option value="MSc">Master of Science</option>
			<option value="BArch">Bachelor of Architecture</option>
			<option value="PhD">Doctor of Philosophy</option>
			<option value="MS">Master of Science (in Research)</option>
			<option value="MCP">Master of City Planning</option>                  
			<option value="LLB">Bachelor of Law</option>
			<option value="BLIPR">Bachelor of Laws Intellectual Property Rights</option>
			<option value="MBA">Master of Business Administration</option>
			<option value="MMST">Master of Medical Science And Technology</option>
			<option value="DD">Dual Degree</option>
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
		</select></div>
		<div class="col-md-3">Department 2*<br><select class="required drop-down" style="width:13em">
			
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
		</div>
		<div class="col-md-3">Hall of Residence 2*<br><select class="required" style="width:13em">
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
	</div>

	<div class="col-md-3">Year of Passing 2*<br><input type="text"></div>
</div><br/><div id="details3"  style="display:none" class="row">      
		<div class="col-md-3">Degree 3*<br><select class="required drop-down" style="width:13em">
			<option value="BTech">Bachelor of Technology</option> 
			<option value="MTech">Master of Technology</option>
			<option value="BSc">Bachelor of Science</option>
			<option value="DIIT">Doctor of IIT</option>
			<option value="DSc">Doctor of Science</option>
			<option value="MArch">Master of Architecture</option>
			<option value="MSc">Master of Science</option>
			<option value="BArch">Bachelor of Architecture</option>
			<option value="PhD">Doctor of Philosophy</option>
			<option value="MS">Master of Science (in Research)</option>
			<option value="MCP">Master of City Planning</option>                  
			<option value="LLB">Bachelor of Law</option>
			<option value="BLIPR">Bachelor of Laws Intellectual Property Rights</option>
			<option value="MBA">Master of Business Administration</option>
			<option value="MMST">Master of Medical Science And Technology</option>
			<option value="DD">Dual Degree</option>
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
		</select></div>
		<div class="col-md-3">Department 3*<br><select class="required drop-down" style="width:13em">
			
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
		</div>
		<div class="col-md-3">Hall of Residence 3*<br><select class="required" style="width:13em">
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
	</div>

	<div class="col-md-3" >Year of Passing 3*<br><input type="text"></div>
</div><br/><div id="details4"  style="display:none" class="row">      
		<div class="col-md-3">Degree 4*<br><select class="required drop-down" style="width:13em">
			<option value="BTech">Bachelor of Technology</option> 
			<option value="MTech">Master of Technology</option>
			<option value="BSc">Bachelor of Science</option>
			<option value="DIIT">Doctor of IIT</option>
			<option value="DSc">Doctor of Science</option>
			<option value="MArch">Master of Architecture</option>
			<option value="MSc">Master of Science</option>
			<option value="BArch">Bachelor of Architecture</option>
			<option value="PhD">Doctor of Philosophy</option>
			<option value="MS">Master of Science (in Research)</option>
			<option value="MCP">Master of City Planning</option>                  
			<option value="LLB">Bachelor of Law</option>
			<option value="BLIPR">Bachelor of Laws Intellectual Property Rights</option>
			<option value="MBA">Master of Business Administration</option>
			<option value="MMST">Master of Medical Science And Technology</option>
			<option value="DD">Dual Degree</option>
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
		</select></div>
		<div class="col-md-3">Department 4*<br><select class="required drop-down" style="width:13em">
			
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
		</div>
		<div class="col-md-3">Hall of Residence 4*<br><select class="required" style="width:13em">
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
	</div>

	<div class="col-md-3">Year of Passing 4*<br><input type="text"></div>
</div><br/>
<input type="button" value="Add Another" onclick="add();"/>
<!--<script type="text/javascript"
     src="http://www.google.com/recaptcha/api/challenge?k=6LdGT_ESAAAAAEXGESnU_8xQ_3AeZXK7RAkIpaTX">
  </script>
  <noscript>
     <iframe src="http://www.google.com/recaptcha/api/noscript?k=6LdGT_ESAAAAAEXGESnU_8xQ_3AeZXK7RAkIpaTX"
         height="300" width="500" frameborder="0"></iframe><br>
     <textarea name="recaptcha_challenge_field" rows="3" cols="40">
     </textarea>
     <input type="hidden" name="recaptcha_response_field"
         value="manual_challenge">
  </noscript>-->


<br/><input type="button" name="register" value = "Register" > 
</form>