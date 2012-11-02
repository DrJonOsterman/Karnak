<?php 
class user
{

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


public function set($varType, $newVal){
{if ($varType === 'userID') 	{  $this->varUserID 		= $newVal;}
if ($varType === 'email')		{  $this->varEmail 		= $newVal;}
if ($varType === 'password')	{  $this->varpassword 	= $newVal;}
if ($varType === 'nickname')	{  $this->varNickname  = $newVal;}
if ($varType === 'picture')		{  $this->varPicture 	= $newVal;}
if ($varType === 'about')		{  $this->varAbout 		= $newVal;}
if ($varType === 'settings')	{  $this->varSettings 	= $newVal;}
if ($varType === 'joinDate')	{  $this->varJoinDate 	= $newVal;}
if ($varType === 'lastLogin')	{  $this->varLastLogin 	= $newVal;}
if ($varType === 'ipAddress')	{  $this->varIPAddress 	= $newVal;}}
}



	public function logInUser($pID)
	{	$expire = 8640 + time(); setCookie('karnakCookie', $pID, $expire, '/'); $this->editLastLogIn($pID);	}	
	
	public function editLastLogIn($pID)
	{
		date_default_timezone_set('America/New_York'); $logInTime = date('Y-m-d G:i:s', time());
		mysql_query("UPDATE `tbusers` SET `lastLogin` = '$logInTime' WHERE `userID` = '$pID' ");
		//called after logged on		//editLastLogIn		//change IP address		//sessions if doing that
	}
	
	public function logOutUser()	
	{	setCookie('karnakCookie', '', time()-60*60*24*365, '/'); }	
	
	public function insertNew($email, $password, $username)
	{
			date_default_timezone_set('America/New_York'); $joinDate = date('Y-m-d G:i:s', time()); $userIP = $_SERVER['REMOTE_ADDR']; 
			$hash = md5('Ozymandias'. $password);
			$sqlInsert = "INSERT INTO `tbusers` (`email`, `password`, `nickname`, `joinDate`, `ipAddress`) VALUES ('$email', '$hash', '$username', '$joinDate', '$userIP')";
			if (mysql_query($sqlInsert)) {echo '<br> Sucessful account created';}
			else {echo 'Query failed. Please try again.';}
	}
	
	
public function __construct(){}

public function fetchUser($IDparam) //this loads a user into the instance of this class.//Dependency on DB access class
{
	if ((!(is_numeric($IDparam))) || (is_string($IDparam)))
	{	echo "<h3>That ID is not valid: $IDparam</h3><br />";}
	
	else
	{
		$sqlString = "SELECT * from `tbusers` WHERE `userID` = '$IDparam'";
		$queryVar = mysql_query($sqlString);	
		
		if (mysql_num_rows($queryVar)==0)
		{	
			echo "<h3>There is no user with such ID: $IDparam</h3><br />";
		}

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


//check for 
//updatedb
//delete
//etc

?>
