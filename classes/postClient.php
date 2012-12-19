<?php
//require_once 'dbAccessClass.php';
require_once 'postClass.php';


if (ISSET($_REQUEST['param']) && (ISSET($_COOKIE['karnakCookie']))) //handle new posts, edit posts
{
    $uParam = $_REQUEST['param'];
    require_once 'dbAccessClass.php';
    $db = dbAccess::getInstance();
    $db->connect();
        
    if ($uParam === 'new')
    {
        $postObj = new post();
        $uTitle = $_POST['title'];
        $uType = $_POST['type'];
        $uTags = $_POST['tags'];
        $uContent = $_POST['content'];
        $userID = $_COOKIE['karnakCookie'];
        $postObj->insertNew($userID, $uTitle, $uType, $uTags, $uContent);
        header('Location: ../userPosts.php');
        
    }
    
   if ($uParam === 'edit')
   {
       $postId = $_POST['id'];
       $updatedPost = array('postTitle' => $_POST['title'], 'postType' => $_POST['type'], 'postTags' => $_POST['tags'], 'postContent' => $_POST['content']);
       if (post::updateAll($postId, $updatedPost))
       {header('Location: ../userPosts.php');}
       else {echo 'sorry that failed :(';}
   }
   
   
      if ($uParam === 'delete')
   {
       if (post::deletePost($_GET['pID']))
       {header('Location: ../userPosts.php');}
       else {echo 'sorry that failed :(';}
   }
   
    
}
//else {echo 'What are you doing here trickster :|';}

function fetchPosts($uId)
{
    require_once 'dbAccessClass.php';
    $db = dbAccess::getInstance();
    $db->connect();
    $postObj = new post();
    $postArr = $postObj->retrievePostsByUser($uId);
    return $postArr;
}

function loadPost($postID)
{
require_once 'dbAccessClass.php';
$db = dbAccess::getInstance();
$db->connect();
$postObj = new post();
$onePost = $postObj->retrievePost($postID);
return $onePost;

}
    ?>