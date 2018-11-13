	<span class="login100-form-title" style="cursor:hand;">
						Please Confirm your Email
					<font style="color:blue;" id="editinfo" onclick="EditInfo()">Change Email</font>
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="otp" placeholder="OTP here">
						<input class="input100 w3-hide" type="text" name="count" value="<?php echo $count?>" hidden="">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-talephone" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Verify your Account
						</button>
					</div>
 
					<div class="text-center p-t-136">
						<a class="txt2" href="logout.php">
							Cancel
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>