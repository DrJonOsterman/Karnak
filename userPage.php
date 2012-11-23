<!DOCTYPE html>
<html>
<head>

<!--<script type="text/javascript" src="includes/jquery-1.8.2.js"></script>-->
<link rel="stylesheet" type="text/css" href="templates/mainStyle.css" />

<title>Karnak | </title></head>

<body>
<header><?php require_once 'templates/secHeader.php'; ?></header>
<nav><?php require_once 'templates/secNav.php'; ?> </nav>

<div class="content">	
<?php require_once 'classes/userClient.php';
$myUser = getmyUser();?>

<form action="classes/userClient.php" method="POST" enctype="multiplart/form-data">
<img src ="<?php echo $myUser['picture'];?>"><br />
<input type="file" multiple="false" name="picture"/>

<h1>Welcome <?php echo $myUser['sn'];?></h1>

<table class="cute">                  
<tr><td>Email</td><td><input type="text" value="<?php echo $myUser['email'] ?>" /></td></tr>
<tr><td>Password</td><td><input type="text" value="<?php echo $myUser['pwd'] ?>" disabled="true" /></td></tr>
<tr><td>About</td><td><textarea rows="4" cols="50"><?php echo $myUser['about'] ?></textarea></td></tr>
<tr><td>Member since</td><td><?php echo $myUser['joined'] ?></td></tr>
</table>
<input type="hidden" name="param" value="settings" />
<input type="submit" value="Save Settings" /></form>

</div>
	
<footer> <?php require_once 'templates/secFooter.php'; ?> </footer>
</body>

<script type="text/javascript">

//alert("lol");

</script>
</html>

