<center><h2>Admin Account</h2></center>
<form action="pages/insertbox/insertadmin.php" method="post" enctype="multipart/form-data">
                <div class="form-row">
                 <div class="form-group col-md-6">
                  <label for="name">Name</label>
                  <input type="text" class="form-control w3-input" id="name" placeholder="Name" name="name" style="border-bottom:0.1px solid black;" data-validate ="Your Name" required="">
                 </div>
                 
                 <div class="form-group col-md-6">
                 <label for="Email">Email</label>
                 <input type="Email" class="form-control" id="Email" placeholder="Email" name="email" style="border-bottom:0.1px solid black;" data-validate ="Email is here" required="">
                 </div>
                 </div>
                 
                 <div class="form-row">
                   <div class="form-group col-md-6">
                  <label for="pwd">Password</label>
                  <input type="password" class="form-control w3-input" id="pwd" placeholder="Password..." name="pwd" style="border-bottom:0.1px solid black;" data-validate ="Password is here" required="">
                 </div>
                 
                 <div class="form-group col-md-6">
                 <label for="gender">Gender</label>
                 <select class="form-control w3-input" style="border-bottom:0.1px solid black;" name="gender"><option value="male">Male</option><option value="female">Female</option><option name="transgender">Other</option></select>
                 </div>
                 </div>
                 
                 <div class="form-row">
                 <div class="form-group col-md-6">
                 <label for="inputAddress">Address</label>
                 <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" style="border-bottom:0.1px solid black;" required="">
                 </div>
                  <div class="form-group col-md-6">
                 <hr/>
                 <label for="pimage" style="color:red;">Upload Profile Image <i class="fa fa-image" style="color:blue;"></i></label>
                 <input type="file" class="form-control w3-hide" id="pimage" name="pimage" placeholder="Profile Pic" style="border-bottom:0.1px solid black;" required="" >
                 </div>
                 </div>
               
                <div class="form-row">
                   <div class="form-group col-md-6">
                  <label for="mobile">Mobile</label>
                  <input type="text" class="form-control w3-input" id="mobile" name="mobile" placeholder="Mobile Number" style="border-bottom:0.1px solid black;" data-validate ="Mobile nmber" required="">
                 </div>
                 
                 <div class="form-group col-md-6">
                 <label for="date">Date of Birth</label>
                 <input type="date" class="form-control w3-date" id="date" name="dob" placeholder="Date of Birth" style="border-bottom:0.1px solid black;" required="">
                 </div>
                 </div>
                 
                 
                 
                 <div class="form-row">
                 <hr/>
                 <div class="form-group col-md-6">
                 <label for="inputCity">City</label>
                 <input type="text" class="form-control" id="inputCity" name="city" style="border-bottom:0.1px solid black;" required="">
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
                  <input type="number" class="form-control" id="inputZip" name="zip" style="border-bottom:0.1px solid black;" required="">
              </div>
           </div>
          
               
          
          
          
           <div class="form-group">
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck" name="gridCheck" style="border-bottom:0.1px solid black;" required="">
                  <label class="form-check-label" for="gridCheck">
        Accept <a style="color:blue;" href="#">Term and Condition</a>
               </label>
               </div>
               
               
               
              </div>
              <button type="submit" name="submit" class="btn btn-primary w3-input">Join</button>
           </form>