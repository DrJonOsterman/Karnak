<?php
include_once 'dbAccessClass.php'; //already initialized to the pointer $dab->


$clientEmail 	= mysql_real_escape_string($_REQUEST['email']);
$clientPass = $hash = md5('Ozymandias' . mysql_real_escape_string($_REQUEST['pass']));


$sql = "SELECT `userID`, `email`, `password` FROM `tbusers` WHERE `email` = '$clientEmail' AND `password` = '$clientPass'";

$qryCheck = mysql_query($sql);
$resultRow = mysql_fetch_assoc($qryCheck);

if ($resultRow === false){ echo "sorry not valid combination"; }

else if ( ! ($resultRow === false) ) { echo "We've got that user!. It's ID: " . $resultRow['userID'] . " email: ". $resultRow['email']; 

$expire = 8640 + time();
setCookie('karnakCookie', "Username:$clientEmail", $expire); 

}










?>