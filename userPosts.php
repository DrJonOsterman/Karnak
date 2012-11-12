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
       
            $allPosts = fetchPosts($_COOKIE['karnakCookie']);
            
             echo '<table class="cute"><th>Post#</th><th>AuthorID</th><th>PostID</th><th>Title</th><th>Type</th><th>Tags</th><th>Body</th><th>PostedTime</th><th>LastModified</th>';
            foreach ($allPosts as $key => $post)
            {
                echo "<tr><th>$key</th>";
                
                foreach ($post as $postFields)
             {
                 echo "<th>$postFields</th>";
             }
             
            }
            echo '</tr></table>';
           ?>
    </div>	
</div>
	<footer> <?php require_once 'templates/secFooter.php'; ?> </footer>
</body>

</html>

