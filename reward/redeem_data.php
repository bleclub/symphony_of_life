<?php 
	include('config.php');
	
	/*$_POST['first_name'];
	$_POST['last_name'];
	$_POST['email'];
	$_POST['phone'];
	$_POST['prize'];*/
	
	  $email = $_POST['email'];
	  $firstname = $_POST['first_name'];
	  $lastname = $_REQUEST['last_name'];
	  $telephone = $_POST['phone'];
	  $prize = $_POST['prize'];
	  $winner_name = $_POST['winner_name'];
	
	$strSQL = "SELECT * FROM db_redeem WHERE winner_id = '".trim($_POST['winner_id'])."' ";  
    $objQuery = mysqli_query($db_con, $strSQL);  
    $objResult = mysqli_num_rows($objQuery);
	
    if($objResult)  
    {  
        //  echo "Username already exists!";  
			echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('This user has redeemed already!')
					window.location.href='http://".$_SERVER['SERVER_NAME']."/';
					</SCRIPT>");
	}  
    else  
    {   
		$strSQL2 = "INSERT INTO db_redeem (`redeem_firstname`, `redeem_lastname`, `redeem_email`, `redeem_phone`, `redeem_prize`, `redeem_status`, `winner_id`) VALUES ('".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['prize']."', '0', '".$_POST['winner_id']."');"; 
		$objQuery2 = mysqli_query($db_con, $strSQL2); 
		
		$sql_redeemed = "UPDATE db_winner SET winner_redeem = 'redeemed' WHERE winner_id = ".$_POST['winner_id'];
		$queryRedeemed = mysqli_query($db_con, $sql_redeemed);
		
        
			 	$strTo = "vanlop@raimonland.com";
				$strSubject = "Test Send Email";
				$strHeader.= "MIME-Version: 1.0' . \r\n";
				$strHeader.= "Content-type: text/html; charset=utf-8\r\n"; 
				$strHeader.= "From: webmaster@raimonland.com";
				$strMessage = "<h3>Reward prize redemption.</h3>";
				$strMessage.= "<p>Username(FB/IG): ".$winner_name."</p>";
				$strMessage.= "<p>First Name: ".$firstname."</p>";
				$strMessage.= "<p>Last Name: ".$lastname."</p>";
				$strMessage.= "<p>Telephone: ".$telephone."</p>";
				$strMessage.= "<p>Email: ".$email."</p>";
				$strMessage.= "<p>Prize: ".$prize."</p>";
				$flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader);  // @ = No Show Error //
				
				header("Location: http://".$_SERVER['SERVER_NAME']."/symphonyoflife/winners/thankyou");
			
		
          
    }  
?>