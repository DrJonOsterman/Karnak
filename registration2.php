<!DOCTYPE html>
<html>
<head>
<title>Karnak | Registration | Submitted</title>
</head>

<body>


<?php
$userUsername = $_REQUEST['formTxtUsername'];
$userEmail = $_REQUEST['formTxtEmail'];
$userPassword = $_REQUEST['formTxtPassword'];
$userPassword2 =  $_REQUEST['formTxtPassword'];
date_default_timezone_set('America/New_York');

//Meta User Data
$joinDate = date('Y-m-d G:i:s', time());
$ip = $_SERVER['REMOTE_ADDR']; 




?>


<h2>Form submitted<br />
Username:  <?php echo $userUsername ?> <br />
Email: <?php echo $userEmail ?> <br />
Password: <?php echo $userPassword ?> <br />
</h2>




<?php 
include_once 'classes/dbAccessClass.php';

$idCheck = mysql_query("SELECT userID, nickname FROM tbusers ORDER BY userID DESC LIMIT 1") or die("Unable to enter name");
$lastID;
while ($row = mysql_fetch_array($idCheck, MYSQL_NUM)) 
{
	printf("ID:%s Name %s ", $row[0], $row[1]);
	$lastID = $row[0];
}
$newID = $lastID + 1;


$sqlInsert = "INSERT INTO `tbusers` (`userID`, `email`, `password`, `nickname`, `joinDate`, `ipAddress`) VALUES ('$newID', '$userEmail', '$userPassword', '$userUsername', '$joinDate', '$ip')";
echo "<br><h3>".$sqlInsert;

echo '<br />Starting Insert';

if (mysql_query($sqlInsert))
{echo '<br /> Sucessful account created';}
else {echo 'Query failed';}

?>



</body></html>