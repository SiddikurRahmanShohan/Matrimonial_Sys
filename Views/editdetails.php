<?php
	session_start();
	require "../Models/DBConfig.php";
	
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$email="";
	$err_email="";
	$phone= "";
	$err_phone="";
	$address="";
	$err_address="";
	
	$empty_err="";
	
	$hasError=false;
	
	

	function numCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(is_numeric($pas[$i]))  {
                return true;
            }
        }
		return false;
	}
	function specialCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(($pas[$i]) == "#" or ($pas[$i])== "?")  {
                return true;
            }
        }
		return false;
	}
	
	

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
		}
		if(empty($_POST["username"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		else if(strlen($_POST["username"]) <=5){
			$err_uname="Username Must be greater than 5 character";
			$hasError = true;
		}
		
		else if(strpos($_POST["username"], " ") > 0){
			$err_uname="Username can not have space";
			$hasError = true;
		}
		
		else{
			$uname=htmlspecialchars($_POST["username"]);
		}
		if(empty($_POST["email"])){
			$err_email="Email Required";
			$hasError = true;
		}
		else if(strpos($_POST["email"], "@")> 0 and (strpos($_POST["email"], ".") > strpos($_POST["email"], "@"))){
			$email=htmlspecialchars($_POST["email"]);
		}
		
		else{
			$err_email="Email is not valid";
			$hasError = true;
		}
		
		if(empty($_POST["phone"])){
			$err_phone="Number Required";
			$hasError = true;
		}
		else if(!is_numeric($_POST["phone"])){
			$err_phone="Must be a number";
			$hasError = true;
		}
		else{
			$phone=htmlspecialchars($_POST["phone"]);
		}

		if(empty($_POST["address"])){
			$err_address="Address Required";
			$hasError = true;
		}
		else{
			$address=htmlspecialchars($_POST["address"]);
		}
		
		if(!$hasError){
			// echo $name."<br>";
			// echo $_POST["username"]."<br/>";
			// echo $_POST["email"]."<br/>";
			// echo $_POST["phone"]."<br/>";
			// echo $_POST["nid"]."<br/>";
			// echo $_POST["address"]."<br/>";

			$query = "UPDATE `users` SET `name` = 'soumiks', `uname` = 'kfdiua', `phone` = '214748364', `email` = 'wjenaf1@gmail.com', `address` = 'askfbiuaw' WHERE `users`.`id` = 8;"
		}
		
		
	}
?>
<html>
	<head></head>
	<body>
	    <h2>Welcome  <?php echo $_SESSION["username"];?> To Edit Details Page</h2>
		<fieldset>
			<form action="" method="post">
				<table >
					<tr>
						<td align="right">Name: </td>
						<td><input type="text" name="name" placeholder="name" value="<?php echo $name;?>"></td>
						<td><span><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td align="right">Username: </td>
						<td><input type="text" name="username" placeholder="username" value="<?php echo $uname;?>" ></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
					
					
					<tr>
						<td align="right">Phone: </td>
						<td><input type="text" name="phone" placeholder="phone" value="<?php echo $phone;?>"></td>
						<td><span><?php echo $err_phone;?></span></td>
					</tr>
					
					
					<tr>
						<td align="right">Email: </td>
						<td><input type="text" name="email" placeholder="username@gmail.com" value="<?php echo $email;?>"></td>
						<td><span><?php echo $err_email;?></span></td>
					</tr>
					
					<tr>
						<td align="right">Address: </td>
						<td><input type="text" name="address" placeholder="address" value="<?php echo $address;?>"></td>
						<td><span><?php echo $err_address;?></span></td>
					</tr>
					
					<tr>
						<td align="center" colspan="2"><input type="submit" value="Done"></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><span><?php echo $empty_err;?></span></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		<a href="candidatesdashboard.php">Back</a>
		
	</body>
</html>