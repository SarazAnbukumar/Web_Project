<?php
require 'mysqli.php';
$password = $_GET['Password'];
$sql = "DELETE FROM customer WHERE Password = $password";
$conn->query($sql);

echo $conn->error;
header('location: signup.php');