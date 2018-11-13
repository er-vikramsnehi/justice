<?php include('../../conn.php');?>
 
 <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Notice #</th>
        <th>Notice Name</th>
        <th>URL</th>
        <th>Date</th>
        <th class="w3-red">Delete</th>
      </tr>
   </thead>
   <?php 
$sqlnotice = "SELECT * FROM notice";
$resulsqlnotice = $conn->query($sqlnotice);
  
 if ($resulsqlnotice->num_rows > 0) {
     while($row = $resulsqlnotice->fetch_assoc()) {
        ?>   
    <tr class="w3-hover-green">
      <td><?php echo $row["notice_id"];?></td>
      <td><?php echo $row["notice_name"];?></td>
      <td><?php echo $row["notice_url"];?></td>
      <td><?php echo $row["notice_date"];?></td>
      <td><a href="pages/deletebox/deletenoti.php?id=<?php echo $row["notice_id"];?>"><i class="fa fa-trash" style="color:red;"></i></a></td>
    </tr>
<?php
  }
} else {
    echo " ";
}
?> 
  </table>
  
  
  
