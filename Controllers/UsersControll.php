<?php
    include '../Models/DBConfig.php';
    $name="";
    $err_name="";
    $dob="";
    $err_dob="";
	$uname="";
    $err_uname="";
    $fname="";
    $err_fname="";
	$mname="";
    $err_mname="";
	$gender="";
    $err_gender="";
	$nid="";
    $err_nid="";
	$phone="";
    $err_phone="";
	$addrs="";
    $err_addrs="";
	$bg="";
    $err_bg="";
	$mstat="";
    $err_mstat="";
	$pass="";
    $err_pass="";
	$hasError = false;

    if(isset($_POST["addCanditate"])){
		if(empty($_POST["name"])){
		    $err_name = "Name Requird";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }
		if(empty($_POST["dob"])){
		    $err_dob = "DOB Requird";
			$hasError = true;
	    }
		else{
		    $dob = $_POST["dob"];
	    }
		if(empty($_POST["uname"])){
		    $err_uname = "Username Requird";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
		if(empty($_POST["fname"])){
		    $err_fname = "Father's Name Requird";
			$hasError = true;
	    }
		else{
		    $fname = $_POST["fname"];
	    }
		if(empty($_POST["mname"])){
		    $err_mname = "Mother's Name Requird";
			$hasError = true;
	    }
		else{
		    $mname = $_POST["fname"];
	    }
		if(empty($_POST["gender"])){
		    $err_gender = "Gender Requird";
			$hasError = true;
	    }
		else{
		    $gender = $_POST["gender"];
	    }
		if(empty($_POST["nid"])){
		    $err_nid = "NID Requird";
			$hasError = true;
	    }
		else{
		    $nid = $_POST["gender"];
	    }
		if(empty($_POST["phone"])){
		    $err_phone = "Phone Number Requird";
			$hasError = true;
	    }
		else{
		    $phone = $_POST["phone"];
	    }
		
		if(!$hasError){
			$rs = insertCanditate($name,$dob,$uname,$fname,$mname,$mstat,$nid,$phone,$bg,$addrs,$gender,$pass);
			if($rs === true){
				header("Location: ManageCanditates.php");
			}
			$err_db = $rs;
		}
	}
	
	else if(isset($_POST["updateCanditate"])){
		if(empty($_POST["name"])){
		    $err_name = "Name Requird";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }
		if(empty($_POST["dob"])){
		    $err_dob = "DOB Requird";
			$hasError = true;
	    }
		else{
		    $dob = $_POST["dob"];
	    }
		if(empty($_POST["uname"])){
		    $err_uname = "Username Requird";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
		if(empty($_POST["fname"])){
		    $err_fname = "Father's Name Requird";
			$hasError = true;
	    }
		else{
		    $fname = $_POST["fname"];
	    }
		if(empty($_POST["mname"])){
		    $err_mname = "Mother's Name Requird";
			$hasError = true;
	    }
		else{
		    $mname = $_POST["fname"];
	    }
		if(empty($_POST["gender"])){
		    $err_gender = "Gender Requird";
			$hasError = true;
	    }
		else{
		    $gender = $_POST["gender"];
	    }
		if(empty($_POST["nid"])){
		    $err_nid = "NID Requird";
			$hasError = true;
	    }
		else{
		    $nid = $_POST["gender"];
	    }
		if(empty($_POST["phone"])){
		    $err_phone = "Phone Number Requird";
			$hasError = true;
	    }
		else{
		    $phone = $_POST["phone"];
	    }
		if(!$hasError){
			$rs = updateCanditate($name,$dob,$uname,$fname,$mname,$mstat,$nid,$phone,$bg,$addrs,$gender,$pass);
			if($rs === true){
				header("Location: ManageCanditates.php");
			}
			$err_db = $rs;
		}
		
	}
	
	else if(isset($_POST["deleteCanditate"])){
		if(empty($_POST["id"])){
		    $err_id = "Id needed";
			$hasError = true;
	    }
		else{
			$id= $_POST["id"];
		}
		if(!$hasError){
			$rs = deleteCanditate($id);
			if($rs === true){
				header("Location: ManageCanditates.php");
			}
			$err_db = $rs;
		}
	}
	
	
	function insertCanditate($name,$dob,$uname,$fname,$mname,$mstat,$nid,$phone,$bg,$addrs,$gender,$pass){
		$query = "insert into users (name,dob,uname,fname,mname,mstatus,nid,phone,pass,bg,address,gender,pass,role) 
		values ('$name','$dob','$uname','$fname','$mname','$mstat',$nid,$phone,$bg,'$addrs','$gender','$pass','canditate')";
		return execute($query);
	}
	
	function getCanditates(){
		$query="select * from users where role='canditate'";
		$rs = get($query);
		return $rs;
	}
	
	function getCanditate($id){
		$query="select * from users where id=$id";
		$rs = get($query);
		return $rs[0];
	}
	
	function deleteCanditate($id){
		$query="delete from users where id=$id";
		$rs = execute($query);
		return $rs;
	}
	
	function getRole($uname,$pass){
		$query="select role from users where uname='$uname' and pass='$pass'";
		$rs = get($query);
		return $rs;
	}
	
	function updateCanditate($name,$dob,$uname,$fname,$mname,$mstat,$nid,$phone,$bg,$addrs,$gender,$pass){
		$query = "update users set name='$name', dob='$dob',uname='$uname',fname='$fname',mname='$mname',
		mstatus='$mstat',nid=$nid,phone=$phone,bg='$bg',address='$addrs',gender='$gender',pass'$pass'";
		$rs = execute($query);
		return $rs;
	}
	
?>