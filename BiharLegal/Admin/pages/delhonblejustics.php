<?php include('../../conn.php');?>
 
 <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Justics #</th>
        <th>Justics Name</th>
        <th>URL</th>
        <th>Image</th>
        <th class="w3-red">Delete</th>
      </tr>
   </thead>
   <?php 
$sqlnotice = "SELECT * FROM honblejustice";
$resulsqlnotice = $conn->query($sqlnotice);
  
 if ($resulsqlnotice->num_rows > 0) {
     while($row = $resulsqlnotice->fetch_assoc()) {
        ?>   
    <tr class="w3-hover-green">
      <td><?php echo $row["nav_id"];?></td>
      <td><?php echo $row["nav_name"];?></td>
      <td><?php echo $row["nav_url"];?></td>
      <td><img src="upload/<?php echo $row['nav_page'];?>" style="height: 30px;width:30px;" class="w3-circle img-responsive"></td>
      <td><a href="pages/deletebox/deletehonblejustics.php?id=<?php echo $row["nav_id"];?>"><i class="fa fa-trash" style="color:red;"></i></a></td>
    </tr>
<?php
  }
} else {
    echo " ";
}
?> 
  </table>
  
  
  
