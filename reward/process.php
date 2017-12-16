<?php 
	include('config.php');
	
	if($_POST['user_search'] <> "") { 
	$query = mysqli_query($db_con, "SELECT * FROM db_winner WHERE winner_name ='".$_POST['user_search']."'");
	$rowcount=mysqli_num_rows($query);
	if($rowcount <> 0) { 
		echo '<table id="example">
					<thead>
						<tr>
							<th>Use Profile</th>
							<th style="text-align: center; padding-left: 0px;">Channel</th>
							<th style="text-align: center; padding-left: 0px;">Source</th>
							<th style="text-align: center; padding-left: 0px;">Prize</th>
                            <th style="text-align: center; padding-left: 0px;">Redeem</th>
						</tr>
					</thead>
				<tbody>';
		while($result = mysqli_fetch_array($query)) {
			echo '<tr>
			<td class="user-name">'.$result['winner_name'].'</td>
			<td class="user-channel">'.$result['winner_source'].'</td>
			<td class="user-link"><a href="'.$result['winner_link'].'" target="_blank">VIEW PHOTO</a></td>
			<td class="user-prize">'.$result['winner_prize'].'</td>';
			if($result['winner_redeem'] == 'redeemed'){
			echo '<td class="user-redeem">Redeemed</td>
			</tr>';
			} else {
			echo '<td class="user-redeem"><a href="#" data-toggle="modal" data-target="#redeem">Redeem</a></td>
				</tr>';
			}
			
		}
		echo '</tbody></table>';
	} else { 
		echo "<p>Thank you for joining the Symphony of Life activity. Unfortunately, you do not win any prizes for this time. <br>Keep following us at Raimon Land Facebook for the chance to win a lot more prizes on the upcoming activity soon.</p>"; 
	}
	
	} else { 
		echo "<p>Thank you for joining the Symphony of Life activity. Unfortunately, you do not win any prizes for this time. <br>Keep following us at Raimon Land Facebook for the chance to win a lot more prizes on the upcoming activity soon.</p>"; 
	} 
?>