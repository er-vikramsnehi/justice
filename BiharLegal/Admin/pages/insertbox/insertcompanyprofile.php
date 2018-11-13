<?php include '../../../conn.php';?>

<?php
// the message

$rand1=mt_rand(22,998);
$rand2=mt_rand(999,9998);
$rand3=mt_rand(9999,99998);
$rand4=mt_rand(99999,9999998);


?>

<?php

echo $discription=$_POST['discription'];
echo $fname=$_POST['fname'];
echo $fcourt=$_POST['fcourt'];
echo $fpos=$_POST['fpos'];
echo $sname=$_POST['sname'];
echo $scourt=$_POST['scourt'];
echo $spos=$_POST['spos'];
echo $tname=$_POST['tname'];
echo $tcourt=$_POST['tcourt'];
echo $tpos=$_POST['tpos'];
echo $fthname=$_POST['4name'];
echo $fthcourt=$_POST['4court'];
echo $fthpos=$_POST['4pos'];


echo $fimage=basename($_FILES["fimage"]["name"]);

echo $simage=basename($_FILES["simage"]["name"]);

echo $timage=basename($_FILES["timage"]["name"]);

echo $fthimage=basename($_FILES["4image"]["name"]);




?>



<?php

$plaintext = $fimage;
$aespassword = $rand1;
$method = 'aes-256-cbc';

// Must be exact 32 chars (256 bit)
$aespassword = substr(hash('sha256', $aespassword, true), 0, 32);
 
// IV must be exact 16 chars (128 bit)
$iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

// av3DYGLkwBsErphcyYp+imUW4QKs19hUnFyyYcXwURU=
$encrypteds1 = base64_encode(openssl_encrypt($plaintext, $method, $aespassword, OPENSSL_RAW_DATA, $iv));

// My secret message 1234
$decrypted1 = openssl_decrypt(base64_decode($encrypteds1), $method, $aespassword, OPENSSL_RAW_DATA, $iv);

?>


<?php

$plaintext = $simage;
$aespassword = $rand2;
$method = 'aes-256-cbc';

// Must be exact 32 chars (256 bit)
$aespassword = substr(hash('sha256', $aespassword, true), 0, 32);
 
// IV must be exact 16 chars (128 bit)
$iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

// av3DYGLkwBsErphcyYp+imUW4QKs19hUnFyyYcXwURU=
$encrypteds2 = base64_encode(openssl_encrypt($plaintext, $method, $aespassword, OPENSSL_RAW_DATA, $iv));

// My secret message 1234
$decrypted2 = openssl_decrypt(base64_decode($encrypteds2), $method, $aespassword, OPENSSL_RAW_DATA, $iv);

?>


<?php

$plaintext = $timage;
$aespassword = $rand3;
$method = 'aes-256-cbc';

// Must be exact 32 chars (256 bit)
$aespassword = substr(hash('sha256', $aespassword, true), 0, 32);
 
// IV must be exact 16 chars (128 bit)
$iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

// av3DYGLkwBsErphcyYp+imUW4QKs19hUnFyyYcXwURU=
$encrypteds3 = base64_encode(openssl_encrypt($plaintext, $method, $aespassword, OPENSSL_RAW_DATA, $iv));

// My secret message 1234
$decrypted3 = openssl_decrypt(base64_decode($encrypteds3), $method, $aespassword, OPENSSL_RAW_DATA, $iv);

?>




<?php

$plaintext = $fthimage;
$aespassword = $rand4;
$method = 'aes-256-cbc';

// Must be exact 32 chars (256 bit)
$aespassword = substr(hash('sha256', $aespassword, true), 0, 32);
 
// IV must be exact 16 chars (128 bit)
$iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

// av3DYGLkwBsErphcyYp+imUW4QKs19hUnFyyYcXwURU=
$encrypteds4 = base64_encode(openssl_encrypt($plaintext, $method, $aespassword, OPENSSL_RAW_DATA, $iv));

// My secret message 1234
$decrypted4 = openssl_decrypt(base64_decode($encrypteds4), $method, $aespassword, OPENSSL_RAW_DATA, $iv);

?>



 

<?php 
$encrypted1 = str_replace('/', '', $encrypteds1);
$encrypted2 = str_replace('/', '', $encrypteds2);
$encrypted3 = str_replace('/', '', $encrypteds3);
$encrypted4 = str_replace('/', '', $encrypteds4);
?>























 <?php
$target_dir1 = "../../upload/";
$target_file1 = $target_dir1 . basename($_FILES["fimage"]["name"]);

$snehi_img_dir1=$target_dir1 . $encrypted1.".jpg";
$snehi_file_img_name1=$encrypted1.".jpg";


$uploadOk1 = 1;



$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fimage"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk1 = 1;
    } else {
        echo "File is not an image.";
        $uploadOk1 = 0;
    }
}
// Check if file already exists
if (file_exists($snehi_img_dir1)) {
    echo "Sorry, file already exists.";
    $uploadOk1 = 0;
}
// Check file size
if ($_FILES["fimage"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk1 = 0;
}
// Allow certain file formats
if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
&& $imageFileType1 != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk1 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk1 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fimage"]["tmp_name"], $snehi_img_dir1)) {
        echo "The file ". basename( $_FILES["fimage"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>































<?php
$target_dir2 = "../../upload/";
$target_file2 = $target_dir2 . basename($_FILES["simage"]["name"]);

$snehi_img_dir2=$target_dir2 . $encrypted2.".jpg";
$snehi_file_img_name2=$encrypted2.".jpg";


$uploadOk2 = 1;



$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["simage"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk2 = 1;
    } else {
        echo "File is not an image.";
        $uploadOk2 = 0;
    }
}
// Check if file already exists
if (file_exists($snehi_img_dir2)) {
    echo "Sorry, file already exists.";
    $uploadOk2 = 0;
}
// Check file size
if ($_FILES["simage"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk2 = 0;
}
// Allow certain file formats
if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
&& $imageFileType2 != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk2 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk2 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["simage"]["tmp_name"], $snehi_img_dir2)) {
        echo "The file ". basename( $_FILES["simage"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>























<?php
$target_dir3 = "../../upload/";
$target_file3 = $target_dir3 . basename($_FILES["timage"]["name"]);

$snehi_img_dir3=$target_dir3 . $encrypted3.".jpg";
$snehi_file_img_name3=$encrypted3.".jpg";


$uploadOk3 = 1;



$imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["timage"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk3 = 1;
    } else {
        echo "File is not an image.";
        $uploadOk3 = 0;
    }
}
// Check if file already exists
if (file_exists($snehi_img_dir3)) {
    echo "Sorry, file already exists.";
    $uploadOk3 = 0;
}
// Check file size
if ($_FILES["timage"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk3 = 0;
}
// Allow certain file formats
if($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg"
&& $imageFileType3 != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk3 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk3 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["timage"]["tmp_name"], $snehi_img_dir3)) {
        echo "The file ". basename( $_FILES["timage"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>


























<?php
$target_dir4 = "../../upload/";
$target_file4 = $target_dir4 . basename($_FILES["4image"]["name"]);

$snehi_img_dir4=$target_dir4 . $encrypted4.".jpg";
$snehi_file_img_name4=$encrypted4.".jpg";


$uploadOk4 = 1;



$imageFileType4 = strtolower(pathinfo($target_file4,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["4image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk4 = 1;
    } else {
        echo "File is not an image.";
        $uploadOk4 = 0;
    }
}
// Check if file already exists
if (file_exists($snehi_img_dir4)) {
    echo "Sorry, file already exists.";
    $uploadOk4 = 0;
}
// Check file size
if ($_FILES["4image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk4 = 0;
}
// Allow certain file formats
if($imageFileType4 != "jpg" && $imageFileType4 != "png" && $imageFileType4 != "jpeg"
&& $imageFileType4 != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk4 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk4 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["4image"]["tmp_name"], $snehi_img_dir4)) {
        echo "The file ". basename( $_FILES["4image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>








 <br>
 
 <?php 
 echo $snehi_file_img_name1;
 ?>
 <br>
 <?php 
 echo $snehi_file_img_name2;
 ?>
 <br>
 <?php 
 echo $snehi_file_img_name3;
 ?>
 <br>
 <?php 
 echo $snehi_file_img_name4;
 
 ?>



 

<?php 


$profilesql = "UPDATE `aboutcompany` SET about_name='$fname',about_name2='$sname',about_name3='$tname',about_name4='$fthname',about_description='$discription',about_image='$snehi_file_img_name1',about_image2='$snehi_file_img_name2',about_image3='$snehi_file_img_name3',about_image4='$snehi_file_img_name4',about_img_courtname='$fcourt',about_img2_courtname='$scourt',about_img3_courtname='$tcourt',about_img4_courtname='$fthcourt',position_img='$fpos',position_img2='$spos',position_img3='$tpos',position_img4='$fthpos' WHERE about_id=1";

if ($conn->query($profilesql) === TRUE) {
    header('Location: ../../index.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>


 


 