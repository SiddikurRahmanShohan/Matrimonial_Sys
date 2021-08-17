<?php
 session_start();
if(!isset($_SESSION["loggeduserid"])){
	
}

?>
<?php include 'MainHeader.php'; ?>
<?php require '../Controllers/UsersControll.php'; ?>

<html>
    <head>
	    <script src="../JS/UsersValidate.js"></script>
		<link rel="stylesheet" href="../CSS/masterCSS.css">
	</head>
	<body>
	<div align="center">
	<fieldset class="field"> 
	<form action="" onsubmit="return validate()" method="post">
	<table>
		<tr>
		<td align ="center" colspan ="2"> <h2>Registrar Register </h2></td>
		</tr>
		<tr>
		    <input type = "hidden" name = "pid" value="<?php echo $_SESSION["loggeduserid"];?>"/>
			<td align="right"> Name: </td>
			<td><input type="text" id="name" name="name" placeholder="name" value="<?php echo $name;?>"></td>
			<td><span id="err_name"></span></td>
			<td><span ><?php echo $err_name;?></span></td>
		</tr>
		<tr>
			<td align="right"> Username: </td>
			<td><input type="text" id="uname" name="uname" placeholder="Username" value="<?php echo $uname;?>"></td>
			<td><span id="err_uname"></span></td>
			<td><span ><?php echo $err_uname;?></span></td>
		</tr>
		<tr>
			<td align="right"> Address: </td>
			<td><textarea id="addrs" name="addrs"><?php echo $addrs;?></textarea></td>
			<td><span id="err_addrs"></span></td>
			<td><span ><?php echo $err_addrs;?></span></td>
		</tr>
		
		<tr>
			<td align="right"> NID: </td>
			<td><input type="text" id="nid" name="natId" placeholder="NID number" value="<?php echo $nId;?>"></td>
			<td><span id="err_nid"></span></td>
			<td><span ><?php echo $err_nId;?></span></td>
		</tr>

		<tr>
			<td align="right"> Phone: </td>
			<td><input type="text" id="phone" name="phone" placeholder="+880" value="<?php echo $phone;?>"></td>
			<td><span id="err_phone"></span></td>
			<td><span><?php echo $err_phone;?></span></td>
		</tr>
		
		<tr>
			<td align="right">Password: </td>
			<td><input type="password" id="pass" name="pass" value="<?php echo $pass;?>"></td>
			<td><span id="err_pass"></span></td>
			<td><span ><?php echo $err_pass;?></span></td>
		</tr>
        
        <tr>
			<td align="right">Confirm Password: </td>
			<td><input type="password" id="cpass" name="cpass" value="<?php echo $cpass;?>"></td>
			<td><span id="err_cpass"></span></td>
			<td><span><?php echo $err_cpass;?></span></td>
		</tr>		
		
		<tr>
		<td align="center" colspan="2"><input type="Submit" name="addRegistrar" value="Register"></td>
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