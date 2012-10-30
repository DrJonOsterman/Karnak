<?php
class validate{


	public function logInAuth($pEmail, $pPass)
	{
		$pPass = md5('Ozymandias' .$pPass)
		$sql = "SELECT `userID`, `email`, `password` FROM `tbusers` WHERE `email` = '$clientEmail' AND `password` = '$clientPass'";
		$qryCheck = mysql_query($sql);
		$resultRow = mysql_fetch_assoc($qryCheck);
		if ($resultRow === false){$this->printValidationMessage(40); return false;}
		else if ( ! ($resultRow === false) ) {$this->printValidationMessage(400); return $resultRow['userID'];}
	}

	public function isEmailValid(&$emailParam)
	{
		$emailParam = trim($emailParam);
		 if (filter_var($emailParam, FILTER_VALIDATE_EMAIL) === false) {$this->printValidationMessage(21); return false;}
		 if ($this->isEmailSNUnique($emailParam, 'email') === false) 			   	   {$this->printValidationMessage(22); return false;}
		 else																			   	   {$this->printValidationMessage(200); return true;}
	}

	public function isSnValid(&$snParam)
	{
		$snParam = trim($snParam);
		$validChars = array('-', '_');
		if ((strlen($snParam) < 6) || (strlen($snParam) > 18) )	{$this->printValidationMessage(10); return false;}	
		if (!(is_string($snParam)))									 		{$this->printValidationMessage(11); return false;}
		if (!ctype_alnum(str_replace($validChars, '', $snParam))) {$this->printValidationMessage(12); return false;} 
		if ($this->isEmailSNUnique($snParam, 'sn') === false)					{$this->printValidationMessage(13); return false;}
		else 																		{$this->printValidationMessage(100); return true;}
	}

	public function isPassValid(&$passParam)
	{
		$passParam = trim($passParam);
		if (!(is_string($passParam)))	{$this->printValidationMessage(31); return false;}
		if ((strlen($passParam) < 6))	{$this->printValidationMessage(32); return false;}
		if (!(substr_count($passParam, ' ') === 0))	{$this->printValidationMessage(33); return false;}
		else	{$this->printValidationMessage(300); return true;}
	}

	public function isEmailSNUnique($valueParam, $attributeToCheck) //Used to check for unique  E-Mail addresses, and screen names
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

	public function printValidationMessage($messageNum) 
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
			case 40:	echo '<br />Not a valid email/password combination';									break;
			case 400:	echo '<br />Successful authentication';													break;
		}
	}
}?>