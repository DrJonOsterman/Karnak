<?php

require_once 'dbAccessClass.php'; 
$dab = dbAccess::getInstance();	
$dab->connect();
require_once "userClass.php";

function getMyUser(){return user::fetchUser((int)($_COOKIE['karnakCookie']));}


//logic mess, will refactor later
if ((ISSET($_POST['param'])) && ($_POST['param'] === 'settings'))
{   
    $uid = (int)($_COOKIE['karnakCookie']);
    
    if (!($_FILES["picture"]["error"] === 0 || $_FILES["picture"]["error"] === 4)) //image error message, do not want your image
    {
        echo "Error: " . $_FILES["picture"]["error"] . "<br>";
    }
    
    else if ($_FILES["picture"]["error"] === 4 && empty($_POST['about'])) //no picture, no saved text => send back to profile
    {
        header('Location: ../userPage.php');    
    }
    
    else if ($_FILES["picture"]["error"] === 4 && (!empty($_POST['about']))) //no picture, changed text => save text, send back
    {
        $abtText = $_POST['about'];
        if(user::setAbout($uid, $abtText))
        {
            header('Location: ../userPage.php');
        }
    }
        
    else if ($_FILES["picture"]["error"] === 0 && empty($_POST['about'])) // picture, no text => save picture, send back
    {
        
        $usrImage = $_FILES['picture'];
        $filename = "http://localhost/peach/images/".$usrImage['name'];                     
        move_uploaded_file($usrImage['tmp_name'], "../images/".$usrImage['name']);            
        if(user::setPicture($uid, $filename))
        {
            header('Location: ../userPage.php');
        }

        else
        {
            echo "failed";                
        }
    }
    
    else if ($_FILES["picture"]["error"] === 0 && (!empty($_POST['about']))) // picture, no text => save picture, save text, send back
    {
        
        $abtText = $_POST['about'];
        $usrImage = $_FILES['picture'];
        $filename = "http://localhost/peach/images/".$usrImage['name'];                     
        move_uploaded_file($usrImage['tmp_name'], "../images/".$usrImage['name']);            
        
        if(user::setPicture($uid, $filename) && user::setAbout($uid, $abtText))
        {
            header('Location: ../userPage.php');
        }

        else
        {
            echo "failed";                
        }    
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
