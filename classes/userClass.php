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

    public function editLastLogIn($pID)
    {
        /*date_default_timezone_set('America/New_York');*/ 
        $logInTime = date('Y-m-d G:i:s', time());
        mysql_query("UPDATE `tbusers` SET `lastLogin` = '$logInTime' WHERE `userID` = '$pID' ");
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
            { echo "<h3>That ID is not valid: $IDparam</h3><br />"; }

        else
            {
            // 'id' => $this->varUserID, 'sn' => $this->varNickname, 'pwd' => $this->varPassword, 'email' => $this->varEmail,
 //'about' => $this->varAbout, 'settings' => $this->varSettings, 'picture' => $this->varPicture, 'joined' => $this->varJoinDate);
                $sqlString2 = "SELECT `userID` AS `id`, `nickname` AS `sn`, `password` AS `pwd`, `email`, `about`, `settings`, `picture`, `joinDate` as `joined` FROM `tbusers` WHERE `userID` = '$IDparam'";
                $sqlString = "SELECT * from `tbusers` WHERE `userID` = '$IDparam'";
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

    public function printInfo()
    {
        echo "<div style='border:1px red solid;'><h3>This is your user</h3>";
        foreach($this as $var => $value)
            {
                echo $var.": ".$value."<br />";
            }
        echo "</div>";
    }
}


//check for 
//updatedb
//delete
//etc

?>
