<?php
    session_start();
	require "../Models/DBConfig.php";

	$name="";
	$uname="";
	$address="";
	$gender="";
	$bg="";
	$nId="";
	$phone="";
	$email="";
	
	$userid = $_SESSION['userid'];
	$query = "select * from users where users.id='$userid' limit 1 ";
	$previousData = get($query);
	
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
	<head>
	<style>
	    body {background-color:rgb(242, 242, 242); margin:50px; padding-left:500px;}
        h2 {color:#812F33; }
		a{color:blue;}
		id{color:blue;}
		fieldset {background-color:#F3FEB0;  height:250px; width:400px; }
		</style>
	</head>
	<body>
	        
		<fieldset>
			<form action="" method="post">
		
				<table >

					<tr>
					<td align ="center" colspan ="2"> <h2>Welcome <?php echo $_SESSION["username"];?> To Dashboard</h2></td>
					</tr>
					<tr>
						<td align="right" style="color:#705E78"><u>Name: </u></td>
						<td><?=$previousData[0]['name']?></td>
						
					</tr>
					<tr>
						<td align="right" style="color:#705E78"><u>Username: </u></td>
						<td><?php echo $_SESSION["username"];?></td>
					</tr>
					<tr>
						<td align="right" style="color:#705E78"><u>Address: </u></td>
						<td><?=$previousData[0]['address']?></td>
						
					</tr>
					<tr>
						<td align="right" style="color:#705E78"><u>Gender: </u></td>
						<td><?=$previousData[0]['gender']?></td>
					</tr>
					<tr>
						<td align="right" style="color:#705E78"><u>Blood Group: </u></td>
						<td><?=$previousData[0]['bg']?> </td>
					</tr>
					<tr>
						<td align="right" style="color:#705E78"><u>Email: </u></td>
						<td><?=$previousData[0]['email']?></td>
					</tr>
					
			        <tr>
						<td align="right" style="color:#705E78"><u>NID: </u></td>
						<td><?=$previousData[0]['nid']?></td>
						
					</tr>
                    
					
					<tr>
					<td align="right" style="color:#705E78"><u>Phone: </u></td>
						<td><?=$previousData[0]['phone']?></td>
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