<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="templates/mainStyle.css" />

<title>Karnak |</title></head>
<body>
<header><?php require_once 'templates/secHeader.php'; ?> </header>
<nav><?php require_once 'templates/secNav.php'; ?> </nav>
<div class="content">	
	
    
<?php
require_once 'classes/postClient.php';
$postID = $_GET['pID'];
//$userID = $_COOKIE['karnakCookie'];
$postToEdit = loadPost($postID);
?>

<h2>You are editing</h2>

 <div class="single">
<form action="classes/postClient.php" name="editpostform" method="post">
Title: <input type="text" name="title" value="<?php echo $postToEdit['postTitle'];?>" />
Type:<input type="text" name="type" value="<?php echo $postToEdit['postType'];?>" />
Tags: <input type="text" name="tags" value="<?php echo $postToEdit['postTags'];?>"/>
Body:<textarea name="content"><?php echo $postToEdit['postContent'];?></textarea>
<input type="hidden" name="param" value="edit"/><input type="hidden" name="id" value="<?php echo $postID;?>"/>
<input type="submit"/>
</form>
    
</div>



</div>
<footer><?php require_once 'templates/secFooter.php'; ?> </footer>
</body>
</html>