<?php include '../conn.php';?>

<?php
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['phone'];
$message=$_POST['message'];
?>


<?php 

$sqlcontact = "INSERT INTO `contactus` (contact_name,contact_email,contact_mobile,contact_message) VALUES ('$name','$email','$mobile','$message')";
if ($conn->query($sqlcontact) === TRUE) {
    header('Location: ../thanks/index.php');
} else {
    echo "Error: <br>" . $conn->error;
}

?>