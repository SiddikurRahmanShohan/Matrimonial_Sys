
<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$email="";
	$err_email="";
	$cPass="";
	$err_cPass="";
	$phone= "";
	$err_phone="";
	$fax= "";
	$err_fax="";
	$sId= "";
	$err_sId="";
	$nId= "";
	$err_nId="";
	$addrs="";
	$err_address="";
	
	
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
	function lowerCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(ctype_lower($pas[$i]))  {
                return true;
            }
        }
		return false;
	}
	function upperCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(ctype_upper($pas[$i]))  {
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
		else if(strpos($_POST["email"], "@")> 0 and (strrpos($_POST["email"], ".") > strpos($_POST["email"], "@"))){
			$email=htmlspecialchars($_POST["email"]);
		}
		
		else{
			$err_email="Email is not valid";
			$hasError = true;
		}
		if(empty($_POST["password"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else if(strlen($_POST["password"]) <=7){
			$err_pass="Password must be atleast 8 charecter";
			$hasError = true;
		}
		else if(!specialCharCheck($_POST["password"])){
			$err_pass="Password must have special charecter";
			$hasError = true;
		}
		else if(!numCharCheck($_POST["password"])){
			$err_pass="Password must have a number";
			$hasError = true;
		}
	    else if(!(lowerCharCheck($_POST["password"]) and upperCharCheck($_POST["password"]))){
			$err_pass="Password must be a combination of Upper and Lower case";
			$hasError = true;
		}
		
		else{
			$pass=htmlspecialchars($_POST["password"]);
		}
		
		if(empty($_POST["phone"])){
			$err_phone="phone Required";
			$hasError = true;
		}
		else if(!is_numeric($_POST["phone"])){
			$err_phone="phone Must be a number";
			$hasError = true;
		}
		
		else{
			$phone=htmlspecialchars($_POST["phone"]);
		}
		
		if(empty($_POST["sid"])){
			$err_sId="Service Id Required";
			$hasError = true;
		}
		else if(!is_numeric($_POST["sid"])){
			$err_sId="must be a number";
			$hasError = true;
		}
		
		else{
			$sId=htmlspecialchars($_POST["sid"]);
		}
		
		if(empty($_POST["cPass"])){
			$err_cPass="Confirm Password Required";
			$hasError = true;
		}
		else if($_POST["cPass"] != $_POST["password"]){
			$err_cPass="Password doesen't match!";
			$hasError = true;
		}
		
		else{
			$cPass=htmlspecialchars($_POST["cPass"]);
		}
		
		if(empty($_POST["address"])){
			$err_address="Address Required";
			$hasError = true;
		}
		
		else{
			$addrs=htmlspecialchars($_POST["address"]);
		}
		
		if(empty($_POST["nid"])){
			$err_nId="nid Required";
			$hasError = true;
		}
		else if(!is_numeric($_POST["nid"])){
			$err_nId="must be a number";
			$hasError = true;
		}
		
		else{
			$nId=htmlspecialchars($_POST["nid"]);
		}
		if(empty($_POST["fax"])){
			$err_fax="fax Required";
			$hasError = true;
		}
		
		else{
			$fax=htmlspecialchars($_POST["nid"]);
		}
	
		
		if(!$hasError){
			echo $name."<br>";
			echo $_POST["username"]."<br/>";
			echo $_POST["email"]."<br/>";
			echo $_POST["phone"]."<br/>";
			echo $_POST["address"]."<br/>";
			echo $_POST["nid"]."<br/>";
			echo $_POST["password"]."<br/>";
		}
		
		
	}
?>
<html>
	<head></head>
	<body>
	    <h3>Add Registrar</h3>
		<fieldset>
			<form action="" method="post">
				<table >
					<tr>
						<td align="right">Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>"></td>
						<td><span><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td align="right">Username: </td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" ></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
					
			        <tr>
						<td align="right">NID: </td>
						<td><input type="text" name="nid" value="<?php echo $nId;?>"></td>
						<td><span><?php echo $err_nId;?></span></td>
						
					</tr>
					
					 <tr>
						<td align="right">Service Id: </td>
						<td><input type="text" name="sid" value="<?php echo $sId;?>"></td>
						<td><span><?php echo $err_sId;?></span></td>
						
					</tr>
					
					<tr>
						<td align="right">Phone: </td>
						<td><input type="text" name="phone" placeholder="phone" value="<?php echo $phone;?>"></td>
						<td><span><?php echo $err_phone;?></span></td>
					</tr>
					
					<tr>
						<td align="right">Fax: </td>
						<td><input type="text" name="fax" value="<?php echo $fax;?>"></td>
						<td><span><?php echo $err_fax;?></span></td>
					</tr>
					
					<tr>
						<td align="right">Email: </td>
						<td><input type="text" name="email" value="<?php echo $email;?>"></td>
						<td><span><?php echo $err_email;?></span></td>
					</tr>
					
					<tr>
						<td align="right">Office Address: </td>
						<td><input type="text" name="address" placeholder="Address" value="<?php echo $addrs;?>"></td>
						<td><span><?php echo $err_address;?></span></td>
					</tr>
					
					
					<tr>
						<td align="right">Password: </td>
						<td><input type="password" name="password" value="<?php echo $pass;?>"></td>
						<td><span><?php echo $err_pass;?></span></td>
					</tr>
					
					<tr>
						<td align="right">Confirm Password: </td>
						<td><input type="password" name="cPass" value="<?php echo $cPass;?>"></td>
						<td><span><?php echo $err_cPass;?></span></td>
					</tr>
					
					
					<tr>
						<td align="center" colspan="2"><input type="submit" value="Add"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		<a href="AdminHomePage.php">Back</a>
	</body>
</html>

   