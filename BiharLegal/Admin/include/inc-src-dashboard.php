<div class="am-mainpanel">
  <div class="am-pagetitle">
        <h5 class="w3-card-4">snehi.pro</h5>
        <div id="searchBar" class="search-bar" >
         </div><!-- search-bar -->
  </div><!-- am-pagetitle -->
 
<div class="container-fluid" id="dashb">
 
 
 <div class="row">
 
  <div class="card pd-20 pd-sm-40 col-sm-6" style="border:5px solid black;">
      <center><h2>Service & #Case</h2></center>
  
                       <table id="datatable2" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-10p">Case Name</th>
                  <th class="wd-15p">Email</th>
                  <th class="wd-5p">File</th>
                  <th class="wd-15p">By Client</th>
                 </tr>
              </thead>
              <tbody>  
<?php 
$sqlaccount = "SELECT * FROM formreg";
$result = $conn->query($sqlaccount);

if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        ?> 
    <tr>
                  <td><?php echo $row["formreg_name"];?></td>
                  <td><?php echo $row["formreg_email"];?></td>
                  <td><a href='../pdf/<?php echo $row["formreg_file"];?>'>View File</a></td>
                  <td><?php echo $row["formreg_username"];?></td>
   </tr> 
<?php
  }
} else {
    echo "0 results";
}
?>          
            </tbody>
            </table>
 
        </div><!-- card --> 
 
 
 
 <div class="card pd-20 pd-sm-40 col-sm-6" style="border:5px solid black;">
      <center><h2>Client</h2></center>
   
                       <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-20p">Client Name</th>
                  <th class="wd-15p">Email</th>
                  <th class="wd-15p">Number</th>
                  <th class="wd-15p">City</th>
                 </tr>
              </thead>
              <tbody>  
 

 <?php 
$sqlaccount = "SELECT * FROM account";
$result = $conn->query($sqlaccount);

if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        ?> 
    <tr>
                  <td><?php echo $row["account_name"];?></td>
                  <td><?php echo $row["account_email"];?></td>
                  <td><?php echo $row["account_number"];?></td>
                  <td><?php echo $row["account_city"];?></td>
   </tr> 
<?php
  }
} else {
    echo "0 results";
}
?>          
                      
              
     </tbody>
     </table>
 
</div><!-- card -->

</div>
</div>
</div>

 