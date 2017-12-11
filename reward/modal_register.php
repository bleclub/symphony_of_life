<?php 
	include('config.php');
	
	if($_POST['user_search'] <> "") { 
	$query = mysqli_query($db_con, "SELECT * FROM db_winner WHERE winner_name ='".$_POST['user_search']."'");
	$rowcount=mysqli_num_rows($query);
	if($rowcount <> 0) { 
		
		while($result = mysqli_fetch_array($query)) {
			
		
		echo '</tbody></table>';
		echo '<!--Redeem Register-->
            
            <div class="modal fade" id="redeem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true"><i class="fa fa-times-circle fa-lg" aria-hidden="true"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel">REDEEM PRIZE</h4>
                  </div>
                  <div class="modal-body">
                    <div class="panel-body">
			    		<form id="form_redeem" name="form_redeem" action="../redeem_data.php" method="post">
							<div class="form-group">
			    				<input type="text" name="user" id="username" class="form-control input-sm" disabled value="Username(FB/IG): '.$result['winner_name'].'">	  
			    			</div>
			    			<div class="row">
			    				<div class="col-sm-6 col-md-6">
			    					<div class="form-group">
			                			<input type="text" name="first_name" id="first_name" class="form-control input-sm" required placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm"  required placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>
							<div class="row">
			    				<div class="col-sm-6 col-md-6">	
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control input-sm" required placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">	
                                    <div class="form-group">
                                        <input type="phone" name="phone" id="phone" class="form-control input-sm" required placeholder="Telephone">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="winner_id" id="winner_id" value="'.$result['winner_id'].'">
			    			<input type="hidden" name="prize" id="prize" value="'.$result['winner_prize'].'">
							<input type="hidden" name="winner_name" id="winner_name" value="'.$result['winner_name'].'">
                            <div class="form-group">
			    				  <input type="text" name="p" id="prize" class="form-control input-sm" disabled value="'.$result['winner_prize'].'">
								  
			    			</div>

			    			
			    			<input value="Redeem" id="submit" type="submit" class="btn-info btn-block">
			    		
			    		</form>
			    	</div>
                  </div>
                  <!--<div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>-->
                </div>
              </div>
            </div>';
		}
	} else { 
		echo ""; 
	}
	
	} else { 
		echo ""; 
	} 
?>