<?php
//is user logged in variable
$varTitle = "New Post";
?>

<!DOCTYPE html>
<html>
<head>

<!--<script type="text/JavaScript" src="includes/jquery-1.8.2.js"></script>-->
<link rel="stylesheet" type="text/css" href="templates/mainStyle.css" />

<title>Karnak | <?php echo $varTitle ?> </title></head>

<body>
<header><?php require_once 'templates/secHeader.php'; ?> </header>
<nav><?php require_once 'templates/secNav.php'; ?> </nav>
<div class="content">	
    <div class="single">
    <form action="classes/postClient.php" name="newpostform" method="post">
Title: <input type="text" name="title" />
Type:<input type="text" name="type" />
Tags: <input type="text" name="tags" />
Body:<textarea name="content"></textarea>
    <input type="hidden" name="param" value="new"/> <input type="submit"/>
    </form>
    
    
</div></div>
<footer><?php require_once 'templates/secFooter.php'; ?> </footer>
</body>

<script type="text/javascript">
function browserDetect()
{if (/Android|webOS|iPhone|iPad|iPod|IEMobile|BlackBerry/i.test(navigator.userAgent)){console.log('Mobile Browser');}
else{console.log('Desktop/Laptop Browser');}}</script>


</html>