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

$email=$_SESSION["email"];
$acn=$_SESSION["count"];

?>

<?php 


$name=$_POST['fname'];

$address=$_POST['address'];
$pimages=basename($_FILES["pimage"]["name"]);
$psize=$_FILES["pimage"]["size"];

$mobile=$_POST['mobile'];
$dob=$_POST['dob'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];

$startdate=date("Y-m-d");

$gender=$_POST['gender'];
$password=$_POST['pwd'];




$facebook=$_POST['facebook'];
$twitter=$_POST['twitter'];
$Instagram=$_POST['Instagram'];
$salary=$_POST['salary'];
$position=$_POST['position'];





$image=md5($pimages);
$epwd=md5($password);
$eemail=md5($email);


?>

<?php 
$_SESSION["facebook"]=$facebook;
$_SESSION["twitter"]=$twitter;
$_SESSION["Instagram"]=$Instagram;
$_SESSION["salary"]=$salary;
$_SESSION["position"]=$position;
?>

<?php 

 
$_SESSION["name"]=$name;
 
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

$sqlupdate = "UPDATE account SET account_name='$name',account_number='$mobile',account_salary='$salary',account_address='$address',account_position='$position',account_image='$snehi_file_img_name',account_dob='$dob',account_state='$state',account_city='$city',account_zip='$zip',account_pwd='$password',account_epwd='$epwd',account_gender='$gender',facebook='$facebook',instagram='$Instagram',twitter='$twitter' WHERE account_count=$acn";

if ($conn->query($sqlupdate) === TRUE) {
    header('Location: index.php');
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
?>






<?php     
$_SESSION["pimage"]=$snehi_file_img_name;
?>


 

 
 



<?php 


$conn->close();


?>

