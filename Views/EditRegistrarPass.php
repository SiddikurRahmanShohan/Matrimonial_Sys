<?php
 session_start();
if(!isset($_SESSION["loggeduserid"])){
	header("Location: Login.php");
}

?>
<?php include 'MainHeader.php'; ?>
<?php include 'RegistrarHeader.php'; ?>
<?php require '../Controllers/UsersControll.php';
//include '../Controllers/RegistrarController.php';
 ?>
<html>
	<head></head>
	<body>
	<div align="center">
	    <h3>Change Password</h3>
		<fieldset>
			<form action="" onsubmit="return validate()" method="post">
				<table >
					<tr>
						<td align="right">Old Password: </td>
						<td><input type="password" id="oPass" name="oPass" value="<?php echo $opass;?>"></td>
						<input type = "hidden" id="pid" name = "pid" value="<?php echo $_SESSION["loggeduserid"];?>"/>
						<td><span id="err_opass"><?php echo $err_opass;?></span></td>
					</tr>
					<tr>
						<td align="right">New Password: </td>
						<td><input type="password" id="nPass" name="nPass" value="<?php echo $npass;?>"></td>
						<td><span id="err_npass"><?php echo $err_npass;?></span></td>
					</tr>
					
					<tr>
						<td align="right">Confirm Password: </td>
						<td><input type="password" id="cPass" name="cPass" value="<?php echo $cpass;?>"></td>
						<td><span id="err_cpass"><?php echo $err_cpass;?></span></td>
					</tr>
					
					<tr>
						<td align="center" colspan="2"><input type="submit" name="chagePassword" value="Chage Password"></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><span><?php echo $err_db;?></span></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		</div>
		<script src="../JS/UsersValidate.js"></script>
	</body>
</html>