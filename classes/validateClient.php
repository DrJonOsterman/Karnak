<?php
require_once 'dbAccessClass.php'; 
require_once 'validate.php';
$dab = dbAccess::getInstance();
$dab->connect();
$val = new validate();


$type = $_REQUEST['param'];

$username = $_REQUEST['formTxtUsername'];
$email = $_REQUEST['formTxtEmail'];
$password = $_REQUEST['formTxtPassword'];

date_default_timezone_set('America/New_York');
$userJoinDate = date('Y-m-d G:i:s', time());
$userIP = $_SERVER['REMOTE_ADDR']; 


if ($type === 'new') {newUserValidate();} //valdiate registration
if ($type === 'edit') {echo 'soon';} 		// validate settings change
if ($type === 'edit') {echo 'soon';} 		// validate log in credentials
else if (!($type === 'new' || $type === 'edit')) {echo 'What are you doing here trickster? ;)';}



function newUserValidate()
{
	global $val, $userUsername, $userEmail, $userPassword, $userJoinDate, $userIP;		

	if  (($val->isSnValid($userUsername) === true) && ($val->isEmailValid($userEmail) === true) && ($val->isPassValid($userPassword) === true))
		{
			$hash = md5('Ozymandias'. $userPassword);
			$sqlInsert = "INSERT INTO `tbusers` (`email`, `password`, `nickname`, `joinDate`, `ipAddress`) VALUES ('$userEmail', '$hash', '$userUsername', '$userJoinDate', '$userIP')";
			if (mysql_query($sqlInsert)) {echo '<br> Sucessful account created';}
			else {echo 'Query failed. Please reload and try again.';}
		}
}



?>