<!--Main Content-->
				<div class="main-content relative">
					<div class="container-fluid">
						
						<!--About Sec-->
						<section class="about-sec mt-180 mt-sm-120  mb-30">
							<div class="row">
								<div class="col-lg-12">
									<div class="mdl-card mdl-shadow--2dp">
										<div class="row">
											<div class="col-md-5 col-xs-12 mb-30">
												<!--  -->
												<?php 
       if(isset($_SESSION["pimage"])){
   ?>
			 <div class="candidate-img mb-35"><img alt="" src="../<?php echo $_SESSION["pimage"];?>" class="w3-card-4 w3-circle w3-responsive " style="height:230px;width:230px;"></div>
 <?php 
       }?>											
												<!--  -->
												
												<ul class="social-icons">
													<li>
														<a class="facebook-link" href="<?php if(isset($_SESSION["facebook"])){ echo $_SESSION["facebook"]; }?>">
															<i id="tt1" class="zmdi zmdi-facebook"></i>
															<div class="mdl-tooltip" data-mdl-for="tt1">
																facebook 
															</div>
														</a>
													</li>
													<li>
														<a class="twitter-link" href="<?php if(isset($_SESSION["twitter"])){ echo $_SESSION["twitter"]; }?>">
															<i id="tt2" class="zmdi zmdi-twitter"></i>
															<div class="mdl-tooltip" data-mdl-for="tt2">
																twitter
															</div>
														</a>
													</li>
												    <li>
														<a class="instagram-link" href="<?php if(isset($_SESSION["Instagram"])){ echo $_SESSION["Instagram"]; }?>">
															<i id="tt5" class="zmdi zmdi-instagram"></i>
															<div class="mdl-tooltip" data-mdl-for="tt5">
																instagram
															</div>
														</a>
													</li>
												</ul>
											</div>
		
		
		<div class="col-md-7 col-xs-12">
												<div class="info-wrap">
													<h1><?php if(isset($_SESSION["name"])){ echo $_SESSION["name"]; }?></h1>
													<h5 class="mt-20 font-grey"><?php if(isset($_SESSION["email"])){ echo $_SESSION["email"]; }?></h5>
													<div class="mt-30">
														<a id="download_cv" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  bg-green font-white mr-10" href="#download" onclick="downloadprint()"><i class="fa fa-download" style="color:black;"></i> download profile</a>
														<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect bg-blue font-white" href="callto:<?php if(isset($_SESSION["number"])){echo $_SESSION["number"];}?>" data-scroll><i class="fa fa-phone-square" style="color:black;"></i> contact</a>
												    	<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect bg-yellow font-white" onclick="updatesa()" href="#save" data-scroll><i class="fa fa-wrench" style="color: black;"></i> Update</a>
												     	<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect bg-red font-white" href="../Action/logout.php"><i class="fa fa-sign-out-alt" style="color: black;"></i> Logout</a>
													</div>
												</div>
												<ul class="profile-wrap mt-50">
													<li>
														<div class="profile-title">Date of birth :</div>
														<div class="profile-desc"><?php if(isset($_SESSION["dob"])){ echo $_SESSION["dob"];}else{echo "have not yet";}?></div>
													</li>
													<li>
														<div class="profile-title">address</div>
														<div class="profile-desc">
															<?php if(isset($_SESSION["address"])){ echo $_SESSION["address"]; }?>
														</div>
													</li>
													<li>
														<div class="profile-title">Password</div>
														<div class="profile-desc">
															<?php if(isset($_SESSION["password"])){ echo $_SESSION["password"]; }?>
														</div>
													</li>
													<li>
														<div class="profile-title">phone</div>
														<div class="profile-desc">
                                                         <?php if(isset($_SESSION["mobile"])){ echo $_SESSION["mobile"]; }?>
                                                        </div>
													</li>
													
													<li>
														<div class="profile-title">City</div>
														<div class="profile-desc">
                                                         <?php if(isset($_SESSION["city"])){ echo $_SESSION["city"]; }?>
                                                        </div>
													</li>
													
													<li>
														<div class="profile-title">State</div>
														<div class="profile-desc">
                                                         <?php if(isset($_SESSION["state"])){ echo $_SESSION["state"]; }?>
                                                        </div>
													</li>
													
													
													<li>
														<div class="profile-title">freelance</div>
														<div class="profile-desc relative">Available
															<i id="datepickopn" class="zmdi zmdi-calendar-check font-green pl-5"></i>
															<div id='datepicker1' class='datepicker'></div>
														</div>
														
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</section>
						<!--/About Sec-->		
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
		 
						
						
						
						
						
					<button class="btn btn-success w3-input">Your a/c no. :	#<?php if(isset($_SESSION["count"])){echo $_SESSION["count"];}?></button>	
				 
		<div id="updates">				
		<form action="save.php" method="post" enctype="multipart/form-data" >
                <div class="form-row">
                 <div class="form-group col-md-6">
                  <label for="name">Name</label>
                  <input type="text" class="form-control w3-input" id="name" placeholder="<?php if(isset($_SESSION["name"])){echo $_SESSION["name"];}?>" name="fname" style="border-bottom:0.1px solid black;" required="">
                 </div>
                 
                 <div class="form-group col-md-6">
                 <label for="Email">Email</label>
                 <input type="Email" class="form-control" id="Email" placeholder="<?php if(isset($_SESSION["email"])){echo $_SESSION["email"];}?>" name="email" style="border-bottom:0.1px solid black;" data-validate ="Email is here" disabled="">
                 </div>
                 </div>
                 
                 <div class="form-row">
                   <div class="form-group col-md-6">
                  <label for="pwd">Password</label>
                  <input type="password" class="form-control w3-input" id="pwd" placeholder="<?php if(isset($_SESSION["password"])){echo $_SESSION["password"];}?>" name="pwd" style="border-bottom:0.1px solid black;" data-validate ="Password is here" required="">
                 </div>
                 
                 <div class="form-group col-md-6">
                 <label for="gender">Gender</label>
                 <select class="form-control w3-input" style="border-bottom:0.1px solid black;" name="gender"><option value="male">Male</option><option value="female">Female</option><option name="transgender">Other</option></select>
                 </div>
                 </div>
                 
                 <div class="form-row">
                  <div class="form-group col-md-6">
                  <label for="salary">Salary</label>
                  <input type="text" class="form-control w3-input" id="salary" name="salary" placeholder="Salary" style="border-bottom:0.1px solid black;"  required="">
                 </div>
                
                <div class="form-group col-md-6">
                 <label for="pimage" style="color:red;">Upload Profile Image <i class="fa fa-image" style="color:blue;"></i></label>
                 <input type="file" class="form-control" id="pimage" name="pimage" placeholder="Profile Pic" style="border-bottom:0.1px solid black;" required="" >
                 </div>
                 </div>
               
                <div class="form-row">
                   <div class="form-group col-md-6">
                  <label for="mobile">Mobile</label>
                  <input type="text" class="form-control w3-input" id="mobile" name="mobile" placeholder="<?php if(isset($_SESSION["mobile"])){echo $_SESSION["mobile"];}?>" style="border-bottom:0.1px solid black;" data-validate ="Mobile nmber" required="">
                 </div>
                 
                 <div class="form-group col-md-6">
                 <label for="date">Date of Birth</label>
                 <input type="date" class="form-control w3-date" id="date" name="dob" placeholder="<?php if(isset($_SESSION["dob"])){echo $_SESSION["dob"];}?>" style="border-bottom:0.1px solid black;" required="">
                 </div>
                 </div>
                 
                 
                 
                 <div class="form-row">
                 <hr/>
                 <div class="form-group col-md-6">
                 <label for="inputCity">City</label>
                 <input type="text" class="form-control" id="inputCity" name="city" style="border-bottom:0.1px solid black;" required="" placeholder="<?php if(isset($_SESSION["city"])){echo $_SESSION["city"];}?>">
                 </div>
                 <div class="form-group col-md-4">
                 <label for="inputState">State</label>
                 <select id="inputState" class="form-control w3-input" name="state" style="border-bottom:0.1px solid black;">
                    <option selected>Bihar</option>
                    <option class="w3-input w3-padding-large">Andaman and Nicobar Islands</option>
                    <option class="w3-input w3-padding">Andhra Pradesh</option>
                    <option class="w3-input w3-padding">Arunachal Pradesh</option>
                    <option class="w3-input w3-padding">Assam</option>
                    <option class="w3-input w3-padding">Chandigarh</option>
                    <option class="w3-input w3-padding">Chhattisgarh</option>
                    <option>Dadra and Nagar Haveli </option>
                    <option>Daman and Diu</option>
                    <option>Delhi</option>
                    <option>National Capital Territory of Delhi</option>
                    <option>Goa</option>
                    <option>Gujarat</option>
                    <option>Haryana</option>
                    <option>Himachal Pradesh</option>
                    <option>Jammu and Kashmir</option>
                    <option>Jharkhand</option>
                    <option>Karnataka</option>
                    <option>Kerala</option>
                    <option>Lakshadweep</option>
                    <option>Madhya Pradesh</option>
                    <option>Maharashtra</option>
                    <option>Manipur</option>
                    <option>Meghalaya</option>
                    <option>Mizoram</option>
                    <option>Nagaland</option>
                    <option>Odisha</option>
                    <option>Puducherry</option>
                    <option>Punjab</option>
                    <option>Rajasthan</option>
                    <option>Sikkim</option>
                    <option>Tamil Nadu</option>
                    <option>Telangana</option>
                    <option>Tripura</option>
                    <option>Uttar Pradesh</option>
                    <option>Uttarakhand	</option>
                    <option>West Bengal	</option>
             </select>
                </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                  <input type="number" class="form-control" id="inputZip" name="zip" style="border-bottom:0.1px solid black;" placeholder="<?php if(isset($_SESSION["zip"])){echo $_SESSION["zip"];}?>">
              </div>
           </div>
          
               
        
       
           <div class="form-row">
                 <div class="form-group col-md-6">
                 <label for="inputAddress">Address</label>
                 <input type="text" class="form-control" id="inputAddress" name="address" placeholder="<?php if(isset($_SESSION["address"])){echo $_SESSION["address"];}?>" style="border-bottom:0.1px solid black;" required="">
                 </div> 
                 <div class="form-group col-md-6">
                 <label for="position">Position <i class="fa fa-image" style="color:blue;"></i></label>
                 <input type="input" class="form-control" id="position" name="position" placeholder="Position (Optional)" style="border-bottom:0.1px solid black;" >
                 </div>
           </div>
                <hr/> 
         <div class="form-row">
                 <div class="form-group col-md-4">
                 <label for="facebook">Facebook <i class="fa fa-facebook-square" style="color:blue;"></i></label>
                <input type="url" name="facebook" placeholder="facebook url" id="facebook" class="form-control w3-input" >
                 </div> 
                 <div class="form-group col-md-4">
                 <label for="twitter">Twitter <i class="fa fa-twitter-square" style="color:blue;"></i></label>
                 <input type="url" class="form-control" id="twitter" name="twitter" placeholder="twitter url" style="border-bottom:0.1px solid black;" >
                 </div>
                  <div class="form-group col-md-4">
                 <label for="Instagram">Instagram <i class="fa fa-instagram" style="color:blue;"></i></label>
                 <input type="url" class="form-control" id="Instagram" name="Instagram" placeholder="Instagram url" style="border-bottom:0.1px solid black;" >
                 </div>
       </div>
             
        <button type="submit" name="name" class="btn btn-primary w3-input" id="save">Save</button>
           </form>				
			</div>			
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
					 
 	
						
						
						<!--Footer Sec-->
						<footer class="footer-sec sec-pad-top-sm sec-pad-bottom text-center">
							<h4>thank you for visiting.</h4>
							<p class="mt-10">Yashlawfirm 2018. All rights reserved.</p>
								<ul class="social-icons mt-10">
									<li>
										<a class="facebook-link" href="#">
											<i id="tt6" class="zmdi zmdi-facebook"></i>
											<div class="mdl-tooltip" data-mdl-for="tt6">
												facebook
											</div>
										</a>
									</li>
									<li>
										<a class="twitter-link" href="#">
											<i id="tt7" class="zmdi zmdi-twitter"></i>
											<div class="mdl-tooltip" data-mdl-for="tt7">
												twitter
											</div>
										</a>
									</li>
									<li>
										<a class="linkedin-link" href="#">
											<i id="tt8" class="zmdi zmdi-linkedin"></i>
											<div class="mdl-tooltip" data-mdl-for="tt8">
												linkedin
											</div>
										</a>
									</li>
									<li>
										<a class="dribbble-link" href="#">
											<i id="tt9" class="zmdi zmdi-dribbble"></i>
											<div class="mdl-tooltip" data-mdl-for="tt9">
												dribbble
											</div>
										</a>
									</li>
									<li>
										<a class="instagram-link" href="#">
											<i id="tt10" class="zmdi zmdi-instagram"></i>
											<div class="mdl-tooltip" data-mdl-for="tt10">
												instagram
											</div>
										</a>
									</li>
								</ul>
											
						</footer>
						<!--Footer Sec-->
					</div>
				</div>	
				<!--/Main Content-->