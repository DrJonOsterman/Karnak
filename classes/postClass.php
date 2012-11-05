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
    }
  else
   {
        $row = mysql_fetch_array($queryVar, MYSQL_NUM);
        $this->pID = $row[0];
        $this->pUserId = $row[1];
        $this->pTitle = $row[2];
        $this->pType = $row[3];
        $this->pTags = $row[4];
        $this->pContent = $row[5];
        $this->pTime = $row[6];
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
  $postArr = array();
  $sql = "SELECT * FROM `tbposts` WHERE `userID`='$userId'";
  $queryVar = mysql_query($sql);
  
  if (mysql_num_rows($queryVar)==0)
  {echo "<h3>There is no post with such ID: $userId</h3><br />";}

  else
    {
     while ($row = mysql_fetch_array($queryVar, MYSQL_NUM))
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

public function insertNew($aUserId, $aTitle, $aType, $aTags, $aContent)
{
  date_default_timezone_set('America/New_York');
  $aTime = date('Y-m-d G:i:s', time());
   
  $sql = "INSERT INTO `tbposts` 
            (`userID`, `postTitle`, `postType`, `postTags`, `postContent`, `postTime`)
      VALUES ('$aUserId', '$aTitle', '$aType', '$aTags', '$aContent', '$aTime')";
  var_dump($sql);
  if (mysql_query($sql)) echo "works!" ;
}

}


?>