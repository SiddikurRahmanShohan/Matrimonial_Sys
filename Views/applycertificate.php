<?php
    session_start();	
    require "../Models/DBConfig.php";
	
	$userid = $_SESSION['userid'];
	$query = "select * from users where users.id='$userid' limit 1 ";
	$previousData = get($query);

?>

<html>
	<head>
    <style>
	    body {background-color:rgb(242, 242, 242); margin:50px; padding-left:500px;}
        h2 {color:#812F33; }
		a{color:blue;}
		id{color:blue;}
		fieldset {background-color:#F3FEB0;  height:auto; width:400px; }
		</style>    
    <h2>Welcome <?php echo $_SESSION["username"];?> to Apply Certificate</h2></head>
	<body>
   
		<fieldset>
			<form>
				<table >

     <p><pre>
                        <b>GOVERNMENT OF THE PEOPLE’S REPUBLIC OF BANGLADESH</b>  
            OFFICE OF THE MUSLIM MARRIAGE REGISTRAR & KAZI (District), BANGLADESH

                                  <b><u>MARRIAGE CERTIFICATE</u></b>  


        This is to certify that <b><?=$previousData[0]['name']?></b> Son of <b><?=$previousData[0]['fname']?></b> & <b><?=$previousData[0]['mname']?></b> of <b><?=$previousData[0]['address']?></b>,
        Date of Birth <b><?=$previousData[0]['dob']?></b>, NID No:<b><?=$previousData[0]['nid']?></b>, Religion:<b><?=$previousData[0]['religion']?></b> Married with <u>bride_name</u> Daughter 
        of <u>father_name</u> & <u>mother_name</u> of <u>address</u>, Date of Birth:<u>DOB</u>, NID No:<u>NID</u> Religion:
        <u>...</u>,. The marriage was aolemnized on  <u>Date</u>   and registered in my office on  <u>date</u> 
        being registration serial No:  <u>....</u> in the year of  <u>Year</u> in <u>address</u>. The marriage 
        was solemnized by me and the marriage also took place in presence of everyone and 
        witness and also the parents of the bride and bridegroom. 

        The dowry of Taka <u>......</u> only settled as Moharana and the marriage held at about
        00:00PM/AM. The bride and groom accepted the marriage. The marriage was registered
        in my office on <u>.....</u> at  <u>.....</u> being registration No <u>...</u> in the year of….….in
        respect of (District), Bangladesh.

        The statement made above is true and correct to the best of my knowledge and belief 
        I wish them best of luck 



        Date of issue:.....                                                <u>----------</u>   
                                                                             Registrar

</pre></p>		

				</table>
			</form>
			
		</fieldset>
		<input type="submit" value="Apply"><br><br>
		<a href="Candidateshome.php">Back</a><br>
	</body>
</html>