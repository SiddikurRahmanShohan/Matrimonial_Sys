<?php
    session_start();

	$name="";
	$uname="";
	$address="";
	$gender="";
	$bg="";
	$nId="";
	$phone="";
	$email="";
	
	
	$empty_err="";
	
	$hasError=false;
	
	

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"]) and empty($_POST["username"]) and empty($_POST["email"]) and empty($_POST["phone"]) 
			and empty($_POST["address"]) and empty($_POST["nid"]) and !isset($_POST["gender"]) and !isset($_POST["bg"]))
		
		{
			$empty_err="Nothing is entered";
			$hasError = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
			$uname=htmlspecialchars($_POST["username"]);
			$email=htmlspecialchars($_POST["email"]);
			$phone=htmlspecialchars($_POST["phone"]);
			$nId=htmlspecialchars($_POST["nid"]);
			$gndr=htmlspecialchars($_POST["gender"]);
			$bG=htmlspecialchars($_POST["bg"]);
		}
	
		
		if(!$hasError){
			echo $name."<br>";
			echo $_POST["username"]."<br/>";
			echo $_POST["email"]."<br/>";
			echo $_POST["phone"]."<br/>";
			echo $_POST["nid"]."<br/>";
		}
		
		
	}
?>
<html>
	<head></head>
	<body>
		<fieldset>
			<form action="" method="post">
				<table >
					<tr>
					<td align ="center" colspan ="2"> <h2>Welcome <?php echo $_SESSION["username"];?> To Dashboard</h2></td>
					</tr>
					<tr>
						<td align="right">Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>"></td>
						
					</tr>
					<tr>
						<td align="right">Username: </td>
						<td><?php echo $_SESSION["username"];?></td>
					</tr>
					<tr>
						<td align="right">Address: </td>
						<td><input type="text" name="name" value="<?php echo $address;?>"></td>
						
					</tr>
					<tr>
						<td align="right">Gender: </td>
						<td><input type="text" name="gender" value="<?php echo $gender;?>"></td>
					</tr>
					<tr>
						<td align="right">Blood Group: </td>
						<td><input type="text" name="bg" value="<?php echo $bg;?>"></td>
					</tr>
					<tr>
						<td align="right">Email: </td>
						<td><input type="text" name="email" value="<?php echo $email;?>"></td>
					</tr>
					
			        <tr>
						<td align="right">NID: </td>
						<td><input type="text" name="nid" value="<?php echo $nId;?>"></td>
						
					</tr>
                    
					
					<tr>
						<td align="right">Phone: </td>
						<td><input type="text" name="phone" value="<?php echo $phone;?>"></td>
					</tr>
				
					<tr>
						<td align="center" colspan="2"><span><?php echo $empty_err;?></span></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		<a href="editdetails.php">Edit Details</a><br><br>
		<a href="Candidateshome.php">Back</a><br>
		<a href="login.php">Logout</a>
	</body>
</html>