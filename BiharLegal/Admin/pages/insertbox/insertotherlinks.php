<?php include("../../../conn.php")?>

<?php 


$name=$_POST['name'];

$url=$_POST['url']; 
 
 

?>

<?php 

$insert = "INSERT INTO otherlinks (olinks,url)
VALUES ('$name','$url')";

if ($conn->query($insert) === TRUE) {
    echo "";
} else {
    echo "Error: <br>" . $conn->error;
}

?>



<?php 
header('Location: ../../index.php');
?>
