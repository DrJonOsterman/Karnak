<?php 
class user
{
    public static $userInfoArray = array();

    public function logInUser($pID)
    {   
        $expire = 8640 + time(); 
        setCookie('karnakCookie', $pID, $expire, '/'); 
        $this->editLastLogIn($pID);
    }	

    public function fetchId($sn)
    {
        $query = mysql_query("SELECT `userId`, `nickname` FROM tbusers WHERE `nickname` = '$sn'");
        if($query)
        {
            $row = mysql_fetch_array($query, MYSQL_NUM);
            return $row[0];
        }
    }
    public function editLastLogIn($pID)
    {
        /*date_default_timezone_set('America/New_York');*/ 
        $logInTime = date('Y-m-d G:i:s', time());
        mysql_query("UPDATE `tbusers` SET `lastLogin` = '$logInTime' WHERE `userId` = '$pID' ");
    }

    public function logOutUser()	
    {
        setCookie('karnakCookie', '', time()-60*60*24*365, '/');
    }	

    public function insertNew($email, $password, $username)
    {
        date_default_timezone_set('America/New_York'); 
        $joinDate = date('Y-m-d G:i:s', time()); $userIP = $_SERVER['REMOTE_ADDR']; 
        $hash = md5('Ozymandias'. $password);
        $sqlInsert = "INSERT INTO `tbusers` (`email`, `password`, `nickname`, `joinDate`, `ipAddress`) VALUES ('$email', '$hash', '$username', '$joinDate', '$userIP')";
        if (mysql_query($sqlInsert)) {echo '<br> Sucessful account created';}
        else {echo 'Query failed. Please try again.';}
    }

    public function __construct(){}

    public static function fetchUser($IDparam) //this loads a user into the instance of this class.//Dependency on DB access class
    {
        if ((!(is_numeric($IDparam))) || (is_string($IDparam)))
        {
            echo "<h3>That ID is not valid: $IDparam</h3><br />";
        }
        
        else
        {
            $sqlString2 = "SELECT `userId` AS `id`, `nickname` AS `sn`, `password` AS `pwd`, `email`, `about`, `settings`, `picture`, `joinDate` as `joined` FROM `tbusers` WHERE `userID` = '$IDparam'";
            $queryVar = mysql_query($sqlString2);	
        
            if (mysql_num_rows($queryVar)==0)
            {	
                echo "<h3>There is no user with such ID: $IDparam</h3><br />";
                return null;
            }
        
            else
            {
                $row = mysql_fetch_array($queryVar, MYSQLI_ASSOC);
                $userInfoArray = $row;
                return $userInfoArray;
            }                     
        }
    }
}
?>