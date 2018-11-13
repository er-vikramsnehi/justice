<nav class="w3-sidebar w3-bar-block w3-card " id="mobilenav" style="overflow-y: scroll;">


<div class="w3-container w3-theme-d2">
  <span onclick="closeSidebar()" class="w3-button w3-display-topright w3-medium">X</span>
  <br>
  <div class="w3-padding w3-center">
    <img class="w3-circle w3-card-2" src="images/admin.png" alt="avatar" style="width:75%">
  </div>
</div>

<li class="w3-bar-item  dropright w3-dropdown-hover w3-padding w3-hover-yellow">
 <?php 
       if(isset($_SESSION["name"])){
     ?> 
     <a style="size:120px;" ata-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-secondary dropdown-toggle w3-card-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="w3-circle" src='<?php echo $_SESSION["pimage"];?>' alt="Google Image" style="height:25px;width:25px;"> &nbsp;<?php echo $_SESSION["name"];?></a> 
     
      <ul class="dropdown-menu w3-dropdown-content w3-bar-block w3-border w3-animate-zoom" style="border:1px solid black;overflow-y: scroll;">
        <li><a class="dropdown-item w3-padding-large w3-card-2" data-toggle="modal" data-target="#myadmin" href="#Dashbord"><i class="fa fa-cog w3-large" style="color:orange;"></i> Admin Control</a></li>
        <li><a class="dropdown-item w3-padding-large" >
        
        <form action="Action/changepic.php" method="post" enctype="multipart/form-data">
        <label for="pimage" style="color:hotpink;">Change Image
         <input type="file" class="form-control" id="pimage" name="pimage" placeholder="Profile Pic" style="border-bottom:0.1px solid black;" required="" >
        </label>
         <button type="submit" name="submit" class="btn btn-primary w3-input w3-card-4">Update</button>
        </form>
  
       </a></li>
        
        <li><a class="dropdown-item w3-padding-large" href="http://blog.yashlawfirm.in"><i class="glyphicon glyphicon-dashboard w3-large w3-card-2" style="color:orange;"></i> Dashbord</a></li>
        <li><a class="dropdown-item w3-padding-large" href="#"><img src="<?php echo $_SESSION["pimage"];?>" class="w3-card-2 w3-circle" style="height:35px;width:35px;"> Profile</a></li>
        <li><a class="dropdown-item w3-padding-large w3-red" href="Action/logout.php"><i class="glyphicon glyphicon-log-out w3-large" style="color:orange;"></i> Logout</a></li>
     </ul>
      <?php }else { ?>
     <a style="size:120px;" href="#login" onclick="login()" ata-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-user-circle-o" aria-hidden="true"></i> &nbsp;Login</a> 
<?php }?>
</li>

 <li class="btn-group dropright w3-dropdown-hover w3-padding w3-hover-yellow w3-card">
     <a>Services 
     <ul class="dropdown-menu w3-dropdown-content w3-bar-block w3-border w3-animate-zoom" style="border-radius:0px 0px 15px 15px;border:1px solid red;overflow-y: scroll;">
<?php 
$navbarservice = "SELECT * from `servicenav`";
$resultService = $conn->query($navbarservice);
if ($resultService->num_rows > 0) {
    while($row = $resultService->fetch_assoc()) {
 ?>  
 <li><a class="dropdown-item w3-padding-large w3-hover-green w3-card" href='<?php echo $row["nav_url"];?>'><?php echo $row["nav_name"];?></a></li>
<?php
  }
} else {
?>  <li><a class="dropdown-item w3-padding-large" >Loading..</a></li><?php 
}
?>
     </ul></a></li>
     
     <li class="btn-group dropright w3-dropdown-hover w3-padding w3-hover-yellow w3-card"><a>Areas of Practice
     <ul class="dropdown-menu w3-dropdown-content w3-bar-block w3-border w3-animate-zoom" style="border-radius:0px 0px 15px 15px;border:1px solid red;overflow-y: scroll;">
<?php 
$navbarservice = "SELECT * from `areaofpracticenav`";
$resultService = $conn->query($navbarservice);

if ($resultService->num_rows > 0) {
    while($row = $resultService->fetch_assoc()) {
 ?>  
 <li><a class="dropdown-item w3-padding-large w3-card" href='<?php echo $row["nav_url"];?>' ><?php echo $row["nav_name"];?></a></li>
<?php
  }
} else {
?>  <li><a class="dropdown-item w3-padding-large" >Loading..</a></li><?php 
}
?></ul>
     </a></li>
   
     <li class="btn-group dropright w3-dropdown-hover w3-padding w3-hover-yellow w3-card"><a>Hon'ble Justice
     <ul class="dropdown-menu w3-dropdown-content w3-bar-block w3-border w3-animate-zoom" style="border-radius:0px 0px 15px 15px;border:1px solid red;overflow-y: scroll;">
<?php 
$honblejusticenav = "SELECT * from `honblejustice`";
$resulthonblejusticenav = $conn->query($honblejusticenav);

if ($resulthonblejusticenav->num_rows > 0) {
    while($row = $resulthonblejusticenav->fetch_assoc()) {
 ?>  
 <li><a class="dropdown-item w3-padding-large w3-card" href='<?php echo $row["nav_url"];?>' ><?php echo $row["nav_name"];?></a></li>
<?php
  }
} else {
?>  <li><a class="dropdown-item w3-padding-large" >Loading..</a></li><?php 
}
?></ul>
     </a></li>
     
     <li class="btn-group dropright w3-dropdown-hover w3-padding w3-hover-yellow w3-card"><a>Case
     <ul class="dropdown-menu w3-dropdown-content w3-bar-block w3-border w3-animate-zoom" style="border-radius:0px 0px 15px 15px;border:1px solid red;overflow-y: scroll;">
     <?php 
$navbarcasenav = "SELECT * from `casenav`";
$resultcasenav = $conn->query($navbarcasenav);

if ($resultcasenav->num_rows > 0) {
    while($row = $resultcasenav->fetch_assoc()) {
 ?>  
 <li><a class="dropdown-item w3-padding-large w3-hover-green w3-card" href='<?php echo $row["nav_url"];?>' ><?php echo $row["nav_name"];?></a></li>
<?php
  }
} else {
?>  <li><a class="dropdown-item w3-padding-large" >Loading..</a></li><?php 
}
?>
 </ul>
     </a></li>
 
     <li class="btn-group dropright w3-dropdown-hover w3-padding w3-hover-yellow w3-card"><a>Contact us
     <ul class="dropdown-menu w3-dropdown-content w3-bar-block w3-border w3-animate-zoom" style="border-radius:0px 0px 15px 15px;border:1px solid red;overflow-y: scroll;">
        <li><a class="dropdown-item w3-padding-large w3-card" >Contact us Form</a></li>
     </ul>
     </a></li>
     
</nav>
















<div class="" id="" style="color:white;weight:bold;width:100%;padding:1px;" id="secnav2">
  <button class="w3-bar-item w3-button w3-xxxlarge w3-hover-theme w3-right w3-blue w3-hide-large" onclick="openSidebar()">&#9776;</button>
</div>







<script>
closeSidebar();
function openSidebar() {
    document.getElementById("mobilenav").style.display = "block";
}
function closeSidebar() {
    document.getElementById("mobilenav").style.display = "none";
}
</script>