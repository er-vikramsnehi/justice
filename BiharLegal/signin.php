<form action="Action/login.php" method="POST">
          <div class="col-lg-5">
            <div>
              <h3>Yash Raj Firm</h3><hr/>
              <p>Account</p>
               <a href="Action/google/index.php" ><img src='Action/google/gplus-lib/signin_button.png' height='50px'/></a>
             
              <hr>
              <p>Don't have an account? <br> <a href="#signup" onclick="signup()" style="color: red;">Sign up Now</a></p>
            </div>
          </div>
          <div class="col-lg-7">
            <h5 class="tx-gray-800 mg-b-25">Signin to Your Account</h5>

            <div class="form-group">
              <label class="form-control-label">Email:</label>
              <input type="email" name="email" class="form-control" placeholder="Enter your email address">
            </div><!-- form-group -->

            <div class="form-group">
              <label class="form-control-label">Password:</label>
              <input type="password" name="password" class="form-control" placeholder="Enter your password">
            </div><!-- form-group -->

            <div class="form-group mg-b-20"><a href="">Reset password</a></div>

            <button type="submit" class="btn btn-block btn-success">Sign In</button>
          </div><!-- col-7 -->        
 </form>