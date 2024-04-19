<?php
$servername = "fdb1030.awardspace.net";
$username = "3684404_chatapp";
$password = "6@[2SH:40#iwSl:2";
$database = "3684404_chatapp";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>