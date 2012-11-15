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
            
             echo '<table class="cute"><th>Post#</th><th>PostID</th><th>PosterID</th><th>Title</th><th>Type</th><th>Tags</th><th>Body</th><th>PostedTime</th><th>LastModified</th><th>-</th><th>-</th>';
            foreach ($allPosts as $key => $post)
            {
                echo "<tr><td>$key</td>";
                
                foreach ($post as $postFields)
             {
                 echo "<td>$postFields</td>";
             }
                echo "<td><a href='editPost.php?pID=".$post['postID']."'> Edit</a></td>";
                echo "<td><a href='classes/postClient.php?param=delete&pID=".$post['postID']."'>Delete</a></td>";
            }
            echo '</tr></table>';
           ?>
    </div>	
</div>
	<footer> <?php require_once 'templates/secFooter.php'; ?> </footer>
</body>

</html>

