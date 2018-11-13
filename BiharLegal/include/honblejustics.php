<?php include('../conn.php');?>
<div class="w3-light-grey">
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content" style="max-width:1600px;margin-top:83px">
  
  <!-- Photo grid -->
  <div class="w3-row w3-grayscale-min">
  
   <?php
$count =1;
$accountcount = "select * from `honblejustice`";

$resultaccountcount = $conn->query($accountcount);
if ($resultaccountcount->num_rows > 0) {
    
    while($row = $resultaccountcount->fetch_assoc()) {
   $count=$count+1;     
    ?>
  
   <div class="w3-quarter" style="height: 350px;">
      <label >
      <img src="Admin/upload/<?php echo $row['nav_page'];?>" style="width:100%;height: 300px;" onclick="OpnJus(this)" alt="No Image" class="w3-border">
      <center><a href="<?php echo $row['nav_url'];?>"><pre style="font-weight:bold;"><?php echo $row['nav_name'];?></pre></a></center>
      </label>
   </div>
   &nbsp;
<?php
  }
}
?>
<hr/><br/>
  </div>
<!-- End page content -->
</div>
 
</div>
