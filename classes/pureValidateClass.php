<?php
include_once 'dbAccessClass.php'; //already initialized to the pointer $dab->


//---------------Form value retreival
$userUsername 	= $_REQUEST['formTxtUsername'];
$userEmail 			= $_REQUEST['formTxtEmail'];
$userPassword 	= $_REQUEST['formTxtPassword'];
//$userPassword2 	= $_REQUEST['formTxtPassword'];

//Meta User Data
date_default_timezone_set('America/New_York');
$userJoinDate = date('Y-m-d G:i:s', time());
$userIP = $_SERVER['REMOTE_ADDR']; 
//------------------------------------



function isPasswordGood(&$passParam)
{
	$passParam = trim($passParam);
	if (!(is_string($passParam)))						{printValidationMessage(31); return false;}
	if ((strlen($passParam) < 6)) 						{printValidationMessage(32); return false;}
	if (!(substr_count($passParam, ' ') === 0))	{printValidationMessage(33); return false;}
	else 														{printValidationMessage(300); return true;}
}


function isEntryUnique($valueParam, $attributeToCheck) //Used to check for unique userID, E-Mail addresses, and screen names
{
	$column = '';
	if ($attributeToCheck === 'email') 	{$column = '`email`';}
	if ($attributeToCheck === 'sn') 		{$column = '`nickname`';}

	$sql = "SELECT $column FROM `tbusers` WHERE $column = '$valueParam'";
	
	$qryCheck = mysql_query($sql);
	$resultRow = mysql_fetch_assoc($qryCheck);
	if ( ! ($resultRow === false) ) { return false; }
	else{return true;}
}

function isEmailGood(&$emailParam)
{
	$emailParam = trim($emailParam);
	 if (filter_var($emailParam, FILTER_VALIDATE_EMAIL) === false) {printValidationMessage(21); return;}
	 if (isEntryUnique($emailParam, 'email') === false) 			   	   {printValidationMessage(22); return;}
	 else																			   	   {printValidationMessage(200); return true;}
}

function isSnGood(&$snParam)
{
	$snParam = trim($snParam);
	$validChars = array('-', '_');
	
	if ((strlen($snParam) < 6) || (strlen($snParam) > 18) )	{printValidationMessage(10); return;}	
	if (!(is_string($snParam)))									 		{printValidationMessage(11); return;}
	if (!ctype_alnum(str_replace($validChars, '', $snParam))) {printValidationMessage(12); return;} 
	if (isEntryUnique($snParam, 'sn') === false)					{printValidationMessage(13); return;}
	else 																		{printValidationMessage(100); return true;} //might need to return true to validate flow later
}


function printValidationMessage($messageNum) //separating the responsibilities of functions
{
	switch ($messageNum)
	{
		case 10: 	echo '<br />Username length is not between 6 and 18 characters.'; 				break;
		case 11: 	echo '<br />Username is not a proper string. This shouldn\'t happen though.';break;
		case 12: 	echo '<br />Username contains invalid characters'; 									break;
		case 13: 	echo '<br />Such username already exists'; 												break;
		case 100:	echo '<br />Valid, unique username.'; 														break;
		case 21: 	echo '<br />E-Mail is not in an acceptable format.'; 									break;
		case 22: 	echo '<br />Records show an account already registered under that E-Mail'; 	break;
		case 200: 	echo '<br />Valid, unique E-Mail accepted'; 												break;
		case 31: 	echo '<br />The password is not a valid string. Should never happen.';			break;
		case 32: 	echo '<br />The password must be at least 6 characters';							break;
		case 33: 	echo '<br />The password cannot contain spaces';									break;
		case 300: 	echo '<br />Password accepted';															break;
	}
}
?>