<?php
	session_start();
?>
<html>
	<body>
	<fieldset>
	<form action="" method="post">
	<table>
		<tr>
			<td align="right" colspan="2"><h2> Welcome <?php echo $_SESSION["username"];?> To Homepage</h2></td>
		</tr>
		
		<tr><td align ="left" colspan ="2"><a href="Candidatesdashboard.php">Dashboard</a> </td></tr> 

		<tr> <td align= "left" colspan="2"><a href="search.php">Search</a> </td> </tr>
		
		<tr> <td align= "left" colspan="2"><a href="divorce.php">Divorce Request</a> </td> </tr>
		
		<tr> <td align= "left" colspan="2"><a href="applycertificate.php">Apply Marriage Certificate</a> </td> </tr>
		
		<tr> <td align= "left" colspan="2"><a href="downloadcertificate.php">Download Cirtificate</a> </td> </tr>

		<tr> <td align= "left" colspan="2" ><a href="login.php">Candidates Register</a></td> </tr>
		
	</form>
	</table>
	</fieldset><br>
		<a href="login.php">Logout</a>
	</body>
</html>