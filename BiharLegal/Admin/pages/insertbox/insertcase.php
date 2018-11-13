<?php include("../../../conn.php")?>

<?php 


$name=$_POST['name'];

$url=$_POST['url']; 
 
$pages=$_POST['pages'];


?>

<?php 

$insert = "INSERT INTO casenav (nav_name,nav_url,nav_page)
VALUES ('$name','$url','$pages')";

if ($conn->query($insert) === TRUE) {
    echo "";
} else {
    echo "Error: <br>" . $conn->error;
}

?>



<?php 
header('Location: ../../index.php');
?>
