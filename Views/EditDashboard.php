<?php
 session_start();
if(!isset($_SESSION["loggeduserid"])){
	header("Location: Login.php");
}

?>
<?php include 'MainHeader.php'; ?>
<?php include 'AdminHeader.php'; ?>
<?php include '../Controllers/UsersControll.php'; ?>
<?php $usr = getUser($_SESSION["loggeduserid"]); ?>
<html>
	<head></head>
	<body>
	<div align="center">
	    <h3>Edit Dashboard</h3>
		<fieldset>
			<form action="" method="post">
				<table >
					<tr>
					    <input type = "hidden" name = "pid" value="<?php echo $_SESSION["loggeduserid"];?>"/>
						<td align="right">Name: </td>
						<td><input type="text" name="name" value="<?php echo $usr["name"];?>"></td>
						<td><span><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td align="right">Username: </td>
						<td><input type="text" name="uname" value="<?php echo $usr["uname"];?>"></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
					
					<tr>
						<td align="right">Phone: </td>
						<td><input type="text" name="phone" value="<?php echo $usr["phone"];?>"></td>
						<td><span><?php echo $err_phone;?></span></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" name="updateDashboard" value="Update"></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><span><?php echo $err_db;?></span></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		</div>
	</body>
	<?php include 'Footer.php'; ?>
</html>