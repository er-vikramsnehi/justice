<?php include("../../../conn.php")?>

<?php
// the message

$rand=mt_rand(299999,999999999);
 
?>

<?php 


$name=$_POST['name'];

$url=$_POST['url']; 
 
$pimages=basename($_FILES["pimage"]["name"]);
 
 
?>



<?php

$plaintext = $pimages;
$aespassword = $rand;
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
$target_snehi = "../../upload/";
$target_file = $target_snehi . basename($_FILES["pimage"]["name"]);

$snehi_img_snehi=$target_snehi . $encrypted.$rand.".jpg";
$snehi_file_img_name=$encrypted.$rand.".jpg";


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

$insert = "INSERT INTO honblejustice (nav_name,nav_url,nav_page)
VALUES ('$name','$url','$snehi_file_img_name')";

if ($conn->query($insert) === TRUE) {
    header('Location: ../../index.php');
} else {
    echo "Error: <br>" . $conn->error;
}

?>

 