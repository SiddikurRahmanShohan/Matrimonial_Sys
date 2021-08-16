<?php include 'MainHeader.php'; ?>
<?php require '../Controllers/UsersControll.php'; ?>
<html>
    <head>
		<link rel="stylesheet" href="../CSS/masterCSS.css">
	</head>
	<body>
	<fieldset class="field">
	<div align="center">
	<form action="" method="post">
	<table>
		<tr>
			<td align="center" colspan="2"><h2>Licence</h2></td> 
		</tr>
		<tr>
		<?php echo $_GET["id"];?>
			<td align="right">Licence: </td>
			<input type = "hidden" name = "luid" value="<?php echo $_GET["id"];?>"/>
			<td><input type="text" name="alic" value="<?php echo $lic;?>" ></td>
			<td><span ><?php echo $err_lic;?></span></td>
			
		</tr>
			<td align="center" colspan="2"><input class="btn-orange" type="submit" name="apvLic" value="Approve"></td>
		</tr>
		
	</table>
	</form>
	</div>
	</fieldset>
	</body>
	<?php include 'Footer.php'; ?>
</html>