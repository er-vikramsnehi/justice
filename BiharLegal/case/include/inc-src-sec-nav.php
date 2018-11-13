<nav class="navbar w3-small">
<ul class="navbar-nav nav container w3-hide-small" style="color:white;weight:bold;width:100%;padding:1px;display:inline;" id="secnav">
     <li><a></a></li>
     <li><a>Home</a></li>
     
     <li class="btn-group dropright w3-dropdown-hover w3-card">
     <a>Services 
     <ul class="dropdown-menu w3-dropdown-content w3-bar-block w3-border w3-animate-zoom" style="border-radius:0px 0px 15px 15px;border:1px solid red;">
<?php 
$navbarservice = "SELECT * from `servicenav`";
$resultService = $conn->query($navbarservice);
if ($resultService->num_rows > 0) {
    while($row = $resultService->fetch_assoc()) {
 ?>  
 <li><a class="dropdown-item w3-padding-large w3-hover-green" onclick="servicereg()"><?php echo $row["nav_name"];?></a></li>
<?php
  }
} else {
?>  <li><a class="dropdown-item w3-padding-large" >Loading..</a></li><?php 
}
?>
     </ul></a></li>
     
     <li class="btn-group dropright w3-dropdown-hover w3-card"><a>Areas of Practice
     <ul class="dropdown-menu w3-dropdown-content w3-bar-block w3-border w3-animate-zoom" style="border-radius:0px 0px 15px 15px;border:1px solid red;">
<?php 
$navbarservice = "SELECT * from `areaofpracticenav`";
$resultService = $conn->query($navbarservice);

if ($resultService->num_rows > 0) {
    while($row = $resultService->fetch_assoc()) {
 ?>  
 <li><a class="dropdown-item w3-padding-large" href='<?php echo $row["nav_url"];?>' ><?php echo $row["nav_name"];?></a></li>
<?php
  }
} else {
?>  <li><a class="dropdown-item w3-padding-large" >Loading..</a></li><?php 
}
?></ul>
     </a></li>
   
     <li class="btn-group dropright w3-dropdown-hover w3-card"><a>Hon'ble Justice
     <ul class="dropdown-menu w3-dropdown-content w3-bar-block w3-border w3-animate-zoom" style="border-radius:0px 0px 15px 15px;border:1px solid red;">
<?php 
$honblejusticenav = "SELECT * from `honblejustice`";
$resulthonblejusticenav = $conn->query($honblejusticenav);

if ($resulthonblejusticenav->num_rows > 0) {
    while($row = $resulthonblejusticenav->fetch_assoc()) {
 ?>  
 <li><a class="dropdown-item w3-padding-large" href='<?php echo $row["nav_url"];?>' ><?php echo $row["nav_name"];?></a></li>
<?php
  }
} else {
?>  <li><a class="dropdown-item w3-padding-large" >Loading..</a></li><?php 
}
?></ul>
     </a></li>
     
     <li class="btn-group dropright w3-dropdown-hover w3-card"><a>Case
     <ul class="dropdown-menu w3-dropdown-content w3-bar-block w3-border w3-animate-zoom" style="border-radius:0px 0px 15px 15px;border:1px solid red;">
     <?php 
$navbarcasenav = "SELECT * from `formreg`";
$resultcasenav = $conn->query($navbarcasenav);

if ($resultcasenav->num_rows > 0) {
    while($row = $resultcasenav->fetch_assoc()) {
 ?>  
 <li>

 
 <a class="dropdown-item w3-padding-large w3-hover-green" href="case/view.php?caseno=<?php echo $row['formreg_count'];?>"><?php echo $row["formreg_name"];?> </a>
 
</li>
<?php
  }
} else {
?>  <li><a class="dropdown-item w3-padding-large" >Loading..</a></li><?php 
}
?>
<li><a class="dropdown-item w3-padding-large" href="case">View all registered #case</a></li>
 </ul>
     </a></li>
 
     <li class="btn-group dropright w3-dropdown-hover w3-card"><a>Contact us
     <ul class="dropdown-menu w3-dropdown-content w3-bar-block w3-border w3-animate-zoom" style="border-radius:0px 0px 15px 15px;border:1px solid red;">
        <li><a class="dropdown-item w3-padding-large" >Contact us Form</a></li>
     </ul>
     </a></li>
     
   <li class="w3-bar-item w3-right dropright w3-dropdown-hover w3-active active w3-card-2">
 <?php 
       if(isset($_SESSION["name"])){
     ?> 
     <a style="size:120px;" ata-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="w3-circle" src='<?php echo $_SESSION["pimage"];?>' alt="Google Image" style="height:25px;width:25px;"> &nbsp;<abbr title="<?php echo $_SESSION["email"];?>"><?php echo $_SESSION["name"];?></abbr></a> 
     
      <ul class="dropdown-menu w3-dropdown-content w3-bar-block w3-border w3-animate-zoom" style="border:1px solid black;">
          
 
        <li><a class="dropdown-item w3-padding-large w3-card" data-toggle="modal" data-target="#myadmin" href="#Dashbord"><i class="fa fa-cog w3-large" style="color:orange;"></i> Admin Control</a></li>
        <li>
            
        <a class="dropdown-item w3-padding-large w3-card" >
        <form action="Action/changepic.php" method="post" enctype="multipart/form-data">
        <label for="pimage" style="color:hotpink;font-weight:bold;">Change Image
         <input type="file" class="form-control" id="pimage" name="pimage" placeholder="Profile Pic" style="border-bottom:0.1px solid black;" required="" >
        </label>
         <button type="submit" name="submit" class="btn btn-primary w3-input">Update</button>
        </form>
  
       </a></li>
        
        <li><a class="dropdown-item w3-padding-large w3-card" href="http://blog.yashlawfirm.in"><i class="glyphicon glyphicon-dashboard w3-large" style="color:orange;"></i> Dashbord</a></li>
        <li><a class="dropdown-item w3-padding-large w3-card" href="Profile/"><img src="<?php echo $_SESSION["pimage"];?>" class="w3-card-2 w3-circle" style="height:35px;width:35px;"> Profile</a></li>
        <li><a class="dropdown-item w3-padding-large w3-red w3-card" href="Action/logout.php"><i class="glyphicon glyphicon-log-out w3-large" style="color:orange;"></i> Logout</a></li>
     </ul>
      <?php }else { ?>
     <a style="size:120px;" href="#login" onclick="login()" ata-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-user-circle-o" aria-hidden="true"></i> &nbsp;Login</a> 
<?php }?>
</li>

  </ul>
  
  <ul class="navbar-nav nav ">
 <li><a class="w3-padding w3-white w3-hover-yellow" style="float:right;curser:pointer;" onmouseover="openSidebar()"><i class="fa fa-indent"></i></a></li>
  </ul>
</nav>













<script>
closeSidebar();
function openSidebar() {
    document.getElementById("mobilenav").style.display = "block";
}
function closeSidebar() {
    document.getElementById("mobilenav").style.display = "none";
}
</script>