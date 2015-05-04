<?php
	
	include_once("configuration.php");
	include_once("user.php");
	class Database
	{
		var $dblink;
		function __construct()
		{
			$this->dblink	=	mysql_connect(config::URL,config::USERNAME,config::PASSWORD) ;
				mysql_select_db(config::DB,$this->dblink) ;
		}
				
		function __destruct()
		{
			mysql_close($this->dblink) ;
		}
		
		function addAdmin($name,$md5pass)
		{
		$query =	sprintf("insert into admin (name,pass) values ('%s','%s')"
					 ,$name,$md5pass);
		$result	= mysql_query($query,$this->dblink)or die(mysql_error());
		if (mysql_affected_rows()==1)
			return mysql_insert_id();
		return false;	
		}
		
		function addEntry($fname,$lname,$dept,$hall,$year,$payment)
		{
		$query =	sprintf("insert into peopledata (fname,lname,dept,hall,year,payment) values ('%s','%s','%s','%s','%s','%s')"
					 ,$fname,$lname,$dept,$hall,$year,$payment);
		$result	= mysql_query($query,$this->dblink)or die(mysql_error());
		if (mysql_affected_rows()==1)
			return mysql_insert_id();
		return false;	
		}		
		
		function delEntry($fname,$lname,$year)
		{
		$query =	sprintf("delete from peopledata where fname='%s' AND lname='%s' AND year='%s';"
					 ,$fname,$lname,$year);
		$result	= mysql_query($query,$this->dblink)or die(mysql_error());
		if (mysql_affected_rows()==1)
			return mysql_insert_id();
		return false;	
		}	

		function delall()
		{
		$query =	sprintf("TRUNCATE TABLE peopledata;");
		$result	= mysql_query($query,$this->dblink)or die(mysql_error());
		if (mysql_affected_rows()==1)
			return mysql_insert_id();
		return false;	
		}			
		
		function adminLogin($name,$md5pass)
		{
			$login_sql	=	sprintf("select * from `admin` where `name` like '%s' and `pass` like '%s';",$name,$md5pass);

			$result		= mysql_query($login_sql) or die(mysql_error());

			if(mysql_num_rows($result)==1)
			{
				$row	= mysql_fetch_assoc($result);				
				return $row['slno'];
			}	
			return false;
		}	
		
		function correct()
		{
		$query =	sprintf("ALTER TABLE  `peopledata` CHANGE  `dept`  `dept` VARCHAR( 30 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL");
		$result	= mysql_query($query,$this->dblink)or die(mysql_error());
		if (mysql_affected_rows()==1)
			return mysql_insert_id();
		return false;	
		}
				
		function Getusers()
		{
		$sql ="SELECT * FROM peopledata ORDER BY year,fname";
		
		$rs = mysql_query($sql,$this->dblink);
		
		if (mysql_num_rows($rs)>=1)
			return $rs;
		return false;
		}
		
		function addYoy($name,$dept,$degree,$hall,$batch,$email,$title,$writeup,$file,$photo)
		{
		$query =	sprintf("insert into yoy (id,name,dept,degree,hall,batch,email,title,writeup,file,photo) values ('','%s','%s','%s','%s','%d','%s','%s','%s','%s','%s')"
					 ,$name,$dept,$degree,$hall,$batch,$email,$title,$writeup,$file,$photo);
		$result	= mysql_query($query,$this->dblink)or die(mysql_error());
		if (mysql_affected_rows()==1)
			return mysql_insert_id();
		return false;	
		}
		
		function addYearbook($name,$department,$hall,$email,$mobile,$roll,$photo1)
		{
		$query =	sprintf("insert into yearbook (id,name,department,hall,email,mobile,roll,photo1) values ('','%s','%s','%s','%s','%s','%s','%s')"
					 ,$name,$department,$hall,$email,$mobile,$roll,$photo1);
		$result	= mysql_query($query,$this->dblink)or die(mysql_error());
		if (mysql_affected_rows()==1)
			return mysql_insert_id();
		return false;	
		}
		
		function addYearbook2($name,$hall,$email,$mobile,$photo,$people,$writeup,$file)
		{
		$query =	sprintf("insert into yearbook2 (id,name,hall,mobile,email,photo,people,writeup,file) values ('','%s','%s','%s','%s','%s','%s','%s','%s')"
					 ,$name,$hall,$email,$mobile,$photo,$people,$writeup,$file);
		$result	= mysql_query($query,$this->dblink)or die(mysql_error());
		if (mysql_affected_rows()==1)
			return mysql_insert_id();
		return false;	
		}
		
		function seminar($name,$roll,$department,$hall,$contact,$email)
		{
		$query =	sprintf("insert into seminar (id,name,roll,department,hall,contact,email) values ('','%s','%s','%s','%s','%s','%s')"
					 ,$name,$roll,$department,$hall,$contact,$email);
		$result	= mysql_query($query,$this->dblink)or die(mysql_error());
		if (mysql_affected_rows()==1)
			return mysql_insert_id();
		return false;	
		}
		
		function marathon($name,$roll,$hall,$contact,$email)
		{
		$query =	sprintf("insert into marathon (id,name,roll,hall,contact,email) values ('','%s','%s','%s','%s','%s')"
					 ,$name,$roll,$hall,$contact,$email);
		$result	= mysql_query($query,$this->dblink)or die(mysql_error());
		if (mysql_affected_rows()==1)
			return mysql_insert_id();
		return false;	
		}
		
		function addPledge($name,$degree,$department,$hall,$year,$amount,$time,$duration,$phone1,$phone2,$email1,$email2,$address1,$address2,$city,$state,$country,$zip,$spouse_name,$spouse,$mentorship,$batch_campaign,$gift,$remark)
		{
		$query =	sprintf("insert into Pledge (id,name,degree,department,hall,year,amount,time,duration,phone1,phone2,email1,email2,address1,address2,city,state,country,zip,spouse_name,spouse,mentorship,batch_campaign,gift,remark) values ('','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')"
					 ,$name,$degree,$department,$hall,$year,$amount,$time,$duration,$phone1,$phone2,$email1,$email2,$address1,$address2,$city,$state,$country,$zip,$spouse_name,$spouse,$mentorship,$batch_campaign,$gift,$remark);
		$result	= mysql_query($query,$this->dblink)or die(mysql_error());
		if (mysql_affected_rows()==1)
			return mysql_insert_id();
		return false;	
		}
		function addSurvey($name,$roll,$hall,$hallinfra,$faca,$gymkhanac,$gymkhanas,$ihi,$mnm,$iha,$pic,$sip,$sev,$fsio,$penca,$uic,$iitsm,$usf,$uis,$suggestions)
		{
		$query =	sprintf("insert into survey 
		(id,name,roll,hall,hallinfrastructure,financialassistance,gymkhanacult,gymkhanasports,improvementhallinfra,messandment,interhallactivities,internationalcomp,studentproject,EntrepreneurialVentures,societyandevent,clubandactivity,upgradationinfracult,interiit,upgradingsports,upgradationinfrasports,suggestions) values ('','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')"
					 ,$name,$roll,$hall,$hallinfra,$faca,$gymkhanac,$gymkhanas,$ihi,$mnm,$iha,$pic,$sip,$sev,$fsio,$penca,$uic,$iitsm,$usf,$uis,$suggestions);
		$result	= mysql_query($query,$this->dblink)or die(mysql_error());
		if (mysql_affected_rows()==1)
			return mysql_insert_id();
		return false;	
		}
}		 
		?>