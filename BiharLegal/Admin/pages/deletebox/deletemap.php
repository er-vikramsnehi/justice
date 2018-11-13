<?php include('../../../conn.php');?>
 
 <?php 
 $id=$_GET['id'];
 ?>
 
 <?php 
 
 $sqldeletenotic = "delete FROM map WHERE map_id='$id'";
 
 if ($conn->query($sqldeletenotic) === TRUE) {
     header('Location: ../../index.php');
 } else {
     echo "Error deleting record: " . $conn->error;
 }
 
 
 
 
 ?>