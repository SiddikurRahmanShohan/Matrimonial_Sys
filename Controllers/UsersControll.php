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
	$nId="";
    $err_nId="";
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
	$err_db="";
	$cpass="";
	$err_cpass="";
	$opass="";
	$err_opass="";
	$mesg="";
	$err_mesg="";
	$npass="";
	$err_npass="";
	$hasError = false;
	
	function numCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(is_numeric($pas[$i]))  {
                return true;
            }
        }
		return false;
	}

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
		if(empty($_POST["addrs"])){
		    $err_addrs = "Address Requird";
			$hasError = true;
	    }
		else{
		    $addrs = $_POST["addrs"];
	    }
		if(empty($_POST["uname"])){
		    $err_uname = "Username Requird";
			$hasError = true;
	    }
		else if(strpos($_POST["uname"], " ") > 0){
			$err_uname="Username can not have space";
			$hasError = true;
		}
		else if(strlen($_POST["uname"]) <=3){
			$err_uname="Username Must be greater than 3 character";
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
		    $mname = $_POST["mname"];
	    }
		if(empty($_POST["gender"])){
		    $err_gender = "Gender Requird";
			$hasError = true;
	    }
		else{
		    $gender = $_POST["gender"];
	    }
		if(empty($_POST["bg"])){
		    $err_bg = "Blood Group Requird";
			$hasError = true;
	    }
		else{
		    $bg = $_POST["bg"];
	    }
		if(empty($_POST["mstat"])){
		    $err_mstat = "Marital stastus Requird";
			$hasError = true;
	    }
		else{
		    $mstat = $_POST["mstat"];
	    }
		if(empty($_POST["natId"])){
		    $err_nId = "NID Requird";
			$hasError = true;
	    }
		else if(!numCharCheck($_POST["natId"])){
			$err_nId="NID must be a number";
			$hasError = true;
		}
		else{
		    $nId = $_POST["natId"];
	    }
		if(empty($_POST["phone"])){
		    $err_phone = "Phone Number Requird";
			$hasError = true;
	    }
		else if(!numCharCheck($_POST["phone"])){
			$err_phone="Phone must be a number";
			$hasError = true;
		}
		else{
		    $phone = $_POST["phone"];
	    }
		if(empty($_POST["pass"])){
		    $err_pass = "Password Requird";
			$hasError = true;
	    }
		else{
		    $pass = $_POST["pass"];
	    }
		if(empty($_POST["cpass"])){
			$err_cpass="Confirm Password Required";
			$hasError = true;
		}
		else if($_POST["cpass"] != $_POST["pass"]){
			$err_cpass="Password doesen't match!";
			$hasError = true;
		}
		else{
		    $cpass = $_POST["cpass"];
	    }
		
		if(!$hasError){
			$rs = insertCanditate($name,$dob,$uname,$fname,$mname,$mstat,$nId,$phone,$bg,$addrs,$gender,$pass);
			if($rs === true){
				
				$usr3 = getUser($_POST["pid"]);
				if($usr3["role"]== 'admin'){
					header("Location: ManageCanditates.php");
				}
				else{
					header("Location: Login.php");
				}
			}
			$err_db = $rs;
		}
	}
	
	
	else if(isset($_POST["deleteUser"])){
		
		    echo '<script>alert("Will Be Deleted!")</script>';	
			$rs = deleteUser($_POST["pid"]);
			if($rs === true){
				header("Location: AdminHomePage.php");
			}
			$err_db = $rs;
	}
	
	else if(isset($_POST["updateUser"])){
		if(empty($_POST["name"])){
		    $err_name = "Name Requird";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }
		if(empty($_POST["uname"])){
		    $err_uname = "Username Requird";
			$hasError = true;
	    }
		else if(strpos($_POST["uname"], " ") > 0){
			$err_uname="Username can not have space";
			$hasError = true;
		}
		else if(strlen($_POST["uname"]) <=3){
			$err_uname="Username Must be greater than 3 character";
			$hasError = true;
		}
		else{
		    $uname = $_POST["uname"];
	    }
		
		if(empty($_POST["phone"])){
		    $err_phone = "Phone Number Requird";
			$hasError = true;
	    }
		else if(!numCharCheck($_POST["phone"])){
			$err_phone="Phone must be a number";
			$hasError = true;
		}
		else{
		    $phone = $_POST["phone"];
	    }
		if(empty($_POST["natId"])){
		    $err_nId = "NID Requird";
			$hasError = true;
	    }
		else if(!numCharCheck($_POST["natId"])){
			$err_nId="NID must be a number";
			$hasError = true;
		}
		else{
		    $nId = $_POST["natId"];
	    }
		if(empty($_POST["addrs"])){
		    $err_addrs = "Addresss Requird";
			$hasError = true;
	    }
		else{
		    $addrs = $_POST["addrs"];
	    }
		
		if(!$hasError){
			$rs = updateUser($nId,$name,$uname,$phone,$addrs,$_POST["pid"]);
			if($rs === true){
				$usr4 = getUser($_POST["pid"]);
				if($usr4["role"]== 'registrar'){
					header("Location: ManageRegistrar.php");
				}
				else{
					header("Location: ManageCanditates.php");
				}
			}
			$err_db = $rs;
		}
	}
	
	else if(isset($_POST["addRegistrar"])){
		if(empty($_POST["name"])){
		    $err_name = "Name Requird";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }
		
		if(empty($_POST["addrs"])){
		    $err_addrs = "Address Requird";
			$hasError = true;
	    }
		else{
		    $addrs = $_POST["addrs"];
	    }
		if(empty($_POST["uname"])){
		    $err_uname = "Username Requird";
			$hasError = true;
	    }
		else if(strpos($_POST["uname"], " ") > 0){
			$err_uname="Username can not have space";
			$hasError = true;
		}
		else if(strlen($_POST["uname"]) <=3){
			$err_uname="Username Must be greater than 3 character";
			$hasError = true;
		}
		else{
		    $uname = $_POST["uname"];
	    }
			
		if(empty($_POST["natid"])){
		    $err_nId = "NID Requird";
			$hasError = true;
	    }
		else if(!numCharCheck($_POST["natid"])){
			$err_nId="NID must be a number";
			$hasError = true;
		}
		else{
		    $nId = $_POST["natid"];
	    }
		if(empty($_POST["phone"])){
		    $err_phone = "Phone Number Requird";
			$hasError = true;
	    }
		else if(!numCharCheck($_POST["phone"])){
			$err_phone="Phone must be a number";
			$hasError = true;
		}
		else{
		    $phone = $_POST["phone"];
	    }
		if(empty($_POST["pass"])){
		    $err_pass = "Password Requird";
			$hasError = true;
	    }
		else{
		    $pass = $_POST["pass"];
	    }
		if(empty($_POST["cpass"])){
			$err_cpass="Confirm Password Required";
			$hasError = true;
		}
		else if($_POST["cpass"] != $_POST["pass"]){
			$err_cpass="Password doesen't match!";
			$hasError = true;
		}
		else{
		    $cpass = $_POST["cpass"];
	    }
		
		if(!$hasError){
			$rs = insertRegistrar($name,$uname,$nId,$phone,$addrs,$pass);
			if($rs === true){
				header("Location: ManageRegistrar.php");
			}
			$err_db = $rs;
		}
	}
	
	
	else if(isset($_POST["login"])){
		
		if(empty($_POST["uname"])){
		    $err_uname = "Username Requird";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
		if(empty($_POST["pass"])){
		    $err_pass = "Password Requird";
			$hasError = true;
	    }
		else{
		    $pass = $_POST["pass"];
	    }
		if(!$hasError){
			if($usr1 = userLogin($uname,$pass)){
				session_start();
			    $_SESSION["loggeduser"] = $usr1["uname"];
				$_SESSION["loggeduserid"] = $usr1["id"];
				
				if($usr1["role"] == "admin"){
					header("Location: AdminHomePage.php");
				}
				else if($usr1["role"] == "user"){
					
				}
				else if($usr1["role"] == "registrar"){
					
				}
			}
			$err_db = "User Invalid";
		}
	}
	
	else if(isset($_POST["updateDashboard"])){
		
		if(empty($_POST["name"])){
		    $err_name = "Name Requird";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }
		if(empty($_POST["uname"])){
		    $err_uname = "Username Requird";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
		if(empty($_POST["phone"])){
		    $err_phone = "Phone Number Requird";
			$hasError = true;
	    }
		else if(!numCharCheck($_POST["phone"])){
			$err_phone="Phone must be a number";
			$hasError = true;
		}
		else{
		    $phone = $_POST["phone"];
	    }
		
		if(!$hasError){
			if($usr = updateDashboard($name,$uname,$phone,$_POST["pid"])){
				  echo '<script>alert("Updated!")</script>';			  
			  }	
			  else{
				$err_db = "Invalid";  
			  }
		}
	}
	
	else if(isset($_POST["chagePassword"])){
		$usr2= getUser($_POST["pid"]);
		if(empty($_POST["oPass"])){
		    $err_opass = "Old Password Requird";
			$hasError = true;
	    }
		else if($usr2["pass"]!= $_POST["oPass"]){
		    $err_opass = "Old Password dosen't match!";
			$hasError = true;
	    }
		else{
		    $opass = $_POST["oPass"];
	    }
		if(empty($_POST["nPass"])){
		    $err_npass = "New Password Requird";
			$hasError = true;
	    }
		else{
		    $npass = $_POST["nPass"];
	    }
		if(empty($_POST["cPass"])){
		    $err_cpass = "Confirm Password Requird";
			$hasError = true;
	    }
		
		else if($_POST["cPass"] != $_POST["nPass"]){
			$err_cpass="Password doesen't match!";
			$hasError = true;
		}
		else{
		    $cpass = $_POST["cPass"];
	    }
		
		if(!$hasError){
			  if($upas = updatePass($_POST["pid"],$cpass)){
				  echo '<script>alert("Password Updated!")</script>';
                  header("Location: EditPass.php");				  
			  }
			  else{
				$err_db = "Invalid";  
			  }
			}
		}
		
		else if(isset($_POST["sendMessage"])){
		
		if(empty($_POST["mesg"])){
		    $err_mesg = "Message Requird";
			$hasError = true;
	    }
		else{
		    $mesg = $_POST["mesg"];
	    }
		if(!$hasError){
			if(sendMessage($mesg,$_POST["rid"],$_POST["sid"],date("d/m/y"),date("h:i:sa"))){
				$usr10 = getUser($_POST["sid"]);
				if($usr10["role"]== 'admin'){
					header("Location: ManageRegistrar.php");
				}
				else{
					header("Location: ManageCanditates.php");
				}
			}
			$err_db = "User Invalid";
		}
	}
	
	function insertCanditate($name,$dob,$uname,$fname,$mname,$mstat,$nId,$phone,$bg,$addrs,$gender,$pass){
		$query = "insert into users (name,dob,uname,fname,mname,mstatus,nid,phone,bg,address,gender,pass,role) 
		values ('$name','$dob','$uname','$fname','$mname','$mstat',$nId,$phone,'$bg','$addrs','$gender','$pass','user')";
		return execute($query);
	}
	
	function insertRegistrar($name,$uname,$nId,$phone,$addrs,$pass){
		$query = "insert into users (name,uname,nid,phone,pass,address,role) 
		values ('$name','$uname',$nid,$phone,'$addrs','$pass','registrar')";
		return execute($query);
	}
	
	function getCanditates(){
		$query="select * from users where role='user'";
		$rs = get($query);
		return $rs;
	}
	
	function getRegistrars(){
		$query="select * from users where role='registrar'";
		$rs = get($query);
		return $rs;
	}
	
	function getUser($id){
		$query="select * from users where id=$id";
		$rs = get($query);
		return $rs[0];
	}
	function userLogin($uname,$pass){
		$query="select * from users where uname='$uname' and pass='$pass'";
		$rs = get($query);
		if($rs> 0){
			return $rs[0];
		}
		else{
			return false;
		}
	}
	
	function deleteUser($id){
		$query="delete from users where id=$id";
		$rs = execute($query);
		return $rs;
	}
	
	function getRole($id){
		$query="select role from users where id='$id'";
		$rs = get($query);
		return $rs;
	}
	
	function sendMessage($msg,$rid,$uid,$date,$time){
		$query = "insert into messages (message,date,time,reciver_id,uid) 
		values ('$msg','$date','$time',$rid,$uid)";
		return execute($query);
	}
	
	function getUserMessage($rid,$uid){
		$query="select * from messages where uid=$uid and reciver_id=$rid";
		$rs = get($query);
		return $rs;
	}
	
		
	function updateUser($nId,$name,$uname,$phone,$addrs,$id){
		$query = "update users set name='$name',uname='$uname',nid=$nId,phone=$phone,address='$addrs' where id=$id";
		$rs = execute($query);
		return $rs;
	}
	
	function updateDashboard($name,$uname,$phone,$id){
		$query = "update users set name='$name',uname='$uname',phone=$phone where id=$id";
		$rs = execute($query);
		return $rs;
	}
	function updatePass($id,$cpass){
		$query = "update users set pass='$cpass' where id=$id";
		$rs = execute($query);
		return $rs;
	}
	
?>