<?php
 session_start();
if(!isset($_SESSION["loggeduser"])){
	header("Location: Login.php");
}

?>
<?php include 'MainHeader.php'; ?>
<?php include 'AdminHeader.php'; ?>
<?php include '../Controllers/UsersControll.php'; ?>
<?php $totusers = getTotal(); ?>
<?php $totMale = getTotMale(); ?>
<?php $totFemale = getTotFemale(); ?>
<?php $totReg = getTotReg(); ?>
<?php $totCandit = getTotCan(); ?>
<html>
    <head></head>
	<boady>
	    <div align="center">
		    <h3>Report</h3>
			<h5><?php echo $err_db; ?></h5>
			<table>
			    <thead>
				    <th>Total Users</th>
					<th>Total Male Users</th>
					<th>Total Female Users</th>
					<th>Total Registrar</th>
					<th>Total Canditates</th>
					
				</thead>
				<tboady>
				<tr>
				<td><?php echo $totusers["count(id)"]; ?></td>
				<td><?php echo $totMale["count(id)"]; ?></td>
				<td><?php echo $totFemale["count(id)"]; ?></td>
				<td><?php echo $totReg["count(id)"]; ?></td>
				<td><?php echo $totCandit["count(id)"]; ?></td>
				</tr>
				    
				</tboady>
			</table>
		</div>
	</boady>
    <?php include 'Footer.php'; ?>
</html>