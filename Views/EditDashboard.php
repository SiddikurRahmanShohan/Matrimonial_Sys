<?php
 session_start();
if(!isset($_SESSION["loggeduserid"])){
	header("Location: Login.php");
}

?>
<?php include 'MainHeader.php'; ?>
<?php include 'AdminHeader.php'; ?>
<?php require '../Controllers/UsersControll.php'; ?>
<?php $usr5 = getUser($_SESSION["loggeduserid"]); ?>
<html>
	<head></head>
	<body>
	<div align="center">
	    <h3>Edit Dashboard</h3>
		<fieldset>
			<form action="" onsubmit="return validate()" method="post">
				<table id="tab" >
					<tr>
					    <input type = "hidden" name = "pid" value="<?php echo $_SESSION["loggeduserid"];?>"/>
						<td align="right">Name: </td>
						<td><input type="text" id="name" name="name" value="<?php echo $usr5["name"];?>"></td>
						<td><span id="err_name"><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td align="right">Username: </td>
						<td><input type="text" id="uname" name="uname" value="<?php echo $usr5["uname"];?>"></td>
						<td><span id="err_uname"><?php echo $err_uname;?></span></td>
					</tr>
					
					<tr>
						<td align="right">Phone: </td>
						<td><input type="text" id="phone" name="phone" value="<?php echo $usr5["phone"];?>"></td>
						<td><span id="err_phone"><?php echo $err_phone;?></span></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input class="btn-orange" type="submit" name="updateDashboard" value="Update"></td>
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
	<?php include 'Footer.php'; ?>
</html>