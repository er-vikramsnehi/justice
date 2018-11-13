<?php
session_start();
?>

<?php 

 

?>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

header('Location: ../');

?>