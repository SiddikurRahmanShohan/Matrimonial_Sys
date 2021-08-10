<?php
 session_start();
if(!isset($_SESSION["loggeduser"])){
	header("Location: Login.php");
}

?>

<?php include 'MainHeader.php'; ?>
<?php include 'AdminHeader.php'; ?>
<html>
    <head></head>
	<boady>
	    <div align="center">
		<h2>Welcome, <?php echo $_SESSION["loggeduser"]; ?></p>
	</boady>
    <?php include 'Footer.php'; ?>
</html>