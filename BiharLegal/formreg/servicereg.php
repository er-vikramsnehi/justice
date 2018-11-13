<?php
session_start();
ob_start();
?>
<?php include('../conn.php');?>

<center><h3><b><i class="fa fa-gavel"></i> Create Your Case <i class="fa fa-gavel"></i> </b></h3>
<b style="color:navy;"><?php if(isset($_SESSION["name"])){ echo $_SESSION["name"];}?></b>

</center>



 <?php
$count =1;
$accountcount = "select * from formreg";

$resultaccountcount = $conn->query($accountcount);
if ($resultaccountcount->num_rows > 0) {
    
    while($row = $resultaccountcount->fetch_assoc()) {
   $count=$count+1;     
                                                   }
} else {
    echo "You are first";
}
 
?>
<h4 style="float:right;">Your #Case number: <?php echo $count; ?></h4>

<form action="formreg/action/servicereginsert.php" method="post" enctype="multipart/form-data" <?php if(!isset($_SESSION["count"])){ ?>title="Please Login to Send"<?php }?>>


<div class="form-group">
    <label for="case" style="color: black;">#Case HeadLine</label>
    <input type="text" class="form-control" id="case" name="case" placeholder="HeadLine (27 char)" style="border:1px solid black;" maxlength="27">
</div>


<div class="form-group">
    <label for="email" style="color: black;">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php if(isset($_SESSION["email"])){ echo $_SESSION["email"];}?>" style="border:1px solid black;">
</div>

 <div class="form-group">
    <label for="service" style="color: black;">Service</label>
    <select class="form-control" id="service" name="service" style="border:1px solid black;">
     
     
     
     <?php 
$navbarservice2 = "SELECT * from `servicenav`";
$resultService2 = $conn->query($navbarservice2);
if ($resultService2->num_rows > 0) {
    while($row = $resultService2->fetch_assoc()) {
 ?>  
 <option><?php echo $row["nav_name"];?></option>
<?php
  }
}  
?>

    </select>
  </div>
  
  <div class="form-group">
    <label for="cfile" style="color: black;">#Case File <font style="color:red;">(PDF)</font></label>
    <input type="file" class="form-control" id="cfile" placeholder="pdf file" style="border:1px solid black;" name="cfile" accept="application/pdf">
</div>

  
  <div class="form-group">
    <label for="message" style="color: black;">Message</label>
    <textarea class="form-control" id="message" name="message" rows="3" style="border:1px solid black;"></textarea>
  </div>
  
  <button type="submit" class="btn btn-success w3-input" <?php if(!isset($_SESSION["count"])){ echo "disabled";}?>><i class="fa fa-envelope"></i> Send </button>
</form>


