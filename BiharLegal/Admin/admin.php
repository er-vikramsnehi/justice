<?php
session_start();
?>
<?php include("../conn.php");?>

<?php 

$email=$_POST['email'];
$password=$_POST['password'];
$epwd=md5($password);
 
$admin = "select * from admin WHERE `admin_email` = '$email' && `admin_epwd`='$epwd'";

$resultsqladmin = $conn->query($admin);

if ($resultsqladmin->num_rows > 0) {
    while($row = $resultsqladmin->fetch_assoc()) {
        
       $_SESSION['acount']=$row["admin_count"];
       $_SESSION["aname"]=$row["admin_name"];
       $_SESSION["aemail"]=$row["admin_email"];
       $_SESSION["aaddress"]=$row["admin_address"];
        
       $_SESSION["amobile"]=$row["admin_number"];
       $_SESSION["adob"]=$row["admin_dob"];
       $_SESSION["acity"]=$row["admin_city"];
       $_SESSION["astate"]=$row["admin_state"];
       $_SESSION["azip"]=$row["admin_zip"];
       $_SESSION["astartdate"]=$row["admin_startdate"];
       $_SESSION["agender"]=$row["admin_gender"];
       $_SESSION['apimage']=$row["admin_image"];
       $_SESSION['aposition']=$row["admin_position"];
        
         
 
    }
} else {
    echo "0 results";
}

header('Location: index.php');
?> 




