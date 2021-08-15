<?php
	session_start();
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
		<a href="login.php" style="border-style:double">Logout</a>
	</body>
</html>