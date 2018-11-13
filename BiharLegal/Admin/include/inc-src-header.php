 
 <div class="am-header w3-white w3-card-4">
      <div class="am-header-left">
        <a id="naviconLeft" href="" class="am-navicon d-none d-lg-flex"><i class="icon ion-navicon-round"></i></a>
        <a id="naviconLeftMobile" href="" class="am-navicon d-lg-none"><i class="icon ion-navicon-round"></i></a>
  <?php 
       if(isset($_SESSION["aname"])){
     ?> 
            <a href="index.php" class="am-logo" style="color:black;"><?php echo $_SESSION["aname"];?></a>
            <?php 
       }
            ?>
      </div><!-- am-header-left -->

      <div class="am-header-right ">
        <div class="dropdown dropdown-notification">
          <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
            <i class="icon ion-ios-bell-outline tx-24" style="color:red;"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
            <!-- end: if statement -->
          </a>
          <div class="dropdown-menu wd-300 pd-0-force">
            <div class="dropdown-menu-header">
              <label>Notifications</label>
              <a href="">Mark All as Read</a>
            </div><!-- d-flex -->

            <div class="media-list">
              <!-- loop starts here -->
              
    <?php
$ac=$count =1;
$accountcount = "select * from account";

$resultaccountcount = $conn->query($accountcount);

if ($resultaccountcount->num_rows > 0) {
    
    while($row = $resultaccountcount->fetch_assoc()) {
   $count=$count+1;     
                                                   }
} else {
    echo "Not result";
}
 
?>

<?php 

$postcount = "select * from posts";
$resultadmincount = $conn->query($postcount);

if ($resultadmincount->num_rows > 0) {
    
    while($row = $resultadmincount->fetch_assoc()) {
        $ac=$ac+1;
    }
} else {
    echo "Not result";
}

?>           
               <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="../User.png" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0"><strong class="tx-medium">User Account</strong> 
                    </p>
                    <p style="color:white;font-weight: bold;"><?php echo $count;?> Account in Enrolled.</p>
                    </div>
                </div><!-- media -->
              </a>
              <!-- loop ends here -->
                  <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="../User.png" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0"><strong class="tx-medium">User POST</strong> 
                    </p>
                    <p style="color:white;font-weight: bold;"><?php echo $ac;?> Account in Enrolled.</p>
                    <span class="tx-12" style="color:white;font-weight: bold;"><?php echo date("h:i:sa");?></span>
                  </div>
                </div><!-- media -->
              </a>
              <!-- loop ends here -->
               
               
              
              <div class="media-list-footer">
                <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
              </div>
            </div><!-- media-list -->
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <div class="dropdown dropdown-profile">
          <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <img src="../img/img3.jpg" class="wd-32 rounded-circle" alt="">
            <span class="logged-name"><span class="hidden-xs-down" style="color:black;">
  <?php 
       if(isset($_SESSION["aname"])){
     ?> 
           <img alt="Image" src="<?php echo $_SESSION["apimage"];?>" style="height: 45px;width:45px;" class="img-responsive w3-circle img-circle w3-card-2 w3-white">
           <?php echo $_SESSION["aname"];?>
            <?php 
       }
            ?>

</span> <i class="fa fa-angle-down mg-l-3"></i></span>
          </a>
          <div class="dropdown-menu wd-200">
            <ul class="list-unstyled user-profile-nav">
             
             <li><i class="icon ion-ios-person-outline"></i>
       
        <form action="changeimage.php" method="post" enctype="multipart/form-data">
        <label for="pimage">Change Image
         <input type="file" class="form-control" id="pimage" name="pimage" placeholder="Profile Pic" style="border-bottom:0.1px solid black;" required="" >
        </label>
         <button type="submit" name="submit" class="btn btn-primary w3-input">Update</button>
        </form>
             </li>
             
             <li><a href="../index.php"><i class="icon ion-ios-star-outline"></i> Back to Home</a></li>
           
            <li><a href="../Action/logout.php"><i class="icon ion-power"></i> Sign Out</a></li>
            </ul>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </div><!-- am-header-right -->
    </div><!-- am-header -->

