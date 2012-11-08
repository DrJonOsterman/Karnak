<?php
//require_once 'dbAccessClass.php';
require_once 'postClass.php';


if (ISSET($_POST['param'])) //handle new posts
{
    $uParam = $_POST['param'];
    if (($uParam === 'new') && (ISSET($_COOKIE['karnakCookie'])))
    {
        require_once 'dbAccessClass.php';
        $db = dbAccess::getInstance();
        $db->connect();

        $postObj = new post();
        $uTitle = $_POST['title'];
        $uType = $_POST['type'];
        $uTags = $_POST['tags'];
        $uContent = $_POST['content'];
        $userID = $_COOKIE['karnakCookie'];
        $postObj->insertNew($userID, $uTitle, $uType, $uTags, $uContent);
        header('Location: ../userPosts.php');
    }
}
else {echo 'What are you doing here trickster :|';}

function fetchPosts($uId)
{
    require_once 'dbAccessClass.php';
    $db = dbAccess::getInstance();
    $db->connect();
    $postObj = new post();
    $postArr = $postObj->retrievePostsByUser2($uId);
    return $postArr;
}

?>