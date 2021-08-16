<?php
 session_start();
if(!isset($_SESSION["loggeduser"])){
	header("Location: Login.php");
}

?>
<?php include 'MainHeader.php'; ?>
<?php include 'AdminHeader.php'; ?>
<?php include '../Controllers/UsersControll.php'; ?>
<?php $requests = getRequests(); ?>
<html>
    <head></head>
	<boady>
	    <div align="center">
		    <h3>Licence Approval</h3>
			<h5><?php echo $err_db; ?></h5>
			<table id="tab">
			    <thead>
				    <th>SL#</th>
					<th>Name</th>
					<th>Phone</th>
					<th>NID</th>
					<th>Addrs</th>
					<th>Action</th>
					
				</thead>
				<tboady>
				<form action="" method="post">
				    <?php
                        $i = 1;
						foreach($requests as $r){
							echo "<tr>";
							    echo "<td>$i</td>";
								echo "<td>".getRegName($r["uid"])["name"]."</td>";
								echo "<td>".getRegPhone($r["uid"])["phone"]."</td>";
								echo "<td>".getRegNID($r["uid"])["nid"]."</td>";
								echo "<td>".getRegAddrs($r["uid"])["address"]."</td>";
								echo '<td><a class="btn-green" href = "LicSend.php?id='.$r["uid"].'">Assign Lic.</td>';
								
							echo "</tr>";
							$i++;
						}
					?>
					</form>
				</tboady>
			</table>
		</div>
	</boady>
    <?php include 'Footer.php'; ?>
</html>