<?php
session_start();
?>
<?php include("../conn.php");?>



 
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

if(!isset($_POST["submit"])) {
    header('Location: ../index.php');
}
?>
 


<?php 


$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$pimages=basename($_FILES["pimage"]["name"]);
$psize=$_FILES["pimage"]["size"];

$mobile=$_POST['mobile'];
$dob=$_POST['dob'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$gridCheck=$_POST['gridCheck'];
$startdate=date("Y-m-d");

$gender=$_POST['gender'];
$password=$_POST['pwd'];


$image=md5($pimages);
$epwd=md5($password);
$eemail=md5($email);


?>

<?php 
$_SESSION['count']=$count;
$_SESSION["name"]=$name;
$_SESSION["email"]=$email;
$_SESSION["address"]=$address;

$_SESSION["mobile"]=$mobile;
$_SESSION["dob"]=$dob;
$_SESSION["city"]=$city;
$_SESSION["state"]=$state;
$_SESSION["zip"]=$zip;
$_SESSION["startdate"]=$startdate;
$_SESSION["gender"]=$gender;
$_SESSION["password"]=$password;


?>



<?php

$plaintext = $pimages;
$aespassword = $email;
$method = 'aes-256-cbc';

// Must be exact 32 chars (256 bit)
$aespassword = substr(hash('sha256', $aespassword, true), 0, 32);
 
// IV must be exact 16 chars (128 bit)
$iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

// av3DYGLkwBsErphcyYp+imUW4QKs19hUnFyyYcXwURU=
$encrypteds = base64_encode(openssl_encrypt($plaintext, $method, $aespassword, OPENSSL_RAW_DATA, $iv));

// My secret message 1234
$decrypted = openssl_decrypt(base64_decode($encrypteds), $method, $aespassword, OPENSSL_RAW_DATA, $iv);

 

?>

<?php 
$encrypted = str_replace('/', '', $encrypteds);
?>




 <?php
$target_snehi = "../upload/";
$target_file = $target_snehi . basename($_FILES["pimage"]["name"]);

$snehi_img_snehi=$target_snehi . $encrypted.$count.".jpg";
$snehi_file_img_name="upload/".$encrypted.$count.".jpg";


$uploadOk = 1;



$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["pimage"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($snehi_img_snehi)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["pimage"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["pimage"]["tmp_name"], $snehi_img_snehi)) {
        echo "The file ". basename( $_FILES["pimage"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>


 

<?php 
$_SESSION["pimage"]=$snehi_file_img_name;
?>




<?php 

$sqlaccount = "INSERT INTO account (account_name,account_email,account_eemail,account_number,account_address,account_image,account_startdate,account_dob,account_state,account_city,account_zip,account_gridCheck,account_pwd,account_epwd,account_gender,account_count)
VALUES ('$name', '$email','$eemail','$mobile','$address','$snehi_file_img_name','$startdate','$dob','$state','$city','$zip','$gridCheck','$password','$epwd','$gender','$count')";

if ($conn->query($sqlaccount) === TRUE) {
    echo "";
} else {
    echo "Error: <br>" . $conn->error;
}

?>
<?php     
$_SESSION["pimage"]=$snehi_file_img_name;
?>
<?php
// the message

$rand=mt_rand(2999,9999999);
$otps=$rand;
$_SESSION["varification"]=$rand;

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
<td>$email</td>
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





<?php 

$sqlselectaccount = "select * from account WHERE account_count = '$count' && account_image='$snehi_file_img_name'";

$resultsqlselectaccount = $conn->query($sqlselectaccount);

if ($resultsqlselectaccount->num_rows > 0) {
    while($row = $resultsqlselectaccount->fetch_assoc()) {
        ?> 
   
<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<title>Progressing </title>

<link rel="icon" href="../<?php echo $row['account_image'];?>" type="image/png">
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





<div class="w3-container">
<div class="alert alert-success w3-panel w3-display-container w3-xxlarge w3-serif w3-card-4 nav navbar-top" role="alert" style="font-size:larger;margin-top:0px;">
  <h4 class="alert-heading">Well done!</h4><h5 style="font-family:cursive;color:red;"><?php echo $row["account_name"];?> </h5>
  <p>Do Not Refresh your Browser</p>
   <span onclick="this.parentElement.style.display='none'"class="w3-button w3-red w3-small w3-display-top-right" style="float:right;">&times;</span>
  <p>Aww yeah, you successfully create your account.Now the second step is to conform your email .We sent you an OTP on your <font style="color:red;font-weight:bold;">EMAIL</font> text is going to your email a not a  bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <hr>
  <p class="mb-0">Please Secure your account.Whenever you need to, be sure to use margin utilities to keep things nice and tidy.  </p>
 
</div>
<p>Your OTP is: <font style="color:red;"><?php echo $_SESSION["varification"];?></font></p>
<div class="row wrap-login100">

<div class="col-lg-6">
                <div class="login100-pic js-tilt" data-tilt>
					<img src="../<?php echo $row["account_image"];?>" alt="IMG" class="w3-circle w3-card-2 w3-border" style="height:500px;width:500px;">
				</div>
</div>
<div class="col-lg-6">
<div id="info">
<form class="login100-form validate-form" action="varifcation.php" method="POST">
					
					<span class="login100-form-title" style="cursor:hand;">
						Please Confirm your Email
					<font style="color:blue;" id="editinfo" onclick="EditInfo()">Change Email</font>
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="otp" placeholder="OTP here">
						<input class="input100 w3-hide" type="text" name="count" value="<?php echo $count;?>" hidden="">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-key" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<input class="login100-form-btn w3-input" type="submit" name="submit" value="Verify your Account">
					</div>
 
					<div class="text-center p-t-136">
						<a class="txt2" href="logout.php">
							Cancel
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
					
</form>
</div>
</div>
</div>
</div>
      
      
      
      

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
</body>
</html>
<?php
  }
} else {
    echo "0 results";
}
?> 

 



<?php 


$conn->close();


?>




 

<script type="text/javascript">
 function EditInfo(){
	   var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("info").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "updates.php", true);
	  xhttp.send();
	}

function varifyac(){
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("info").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "varifyac.php", true);
	  xhttp.send();
}

</script>






