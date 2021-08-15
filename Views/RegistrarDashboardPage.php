<?php
	$name="";
	$uname="";
	$nId= "";
	$lnumber="";
	$email="";
	$phone= "";
	$office="";
	$addrs="";
	$empty_err="";
	
	
	$hasError=false;
	
	

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])and empty($_POST["username"]) and empty($_POST["nid"])and empty($_POST["lnumber"])and empty($_POST["phone"])  and empty($_POST["email"]) and empty($_POST["office"]) 
			and empty($_POST["address"]) and empty($_POST["nid"]) )
		
		{
			$empty_err="Nothing is entered";
			$hasError = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
			$uname=htmlspecialchars($_POST["username"]);
			$nid=htmlspecialchars($_POST["nid"]);
			$lnumber=htmlspecialchars($_POST["lnumber"]);
			$number=htmlspecialchars($_POST["phone"]);
			$email=htmlspecialchars($_POST["email"]);
			$office=htmlspecialchars($_POST["office"]);
			$address=htmlspecialchars($_POST["address"]);
			
			
			
		
			
		}
	
		
		if(!$hasError){
			echo $_POST["name"]."<br>";
			echo $_POST["usename"]."<br/>";
			echo $_POST["nid"]."<br/>";
			echo $_POST["lnumber"]."<br/>";
			echo $_POST["number"]."<br/>";
			echo $_POST["email"]."<br/>";
			echo $_POST["office"]."<br/>";
			echo $_POST["address"]."<br/>";
			
			
		}
		
		
	}
?>





<html>
	<head></head>
	<body>
	    <h3>My Profile</h3>
		<fieldset>
			<form action="" method="post">
				<table align="center">
					<tr>
						<td align="right">Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>"></td>
						
					</tr>
					<tr>
						<td align="right">Username: </td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" ></td>
					</tr>
					
			        <tr>
						<td align="right">NID: </td>
						<td><input type="text" name="nid" value="<?php echo $nId;?>"></td>
						
					</tr>
					<tr>
						<td>License Number: </td>
						<td><input type="text" name="lnumber" placeholder="License Number"  value="<?php echo $lnumber;?>"></td>
						
					</tr>
                    
					
					<tr>
						<td>Contact Number: </td>
						<td><input type="text" name="number" placeholder="Contact Number" value="<?php echo $phone;?>"></td>
					</tr>
					
					
					<tr>
						<td>Email: </td>
						<td><input type="text" name="email" placeholder="Email" value="<?php echo $email;?>"></td>
					</tr>
					
					<tr>
						<td>Office: </td>
						<td><input type="text" name="office" placeholder="Office" value="<?php echo $office;?>"></td>
					</tr>
					<tr>
						<td>Address: </td>
						<td><input type="text" name="address" placeholder="Address" value="<?php echo $addrss;?>"></td>
					</tr>
					
					
					
					<tr>
						<td align="center"><a href="EditRegistrar.php">Edit</a></td>
						<td align="center"><a href="EditPassword.php">Change Password</a></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><span><?php echo $empty_err;?></span></td>
					</tr>
					
					</table>
			</form>
		</fieldset>
		<a href="RegistrarHomePage.php">Back</a>
	</body>
</html>