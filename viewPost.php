<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="templates/mainStyle.css" />
    <link rel="stylesheet" type="text/css" href="templates/formSS.css" />
      <link rel="stylesheet" type="text/css" href="templates/postStyle.css" />
    <script type="text/javascript" src="includes/jquery-1.8.2.js"></script>

    <title>Karnak |</title>
</head>

<body>
    <header><?php require_once 'templates/secHeader.php'; ?> </header>
    <nav><?php require_once 'templates/secNav.php'; ?> </nav>

    <div class="content">	
        

<?php require_once 'classes/postClient.php';
$postID = $_GET['pID'];
//$userID = $_COOKIE['karnakCookie'];
$post = loadPost($postID);  
echo "<h1>".$post['postTitle']."</h1>";
echo "<div>".$post['postContent']."</div>";
echo "<span class='tags'>Tagged: ";

foreach ((explode(",", $post['postTags'])) as $tags)
{
    echo "<a href='tags.php?tag=$tags'>$tags</a> ";
}

echo"</span>";?>

    </div>    

    <footer><?php require_once 'templates/secFooter.php'; ?> </footer>
</body>
</html>