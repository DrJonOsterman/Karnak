<?php

require_once "userClass.php";
require_once 'dbAccessClass.php'; 
$dab = dbAccess::getInstance();	
$dab->connect();


function getmyUser()
{
$usr = user::fetchUser((int)($_COOKIE['karnakCookie']));
return $usr;
}

if ((ISSET($_POST['param'])) && ($_POST['param'] === 'settings'))
{       
    if ($_FILES["picture"]["error"] > 0)
    {
        echo "Error: " . $_FILES["picture"]["error"] . "<br>";
    }
    else
    {
            $lol = $_FILES['picture'];
            //var_dump($lol);
            move_uploaded_file($lol['tmp_name'], "../images/".$lol['name']);
        //echo "<br> ABOUT: ".$_FILES['aboot'];
    }
  

    
}




/*
function unesc(&$entry)
{
    if (is_string($entry))
    { $entry =  mysql_real_escape_string($entry); }
    else
    { return $entry; }
}

$param = $_POST['param'];
$val = $_POST['val'];

unesc($param);
unesc($val);*/










?>
