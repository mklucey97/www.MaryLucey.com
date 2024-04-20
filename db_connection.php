<?php
$servername = "fdb1030.awardspace.net";
$username = "3684404_chatapp";
$password = "bh^]s7Vy2[,j^7D.";
$database = "3684404_chatapp";

$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
