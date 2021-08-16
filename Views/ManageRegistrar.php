
<?php
 session_start();
if(!isset($_SESSION["loggeduser"])){
	header("Location: Login.php");
}

?>
<?php include 'MainHeader.php'; ?>
<?php include 'AdminHeader.php'; ?>
<?php include '../Controllers/UsersControll.php'; ?>
<?php 
    if(isset($_COOKIE["regser"])){
		$registrars = searchReg($_COOKIE["regser"]);
	}
	else{
		$registrars = getRegistrars();
	}
     
 ?>
<html>
    <head>
	    <link rel="stylesheet" href="../CSS/masterCSS.css">
	</head>
	<boady>
	    <div align="center">
		    <h3>Registrar</h3>
			<a class="btn-orange" href = "AddRegistrar.php" >Add Registrar</a>
			<a  class="btn-blue" href="Candidatesregister.php">Lic. Approve</a>
			<h5><?php echo $err_db; ?></h5>
			<form action="" onsubmit="return validate()" method="post">
			<input type="text"  name="regS" placeholder="Search..." >
			<input class="btn-green" type="submit" name="regSer" value="search">
			<span id="err_regS"><?php echo $err_regS;?></span>
	        <div>
			    <p><?php if(isset($_COOKIE["regser"])) { echo "Previous Search: ".$_COOKIE["regser"]; }?></p>
	        </div>
			</form>
			<table id="tab">
			    <thead>
				    <th>SL#</th>
					<th>Name</th>
					<th>User Name</th>
					<th>NID</th>
					<th>Phone</th>
					<th>Address</th>
					<th>LIC.</th>
					<th>Message</th>
					<th>Action</th>
					
				</thead>
				<tboady>
				    <?php
                        $i = 1;
						foreach($registrars as $r){
							echo "<tr>";
							    echo "<td>$i</td>";
								echo "<td>".$r["name"]."</td>";
								echo "<td>".$r["uname"]."</td>";
								echo "<td>".$r["nid"]."</td>";
								echo "<td>".$r["phone"]."</td>";
								echo "<td>".$r["address"]."</td>";
								echo "<td>".$r["lic"]."</td>";
								echo '<td><a class="btn-orange" href = "Message.php?id='.$r["id"].'">Message</td>';
								echo '<td><a class="btn-green" href = "EditUser.php?id='.$r["id"].'">Edit/Delete</td>';
							echo "</tr>";
							$i++;
						}
					?>
				</tboady>
			</table>
		</div>
	</boady>
    <?php include 'Footer.php'; ?>
</html>