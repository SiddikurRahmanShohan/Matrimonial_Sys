<?php include 'MainHeader.php'; ?>
<?php include 'AdminHeader.php'; ?>
<?php include '../Controllers/UsersControll.php'; ?>
<?php $registrars = getRegistrars(); ?>
<html>
    <head></head>
	<boady>
	    <div align="center">
		    <h3>Registrar</h3>
			<a href = "AddRegistrar.php" >Add Registrar</a>
			<h5><?php echo $err_db; ?></h5>
			<table>
			    <thead>
				    <th>SL#</th>
					<th>Name</th>
					<th>User Name</th>
					<th>NID</th>
					<th>Phone</th>
					<th>Address</th>
					<th>LIC.</th>
					<th></th>
					<th></th>
					
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
								echo '<td><a href = "EditRegistrar.php?id='.$r["id"].'">Edit</td>';
								echo '<td><a href = "DeleteRegistrar.php?id='.$r["id"].'">Delete</td>';
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