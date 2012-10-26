<?php 
ini_set('display_errors',1); 
 error_reporting(E_ALL);

//user and query classs sds

include_once "dbAccessClass.php"; //Already instantiated in that file with variable $dab->

class user
{
//make default constructor private

private $varUserID;
private $varEmail;
private $varPassword;
private $varNickname;
private $varPicture;
private $varAbout;
private $varSettings;
private $varJoinDate;
private $varLastLogin;
private $varIPAddress;

public function get($varType)
{
if ($varType === 'userID') 		{ return $this->varUserID;	   }
if ($varType === 'email')			{ return $this->varEmail;		   }
if ($varType === 'password')	{ return $this->varpassword; }
if ($varType === 'nickname')	{ return $this->varNickname; }
if ($varType === 'picture')		{ return $this->varPicture;	   }
if ($varType === 'about')			{ return $this->varAbout;	   }
if ($varType === 'settings')		{ return $this->varSettings;	   }
if ($varType === 'joinDate')		{ return $this->varJoinDate;   }
if ($varType === 'lastLogin')	{ return $this->varLastLogin;  }
if ($varType === 'ipAddress')	{ return $this->varIPAddress; }
}


public function set($varType, $newVal){
{if ($varType === 'userID') 		{  $this->varUserID 		= $newVal;}
if ($varType === 'email')			{  $this->varEmail 		= $newVal;}
if ($varType === 'password')	{  $this->varpassword 	= $newVal;}
if ($varType === 'nickname')	{  $this->varNickname  = $newVal;}
if ($varType === 'picture')		{  $this->varPicture 		= $newVal;}
if ($varType === 'about')			{  $this->varAbout 		= $newVal;}
if ($varType === 'settings')		{  $this->varSettings 	= $newVal;}
if ($varType === 'joinDate')		{  $this->varJoinDate 	= $newVal;}
if ($varType === 'lastLogin')	{  $this->varLastLogin 	= $newVal;}
if ($varType === 'ipAddress')	{  $this->varIPAddress 	= $newVal;}}
}



public function user($IDparam) //this loads a user into the instance of this class.//Dependency on DB access class
{

	if ((!(is_numeric($IDparam))) || (is_string($IDparam)))
		{echo "<h3>That ID is not valid: $IDparam</h3><br />";}
	
	else
	{
			$sqlString = "SELECT * from `tbusers` WHERE userID = '$IDparam'";
			$queryVar = mysql_query($sqlString);	

		if (mysql_num_rows($queryVar)==0)
			{echo "<h3>There is no user with such ID: $IDparam</h3><br />";}

		else
			{
			$row = mysql_fetch_array($queryVar, MYSQL_NUM);
			$this->varUserID = $row[0]; $this->varEmail = $row[1]; $this->varPassword = $row[2];
			$this->varNickname = $row[3]; $this->varPicture = $row[4]; $this->varAbout = $row[5];
			$this->varSettings = $row[6]; $this->varJoinDate = $row[7]; $this->varLastLogin = $row[8];
			$this->varIPAddress = $row[9];
			}
	}
}

public function serializeUser()
{$userArr = array(
						'id' => $this->varUserID,
						'sn' => $this->varNickname,
						'pwd' => $this->varPassword,
						'email' => $this->varEmail,
						'about' => $this->varAbout,
						'settings' => $this->varSettings,
						'picture' => $this->varPicture,
						'joined' => $this->varJoinDate);
						return $userArr;}

public function printInfo()
{
	echo "<div style='border:1px red solid;'><h3>This is your user</h3>";
    foreach($this as $var => $value)
	{
        echo $var.": ".$value."<br />";
    }
	echo "</div>";
}


}

//$userObj = new user(2);


//echo $userObj->varEmail;
//echo $userObj->printInfo();


/*
class query//must be static class
{

private function isUnique()
{

}



//check for 
//updatedb
//delete
//etc
}*/

?>
