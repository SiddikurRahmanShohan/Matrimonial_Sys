<?php
	session_start();
	require "../Models/DBConfig.php";

	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$fname="";
	$err_fname="";
	$mname="";
	$err_mname="";
	$gender="";
	$err_gender="";
	$age="";
	$err_age="";
	$bg="";
	$err_bg="";
	$nid="";
	$err_nid="";
	$dob="";
	$err_dob="";
	$phone="";
	$err_phone="";
	$email="";
	$err_email="";
	$address="";
	$err_address="";
	$passport="";
	$err_passport="";
	$nationality="";
	$err_nationality="";
	$pass="";
	$err_pass="";
	$mstatus="";
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
            if(($pas[$i]) == "#" or ($pas[$i])== "*")  {
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
		
	if(empty($_POST["gender"]))
	{
		$err_gender = "Gender is Required";
		$hasError = true;
	}
	else
	{
		$gender = htmlspecialchars($_POST["gender"]);
	}

	if(empty($_POST["name"])){
		$err_name="Name Required*";
		$hasError = true;
	}
	else{
		$name=htmlspecialchars($_POST["name"]);
	}


	if(empty($_POST["username"])){
		$err_uname="Username Required*";
		$hasError = true;
	}
	else if(strlen($_POST["username"]) <=5){
		$err_uname="Username Must be greater than 5 character*";
		$hasError = true;
	}	
	else if(strpos($_POST["username"], " ") > 0){
		$err_uname="Username can not have space*";
		$hasError = true;
	}
	else{
		$uname=htmlspecialchars($_POST["username"]);
	}	
	

	if(empty($_POST["fathername"])){
		$err_fname="Father's name required*";
		$hasError = true;
	}
	else{
		$fname=htmlspecialchars($_POST["fathername"]);
	}
	

	if(empty($_POST["mothername"])){
		$err_mname=" Mother's name required*";
		$hasError = true;
	}
	else{
		$mname=htmlspecialchars($_POST["mothername"]);
	}


	if(empty($_POST["address"])){
		$err_address="Address required*";
		$hasError = true;
	}
	else{
		$address = htmlspecialchars($_POST["address"]);
	}


	if(empty($_POST["passport"])){
		$err_passport="Passport required*";
		$hasError = true;
	}
	else{
		$passport = htmlspecialchars($_POST["passport"]);
	}
	

	if(empty($_POST["gender"])){
		$err_gender="Gender Required*";
		$hasError = true;
	}
	else{
		$gender = htmlspecialchars($_POST["gender"]);
	}

	
	if(empty($_POST["age"])){
		$err_age="Age Required*";
		$hasError = true;
	}
	else{
		$age=htmlspecialchars($_POST["age"]);
	}
	

	if(empty($_POST["bloodgroup"])){
		$err_bg="Blood group Required*";
		$hasError = true;
	}
	else{
		$bg=htmlspecialchars($_POST["bloodgroup"]);
	}
	

	if(empty($_POST["nationality"])){
		$err_nationality="Nationality Required*";
		$hasError = true;
	}
	else{
		$nationality=htmlspecialchars($_POST["nationality"]);
	}
	

	if(empty($_POST["nid"])){
		$err_nid="NID Required*";
		$hasError = true;
	}
	else{
		$nid=htmlspecialchars($_POST["nid"]);
	}


	if(empty($_POST["dob"])){
		$err_dob="Birthdate Required*";
		$hasError = true;
	}
	else{
		$dob=htmlspecialchars($_POST["dob"]);
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
		$err_phone="Number Required*";
		$hasError = true;
	}
	else if(!is_numeric($_POST["phone"])){
		$err_phone="Must be a number*";
		$hasError = true;
	}
	else{
		$phone=htmlspecialchars($_POST["phone"]);
	}
	

	if(empty($_POST["password"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else if(strlen($_POST["password"]) <=5){
			$err_pass="Password must be atleast 6 charecter";
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
		
		
		$mstatus = $_POST['mstatus'];
	
	
	if(!$hasError){
		// echo $name."<br>";
		// echo $_POST["username"]."<br/>";
		// echo $_POST["fname"]."<br/>";
		// echo $_POST["mname"]."<br/>";
		// echo $_POST["email"]."<br/>";
		// echo $_POST["phone"]."<br/>";
		// echo $_POST["nid"]."<br/>";
		// echo $_POST["gender"]."<br/>";
		// echo $_POST["bg"]."<br/>";
		// echo $_POST["age"]."<br/>";
		// echo $_POST["dob"]."<br/>";
		// echo $_POST["nationality"]."<br/>";
		// echo $_POST["passport"]."<br/>";


		$query = "INSERT INTO `users` (`id`, `name`, `uname`, `fname`, `mname`, `gender`, `nid`, `phone`, `email`, `address`, `dob`, `bg`, `mstatus`, `pass`) VALUES (NULL, '$name', '$uname', '$fname', '$mname', '$gender', '$nid', '$phone', '$email', '$address', '$dob', '$bg', '$mstatus', '$pass')";
		execute($query);
	}	
	}	

?>

<html>
    <head>
	<style>
	    body {background-color:rgb(242, 242, 242); margin:50px; padding-left:500px;}
        h2 {color:#812F33; }
		a{color:blue;}
		id{color:blue;}
		fieldset {background-color:#F3FEB0;  height:auto; width:400px; }
		</style>
	</head>
	<body>
	<fieldset> 
	<form action="" method="post">
	<table>
		<tr>
		<td align ="center" colspan ="2"> <h2>Candidates Register </h2></td>
		</tr>
		<tr>
			<td align="right"> Name: </td>
			<td><input type="text" name="name" placeholder="name" value="<?php echo $name;?>"></td>
			<td><span><?php echo $err_name;?></span></td>
		</tr>
		<tr>
			<td align="right"> Username: </td>
			<td><input type="text" name="username" placeholder="Username" value="<?php echo $uname;?>"></td>
			<td><span><?php echo $err_uname;?></span></td>
		</tr>
		<tr>
			<td align="right">Father's Name: </td>
			<td><input type="text" name="fathername" placeholder="Father's Name" value="<?php echo $fname;?>"></td>
			<td><span><?php echo $err_fname;?></span></td>
		</tr>
		<tr>
			<td align="right">Mother's Name: </td>
			<td><input type="text" name="mothername" placeholder="Mother's Name" value="<?php echo $mname;?>"></td>
			<td><span><?php echo $err_mname;?></span></td>
		</tr>
		<tr>
			<td align="right"> Address: </td>
			<td><textarea name="address"><?php echo $address;?></textarea></td>
			<td><span><?php echo $err_address;?></span></td>
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
			<td align="right"> Age: </td>
			<td><input type="text" name="age" placeholder="Age" value="<?php echo $age;?>"></td>
			<td><span><?php echo $err_age;?></span></td>
		</tr>
		<tr>
			<td align="right">Nationality: </td>
			<td><input type="text" name="nationality" placeholder="nationality" value="<?php echo $nationality;?>"></td>
			<td><span><?php echo $err_nationality;?></span></td>
		</tr>
		<tr>
			<td align="right"> Blood Group: </td>
			<td><input type="text" name="bloodgroup" placeholder="blood Group" value="<?php echo $bg;?>"></td>
			<td><span><?php echo $err_bg;?></span></td>
		</tr>
		<tr>
			<td align="right"> NID: </td>
			<td><input type="text" name="nid" placeholder="NID number" value="<?php echo $nid;?>"></td>
			<td><span><?php echo $err_nid;?></span></td>
		</tr>
		<tr>
			<td align="right"> Passport: </td>
			<td><input type="text" name="passport" placeholder="Passport" value="<?php echo $passport;?>"></td>
			<td><span><?php echo $err_passport;?></span></td>
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
			<td align="right">Email: </td>
			<td><input type="text" name="email" placeholder="username@gmail.com" value="<?php echo $email;?>"></td>
			<td><span><?php echo $err_email;?></span></td>
		</tr>
		<tr>
			<td align="right">Marital Status: </td>
			<td><input type="radio" value="Unmarried"  <?php if($mstatus=="Unmarried"){echo "checked";} ?> name="mstatus"> Unmarried <input name="mstatus"  <?php if($mstatus=="Married"){echo "checked";} ?>  value="Married" type="radio">Married </td>			
		</tr>
		
		<tr>
			<td align="right">Password: </td>
			<td><input type="text" name="password" value="<?php echo $pass;?>"></td>
			<td><span><?php echo $err_pass;?></span></td>
		</tr>	
		
		<tr>
		<td align="center" colspan="2"><input type="Submit" value="Register"></td>
		</tr>
		<tr>
		<td align="center" colspan="2"><span><?php echo $empty_err;?></span></td>
		</tr>
		</table>
	</form>
	</fieldset>
	<a href="login.php">Back</a> <br>
	<a href="login.php">Logout</a>
	</body>
</html>