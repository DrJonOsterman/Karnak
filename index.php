<?php
//is user logged in variable
$varTitle = "Home";
?>


<!DOCTYPE html>
<html>
<head>

<!--<script type="text/JavaScript" src="includes/jquery-1.8.2.js"></script>-->
<link rel="stylesheet" type="text/css" href="templates/mainStyle.css" />

<title>Karnak | <?php echo $varTitle ?> </title></head>

<body>
	<header> 				<?php require_once 'templates/secHeader.php'; ?> </header>
	<nav> 						<?php require_once 'templates/secNav.php'; ?> </nav>
	<div class="content">	<?php require_once 'templates/secContent.php'; ?></div>
	<footer> 					<?php require_once 'templates/secFooter.php'; ?> </footer>
</body>

<script type="text/javascript">
function browserDetect()
{if (/Android|webOS|iPhone|iPad|iPod|IEMobile|BlackBerry/i.test(navigator.userAgent)){console.log('Mobile Browser');}
else{console.log('Desktop/Laptop Browser');}}</script>


</html>