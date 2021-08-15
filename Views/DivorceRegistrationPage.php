<?php
include '../Controllers/RegistrarController.php';
//$bride= getBride();
//$groom= getGroom();
$bname="";
$bid="";
$bnid="";
$gname="";
$gid="";
$gnid="";
$hasError=false;
	
	
	
	
	
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["bridenid"]) and empty($_POST["groomnid"]))
		
		{
			$empty_err="Nothing is entered";
			$hasError = true;
		}
		else{
			$bnid=htmlspecialchars($_POST["bsearch"]);
			$gnid=htmlspecialchars($_POST["gsearch"]);
			
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
	            <h2 align="center">  Divorce Registration  </h2>    
		<fieldset>
		  
			<form action="" method="post" enctype="multipart/form-data">
			
			
			  
			   <br>
				<table align="left">
					
					<tr>
					<td align="left"><h3>Groom</h3></td>
					</tr>
					
					<tr>
						<td align = "right"><b>Groom NID</b></td>
					
						<td><input type="text" placeholder="Groom Search" value="gs" name="gsearch"></td>
					     <td><input type="submit" value="search Groom" name="gsubmit"></td>
						
						
					</tr>
					
					<thead>
			<th>Groom Name</th>
			
			<th> Groom NID</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
		
			<?php
				
				
					echo "<tr>";
						
						
						echo "<td>".$groom["gname"]."</td>";
						echo "<td>".$groom["gnid"]."</td>";
						
						
					echo "</tr>";
					
				
			?>
		</tbody>
			   <tr> 
			   <td>
			<div class="form-group">
			<h4 class="text">Groom Sign</h4> 
			<input type="file" name="gsign" class="form-control">
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
					
						<td><input type="search" placeholder="Bride Search" value="bs"name="bsearch"></td>
					     <td><input type="submit" value="search Bride"></td>
						
						
					</tr>
					 
					 
					 <thead>
			<th>Bride Name</th>
			
			<th> Bride NID</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
		
			<?php
				
				
					echo "<tr>";
						
						
						echo "<td>".$bride["bname"]."</td>";
						echo "<td>".$bride["bnid"]."</td>";
						
						
					echo "</tr>";
					
				
			?>
		</tbody>
					
					
					
				
				 <tr> 
			   <td>
			<div class="form-group">
			<h4 class="text">Bride Sign</h4> 
			<input type="file" name="bsign" class="form-control">
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

































