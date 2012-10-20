<?php

//is user logged in variable
$varTitle = "Your Page";
?>


<!DOCTYPE html>
<html>
<head>

<!--<script type="text/javascript" src="includes/jquery-1.8.2.js"></script>-->
<link rel="stylesheet" type="text/css" href="templates/mainStyle.css" />

<title>Karnak | <?php echo $varTitle ?> </title></head>

<body>
	<header> <?php require_once 'templates/secHeader.php'; ?> </header>
	
	<nav> <?php require_once 'templates/secNav.php'; ?> </nav>
	
	<div class="content">	<?php require_once 'templates/secContent.php'; ?></div>
	
	<footer> <?php require_once 'templates/secFooter.php'; ?> </footer>
</body>

</html>

