<?php //depends on dbaccess class

/*
 * 
postID
userID
postTitle
postType
PostTags
postContent
postTime
 * 
 * 
 * 
 */

class post{

    private $pID;
    private $pUserId;
    private $pTitle;
    private $pTags;
    private $pContent;
    private $pTime;
    
public function retrievePost($postId){
   $sql = "SELECT * FROM `tbpost` WHERE `postID`='$postId'"; 
   $queryVar = mysql_query($postId);
   
   if (mysql_num_rows($queryVar)==0)
       {
        echo "<h3>There is no post with such ID: $IDparam</h3><br />";
       }
   else
       {
        $row = mysql_fetch_array($queryVar, MYSQL_NUM);
        $this->pID = $row[0];
        $this->pUserId = $row[1];
        $this->pTitle = $row[2];
        $this->pTags = $row[3];
        $this->pContent = $row[4];
        $this->pTime = $row[5];
       }
}
 
 public function retrievePostsByUser($userId){}
 
 public function __construct() {}

 
}
?>