<?php
require_once "RegistrarController.php";
$bridename="";
$brideid="";
$bridenid="";
$groomname="";
$groomid="";
$groomnid="";
$hasError=false;
	
	
	
	
	
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["bridenid"]) and empty($_POST["groomnid"]))
		
		{
			$empty_err="Nothing is entered";
			$hasError = true;
		}
		else{
			$bridenid=htmlspecialchars($_POST["bsearch"]);
			$groomnid=htmlspecialchars($_POST["gsearch"]);
			
		}
	
		
		if(!$hasError){
			echo $name."<br>";
			echo $_POST["bsearch"]."<br/>";
			echo $_POST["gsearch"]."<br/>";
			
		}
		
		
	}



?>



<html>
	
	<body>
	            <h2 align="center">  Marrage Registration  </h2>    
		<fieldset>
		  
			<form action="" method="post">
			
			
			  
			   <br>
				<table align="left">
					
					<tr>
					<td align="left"><h3>Groom</h3></td>
					</tr>
					
					<tr>
						<td align = "right"><b>Groom NID</b></td>
					
						<td><input type="search" placeholder="Groom Search" name="gsearch"></td>
					     <td><input type="submit" value="search Groom"></td>
						
						
					</tr>
					
					<tr>
						<td align = "right"><b>Groom Name</b></td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td align = "right"><b>Groom ID</b></td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td align = "right"><b>Groom NID</b></td>
						<td><input type="text"></td>
					</tr>
			   <tr> 
			   <td>
			<div class="form-group">
			<h4 class="text">Groom Sign</h4> 
			<input type="file" name="p_image" class="form-control">
			</div>
			</td>
			</tr>
			</table>
				
				
			
				
				<table align="right">
				
					<tr>
					<td align="right"><h3>Bride</h3></td>
					</tr>
					 
					 <tr>
						<td align = "right"><b>Bride NID</b></td>
					
						<td><input type="search" placeholder="Bride Search" name="bsearch"></td>
					     <td><input type="submit" value="search Bride"></td>
						
						
					</tr>
					 
					 
					 <tr>
						<td align = "right"><b>Bride NID</b></td>
						
						<td><input type="search" placeholder="Bride Search" name="bsearch" ></td>
					
						
					</tr>
					<tr>
						<td align = "right"><b>Bride Name</b></td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td align = "right"><b>Bride ID</b></td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td align = "right"><b>Bride NID</b></td>
						<td><input type="text"></td>
					</tr>
					
					
					
				
				 <tr> 
			   <td>
			<div class="form-group">
			<h4 class="text">Bride Sign</h4> 
			<input type="file" name="p_image" class="form-control">
			</div>
			</td>
			</tr>
			
				 </table>
				 
		    
				<table align="center">
					
					
						<td align = "right"><b>Date</b></td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" value="submit"></td>
						
					</tr>
					
					
					
					
					
					
				</table>
				
				
			</form>
			
		</fieldset>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<br><br><br><br><br>
		<a href="CongratulationsPage.php">nextpage</a><br>
		<a href="RegistrarHomePage.php">Back</a>
	
	</body>
</html>




























