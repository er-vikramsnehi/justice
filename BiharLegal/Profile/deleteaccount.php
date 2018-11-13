<?php
session_start();
?>
<?php include("../conn.php");?>

<?php 
$acn=$_SESSION["count"];
?>



<?php
$sql = "DELETE FROM account WHERE account_count='$acn'";

if ($conn->query($sql) === TRUE) {
    header('Location: ../Action/logout.php');
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>


