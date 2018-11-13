<?php
session_start();
?>
<?php include("../conn.php");?>

<?php 

$email=$_POST['email'];
$password=$_POST['password'];
$epwd=md5($password);
 
$account = "select * from account WHERE `account_email` = '$email' && `account_epwd`='$epwd'";

$resultsqlaccount = $conn->query($account);

if ($resultsqlaccount->num_rows > 0) {
    while($row = $resultsqlaccount->fetch_assoc()) {
        
       $_SESSION['count']=$row["account_count"];
       $_SESSION["name"]=$row["account_name"];
       $_SESSION["email"]=$row["account_email"];
       $_SESSION["address"]=$row["account_address"];
       $_SESSION["password"]=$row["account_pwd"];
       $_SESSION["mobile"]=$row["account_number"];
       $_SESSION["dob"]=$row["account_dob"];
       $_SESSION["city"]=$row["account_city"];
       $_SESSION["state"]=$row["account_state"];
       $_SESSION["zip"]=$row["account_zip"];
       $_SESSION["startdate"]=$row["account_startdate"];
       $_SESSION["gender"]=$row["account_gender"];
       $_SESSION['pimage']=$row["account_image"];
       $_SESSION['cover']=$row["account_cover"];
       $_SESSION['position']=$row["account_position"];
       $_SESSION['active']=$row["account_active"];
        
       $_SESSION['facebook']=$row["facebook"];
       $_SESSION['twitter']=$row["twitter"];
       $_SESSION['instagram']=$row["instagram"];
         
       $_SESSION["salary"]=$row["salary"];
       $_SESSION["position"]=$row["position"];
      
    }
} else {
    echo "0 results";
}

header('Location: ../index.php');
?> 




