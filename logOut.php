<?php

//is user logged in variable
$varTitle = "Log In";
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
	
	
<p>So you want to log out, do you?</p>
<?php

setcookie('karnakCookie', '', time()-60*60*24*365);
header('Location: index.php');


 ?>	
	
	</div>
	
	<footer> <?php require_once 'templates/secFooter.php'; ?> </footer>
</body>

</html>

