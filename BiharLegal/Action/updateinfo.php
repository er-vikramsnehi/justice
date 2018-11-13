<?php
session_start();
?>
<?php include("../conn.php");?>





<?php

$name=$_POST['name'];







$email=$_POST['email'];

$count=$_POST['count'];
$password=$_POST['pwd'];

$epwd=md5($password);
$eemail=md5($email);



$emailpupdate = "UPDATE `account` SET `account_name`='$name',`account_email`='$email',`account_eemail`='$eemail',`account_pwd`='$password',`account_epwd`='$epwd' WHERE account_count= '$count'";  


if ($conn->query($emailpupdate) === TRUE) {
    echo "Updated..";
} else {
    echo "Error: <br>" . $conn->error;
}




 
   header('Location: activation.php');
 
 
?>