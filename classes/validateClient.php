<?php
require_once 'dbAccessClass.php'; 
require_once 'validate.php';
require_once 'userClass.php';


if (!ISSET($_POST['param'])) {echo 'You are not authorized bro'; die;}
else {$type = $_POST['param'];}

$dab = dbAccess::getInstance();
$dab->connect();
$val = new validate();
$userObj = new user();

$email = (ISSET($_POST['formTxtEmail'])) ? $_POST['formTxtEmail'] : NULL; 
$password = (ISSET($_POST['formTxtPassword'])) ? $_POST['formTxtPassword'] : NULL ;


 
if ($type === 'ajax')
{
    if (ISSET($_POST['formTxtEmail']))
    {    
        if($val->isEmailValid($_POST['formTxtEmail']))
            $val->isEmailUnique($_POST['formTxtEmail']); 
    }
    
    if (ISSET($_POST['formTxtUsername']))
    {
        if($val->isSnValid($_REQUEST['formTxtUsername']))
            $val->isSnUnique($_REQUEST['formTxtUsername']);
    }
    
        if (ISSET($_POST['formTxtPassword']))
    {
        $val->isPassValid($_POST['formTxtPassword']);
    }
}


if ($type === 'new')
{
	$username = $_POST['formTxtUsername'];
 	if  	(($val->isSnValid($username) === true) &&
		($val->isSnUnique($username) === true) &&
		($val->isEmailValid($email) === true)  &&
		($val->isEmailUnique($email) === true) &&
		($val->isPassValid($password) === true))
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

else if (!($type === 'new' || $type === 'edit' || $type === 'login' || $type === 'ajax')) {echo 'What are you doing here trickster? ;)';}

?>