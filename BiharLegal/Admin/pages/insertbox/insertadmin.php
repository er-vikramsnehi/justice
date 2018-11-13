<?php include("../../../conn.php")?>




 <?php
$count =1;
$admincount = "select * from admin";

$resultadmincount = $conn->query($admincount);
if ($resultadmincount->num_rows > 0) {
    
    while($row = $resultadmincount->fetch_assoc()) {
   $count=$count+1;     
                                                   }
} else {
    echo "Not result";
}
 
?>




<?php 


$pimages=basename($_FILES["pimage"]["name"]);
 

$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
 
$mobile=$_POST['mobile'];
$dob=$_POST['dob'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$gridCheck=$_POST['gridCheck'];
$startdate=date("Y-m-d");

$gender=$_POST['gender'];
$password=$_POST['pwd'];


 
$epwd=md5($password);
$eemail=md5($email);


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
$target_dir = "../../upload/";
$target_file = $target_dir . basename($_FILES["pimage"]["name"]);

$snehi_img_dir=$target_dir . $encrypted.$count.".jpg";
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
if (file_exists($snehi_img_dir)) {
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
    if (move_uploaded_file($_FILES["pimage"]["tmp_name"], $snehi_img_dir)) {
        echo "The file ". basename( $_FILES["pimage"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>



<?php 

$sqladmin = "INSERT INTO admin (admin_name,admin_email,admin_eemail,admin_number,admin_address,admin_image,admin_startdate,admin_dob,admin_state,admin_city,admin_zip,admin_gridCheck,admin_pwd,admin_epwd,admin_gender,admin_count)
VALUES ('$name', '$email','$eemail','$mobile','$address','$snehi_file_img_name','$startdate','$dob','$state','$city','$zip','$gridCheck','$password','$epwd','$gender','$count')";

if ($conn->query($sqladmin) === TRUE) {
    header('Location: ../../index.php');
    
} else {
    echo "Error: <br>" . $conn->error;
}

?>

