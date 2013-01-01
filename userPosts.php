<?php
//is user logged in variable
//$varTitle = "Your Page";
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="includes/jquery-1.8.2.js"></script>
<link rel="stylesheet" type="text/css" href="templates/mainStyle.css" />


<title>Karnak | </title></head>
<body>
<header> <?php require_once 'templates/secHeader.php'; ?> </header>
<nav> <?php require_once 'templates/secNav.php'; ?> </nav>
<div class="content">	
    <h1>Your Posts</h1>
    <h2><a href="newPost.php"> New post </a></h2>
    <div>
        
<table class="listTable">
    <tr>
    <th>Post#</th>
    <th>PostID</th>
    <th>PosterID</th>
    <th>Title</th>
    <th>Type</th>
    <th>Tags</th>
    <th>Body</th>
    <th>PostedTime</th>
    <th>LastModified</th>
    <th>-</th>
    <th>-</th>
    <th>-</th>
    </tr>

<?php 
 require_once 'classes/postClient.php';
$allPosts = fetchPosts($_COOKIE['karnakCookie']);

 foreach ($allPosts as $key => $post)
{
    echo "<tr><td>$key</td>";

    foreach ($post as $postFields)
 {
     echo "<td>$postFields</td>";
 }
     echo "<td><a href='viewPost.php?pID=".$post['postId']."'> View Post</a></td>";

    echo "<td><a href='editPost.php?pID=".$post['postId']."'> Edit</a></td>";
    //echo "<td id=\"del\"><a href='classes/postClient.php?param=delete&pID=".$post['postId']."'>Delete</a></td>";
    echo "<td onclick='delConfirm(this.id)' id='".$post['postId']."'>Delete</a></td>";
    echo '</tr>';
}

?>

</table> 
        
        
        
    </div>	
</div>
	<footer> <?php require_once 'templates/secFooter.php'; ?> </footer>
<script type="text/javascript">

function delConfirm(pId)
{
    if (confirm("Are you sure you want to remove this post?") === true && confirm("Last chance") === true)
    {
            document.location = 'classes/postClient.php?param=delete&pID='+pId;
    }
}

</script>
</body>



</html>

