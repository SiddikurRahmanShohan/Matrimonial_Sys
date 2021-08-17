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
		<td align ="center" colspan ="2"> <h2>Candidates Register </h2></td>
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
			<td align="right">Father's Name: </td>
			<td><input type="text" id="fname" name="fname" placeholder="Father's Name" value="<?php echo $fname;?>"></td>
			<td><span id="err_fname"></span></td>
			<td><span ><?php echo $err_fname;?></span></td>
		</tr>
		<tr>
			<td align="right">Mother's Name: </td>
			<td><input type="text" id="mname" name="mname" placeholder="Mother's Name" value="<?php echo $mname;?>"></td>
			<td><span id="err_mname"></span></td>
			<td><span><?php echo $err_mname;?></span></td>
		</tr>
		<tr>
			<td align="right"> Address: </td>
			<td><textarea id="addrs" name="addrs"><?php echo $addrs;?></textarea></td>
			<td><span id="err_addrs"></span></td>
			<td><span ><?php echo $err_addrs;?></span></td>
		</tr>
		
		<tr>
			<td align="right">Gender: </td>
			<td>
				<input type="radio" id="male" name="gender" <?php if($gender=="male"){echo "checked";} ?> value="male">MALE 
				<input type="radio" id="female" name="gender" <?php if($gender=="female"){echo "checked";} ?> value="female">FEMALE 
			</td>
			<td><span></span></td>
			<td><span id="err_gender"><?php echo $err_gender;?></span></td>
		</tr>
		<tr>
			<td align="right"> Blood Group: </td>
			<td><input type="text" id="bg" name="bg" placeholder="blood Group" value="<?php echo $bg;?>"></td>
			<td><span id="err_bg"></span></td>
			<td><span><?php echo $err_bg;?></span></td>
		</tr>
		<tr>
			<td align="right"> NID: </td>
			<td><input type="text" id="nid" name="natId" placeholder="NID number" value="<?php echo $nId;?>"></td>
			<td><span id="err_nid"></span></td>
			<td><span ><?php echo $err_nId;?></span></td>
		</tr>

	    <tr>
			<td align="right"> Birth Date: </td>
			<td><input type="date" id="dob" name="dob" placeholder="dd-mm-yyyy" value="<?php echo $dob;?>"></td>
			<td><span id="err_dob"></span></td>
			<td><span ><?php echo $err_dob;?></span></td>
		</tr>

		<tr>
			<td align="right"> Phone: </td>
			<td><input type="text" id="phone" name="phone" placeholder="+880" value="<?php echo $phone;?>"></td>
			<td><span id="err_phone"></span></td>
			<td><span><?php echo $err_phone;?></span></td>
		</tr>
		<tr>
			<td align="right">Marital Status: </td>
			<td><input type="radio" id="unmarried" value="Unmarried"  <?php if($mstat=="Unmarried"){echo "checked";} ?> name="mstat"> Unmarried <input name="mstat" id="married" <?php if($mstat=="Married"){echo "checked";} ?>  value="Married" type="radio">Married </td>
            <td><span id="err_mstat"></span></td>
            <td><span ><?php echo $err_mstat;?></span></td>			
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
		<td align="center" colspan="2"><input type="Submit" name="addCanditate" value="Register"></td>
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