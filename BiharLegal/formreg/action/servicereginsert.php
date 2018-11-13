<?php
session_start();
?>
<?php include("../../conn.php");?>

 <?php
$ccount =1;
$accountcount = "select * from formreg";

$resultaccountcount = $conn->query($accountcount);
if ($resultaccountcount->num_rows > 0) {
    
    while($row = $resultaccountcount->fetch_assoc()) {
        $ccount=$ccount+1;     
                                                   }
} else {
    echo "You are first";
}
 
?>


<?php 

$case=$_POST['case'];
$email=$_POST['email'];
$service=$_POST['service'];
$message=$_POST['message'];

$cfiles=basename($_FILES["cfile"]["name"]);

$mobile=$_SESSION['mobile'];
$gender=$_SESSION['gender'];
$usercount=$_SESSION['count'];
$dob=$_SESSION['dob'];

$username=$_SESSION['name'];
$userimage=$_SESSION['pimage'];

$process="Pending";

?>



<?php
 
$plaintext = $cfiles;
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
$target_snehi = "../../pdf/";
$target_file = $target_snehi . basename($_FILES["cfile"]["name"]);

$snehi_pdf_snehi=$target_snehi . $encrypted.$ccount.".pdf";
$snehi_file_pdf_name=$encrypted.$ccount.".pdf";


$uploadOk = 1;



$pdfFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if pdf file is a actual pdf or fake pdf
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["cfile"]["tmp_name"]);
    if($check !== false) {
        echo "File is an pdf - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an pdf.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($snehi_pdf_snehi)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
 
// Allow certain file formats
if($pdfFileType != "pdf" ) {
    echo "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["cfile"]["tmp_name"], $snehi_pdf_snehi)) {
        echo "The file ". basename( $_FILES["cfile"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    } 
}
?>


<?php 

$sqlaccount = "INSERT INTO formreg(formreg_file,formreg_name,formreg_username,formreg_email,formreg_mobile,formreg_message,formreg_gender,formreg_user_count,formreg_dob,formreg_type,process,formreg_count,userimage) 
VALUES ('$snehi_file_pdf_name','$case','$username','$email','$mobile','$message','$gender','$usercount','$dob','$service','$process','$ccount','$userimage')";

if ($conn->query($sqlaccount) === TRUE) {
    header('Location: ../../index.php');
} else {
    echo "Error: <br>" . $conn->error;
}

?>