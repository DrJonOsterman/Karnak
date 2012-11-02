<?php
require_once 'dbAccessClass.php'; 
require_once 'validate.php';
require_once 'userClass.php';

$dab = dbAccess::getInstance();
$dab->connect();
$val = new validate();
$userObj = new user();

$type = $_REQUEST['param'];
$email = $_REQUEST['formTxtEmail'];
$password = $_REQUEST['formTxtPassword'];


if ($type === 'new')
{
	$username = $_REQUEST['formTxtUsername'];
 	if  	(($val->isSnValid($username) 	=== true) &&
			($val->isSnUnique($username) 	=== true) &&
			($val->isEmailValid($email) 		=== true) &&
			($val->isEmailUnique($email) 		=== true) &&
			($val->isPassValid($password) 	=== true))
				{$userObj->insertNew($email, $password, $username);
				header('Location: ../index.php');}
}


else if ($type === 'login') 
{ 
	if ($val->isEmailValid($email) && $val->isPassValid($password))	
	{
		$userIDorFalse = $val->logInAuth($email, $password);
		if ($userIDorFalse === false || $userIDorFalse === null) { echo '<br />Log in credentials not accepted :|'; }
		else { $userObj->logInUser($userIDorFalse); header('Location: ../index.php'); }
	}
	
	else { echo " Log In credentials in invalid format"; }
}

else if ($type === 'edit') {echo 'soon';} 		// validate settings change

else if (!($type === 'new' || $type === 'edit' || $type === 'login')) {echo 'What are you doing here trickster? ;)';}

?>