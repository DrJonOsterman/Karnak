<?php
class validate
{
	public function logInAuth($pEmail, $pPass)
	{
		$pPass = md5('Ozymandias' .$pPass);
		$sql = "SELECT `userID`, `email`, `password` FROM `tbusers` WHERE `email` = '$pEmail' AND `password` = '$pPass'";
		$qryCheck = mysql_query($sql);
		$resultRow = mysql_fetch_assoc($qryCheck);
		if ($resultRow === false){$this->printValidationMessage(40); return false;}
		else if ( ! ($resultRow === false) ) {$this->printValidationMessage(400); return $resultRow['userID'];}	
	}

	public function isEmailValid(&$emailParam) 
	{
		$emailParam = trim($emailParam);
		 if (filter_var($emailParam, FILTER_VALIDATE_EMAIL) === false) {$this->printValidationMessage(21); return false;}
		 else {$this->printValidationMessage(200); return true;}
	}
	
	public function isSnValid(&$snParam)
	{
		$snParam = trim($snParam);
		$validChars = array('-', '_');
		if ((strlen($snParam) < 6) || (strlen($snParam) > 18) )	{$this->printValidationMessage(10); return false;}	
		if (!(is_string($snParam))) {$this->printValidationMessage(11); return false;}
		if (!ctype_alnum(str_replace($validChars, '', $snParam))) {$this->printValidationMessage(12); return false;} 
		else  {$this->printValidationMessage(100); return true;}
	}

	public function isPassValid(&$passParam)
	{
		$passParam = trim($passParam);
		if (!(is_string($passParam)))	{$this->printValidationMessage(31); return false;}
		if ((strlen($passParam) < 6))	{$this->printValidationMessage(32); return false;}
		if (!(substr_count($passParam, ' ') === 0))	{$this->printValidationMessage(33); return false;}
		else	{$this->printValidationMessage(300); return true;}
	}

	public function isEmailUnique($valueParam) //Used to check for unique  E-Mail addresses, and screen names
	{
		$sql = "SELECT `email` FROM `tbusers` WHERE `email` = '$valueParam'";
		$qryCheck = mysql_query($sql);
		$resultRow = mysql_fetch_assoc($qryCheck);
		if ( ! ($resultRow === false) ) { $this->printValidationMessage(22); return false; }
		else{$this->printValidationMessage(210); return true;}
	}

		public function isSnUnique($valueParam) 
	{
		$sql = "SELECT `nickname` FROM `tbusers` WHERE `nickname` = '$valueParam'";
		$qryCheck = mysql_query($sql);
		$resultRow = mysql_fetch_assoc($qryCheck);
		if ( ! ($resultRow === false) ) { $this->printValidationMessage(13); return false; }
		else{return true;}
	}
	
	public function printValidationMessage($messageNum) 
	{
		switch ($messageNum)
		{
			case 10: 	echo '<br />Server says Username length is not between 6 and 18 characters.'; break;
			case 11: 	echo '<br />Server says Username is not a proper string. This shouldn\'t happen though.'; break;
			case 12: 	echo '<br />Server says Username contains invalid characters'; break;
			case 13: 	echo '<br />Server says Such username already exists'; break;
			case 100:	echo '<br />Server says Username valid';break;
			case 21: 	echo '<br />Server says E-Mail is not in an acceptable format.'; break;
			case 22: 	echo '<br />Server says Records show an account already registered under that E-Mail'; break;
			case 200: 	echo '<br />Server says E-Mail format is valid'; break;
                        case 210: 	echo '<br />Server says E-Mail is unique'; break;
			case 31: 	echo '<br />Server says The password is not a valid string. Should never happen.'; break;
			case 32: 	echo '<br />Server says The password must be at least 6 characters'; break;
			case 33: 	echo '<br />Server says The password cannot contain spaces'; break;
			case 300: 	echo '<br />Server says Password accepted'; break;
			case 40:	echo '<br />Server says Not a valid email/password combination'; break;
			case 400:	echo '<br />Server says Successful authentication'; break;
		}
	}
}?>