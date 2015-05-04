<?php
	class User
	{
		var $emailid;
		var $fname;
		var $lname;
		var $phone;
		 
		
		
		function __construct()
		{
		}
		function __destruct()
		{
		}
		
		function getEmailid()
		{
			return $this->emailid;
		}
		function setEmailid($emailid)
		{
			$this->emailid	=	$emailid ;
		}
		
		function getFname()
		{
			return $this->fname;
		}
		function setFname($fname)
		{
			$this->fname	=	$fname ;
		}
		
		function getLname()
		{
			return $this->lname;
		}
		function setLname($lname)
		{
			$this->lname	=	$lname ;
		}
		function getPhone()
		{
			return $this->phone;
		}
		function setPhone($phone)
		{
			$this->phone	=	$phone ;
		}
}
?>