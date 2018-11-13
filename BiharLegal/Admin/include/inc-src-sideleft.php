
    <div class="am-sideleft">
      <ul class="nav am-sideleft-tab w3-card-4">
        <li class="nav-item">
          <a href="#mainMenu" class="nav-link active"><i class="icon ion-ios-home-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a href="#emailMenu" class="nav-link"><i class="icon ion-ios-email-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a href="#chatMenu" class="nav-link"><i class="icon ion-ios-chatboxes-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a href="#settingMenu" class="nav-link"><i class="icon ion-ios-gear-outline tx-24"></i></a>
        </li>
      </ul>

      <div class="tab-content">
        <div id="mainMenu" class="tab-pane active">
          <ul class="nav am-sideleft-menu">
            <li class="nav-item">
              <a href="index.php" class="nav-link active">
                <i class="icon ion-ios-home-outline"></i>
                <span>Dashboard</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link with-sub">
                <i class="fa fa-plus"></i>
                <span>Insert Nav</span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="#" class="nav-link" onclick="shownotice()"><i class="fa fa-plus"></i> Notice</a></li>
                <li class="nav-item"><a href="#" class="nav-link" onclick="showcase()"><i class="fa fa-plus"></i> Case Nav</a></li>
                <li class="nav-item"><a href="#" class="nav-link" onclick="showservice()"><i class="fa fa-plus"></i> Service Nav</a></li>
                <li class="nav-item"><a href="#" class="nav-link" onclick="showareaofpractice()"><i class="fa fa-plus"></i> Area of Practce Nav</a></li>
                <li class="nav-item"><a href="#" class="nav-link" onclick="showhonblejustics()"><i class="fa fa-plus"></i> Honble Justice</a></li>
                <li class="nav-item"><a href="#" class="nav-link" onclick="showotherlinks()"><i class="fa fa-plus"></i> Other Links</a></li>
              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="#Delete" class="nav-link with-sub" style="color:orange;font-weight:bolder;">
                <i class="fa fa-trash" style="color:red;font-weight: bolder;"></i>
                <span>Delete &#38; <font style="color:blue;">Show <i class="fa fa-eye" style="color:blue;font-weight: bold;"></i></font></span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="#" class="nav-link w3-hover-orange" onclick="deletenotice()" style="color:orange;font-weight:bolder;"><i class="fa fa-trash"></i> Notice</a></li>
                <li class="nav-item"><a href="#" class="nav-link w3-hover-green" onclick="deletecase()" style="color:orange;font-weight:bolder;"><i class="fa fa-trash"></i> Case Nav</a></li>
                <li class="nav-item"><a href="#" class="nav-link w3-hover-green" onclick="deleteservice()" style="color:orange;font-weight:bolder;"><i class="fa fa-trash"></i> Service Nav</a></li>
                <li class="nav-item"><a href="#" class="nav-link w3-hover-green" onclick="deleteareaofpractice()" style="color:orange;font-weight:bolder;"><i class="fa fa-trash"></i> Area of Practce Nav</a></li>
                <li class="nav-item"><a href="#" class="nav-link w3-hover-green" onclick="deletehonble()" style="color:orange;font-weight:bolder;"><i class="fa fa-trash"></i> Honble Justice</a></li>
                <li class="nav-item"><a href="#" class="nav-link w3-hover-green" onclick="deleteotherlink()" style="color:orange;font-weight:bolder;"><i class="fa fa-trash"></i> Other Links</a></li>
              
              </ul>
            </li><!-- nav-item -->
            
            
            
            <li class="nav-item">
              <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-analytics-outline"></i>
                <span>Admin & Client</span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="#" class="nav-link" onclick="showadmin()" style="font-weight:bolder;"> <i class="icon ion-ios-analytics-outline"></i> Add Admin Account</a></li>
                <li class="nav-item"><a href="#" class="nav-link" onclick="showaccount()" style="font-weight:bolder;"> <i class="icon ion-ios-analytics-outline"></i> Add User Account</a></li>
                
                <li class="nav-item"><a href="#" class="nav-link w3-hover-green" onclick="deleteadmin()" style="color:orange;font-weight:bolder;"><i class="fa fa-trash"></i> Delete Admin Account</a></li>
                <li class="nav-item"><a href="#" class="nav-link w3-hover-green" onclick="deleteaccount()" style="color:orange;font-weight:bolder;"><i class="fa fa-trash"></i> Delete User Account</a></li>
              </ul>
            </li> 
            
              
            
            
             <li class="nav-item">
              <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-analytics-outline"></i>
                <span>My Company</span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="#" class="nav-link" style="font-weight:bolder;" onclick="EditCompany()"> <i class="icon ion-ios-analytics-outline"></i> Update New Profile</a></li>
              </ul>
            </li>
            
           
            
            
               <li class="nav-item">
              <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-analytics-outline"></i>
                <span>Advocate Links</span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="#" class="nav-link" style="font-weight:bolder;"> <i class="icon ion-ios-analytics-outline"></i> Footer Links</a></li>
                <li class="nav-item"><a href="#" class="nav-link" style="font-weight:bolder;"> <i class="icon ion-ios-analytics-outline"></i>Advocate Info</a></li>
                
                   </ul>
            </li>
            
          
           
             <li class="nav-item">
              <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-analytics-outline"></i>
                <span>My Sliders</span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="#" class="nav-link" style="font-weight:bolder;" onclick=""> <i class="icon ion-ios-analytics-outline"></i> Add Image</a></li>
                <li class="nav-item"><a href="#" class="nav-link" style="font-weight:bolder;"> <i class="icon ion-ios-analytics-outline"></i>Delete Image</a></li>
                
                   </ul>
            </li> 
            
            
            
             <li class="nav-item">
              <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-analytics-outline"></i>
                <span>Other Links Items</span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="#" class="nav-link" style="font-weight:bolder;" onclick=""> <i class="icon ion-ios-analytics-outline"></i> Add Item</a></li>
                <li class="nav-item"><a href="#" class="nav-link" style="font-weight:bolder;"> <i class="icon ion-ios-analytics-outline"></i>Delete Item</a></li>
                
                   </ul>
            </li> 
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
           <!-- nav-item -->
          </ul>
        </div><!-- #mainMenu -->
        <div id="emailMenu" class="tab-pane">
          <div class="pd-x-20 pd-y-10">
            <a href="" class="btn btn-orange btn-block btn-compose">Compose Email</a>
          </div>
          <ul class="nav am-sideleft-menu">
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="icon ion-ios-filing-outline"></i>
                <span>Inbox</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="icon ion-ios-filing-outline"></i>
                <span>Drafts</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="icon ion-ios-paperplane-outline"></i>
                <span>Sent</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="icon ion-ios-trash-outline"></i>
                <span>Trash</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="icon ion-ios-filing-outline"></i>
                <span>Spam</span>
              </a>
            </li><!-- nav-item -->
          </ul>

          <label class="pd-x-20 tx-uppercase tx-11 mg-t-10 tx-orange mg-b-0 tx-medium">My Folder</label>
          <ul class="nav am-sideleft-menu">
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="icon ion-ios-folder-outline"></i>
                <span>Updates</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="icon ion-ios-folder-outline"></i>
                <span>Social</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="icon ion-ios-folder-outline"></i>
                <span>Promotions</span>
              </a>
            </li><!-- nav-item -->
          </ul>
        </div><!-- #emailMenu -->
        <div id="chatMenu" class="tab-pane">
          <div class="chat-search-bar">
            <input type="search" class="form-control wd-150" placeholder="Search Post...">
            <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
          </div><!-- chat-search-bar -->

          <label class="pd-x-15 tx-uppercase tx-11 mg-t-20 tx-orange mg-b-10 tx-medium">User Case</label>
         
         
         
         
          <div class="list-group list-group-chat">
     <?php 
    
    $formreg = "select * from `formreg`";
    
    $resultsqlform = $conn->query($formreg);
    
    if ($resultsqlform->num_rows > 0) {
        while($row = $resultsqlform->fetch_assoc()) {
    ?>        
           <a class="list-group-item" style="border: 4px solid black;">
                 <h6 style="color:blue;font-weight:bold;"><?php echo $row["formreg_name"];?></h6>
               <span><?php echo $row["formreg_email"];?></span>
              
              <div class="d-flex align-items-center">
           
                
              <div class="">
                 <embed src="../pdf/<?php echo $row["formreg_file"];?>" type="application/pdf" height="300" width="200"/>
             
                </div>
              </div><!-- d-flex -->
               <span><img src='../<?php echo $row["userimage"]?>'; style="height:30px;width:30px" class="w3-circle img-responsive"></span>
               <span><pre><?php echo $row["formreg_message"];?></pre>
               <h6><?php echo $row["formreg_username"];?></h6>
               </span>
            </a><!-- list-group-item -->
       
   <?php 
   
        }
    } else {
        echo "0 results";
    }
    
   
   ?>  
  
       
       
       
       
       
          </div><!-- list-group -->
          <span class="d-block pd-15 tx-12">Loading messages...</span>

        </div><!-- #chatMenu -->
        <div id="settingMenu" class="tab-pane">
          <div class="pd-x-15">
            <label class="tx-uppercase tx-11 mg-t-10 tx-orange mg-b-15 tx-medium">Quick Settings</label>
            <div class="bd pd-15">
              <h6 class="tx-13 tx-normal tx-gray-800">Daily Newsletter</h6>
              <p class="tx-12">Get notified when someone else is trying to access your account.</p>
              <div class="toggle toggle-light warning"></div>
            </div><!-- bd -->

            <div class="bd pd-15 mg-t-15">
              <h6 class="tx-13 tx-normal tx-gray-800">Call Phones</h6>
              <p class="tx-12">Make calls to friends and family right from your account.</p>
              <div class="toggle toggle-light warning"></div>
            </div><!-- bd -->

            <div class="bd pd-15 mg-t-15">
              <h6 class="tx-13 tx-normal tx-gray-800">Login Notifications</h6>
              <p class="tx-12">Get notified when someone else is trying to access your account.</p>
              <div class="toggle toggle-light warning"></div>
            </div><!-- bd -->

            <div class="bd pd-15 mg-t-15">
              <h6 class="tx-13 tx-normal tx-gray-800">Phone Approvals</h6>
              <p class="tx-12">Use your phone when login as an extra layer of security.</p>
              <div class="toggle toggle-light warning"></div>
            </div><!-- bd -->
          </div>
        </div><!-- #settingMenu -->
      </div><!-- tab-content -->
    </div><!-- am-sideleft -->




 




