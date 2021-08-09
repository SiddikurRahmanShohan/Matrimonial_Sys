<?php include 'MainHeader.php'; ?>
<?php include '../Controllers/UsersControll.php'; ?>
 <html>
    <head></head>
	<boady>
	    <div align="center">
		    <h3>Login</h3>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
			    <div>
				    <h4>Username</h4>
					<input type = "text" name = "uname" value="<?php echo $uname; ?>"/>
					<span> <?php echo $err_uname; ?> </span>
				</div>
				<div>
				    <h4 align="center">Password</h4>
					<input type = "password"  name = "pass"/>
					<span> <?php echo $err_pass; ?> </span>
				</div>
				<div>
					<input type = "submit" name = "login" value = "Login"/>
				</div>
				
			</form>
		</div>
	</boady>
    <?php include 'Footer.php'; ?>
</html>