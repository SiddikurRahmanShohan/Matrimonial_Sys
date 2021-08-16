<?php
	 include '../Controllers/UsersControll.php';
	$key = $_GET["key"];
	$canditates = search($key);
	
	if(count($canditates) > 0){
		foreach($canditates as $c){
			echo "<a href='EditUser.php?id=".$c["id"]."'>".$c["name"]."</a><br>";
		}
	}
?>