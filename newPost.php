<?php
//is user logged in variable
$varTitle = "New Post";
?>

<!DOCTYPE html>
<html>
<head>

<script type="text/JavaScript" src="includes/jquery-1.8.2.js"></script>
<link rel="stylesheet" type="text/css" href="templates/mainStyle.css" />
<link rel="stylesheet" type="text/css" href="templates/formSS.css" />

<title>Karnak | <?php echo $varTitle ?> </title></head>

<body>
<header><?php require_once 'templates/secHeader.php'; ?> </header>
<nav><?php require_once 'templates/secNav.php'; ?> </nav>
<div class="content">	
    
    
<form action="classes/postClient.php" name="newpostform" method="post">
<table class="formTable">
    <tr><td>Title:</td><td> <input type="text" name="title" /></td></tr>
    <tr><td>Type:</td><td><input type="text" name="type" value="Text"/></td></tr>
    <tr><td>Tags: </td><td><input type="text" name="tags" /></td></tr>
    <tr><td>Body:</td><td><textarea name="content"></textarea></td></tr>
    <tr><td><input type="hidden" name="param" value="new"/></td><td><input type="submit"/></td></tr>
</table>
</form> 
</div>
<footer><?php require_once 'templates/secFooter.php'; ?> </footer>
</body>

<script type="text/javascript">
function browserDetect()
{if (/Android|webOS|iPhone|iPad|iPod|IEMobile|BlackBerry/i.test(navigator.userAgent)){console.log('Mobile Browser');}
else{console.log('Desktop/Laptop Browser');}}</script>


</html>