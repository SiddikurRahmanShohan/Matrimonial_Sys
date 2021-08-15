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
    <h2>Welcome <?php echo $_SESSION["username"];?> to Divorce Request </h2>
    </head>
	<body>
		<fieldset>
			<form>
				<table >          

     <p><pre>

                                      <b>Notice of Divorce by <?php echo $_SESSION["username"];?></b>
                           According to Section 7(1) of the Muslim Family Act, 1961
                           

                    The humble submission is that I, <u>-----</u>, Date of Birth: <u>-----</u>, daughter
                    of <u>-----</u> & <u>-----</u>, of <u>-----</u>, Nationality:<u>-----</u>, NID:<u>---</u>, Religion: <u>----</u>,
                    and Occupation: <u>-----</u>, hereby notify that I was married to <b><?=$previousData[0]['name']?></b>, Date 
                    of Birth: <b><?=$previousData[0]['dob']?></b>, son of <b><?=$previousData[0]['fname']?></b> & <b><?=$previousData[0]['mname']?></b>, of <b><?=$previousData[0]['address']?></b>, NID:
                    <b><?=$previousData[0]['nid']?></b>, Religion:<b><?=$previousData[0]['religion']?></b>, on <u>-----</u> according to Muslim 
                    Law. Few months after the marriage <u>-----</u> took birth. Such activities
                    committed by <u>him/her</u> have transgressed the condition of our marriage and
                    worsen <u>his/her</u> morality. Thus, by exercising my right as 
                    conferred in section 18 of the Marriage Deed, I divorce thereby
                    terminate the marriage with <b><?=$previousData[0]['name']?></b> on this <u>-----</u>.

                    In this regard I request for divorce as per According to
                    Section 7(1) of the Muslim Family Act, 1961.
                       



                    Date of issue:<u>------</u>                                    <u>----------</u>   
                                                                            Registrar

    </pre></p>		

				</table>
			</form>	 
		</fieldset>
        <tr>
			<td><input type="submit" style="background-color:rgb(120,120,255)" value="Request"></td> <br>
		</tr><br>
		<a href="Candidateshome.php">Back</a>
	</body>
</html>