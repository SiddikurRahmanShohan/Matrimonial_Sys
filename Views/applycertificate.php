<?php
    session_start();	
?>

<html>
	<head> <h2>Welcome <?php echo $_SESSION["username"];?> to Apply Certificate</h2></head>
	<body>
   
		<fieldset>
			<form>
				<table >

     <p><pre>
                        <b>GOVERNMENT OF THE PEOPLE’S REPUBLIC OF BANGLADESH</b>  
            OFFICE OF THE MUSLIM MARRIAGE REGISTRAR & KAZI (District), BANGLADESH

                                  <b><u>MARRIAGE CERTIFICATE</u></b>  


        This is to certify that <u>groom_name</u> Son of <u>father_name</u> & <u>mother_name</u> of <u>address</u>,
        Date of Birth  <u>DOB</u>, NID No: <u>NID</u>, Religion: ....., Married with <u>bride_name</u> Daughter 
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



        Date of issue:<u>Date</u>                                                  <u>----------</u>   
                                                                             Registrar

</pre></p>		

				</table>
			</form>
			
		</fieldset>
		<input type="submit" value="Apply"><br><br>
		<a href="Candidateshome.php">Back</a><br>
	</body>
</html>