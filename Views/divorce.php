<?php
    session_start();	
?>

<html>				
	<head><h2>Welcome <?php echo $_SESSION["username"];?> to Divorce Request </h2></head>
	<body>
		<fieldset>
			<form>
				<table >          

     <p><pre>

                                      <b>Notice of Divorce by <?php echo $_SESSION["username"];?></b>
                           According to Section 7(1) of the Muslim Family Act, 1961
                           

                    The humble submission is that I, <u>-----</u>, Date of Birth: <u>-----</u>, daughter
                    of <u>-----</u> & <u>-----</u>, of <u>-----</u>, Nationality:<u>-----</u>, NID:<u>---</u>, Religion: <u>----</u>,
                    and Occupation: <u>-----</u>, hereby notify that I was married to <u>-----</u>, Date 
                    of Birth: <u>-----</u>, son of <u>------</u> & <u>-----</u>, of <u>-----</u>, Nationality:<u>-----</u>, NID:
                    <u>---</u>, Religion:<u>-----</u>, and Occupation:<u>-----</u>, on <u>-----</u> according to Muslim 
                    Law. Few months after the marriage <u>-----</u> took birth. Such activities
                    committed by <u>him/her</u> have transgressed the condition of our marriage and
                    worsen <u>his/her</u> morality. Thus, by exercising my right as 
                    conferred in section 18 of the Marriage Deed, I divorce thereby
                    terminate the marriage with <u>------</u>y on this <u>-----</u>.

                    In this regard I request for divorce as per According to
                    Section 7(1) of the Muslim Family Act, 1961.
                       



                    Date of issue:<u>------</u>                                    <u>----------</u>   
                                                                            Registrar

    </pre></p>		

				</table>
			</form>	 
		</fieldset>
        <tr>
			<td><input type="submit" value="Request"></td> <br>
		</tr><br>
		<a href="Candidateshome.php">Back</a>
	</body>
</html>