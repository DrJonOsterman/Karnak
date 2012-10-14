<?php

include_once 'dbAccessClass.php'; //already initialized to the pointer $dab->



echo "<title>WHAAAAAAAAT</title>";


function isEntryUnique($valueParam, $attributeToCheck)
{
	$column = '';
	if ($attributeToCheck === 'id') 		{$column = '`userID`';}
	if ($attributeToCheck === 'email') 	{$column = '`email`';}
	if ($attributeToCheck === 'sn') 		{$column = '`nickname`';}

	$sql = "SELECT $column FROM `tbusers` WHERE `email` = '$valueParam'";
	
	$qryCheck = mysql_query($sql);
	$resultRow = mysql_fetch_assoc($qryCheck);
	if ( ! ($resultRow === false) ) { return false; }
	else{return true;}

}

function isEmailGood(&$emailParam)
{
	$emailParam = trim($emailParam);
	 if (filter_var($emailParam, FILTER_VALIDATE_EMAIL) === false) {printValidationMessage(21);} 
	 if (isEntryUnique($emailParam, 'email') === false) 					{printValidationMessage(22);}
	 else																				   {printValidationMessage(200);}
}


function isSnGood(&$snParam)
{
	$snParam = trim($snParam);
	$validChars = array('-', '_');
	
	if ((strlen($snParam) < 6) || (strlen($snParam) > 18) )	{ printValidationMessage(10);}
	if (!(is_string($snParam)))									 		{ printValidationMessage(11);}
	if (!ctype_alnum(str_replace($validChars, '', $snParam))) { printValidationMessage(12);} 
	if (isEntryUnique($snParam, 'sn') === false)					{ printValidationMessage(13);}
	else 																		{ printValidationMessage(100);}
}


function printValidationMessage($messageNum) //separating the responsibilities of functions
{
	switch ($messageNum)
	{
		case 10:
			echo '<br>Username length is not between 6 and 18 characters.'; break;
		case 11:
			echo '<br>Username is not a proper string. This shouldn\'t happen though.'; break;
		case 12:
			echo '<br>Username contains invalid characters'; break;
		case 13:
			echo '<br>Such username already exists'; break;
		case 100:
			echo '<br>Valid, unique username.'; break;
		case 21:
			echo '<br>E-Mail is not in an acceptable format.'; break;
		case 22:
			echo '<br>Records show an account already registered under that E-Mail'; break;
		case 200:
			echo '<br>E-Mail accepted'; break;
	}

}


$name = 'Jx3434%^^';
$email  = 'JohnnyD@gmail.com';



isSnGood($name);
isEmailGood($email);


//$fffffff = 'WWWWWWWWWWWW 41441414414141WWWW';
//echo strlen($fffffff);

?>
