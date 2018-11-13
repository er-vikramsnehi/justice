
<span class="login100-form-title">
						Changeing Info
					<font style="color:pink;">Updating</font>
</span>
<div id="updateinfo" >
<form class="login100-form validate-form" action="updateinfo.php" method="POST" >

                   <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="name" placeholder="User Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true" style="color:red;"></i>
						</span>
					</div>
					
					
					 <div class="wrap-input100 validate-input">
						<input class="input100" type="email" name="email" placeholder="Enter Email">
						<input class="input100 w3-hide" type="text" name="count" value="<?php echo $count?>" hidden="">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="pwd" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-key" aria-hidden="true"></i>
						</span>
					</div>
					
					 <div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit">
							Change Email
						</button>
					</div>
 
					<div class="text-center p-t-136">
						<a class="txt2" style="cursor:hand;" onclick="varifyac()">
							Cancel
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
</form>				
</div>
