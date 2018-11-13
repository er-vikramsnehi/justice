<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$DBaseMeta = "biharlegal";
 
$conns = new mysqli($servername, $username, $password,$DBaseMeta);

 
if ($conns->connect_error) {
    die("Connection failed: " . $conns->connect_error);
}
?> 
  <div class="am-mainpanel">
      <div class="am-pagebody">
 
<div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Basic Responsive DataTable</h6>
          <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>
         <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Name</th>
                  <th class="wd-25p">Email</th>
                  <th class="wd-20p">Number</th>
                  <th class="wd-15p">Address</th>
                  <th class="wd-10p">Position</th>
                  <th class="wd-25p">Start Date</th>
                  <th class="wd-25p">Salary</th>
                  <th class="wd-25p">Image</th>
                  <th class="wd-25p">Cover Image</th>
                  <th class="wd-25p">DOB</th>
                 
                                    
                </tr>
              </thead>
              <tbody>  
 

 <?php 
$sqlaccount = "SELECT * FROM account";
$result = $conns->query($sqlaccount);

if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        ?> 
    <tr>
                  <td><?php echo $row["account_name"];?></td>
                  <td><?php echo $row["account_email"];?></td>
                  <td><?php echo $row["account_number"];?></td>
                  <td><?php echo $row["account_address"];?></td>
                  <td><?php echo $row["account_position"];?></td>
                  <td><?php echo $row["account_salary"];?></td>
                  <td><?php echo $row["account_image"];?></td>
                  <td><?php echo $row["account_cover"];?></td>
                  <td><?php echo $row["account_dob"];?></td>
                  <td style="color:red;">Delete this Account</td>
   </tr> 
<?php
  }
} else {
    echo "0 results";
}
?>          
                      
              
              </tbody>
            </table>
          </div><!-- table-wrapper -->
</div><!-- card -->
</div>
</div>