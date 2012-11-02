<?php
require_once 'classes/userClass.php';
$userObj = new User();
$userObj->logOutUser();
header('Location: index.php');
?>