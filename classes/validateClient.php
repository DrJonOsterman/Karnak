<?php
require_once 'dbAccessClass.php'; 
require_once 'validate.php';

$dab = dbAccess::getInstance();
$dab->connect();
$val = new validate();

$type = $_REQUEST['param'];
$email = $_REQUEST['formTxtEmail'];
$password = $_REQUEST['formTxtPassword'];

if ($type === 'new')
{
	//this should not be the responsibility of the validate client
	date_default_timezone_set('America/New_York');
	$userJoinDate = date('Y-m-d G:i:s', time());
	$userIP = $_SERVER['REMOTE_ADDR']; 
	$username = $_REQUEST['formTxtUsername'];
}

if ($type === 'new') {newUserValidate();} //valdiate registration
if ($type === 'edit') {echo 'soon';} 		// validate settings change
if ($type === 'login') {echo 'soon';} 		// validate log in credentials
else if (!($type === 'new' || $type === 'edit' || $type === 'login')) {echo 'What are you doing here trickster? ;)';}


function newUserValidate()
{
	global $val, $username, $email, $password, $userJoinDate, $userIP;		

	if  (($val->isSnValid($username) === true) && ($val->isEmailValid($email) === true) && ($val->isPassValid($Password) === true))
		{
			$hash = md5('Ozymandias'. $userPassword);
			$sqlInsert = "INSERT INTO `tbusers` (`email`, `password`, `nickname`, `joinDate`, `ipAddress`) VALUES ('$userEmail', '$hash', '$userUsername', '$userJoinDate', '$userIP')";
			if (mysql_query($sqlInsert)) {echo '<br> Sucessful account created';}
			else {echo 'Query failed. Please reload and try again.';}
		}
}


if ($type === 'login') 
{ 
	if (isEmailValid($email) && isPassValid($password))
	{
		$userIDorFalse = logInAuth($pEmail, $pPass);
	}
}


?>