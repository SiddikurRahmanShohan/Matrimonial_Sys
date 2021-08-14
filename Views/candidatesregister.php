<?php
 session_start();
if(!isset($_SESSION["loggeduserid"])){
	
}

?>
<?php include 'MainHeader.php'; ?>
<?php include '../Controllers/UsersControll.php'; ?>

<html>
    <head></head>
	<body>
	<div align="center">
	<fieldset> 
	<form action="" method="post">
	<table>
		<tr>
		<td align ="center" colspan ="2"> <h2>Candidates Register </h2></td>
		</tr>
		<tr>
		    <input type = "hidden" name = "pid" value="<?php echo $_SESSION["loggeduserid"];?>"/>
			<td align="right"> Name: </td>
			<td><input type="text" name="name" placeholder="name" value="<?php echo $name;?>"></td>
			<td><span><?php echo $err_name;?></span></td>
		</tr>
		<tr>
			<td align="right"> Username: </td>
			<td><input type="text" name="uname" placeholder="Username" value="<?php echo $uname;?>"></td>
			<td><span><?php echo $err_uname;?></span></td>
		</tr>
		<tr>
			<td align="right">Father's Name: </td>
			<td><input type="text" name="fname" placeholder="Father's Name" value="<?php echo $fname;?>"></td>
			<td><span><?php echo $err_fname;?></span></td>
		</tr>
		<tr>
			<td align="right">Mother's Name: </td>
			<td><input type="text" name="mname" placeholder="Mother's Name" value="<?php echo $mname;?>"></td>
			<td><span><?php echo $err_mname;?></span></td>
		</tr>
		<tr>
			<td align="right"> Address: </td>
			<td><textarea name="addrs"><?php echo $addrs;?></textarea></td>
			<td><span><?php echo $err_addrs;?></span></td>
		</tr>
		
		<tr>
			<td align="right">Gender: </td>
			<td>
				<input type="radio" name="gender" <?php if($gender=="male"){echo "checked";} ?> value="male">MALE 
				<input type="radio" name="gender" <?php if($gender=="female"){echo "checked";} ?> value="female">FEMALE 
			</td>
			<td><span><?php echo $err_gender;?></span></td>
		</tr>
		<tr>
			<td align="right"> Blood Group: </td>
			<td><input type="text" name="bg" placeholder="blood Group" value="<?php echo $bg;?>"></td>
			<td><span><?php echo $err_bg;?></span></td>
		</tr>
		<tr>
			<td align="right"> NID: </td>
			<td><input type="text" name="natId" placeholder="NID number" value="<?php echo $nId;?>"></td>
			<td><span><?php echo $err_nId;?></span></td>
		</tr>

	    <tr>
			<td align="right"> Birth Date: </td>
			<td><input type="date" name="dob" placeholder="dd-mm-yyyy" value="<?php echo $dob;?>"></td>
			<td><span><?php echo $err_dob;?></span></td>
		</tr>

		<tr>
			<td align="right"> Phone: </td>
			<td><input type="text" name="phone" placeholder="+880" value="<?php echo $phone;?>"></td>
			<td><span><?php echo $err_phone;?></span></td>
		</tr>
		<tr>
			<td align="right">Marital Status: </td>
			<td><input type="radio" value="Unmarried"  <?php if($mstat=="Unmarried"){echo "checked";} ?> name="mstat"> Unmarried <input name="mstat"  <?php if($mstat=="Married"){echo "checked";} ?>  value="Married" type="radio">Married </td>
            <td><span><?php echo $err_mstat;?></span></td>			
		</tr>
		
		<tr>
			<td align="right">Password: </td>
			<td><input type="password" name="pass" value="<?php echo $pass;?>"></td>
			<td><span><?php echo $err_pass;?></span></td>
		</tr>
        
        <tr>
			<td align="right">Confirm Password: </td>
			<td><input type="password" name="cpass" value="<?php echo $cpass;?>"></td>
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