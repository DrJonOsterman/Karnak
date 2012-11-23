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
    $lol = $_FILES['picture'];
    var_dump($lol);
    
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
