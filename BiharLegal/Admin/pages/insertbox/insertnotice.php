<?php include("../../../conn.php")?>

<?php 


$notice=$_POST['notice'];

$dateofsubmition=$_POST['dateofsubmition']; 
 
$urls=$_POST['urls'];


?>

<?php 

$sqlaccount = "INSERT INTO notice (notice_name,notice_url,notice_date)
VALUES ('$notice','$urls','$dateofsubmition')";

if ($conn->query($sqlaccount) === TRUE) {
    echo "";
} else {
    echo "Error: <br>" . $conn->error;
}

?>



<?php 
header('Location: ../../index.php');
?>
