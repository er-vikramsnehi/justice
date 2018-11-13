<?php 
session_start();
ob_start();
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$DBaseMeta = "biharlegal";

$conn = new mysqli($servername, $username, $password,$DBaseMeta);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 

<?php
$count =1;
$accountcount = "select * from account";

$resultaccountcount = $conn->query($accountcount);
if ($resultaccountcount->num_rows > 0) {
    
    while($row = $resultaccountcount->fetch_assoc()) {
   $count=$count+1;     
                                                   }
} else {
    echo "Not result";
}
 
?>



<?php

$password=$_POST['password'];
$gname=$_POST['name'];

$gender=$_POST['gender'];

$email=$_POST['email'];
$gpimage="upload/".$_POST['pimage'];
$gcover=$_POST['cover'];
$address=$_POST['address'];

$gridCheck="on";

$epwd=md5($password);
$eemail=md5($email);

?>





<?php 

$sqlaccount = "INSERT INTO account (account_name,account_email,account_eemail,account_gender,account_address,account_image,account_cover,account_gridCheck,account_pwd,account_epwd,account_count,account_active)
VALUES ('$gname', '$email','$eemail','$gender','$address','$gpimage','$gcover','$gridCheck','$password','$epwd','$count','1')";

if ($conn->query($sqlaccount) === TRUE) {
    echo "";
} else {
    echo "Error: <br>" . $conn->error;
}

?>




<?php 

 
$account = "select * from account WHERE `account_count` = '$count'";

$resultsqlaccount = $conn->query($account);

if ($resultsqlaccount->num_rows > 0) {
    while($row = $resultsqlaccount->fetch_assoc()) {
        
       $_SESSION['count']=$row["account_count"];
       $_SESSION["name"]=$row["account_name"];
       $_SESSION["email"]=$row["account_email"];
       $_SESSION["address"]=$row["account_address"];
        
       $_SESSION["mobile"]=$row["account_number"];
       $_SESSION["dob"]=$row["account_dob"];
       $_SESSION["city"]=$row["account_city"];
       $_SESSION["state"]=$row["account_state"];
       $_SESSION["zip"]=$row["account_zip"];
       $_SESSION["startdate"]=$row["account_startdate"];
       $_SESSION["gender"]=$row["account_gender"];
       $_SESSION['pimage']=$row["account_image"];
       $_SESSION['position']=$row["account_position"];
       $_SESSION['active']=$row["account_active"];
        
         
 
    }
} else {
    echo "0 results";
}


?>



 

<?php 
header('Location: ../index.php');
?>