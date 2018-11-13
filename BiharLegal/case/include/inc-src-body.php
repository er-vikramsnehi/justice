<div class="row">
<div class="col-md-12">
<!-- First Side -->
<div class="col-md-3">
<div id="lista" class="">

<center><header class="w3-input" style="font-weight:bold;color:white;top:0px;">OTHER LINKS</header></center>
<ul style="color:white;list-style-type:none;padding:8px;" class="w3-small w3-bar-block">
 <?php 
 $sqlotherlinks = "SELECT * FROM otherlinks";
 $resultotherlinks = $conn->query($sqlotherlinks);

 if ($resultotherlinks->num_rows > 0) {
     while($row = $resultotherlinks->fetch_assoc()) {
        ?> 
        <li style="left:0px;font-size:92%;" class="w3-bar-item dropright w3-dropdown-hover w3-hover-white"><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;<?php echo $row["olinks"];?></li>
<?php
  } 
} else {
    echo "0 results";
}
?>
</ul>
</div>
</div>
<!--Second Side  -->
<div class="col-md-6 col-sm-12">

<h4 style="font-weight:bold;color:red;">Company Profile</h4>
<h5 style="font-weight:bold;">Full Service Law Firm</h5>
<p style="font-family:roman;line-height: 1.8;" class="blog w3-small">
Pardeep Sharma & ASSOCIATES is a full-service law firm providing innovative legal solutions to its domestic as well as international clients. The firm offers a large portfolio of legal services through its offices located at Kumar Toli, Patna, Near Chiraiyantand Pool.
The stimulating work environment brings together the best legal brains at ALOK RANJAN & ASSOCIATES to take care of all legal needs of our clients. The 10-lawyer strong team comprises of experienced, dynamic, enterprising and innovative legal experts having outstanding academic and professional records.
</p>

<div class="row">
<div class="col-md-12">
<center>
<img src="images/admin.png" class="img-thumbnail img-responsive w3-card" style="height:300px;"><br/><br/>
<b>Dr. Pardeep Sharma</b>
<p>Advocate</p>
<p><b>(High Court, Patna)</b></p>

</center>
</div>
</div>

</div>


<!--Third Side  -->
<div class="col-md-3 w3-container" id="rightnav" height="400px;">
<center><header class="w3-input" style="font-family: Times New Roman, Times, serif;font-weight:bold;background-color:#2f2f2f;color:white;">NOTICE</header></center>
<div style="background-color: #2889ca;color:white;font-weight:bold;" id="marqnotc" class=" w3-card-2">
<marquee id="marqueenotice"  style="height:300px;overflow: hidden;" direction = "up" scrolldelay="100" scrollamount="2" class="w3-container"> <?php 
$sqlnotice = "SELECT * FROM notice ORDER BY notice_id DESC";
$resultnotice = $conn->query($sqlnotice);

if ($resultnotice->num_rows > 0) {
    while($row = $resultnotice->fetch_assoc()) {
        ?> 
<p><a onMouseOver="document.all.marqueenotice.stop()" onMouseOut="document.all.marqueenotice.start()" style="font-size:80%;" href="<?php echo $row["notice_url"];?>"><img src="images/new.gif"> &nbsp; <?php echo $row["notice_name"];?></a></p>
<?php
  } 
} else {
   ?>
   <marquee direction = "up" scrolldelay="100" scrollamount="2" onMouseOver="document.all.marqueenotice.stop()" onMouseOut="document.all.marqueenotice.start()" ><img src="images/new.gif"> &nbsp; No any Notice</marquee>
   
   <?php
}
?>
</marquee>
</div>








</div>
</div>