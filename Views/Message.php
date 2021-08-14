<?php
 session_start();
if(!isset($_SESSION["loggeduserid"])){
	header("Location: Login.php");
}

?>
<?php include 'MainHeader.php'; ?>
<?php include 'AdminHeader.php'; ?>
<?php require '../Controllers/UsersControll.php'; ?>
<?php $rcvr = getUser($_GET["id"]); ?>
<?php $sender = getUser($_SESSION["loggeduserid"]);?>
<?php $msgs = getUserMessage($_GET["id"],$_SESSION["loggeduserid"]); ?>
<html>
	<head></head>
	<body>
	<div align="center">
	    <h3>Messanger</h3>
		<p>Messages with <?php echo $rcvr["uname"]; ?></p>
		    <div>
			    <h></h>
				<table>
				<?php
						foreach($msgs as $m){
							echo "<tr>";
								echo "<td><textarea>".$m["message"]."</textarea></td>";
								echo "<td>".$m["time"]."</td>";
								echo "<td>".$m["date"]."</td>";
							echo "</tr>";
						}
					?>
				</table>
			</div>
			<div>
			<fieldset>
			<form action="" method="post">
			<table align="center">
					<tr>
					    <input type = "hidden" name = "sid" value="<?php echo $_SESSION["loggeduserid"];?>"/>
						<input type = "hidden" name = "rid" value="<?php echo $_GET["id"];?>"/>
						<td align="right">Message: </td>
						<?php $sname = $sender["uname"];?>
						<td><textarea name="mesg"><?php echo $sname.":\n".$mesg;?></textarea></td>
			            <td><span><?php echo $err_mesg;?></span></td>
						
					</tr>
					
					<tr>
						<td align="center" colspan="2"><input type="submit" name="sendMessage" value="Send"></td>
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