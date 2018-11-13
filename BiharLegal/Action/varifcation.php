<?php
session_start();
?>
<?php include("../conn.php");?>





<?php


$otpvalidate= $_SESSION["varification"];

$otp=$_POST['otp'];
echo "count";
echo $count=$_POST['count'];


if($otp==$otpvalidate){
     $otpupdate = "UPDATE `account` SET `account_active`='1' WHERE account_count= '$count'";   
}
else{
    $otpupdate = "UPDATE `account` SET `account_active`='0' WHERE account_count= '$count'";
}
   
    if ($conn->query($otpupdate) === TRUE) {
        echo "";
    } else {
        echo "Error: <br>" . $conn->error;
    }

?>




<?php 

if(isset($_POST["submit"])) {
    header('Location: ../index.php');
}
?>