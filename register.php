<?php
//<!DOCTYPE html><html><head><title>Default Title</title></head><body>Default Body Content</body></html>
$varTitle = "Registration";
?>

<!DOCTYPE html>
<html>

<head>

<script type="text/JavaScript" src="includes/jquery-1.8.2.js"></script>

<script type="text/JavaScript"> 



function valiDate(){}



$(document).ready(function(){



//$('#frmUsername, #frmEmail, #frmPass, #frmPass2').keyup(function(){valiDate()});


/*	$('#sbmtBtt').click(function(){
		var vSn = document.getElementById('frmUsername').value;
		var vEm = document.getElementById('frmEmail').value;
		var vPs = document.getElementById('frmPass').value;
		var data = "formTxtUsername=" + vSn + "&formTxtEmail=" + vEm + "&formTxtPassword=" + vPs;
		$.post('classes/valiDateClass.php', data, function(response) {	$('#AJDiv').html(response);});
	});*/
 });

  
  
  
  
  
  
  
</script>

<link rel="stylesheet" type="text/css" href="templates/mainStyle.css" />


<title>Karnak | Register</title></head>


<body>

<header><?php require_once 'templates/secHeader.php'; ?></header>
<nav><?php require_once 'templates/secNav.php'; ?> </nav>

<div class="content"> 

    <form action="classes/validateClient.php" name="maForm" method="post">
		<table class="center">
			<tr>
				<td><label for="frmUsername">Username:</label></td>
				<td><input type="text" id="frmUsername" name="formTxtUsername" placeholder="Display Name"></td>
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
				<td><input type="hidden" name="param" value="new"></td><td><input type="submit" id="sbmtBtt" value="SENDDDD"></td>
			</tr>
		</table>
	</form>
	
	<div id="ValiDiv"></div>
	<div id="AJDiv"></div>

 </div>


<footer><?php require_once 'templates/secFooter.php'; ?> </footer>

</body>

	


</html>