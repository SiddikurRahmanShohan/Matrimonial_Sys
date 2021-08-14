<?php
 session_start();
if(!isset($_SESSION["loggeduserid"])){
	header("Location: Login.php");
}

?>
<?php include 'MainHeader.php'; ?>
<?php include 'AdminHeader.php'; ?>
<?php require '../Controllers/UsersControll.php'; ?>
<?php $usr6 = getUser($_GET["id"]); ?>
<html>
	<head></head>
	<body>
	<div align="center">
	    <h3>Edit User</h3>
		<fieldset>
			<form action="" onsubmit="return validate()" method="post">
				<table >
					<tr>
					    <input type = "hidden" name = "pid" value="<?php echo $_GET["id"];?>"/>
						<td align="right">Name: </td>
						<td><input type="text" id="name" name="name" value="<?php echo $usr6["name"];?>"></td>
						<td><span id="err_name"><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td align="right">Username: </td>
						<td><input type="text" id="uname" name="uname" value="<?php echo $usr6["uname"];?>"></td>
						<td><span id="err_uname"><?php echo $err_uname;?></span></td>
					</tr>
					
					<tr>
						<td align="right">Phone: </td>
						<td><input type="text" id="phone" name="phone" value="<?php echo $usr6["phone"];?>"></td>
						<td><span id="err_phone"><?php echo $err_phone;?></span></td>
					</tr>
					<tr>
						<td align="right">NID: </td>
						<td><input type="text" id="nid" name="natId" value="<?php echo $usr6["nid"];?>"></td>
						<td><span id="err_nid"><?php echo $err_nId;?></span></td>
					</tr>
					<tr>
						<td align="right">Address: </td>
						<td><input type="text" id="addrs" name="addrs" value="<?php echo $usr6["address"];?>"></td>
						<td><span id="err_addrs"><?php echo $err_phone;?></span></td>
					</tr>
					<tr>
						<td align="center-left" colspan="2"><input type="submit" name="updateUser" value="Update"></td>
						<td align="center-right" colspan="2"><input type="submit" name="deleteUser" value="Delete"></td>
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