<?php 
	include('config.php');
	 $strSQL = "SELECT db_redeem.redeem_id, db_redeem.redeem_firstname, db_redeem.redeem_lastname, db_redeem.redeem_email, db_redeem.redeem_phone, db_redeem.redeem_prize, db_winner.winner_name FROM db_redeem INNER JOIN db_winner ON db_redeem.winner_id = db_winner.winner_id";  
	
	$objQuery = mysqli_query($db_con, $strSQL);  
    $objResult = mysqli_num_rows($objQuery);
	
	$objResult;
				echo '<table id="example">
					<thead>
						<tr>
							<th>Use Profile</th>
							<th style="text-align: center; padding-left: 0px;">Fullname</th>
							<th style="text-align: center; padding-left: 0px;">Email</th>
							<th style="text-align: center; padding-left: 0px;">Phone</th>
                            <th style="text-align: center; padding-left: 0px;">Prize</th>
						</tr>
					</thead>
				<tbody>';
	while($result = mysqli_fetch_array($objQuery)) {
		echo '<tr><td class="user-name">'.$result['winner_name'].'</td><td class="user-channel">'.$result['redeem_firstname'].' '.$result['redeem_lastname'].'</td>
		<td class="user-link">'.$result['redeem_email'].'</td><td class="user-prize">'.$result['redeem_phone'].'</td><td class="user-redeem">'.$result['redeem_prize'].'</td></tr>';
	}
	
	echo '</tbody></table>';
	
?>

 <?php
/*$servername = "localhost";
$username = "pacedev3_mahanak";
$password = "wLLPS8hNp5wX";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";*/
?> 