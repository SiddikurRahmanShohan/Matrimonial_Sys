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
			<td align="center" colspan="2"><h2>Welcome <?php echo $_SESSION["username"];?> </h2></td>
		</tr>
		
		<tr> <td align="center" colspan="2">Search<input type="text"></td> </tr>
		
		<tr> <td align="center" colspan="2">Result</td> </tr>
		<tr> <td align="center" colspan="2"><input type="text"></td> </tr>

	</form>
	</table>
	</fieldset><br>
		<a href="candidateshome.php">Back</a> <br>
		<a href="login.php">Logout</a>
	</body>
</html>