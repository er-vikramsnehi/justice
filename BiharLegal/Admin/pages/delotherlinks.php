<?php include('../../conn.php');?>
 
 <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>OtherLinks #</th>
        <th>Links Name</th>
        <th>URL</th>
        <th class="w3-red">Delete</th>
      </tr>
   </thead>
   <?php 
$sqlnotice = "SELECT * FROM otherlinks";
$resulsqlnotice = $conn->query($sqlnotice);
  
 if ($resulsqlnotice->num_rows > 0) {
     while($row = $resulsqlnotice->fetch_assoc()) {
        ?>   
    <tr class="w3-hover-green">
      <td><?php echo $row["id"];?></td>
      <td><?php echo $row["olinks"];?></td>
      <td><?php echo $row["url"];?></td>
      <td><a href="pages/deletebox/deleteotherlinks.php?id=<?php echo $row["id"];?>"><i class="fa fa-trash" style="color:red;"></i></a></td>
    </tr>
<?php
  }
} else {
    echo " ";
}
?> 
  </table>
  
  
  
