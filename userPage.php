<!DOCTYPE html>
<html>
<head>

<!--<script type="text/javascript" src="includes/jquery-1.8.2.js"></script>-->
<link rel="stylesheet" type="text/css" href="templates/mainStyle.css" />
<link rel="stylesheet" type="text/css" href="templates/formSS.css" />
<title>Karnak | </title></head>

<body>
<header><?php require_once 'templates/secHeader.php'; ?></header>
<nav><?php require_once 'templates/secNav.php'; ?> </nav>

<div class="content">	
<?php require_once 'classes/userClient.php';
$myUser = getmyUser();?>

<form action="classes/userClient.php" method="POST" enctype="multipart/form-data">

<h1>Welcome <?php echo $myUser['sn'];?></h1>

<img src ="<?php echo $myUser['picture'];?>"><br />
<input type="file" multiple="" name="picture"/>


<table class="formTable">                  
<tr><td>Email</td><td><input type="text" value="<?php echo $myUser['email'] ?>" /></td></tr>
<tr><td>Password</td><td><input type="text" value="<?php echo $myUser['pwd'] ?>" disabled="disabled" /></td></tr>
<tr><td>About</td><td><textarea rows="4" cols="50" name="aboot"><?php echo $myUser['about'] ?></textarea></td></tr>
<tr><td>Member since</td><td><?php echo $myUser['joined'] ?></td></tr>
</table>
<input type="hidden" name="param" value="settings" />
<input type="submit" value="Save Settings" /></form>

</div>
	
<footer> <?php require_once 'templates/secFooter.php'; ?> </footer>

<script type="text/javascript">

//alert("lol");

</script>
</body>


</html>

