<!DOCTYPE html>
<html>

<head>


<style type="text/css">

html{
			height:99%;
			width: 99%;
			position:absolute;
			border:red 2px solid;
			background-color:rgba(0,20,0,.1);		 
		} 
		
body{
			position:absolute;
			border:black 2px dashed;
			background-color:rgba(255,0,0,.1);
			width:99%;
			height:99%;
		}

header{
			position:absolute;
			top:0%;left:0%;
			background-color:rgba(255,20,0,.9);
			width:100%; height:7%;
			font-size:100%;
			border:black 1px solid;
		}

nav{
			position:absolute;
			top:7%;left:0%;
			border:blue 1px solid;
			width:10%;
			height:87%;
	}

.content{
			position:absolute;
			top:7%;left:10%;
			border:black 1px dashed;
			background-color:rgba(0,0,0,.1);
			width:85%;
			height:87%;
		}

footer{
				position:absolute;
				top:94.5%;left:0%;
				background-color:rgba(255,55,255,.8);
				height:5%; width:100%;
				text-align:center;
				border:1px dashed white;}  

 table.center{
					margin-top:5%;
					margin-left:auto;
					margin-right:auto;
					border:red 2px solid;}

</style>

<title>Karnak | Register</title></head>



<body>

<header>
Karnak Registration
</header>


<nav>
	<navHeader>Navigation</navHeader>
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
				<td><input type="text" id="frmUsername" name="formTxtUsername"></td>
			</tr>			
			<tr>
				<td><label for="frmEmail">E-Mail:</label></td>
				<td><input type="text" id="frmEmail" name="formTxtEmail"></td>
			</tr>			
			<tr>
				<td><label for="frmPass">Password:</label></td>
				<td><input type="password" id="frmPass"  name="formTxtPassword"></td>
			</tr>		
			<tr>
				<td><label for="frmPass2">Retype:</label></td>
				<td><input type="password" id="frmPass2" name="formTxtPassword2"></td>
			</tr>			
			<tr>
				<td><input type="Submit"></td>
			</tr>
		</table>
	</form>
</div>
	
<footer>
About | Contact Us | Careers |
</footer>

</body>





</html>