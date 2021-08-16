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
	<head>
		<link rel="stylesheet" href="../CSS/masterCSS.css">
	</head>
	<body>
	<div align="center">
	    <h3>Dashboard</h3>
		<fieldset>
			<form action="" method="post">
				<table id="tab" >
					<tr>
						<td align="right">Name: </td>
						<td><P><?php echo $usr["name"];?></p></td>
						
					</tr>
					<tr>
						<td align="right">Username: </td>
						<td><P><?php echo $usr["uname"];?></p></td>
					</tr>
					
			        <tr>
						<td align="right">NID: </td>
						<td><P><?php echo $usr["nid"];?></p></td>
						
					</tr>
					
					<tr>
						<td align="right">Phone: </td>
						<td><P><?php echo $usr["phone"];?></p></td>
					</tr>
					
					<tr>
						<td align="center"><a class="btn-blue" href="EditDashboard.php">Edit</a></td>
						<td align="center"><a class="btn-green" href="EditPass.php">Change Password</a></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		</div>
	</body>
	<?php include 'Footer.php'; ?>
</html>