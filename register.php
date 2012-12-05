<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Karnak Log-In :)</title>
        <link rel="stylesheet" type="text/css" href="templates/mainStyle.css" />
        <link rel="stylesheet" type="text/css" href="templates/formSS.css" />
</head>
<body>

<header> <?php require_once 'templates/secHeader.php'; ?></header>
<nav> <?php require_once 'templates/secNav.php'; ?> </nav>
<div class="content">
    <div style="border:red 1px dashed;width:30%;" id="ValiDiv"></div>
    <div class="formDiv">
        <form action="classes/validateClient.php" name="maForm" method="post">
        <table>
            <tr><td>E-Mail Address:</td>
            <td><input type="text" name="formTxtEmail" placeholder="e-mail" id="em" /></td></tr>

            <tr><td>Display Name:</td>
            <td><input type="text" name="formTxtUsername" placeholder="desired display name" id="sn" /></td></tr>

            <tr><td>Password</td>
            <td><input type="text" name="formTxtPassword" placeholder="password" id="pass" /></td></tr>

            <tr><td>Confirm Password</td>
            <td><input type="text" placeholder="password" id="pass2" /></td></tr>

            <tr><td><input type="hidden" name="param" value="new"></td>
            <td><input type="submit" id="sbmt" value="REGISTER"/></td></tr>            
        </table> 
        </form>        
    </div>
</div>
<script type="text/javascript" src="includes/jquery-1.8.2.js"></script>
<script type="text/javascript" src="includes/registerVal.js"></script>
<footer><?php require_once 'templates/secFooter.php'; ?> </footer>

</body></html>