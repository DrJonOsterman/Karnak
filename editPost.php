<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="templates/mainStyle.css" />
    <link rel="stylesheet" type="text/css" href="templates/formSS.css" />
    <title>Karnak |</title>
</head>

<body>
    <header><?php require_once 'templates/secHeader.php'; ?> </header>
    <nav><?php require_once 'templates/secNav.php'; ?> </nav>

    <div class="content">	
        <?php require_once 'classes/postClient.php';
        $postID = $_GET['pID'];
        //$userID = $_COOKIE['karnakCookie'];
        $postToEdit = loadPost($postID); ?>

        <h2>You are editing</h2>

        <form action="classes/postClient.php" name="editpostform" method="post">
            <table class="formTable">
            <tr><td>Title:</td><td><input type="text" name="title" value="<?php echo $postToEdit['postTitle'];?>" /></td></tr>
            <tr><td>Type:</td><td><input type="text" name="type" value="<?php echo $postToEdit['postType'];?>" /></td></tr>
            <tr><td>Tags:</td><td> <input type="text" name="tags" value="<?php echo $postToEdit['postTags'];?>"/></td></tr>
            <tr><td>Body:</td><td><textarea name="content"><?php echo $postToEdit['postContent'];?></textarea></td></tr>
            <tr><td><input type="hidden" name="param" value="edit"/><input type="hidden" name="id" value="<?php echo $postID;?>"/></td>
            <td><input type="submit"/></td></tr>    
            </table>
        </form>
    </div>
    <footer><?php require_once 'templates/secFooter.php'; ?> </footer>
</body>
</html>