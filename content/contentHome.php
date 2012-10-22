    <form action="classes/valiDateClass.php" name="maForm" method="post">
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
				<td><input type="hidden" name="params" value="hidden form son"></td><td><input type="submit" id="sbmtBtt" value="SENDDDD"></td>
			</tr>
		</table>
	</form>
	
	<div id="ValiDiv"></div>
	<div id="AJDiv"></div>