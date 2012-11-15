<?php
class post
{
    private $pID;
    private $pUserId;
    private $pTitle;
    private $pType;
    private $pTags;
    private $pContent;
    private $pTime;
    public function __construct() {}
    
public function retrievePost($postId)
{

  $sql = "SELECT * FROM `tbposts` WHERE `postID`='$postId'";
  $queryVar = mysql_query($sql);
  if (mysql_num_rows($queryVar)==0)
    {
        echo "<h3>There is no post with such ID: $postId</h3><br />";
        //add validation to prevent user from editing another user's post
    }
  else
   {
        $row = mysql_fetch_array($queryVar, MYSQL_ASSOC);
        $post = $row;
        return $post;
   }
}

public function serializePost()
{
  $postArr = array(
      'id' => $this->pID,
      'author' => $this->pUserId,
      'title' => $this->pTitle,
      'type' => $this->pType,
      'tags' => $this->pTags,
      'content'=> $this->pContent,
      'time' => $this->pTime); 
  return $postArr;
}

 public function retrievePostsByUser($userId)
 {
     
 //    $sql2 = "SELECT ";
  $postArr = array();
  $sql = "SELECT * FROM `tbposts` WHERE `userID`='$userId'";
  $queryVar = mysql_query($sql);
  
  if (mysql_num_rows($queryVar)==0)
  {echo "<h3>There are no postsmade by ID: $userId</h3><br />";}

  else
    {
     while ($row = mysql_fetch_array($queryVar, MYSQL_ASSOC))
           {$postArr[] = $row; }
    }
    return $postArr;
    
}
    
public function update($field, $newVal, $postId){
  $column = '';
  if ($field == 'title'){$column ='postTitle' ;}
  if ($field == 'type'){$column ='postType' ;}
  if ($field == 'tags'){$column ='postTags';}
  if ($field == 'content'){$column ='postContent' ;}

$sql = "UPDATE `tbposts` SET `$column` = $newVal WHERE `postID` = '$postId'";
mysql_query($sql);

}

public static function updateAll($postId, $postArr)
{
    $sql = "UPDATE `tbposts` SET `postTitle` = '".$postArr['postTitle'].
            "', `postType` = '".$postArr['postType'].
            "', `postTags` = '".$postArr['postTags'].
            "',`postContent` = '".$postArr['postContent'].
            "' WHERE `postID` = '$postId'";
    if (mysql_query($sql))   {return true;}
    else {return false;}
    
}


public function insertNew($aUserId, $aTitle, $aType, $aTags, $aContent)
{
  //date_default_timezone_set('America/New_York');
  $aTime = date('Y-m-d G:i:s', time());
  $sql = "INSERT INTO `karnak`.`tbposts` (`userID`, `postTitle`, `postType`, `postTags`, `postContent`, `postTime`) VALUES ('$aUserId', '$aTitle', '$aType', '$aTags', '$aContent', '$aTime')";
  
  if (mysql_query($sql)){ echo "<br>works!";}
  
  else{ echo "<br><b>no work</b>" ;}
}

public static function deletePost($postID){
$sql = "DELETE from `tbposts` WHERE `postID` = $postID";
if(mysql_query($sql)){return true;}
else {return false;}
}








}
?>