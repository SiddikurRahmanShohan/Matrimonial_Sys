<?php
	session_start();

	require "../Models/DBConfig.php";
	/*
	$query ="Select * from users";
	$result=mysqli_query($connection, $query);
	while($row=mysqli_fetch_assoc($result))
	{
		echo $row["id"]."<br>";
		echo $row["username"]."<br>";
		echo $row["password"]."<br>";
	}
	*/
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	
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
		
		if(empty($_POST["username"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		else if(strlen($_POST["username"]) <=5){
			$err_uname="Username Must be greater than 6 character";
			$hasError = true;
		}
		
		else if(strpos($_POST["username"], " ") > 0){
			$err_uname="Username can not have space";
			$hasError = true;
		}
		else{
			$uname=htmlspecialchars($_POST["username"]);
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
		
		
		if(!$hasError){
			$name=$_POST["username"];
			$key=$_POST["password"];
			$query="select * from users where uname='$name' and pass='$key'";
			$result=get($query);
			if(sizeof($result)==1)
			{
				echo "User Found"."<br>";
				$_SESSION['username']=$result[0]["uname"];
				$_SESSION['userid']=$result[0]["id"];
				header('Location: candidateshome.php');
				die();
			}
			else
			{
				
				echo "User Not Found";
			}
			
		}
	}
?>
<html>
	<body>
	<fieldset>
	<form action="" method="post">
	<table>
		<tr>
			<td align="center" colspan="2"><h2>Login</h2></td> 
			<td align="right" colspan="2"><a href="Adminlogin.php">Login as Admin</a> </td>
		</tr>
		<tr>
			<td align="right">Username: </td>
			<td><input type="text" name="username" value="<?php echo $uname;?>" ></td>
			<td><span><?php echo $err_uname;?></span></td>
			
		</tr>
		<tr>
			<td align="left">Password: </td>
			<td><input type="password" name="password" value="<?php echo $pass;?>"></td>
			<td><span><?php echo $err_pass;?></span></td>
					</tr>		
		<tr>
			<td align="center" colspan="2"><input type="submit" value="Login"></td>
		</tr>
		
		<tr>
		<td align ="left" colspan ="2"><a href="Candidatesregister.php">Register as Candidates</a></td>
		<td align ="right" colspan ="2"><a href="AddRegistrarPage.php">Register as Registrar</a></td>
		</tr>
		
	</form>
	</table>
	</fieldset>
	</body>
</html>