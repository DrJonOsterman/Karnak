<?php

require_once "userClass.php";
require_once 'dbAccessClass.php'; 
$dab = dbAccess::getInstance();	
$dab->connect();
//$userObj = new user();


function getmyUser()
{
$usr = user::fetchUser((int)($_COOKIE['karnakCookie']));
return $usr;
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
