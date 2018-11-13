

<?php include("../Action/google/index.php");?>
======================================
<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<?php

echo $_SESSION['name'];
?>



<?php 

















?>