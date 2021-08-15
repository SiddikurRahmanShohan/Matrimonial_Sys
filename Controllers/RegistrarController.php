<?php
	include '../Models/DBConfig.php';
	
	//validation varables
	$err_db="";
	if(isset($_POST["submit"])){
		//do validations
		//if no error
		$fileTypeb = strtolower(pathinfo(basename($_FILES["b_image"]["name"]),PATHINFO_EXTENSION));
		$fileb = "../storage/product_images/".uniqid().".$fileTypeb";
		move_uploaded_file($_FILES["b_image"]["tmp_name"],$fileb);
		
		$fileTypeg = strtolower(pathinfo(basename($_FILES["g_image"]["name"]),PATHINFO_EXTENSION));
		$fileg = "../storage/product_images/".uniqid().".$fileTypeg";
		move_uploaded_file($_FILES["g_image"]["tmp_name"],$fileg);
		
		$rs = insertRegister($_POST["bname"],$_POST["bnid"],$_POST["gname"],$_POST["gnid"],$fileb,$fileg);
		if($rs === true){
			header("Location: CongratulationsPage.php");
		}
		$err_db = $rs;
		
	}
	if(isset($_POST["submit_divorce"])){
		//do validations
		//if no error
		$fileTypeb = strtolower(pathinfo(basename($_FILES["b_image"]["name"]),PATHINFO_EXTENSION));
		$fileb = "../storage/product_images/".uniqid().".$fileTypeb";
		move_uploaded_file($_FILES["b_image"]["tmp_name"],$fileb);
		
		$fileTypeg = strtolower(pathinfo(basename($_FILES["g_image"]["name"]),PATHINFO_EXTENSION));
		$fileg = "../storage/product_images/".uniqid().".$fileTypeg";
		move_uploaded_file($_FILES["g_image"]["tmp_name"],$fileg);
		
		$rs = insertDivorceReq($_POST["bname"],$_POST["bnid"],$_POST["gname"],$_POST["gnid"],$fileb,$fileg);
		if($rs === true){
			header("Location: CongratulationsDivorcePage.php");
		}
		$err_db = $rs;
		
	}
	if(isset($_POST["bsubmit"])){
		$rb = getBride($_POST["bnid"]);
		if($rb === true){
			
		}
		$err_db = $rb;
	}
	if(isset($_POST["gsubmit"])){
		$rg = getGroom($_POST["gsearch"]);
		
		if($rg == true){
			session_start();
			    $_SESSION["loggeduser"] = $rg["uname"];
				$_SESSION["loggeduserid"] = $rg["id"];
		}
		$err_db = $rg;
	}
	
	function insertRegister($bname,$bnid,$gname,$gnid,$gsign,$bsign){
		$query = "insert into register values (NULL,'$bname',$bnid,$gname,$gnid,'$bsign','$gsign')";
		return execute($query);
	}
	function insertDivorceReq($bname,$bnid,$gname,$gnid,$gsign,$bsign){
		$query = "insert into divorce_req values (NULL,'$bname',$bnid,$gname,$gnid,'$bsign','$gsign')";
		return execute($query);
	}
	
	function getBride($bnid){
		$query = "select * from users where nid = $bnid";
		$rs = get($query);
		return $rs[0];
	}
		function getGroom($gnid){
		$query = "select * from users where nid = $gnid";
		$rs = get($query);
		return $rs[0];
	}
	
?>