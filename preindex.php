<?php

//is user logged in variable
$varTitle = "Home";
?>


<!DOCTYPE html>
<html>
<head>

<!--<script type="text/javascript" src="includes/jquery-1.8.2.js"></script>-->
<link rel="stylesheet" type="text/css" href="mainStyle.css" />

<title>Karnak | <?php echo $varTitle ?> </title></head>

<body>
	<header> <?php require_once 'secHeader.php'; ?> </header>
	
	<nav> <?php require_once 'secNav.php'; ?> </nav>
	
	<div class="content">	<?php require_once 'secContent.php'; ?></div>
	
	<footer> <?php require_once 'secFooter.php'; ?> </footer>
</body>

</html>