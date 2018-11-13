<?php
$servername = "localhost";
$username = "root";
$password = "";
$DBaseMeta = "biharlegal";

$conn = new mysqli($servername, $username, $password,$DBaseMeta);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>