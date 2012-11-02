<?php

//is user logged in variable
$varTitle = "Your Page";
?>


<!DOCTYPE html>
<html>
<head>

<!--<script type="text/javascript" src="includes/jquery-1.8.2.js"></script>-->
<link rel="stylesheet" type="text/css" href="templates/mainStyle.css" />

<title>Karnak | </title></head>

<body>
	<header> <?php require_once 'templates/secHeader.php'; ?> </header>
		<nav> <?php require_once 'templates/secNav.php'; ?> </nav>
	
	<div class="content">	
	
<?php
require_once "classes/userClass.php";
require_once 'classes/dbAccessClass.php'; 
$dab = dbAccess::getInstance();	
$dab->connect();
$userObj = new user();
$userObj->fetchUser( (int)$_COOKIE['karnakCookie'] );
$myUser = $userObj->serializeUser();
// 'id' => $this->varUserID, 'sn' => $this->varNickname, 'pwd' => $this->varPassword, 'email' => $this->varEmail,
 //'about' => $this->varAbout, 'settings' => $this->varSettings, 'picture' => $this->varPicture, 'joined' => $this->varJoinDate);?>


		
		<img src ="<?php echo $myUser['picture']; ?>">

		
		<h1>Welcome <?php echo $myUser['sn'];?></h1>

		<table class="left">
		<tr><td>Email</td><td><input type="text" value="<?php echo $myUser['email'] ?>" /></td></tr>

		<tr><td>Password</td><td><input type="text" value="<?php echo $myUser['pwd'] ?>" disabled="true" /></td></tr>
		
				<tr><td>About</td><td><textarea rows="4" cols="50"><?php echo $myUser['about'] ?></textarea></td></tr>
				
		<tr><td>Member since</td><td><?php echo $myUser['joined'] ?></td></tr>



		</table>
	
	</div>
	
	<footer> <?php require_once 'templates/secFooter.php'; ?> </footer>
</body>

</html>

