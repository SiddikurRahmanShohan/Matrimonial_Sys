<?php include 'MainHeader.php'; ?>
<?php include 'AdminHeader.php'; ?>
<?php include '../Controllers/UsersControll.php'; ?>
<?php $canditates = getCanditates(); ?>
<html>
    <head></head>
	<boady>
	    <div align="center">
		    <h3>Canditates</h3>
			<a href = "AddCanditate.php" >Add Canditate</a>
			<h5><?php echo $err_db; ?></h5>
			<table>
			    <thead>
				    <th>SL#</th>
					<th>Name</th>
					<th>User Name</th>
					<th>Gender</th>
					<th>DOB</th>
					<th>BG</th>
					<th>NID</th>
					<th>Father's Name</th>
					<th>Mothers's Name</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Marital Status</th>
					<th></th>
					<th></th>
					
				</thead>
				<tboady>
				    <?php
                        $i = 1;
						foreach($canditates as $c){
							echo "<tr>";
							    echo "<td>$i</td>";
								echo "<td>".$c["name"]."</td>";
								echo "<td>".$c["uname"]."</td>";
								echo "<td>".$c["gender"]."</td>";
								echo "<td>".$c["dob"]."</td>";
								echo "<td>".$c["bg"]."</td>";
								echo "<td>".$c["nid"]."</td>";
								echo "<td>".$s["fname"]."</td>";
								echo "<td>".$s["mname"]."</td>";
								echo "<td>".$s["phone"]."</td>";
								echo "<td>".$s["address"]."</td>";
								echo "<td>".$s["mstatus"]."</td>";
								echo '<td><a href = "EditCanditate.php?id='.$s["id"].'">Edit</td>';
								echo '<td><a href = "DeleteCanditate.php?id='.$s["id"].'">Delete</td>';
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