		var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			function validateGen(){
				var gn = document.getElementsByName("gender");
				var checked = false;
				for(var i=0;i<gn.length;i++){
					if(gn[i].checked){
						checked= true;
						break;
					}
				}
				return checked;
			}
			
			function validateGender(){
				var gn = document.querySelector('input[name="gender"]:checked');
				if(gn == null){
					return false;
				}
				return true;
			}
			function validateMstat(){
				var ms = document.getElementsByName("mstat");
				var checked = false;
				for(var i=0;i<ms.length;i++){
					if(ms[i].checked){
						checked= true;
						break;
					}
				}
				
				return checked;
			}
			
			function validateStatus(){
				var ms = document.querySelector('input[name="mstat"]:checked');
				if(ms == null){
					return false;
				}
				return true;
			}
			
			function validate(){
				
				refresh();
				if(get("name").value == ""){
					hasError = true;
					get("err_name").innerHTML = "Name Requird";
				}
				if(get("uname").value == ""){
					hasError = true;
					get("err_uname").innerHTML = "Username Requird";
				}
				else if(get("uname").value.length <= 3){
					hasError = true;
					get("err_name").innerHTML = "Username Must be greater than 3 character";
				}
				if(get("phone").value == ""){
					hasError = true;
					get("err_phone").innerHTML = "Phone Number Requird";
				}
				if(get("nid").value == ""){
					hasError = true;
					get("err_nid").innerHTML = "NID Requird";
				}
				if(get("fname").value == ""){
					hasError = true;
					get("err_fname").innerHTML = "Father's Name Requird";
				}
				if(get("mname").value == ""){
					hasError = true;
					get("err_mname").innerHTML = "Mother's Name Requird";
				}
				if(get("dob").value == ""){
					hasError = true;
					get("err_dob").innerHTML = "DOB Requird";
				}
				if(get("addrs").value == ""){
					hasError = true;
					get("err_addrs").innerHTML = "Address Requird";
				}
				if(get("mstat").value == ""){
					hasError = true;
					get("err_mstat").innerHTML = "Marital stastus Requird";
				}
				if(get("bg").value == ""){
					hasError = true;
					get("err_bg").innerHTML = "Blood Group Requird";
				}
				if(get("pass").value == ""){
					hasError = true;
					get("err_pass").innerHTML = "Password Requird";
				}
				if(get("oPass").value == ""){
					hasError = true;
					get("err_opass").innerHTML = "Old Password Requird";
				}
				if(get("nPass").value == ""){
					hasError = true;
					get("err_npass").innerHTML = "New Password Requird";
				}
				if(get("cPass").value == ""){
					hasError = true;
					get("err_cpass").innerHTML = "Confirm Password Required";
				}
				else if(get("cPass").value != get("nPass").value){
					hasError = true;
					get("err_cpass").innerHTML = "Password doesen't match!";
				}
				if(!validateGen()){
					hasError = true;
					get("err_gender").innerHTML = "Gender Requird";
				}
				if(!validateMstat()){
					hasError = true;
					get("err_mstat").innerHTML = "Marital stastus Requird";
				}
				
			return !hasError;
			}
			function refresh(){
				hasError=false;
				get("err_name").innerHTML="";
				get("err_uname").innerHTML = "";
				get("err_phone").innerHTML = "";
				get("err_addrs").innerHTML = "";
				get("err_dob").innerHTML = "";
				get("err_bg").innerHTML = "";
				get("err_pass").innerHTML = "";
				get("err_opass").innerHTML = "";
				get("err_npass").innerHTML = "";
				get("err_cpass").innerHTML = "";
				get("err_gender").innerHTML = "";
				get("err_mstat").innerHTML ="";
				
				
			}