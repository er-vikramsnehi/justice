<?php
session_start();
?>
<?php include("../conn.php");?>


<?php 
echo $email=$_SESSION["email"];
echo $pimage=$_SESSION["pimage"];
echo $count=$_SESSION["count"];
echo $rand=$_SESSION["varification"];

?>

<?php
$to = $email;
$subject = "Verify Account";

$message = "
<html>
<head>
<title>OTP</title>
</head>
<body>
<p>Your One Time Password!</p>
<table>
<tr>
<th>Email</th>
<th>OTP</th>
</tr>
<tr>
<td><?php echo $email; ?> </td>
<td><?php echo $rand; ?></td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <royalsnehi@gmail.com>' . "\r\n";
 
mail($to,$subject,$message,$headers);
?>


<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<title>Progressing </title>
<link href="../Design/css/bootstrap.min.css" rel="stylesheet">
<link href="../Design/css/font-awesome.min.css" rel="stylesheet">
<link href="../Design/css/prettyPhoto.css" rel="stylesheet">
<link href="../Design/css/w3.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>







<?php 

$sqlselectaccount = "select * from account WHERE account_count = '$count' && account_image='$pimage'";

$resultsqlselectaccount = $conn->query($sqlselectaccount);

if ($resultsqlselectaccount->num_rows > 0) {
    while($row = $resultsqlselectaccount->fetch_assoc()) {
        ?> 
   

<div class="w3-container">
 
<p>Your OTP is: <font style="color:red;"><?php echo $_SESSION["varification"];?></font></p>

<div class="row wrap-login100">

<div class="col-lg-6">
                <div class="login100-pic js-tilt" data-tilt>
					<img src="../upload/<?php echo $row["account_image"];?>" alt="IMG" class="w3-circle w3-card-2 w3-border" style="height:500px;width:500px;">
				</div>
</div>
<div class="col-lg-6">

<form class="login100-form validate-form" action="varifcation.php" method="POST">
					<div id="info">
					<span class="login100-form-title">
						Please Confirm your Email
					<font style="color:blue;" id="editinfo" onclick="EditInfo()">Change Email</font>
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="otp" placeholder="OTP here">
						<input class="input100 w3-hide" type="text" name="count" value="<?php echo $count?>" hidden="">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-talephone" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Verify your Account
						</button>
					</div>
 
					<div class="text-center p-t-136">
						<a class="txt2" href="../index.php">
							Cancel
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
					</div>
</form>
</div>
</div>
</div>
      
      
      
      
<?php
  }
} else {
    echo "0 results";
}
?> 

















 
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


