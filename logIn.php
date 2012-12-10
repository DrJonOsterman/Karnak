<!DOCTYPE html>
<html>
<head>

<!--<script type="text/javascript" src="includes/jquery-1.8.2.js"></script>-->
<link rel="stylesheet" type="text/css" href="templates/mainStyle.css" />
<link rel="stylesheet" type="text/css" href="templates/formSS.css" />
<title>Karnak | </title></head>

<body>
<header> <?php require_once 'templates/secHeader.php'; ?> </header>	
<nav> <?php require_once 'templates/secNav.php'; ?> </nav>

<div class="content">

<form action="classes/validateClient.php" name="logInFrm" method="post">
	<table class="formTable">
	<tr><td>E-Mail:</td><td><input type="text" name="formTxtEmail"/></td></tr>
	<tr><td>Password:</td><td><input type="password" name="formTxtPassword" /></td></tr>
	<tr><td><input type="hidden" name="param" value="login" /></td><td><input type="submit" /></td></tr>
	</table>
	</form>
	
	
	</div>
	
	<footer> <?php require_once 'templates/secFooter.php'; ?> </footer>
</body>

</html>
