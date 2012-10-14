<?php
//<!DOCTYPE html><html><head><title>Default Title</title></head><body>Default Body Content</body></html>
?>

<!DOCTYPE html>
<html>

<head>

<!--<script type="text/javascript" src="includes/jquery-1.8.2.js"></script>-->
<link rel="stylesheet" type="text/css" href="templates/mainStyle.css" />


<title>Karnak | Register</title></head>


<body>

<header>
Karnak Registration
</header>

<nav>
	Navigation
	<ul>
		<li>Links</li>
		<li>Link2</li>
		<li>Link3</li>
		<li>Link4</li>
		<li>Link5</li>
	</ul>
</nav>

<div class="content">
    <form action="registration2.php" method="post">
		<table class="center">
			<tr>
				<td><label for="frmUsername">Username:</label></td>
				<td><input type="text" id="frmUsername" name="formTxtUsername" placeholder="Username"></td>
			</tr>			
			<tr>
				<td><label for="frmEmail">E-Mail:</label></td>
				<td><input type="text" id="frmEmail" name="formTxtEmail" placeholder="E-Mail Address"></td>
			</tr>			
			<tr>
				<td><label for="frmPass">Password:</label></td>
				<td><input type="password" id="frmPass"  name="formTxtPassword" placeholder="Password"></td>
			</tr>		
			<tr>
				<td><label for="frmPass2">Retype:</label></td>
				<td><input type="password" id="frmPass2" name="formTxtPassword2" placeholder="Password"></td>
			</tr>			
			<tr>
				<td><input type="hidden" name="params" value="hidden form son"></td><td><input type="Submit"></td>
			</tr>
		</table>
	</form>
	
</div>


<footer>
About | Contact Us | Careers |
</footer>

</body>

	


</html>