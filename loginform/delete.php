<?php
require 'mysqli.php';
$idcustomer = $_GET['idcustomer'];
$sql = "DELETE FROM customer WHERE idcustomer = $idcustomer";
$conn->query($sql);

echo $conn->error;
header('location: index.php');