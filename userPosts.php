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
    So you want your posts here eh?
    <h2><a href="newPost.php"> New post </a></h2>
    <div>
            <?php
            require_once 'classes/postClient.php';
       
            
            
            /*foreach ($allPosts as $post)
            {
             echo $post[0];
            } */           
            ?>
        
    </div>	
</div>
	<footer> <?php require_once 'templates/secFooter.php'; ?> </footer>
</body>

</html>

