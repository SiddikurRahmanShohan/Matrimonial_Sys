<?php
 session_start();
if(!isset($_SESSION["loggeduser"])){
	header("Location: Login.php");
}

?>
<?php include 'MainHeader.php'; ?>
<?php include 'AdminHeader.php'; ?>
<?php include '../Controllers/UsersControll.php'; ?>
<?php $feedbacks = getFeedbacks(); ?>
<html>
    <head></head>
	<boady>
	    <div align="center">
		    <h3>Feedbacks</h3>
			<h5><?php echo $err_db; ?></h5>
			<table id="tab">
			    <thead>
				    <th>SL#</th>
					<th>Feedback</th>
					<th>User Name</th>
					<th>Phone</th>
					
				</thead>
				<tboady>
				    <?php
                        $i = 1;
						foreach($feedbacks as $f){
							echo "<tr>";
							    echo "<td>$i</td>";
								echo "<td>".$f["feedback"]."</td>";
								echo "<td>".getUserName($f["uid"])["uname"]."</td>";
								echo "<td>".getUserPhone($f["uid"])["phone"]."</td>";
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