<?php include 'MainHeader.php'; ?>
<?php include '../Controllers/UsersControll.php'; ?>
<html>
	<body>
	<fieldset>
	<div align="center">
	<form action="" method="post">
	<table>
		<tr>
			<td align="center" colspan="2"><h2>Login</h2></td> 
		</tr>
		<tr>
			<td align="right">Username: </td>
			<td><input type="text" name="uname" value="<?php echo $uname;?>" ></td>
			<td><span><?php echo $err_uname;?></span></td>
			
		</tr>
		<tr>
			<td align="left">Password: </td>
			<td><input type="password" name="pass" value="<?php echo $pass;?>"></td>
			<td><span><?php echo $err_pass;?></span></td>
					</tr>		
		<tr>
			<td align="center" colspan="2"><input type="submit" name="login" value="Login"></td>
		</tr>
		
		<tr>
		<td align ="left" colspan ="2"><a href="Candidatesregister.php">Register as Candidates</a></td>
		<td align ="right" colspan ="2"><a href="AddRegistrarPage.php">Register as Registrar</a></td>
		</tr>
		
	</table>
	</form>
	</div>
	</fieldset>
	</body>
	<?php include 'Footer.php'; ?>
</html>