<?php
 session_start();
if(!isset($_SESSION["loggeduser"])){
	header("Location: Login.php");
}

?>

<?php include 'MainHeader.php'; ?>
<?php include 'AdminHeader.php'; ?>
<?php include '../Controllers/UsersControll.php'; ?>
<html>
    <head>
	    <link rel="stylesheet" href="../CSS/masterCSS.css">
	</head>
	<boady>
	<form action="" method="post">
	<div align="right">
	    <input class="btn-blue" type="submit" name="logout" value="Logout">
	</div>
	</form>
	    <div align="center">
		<h2>Welcome, <?php echo $_SESSION["loggeduser"]; ?></p>
		</div>
	</boady>
    <?php include 'Footer.php'; ?>
</html>