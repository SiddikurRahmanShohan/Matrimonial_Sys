<?php
	$name="";
	$uname="";
	$nid= "";
	$lnumber="";
	$email="";
	$number= "";
	$office="";
	$address="";
	$empty_err="";
	
	
	$hasError=false;
	
	

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])and empty($_POST["uname"]) and empty($_POST["nid"])and empty($_POST["lnumber"])and empty($_POST["number"])  and empty($_POST["email"]) and empty($_POST["office"]) 
			and empty($_POST["address"]) and empty($_POST["nid"]) )
		
		{
			$empty_err="Nothing is entered";
			$hasError = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
			$uname=htmlspecialchars($_POST["uname"]);
			$nid=htmlspecialchars($_POST["nid"]);
			$lnumber=htmlspecialchars($_POST["lnumber"]);
			$number=htmlspecialchars($_POST["number"]);
			$email=htmlspecialchars($_POST["email"]);
			$office=htmlspecialchars($_POST["office"]);
			$address=htmlspecialchars($_POST["address"]);
			
			
			
		
			
		}
	
		
		if(!$hasError){
			echo $_POST["name"]."<br>";
			echo $_POST["uname"]."<br/>";
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
						<td>Name: </td>
						<td><input type="text" name="name" placeholder="Name" value="<?php echo $name;?>"></td>
						
					</tr>
					<tr>
						<td>User Name: </td>
						<td><input type="text" name="uname" placeholder="User Name"  value="<?php echo $uname;?>" ></td>
					</tr>
					
			        <tr>
						<td>NID: </td>
						<td><input type="text" name="nid" placeholder="NID"  value="<?php echo $nid;?>"></td>
						
					</tr>
					<tr>
						<td>License Number: </td>
						<td><input type="text" name="lnumber" placeholder="License Number"  value="<?php echo $lnumber;?>"></td>
						
					</tr>
                    
					
					<tr>
						<td>Contact Number: </td>
						<td><input type="text" name="number" placeholder="Contact Number" value="<?php echo $number;?>"></td>
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
						<td><input type="text" name="address" placeholder="Address" value="<?php echo $address;?>"></td>
					</tr>
					
					
					
					<tr>
						<td><a href="EditMyProfile.php">Edit Profile</a></td>
						
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