<?php
require '../conn.php';
 
$email=$_POST['Email'];
$password=$_POST['Password'];

$sql="UPDATE customer SET Email='$email' WHERE Password = $password";
$conn->query($sql);
echo $conn->error;

header('location:signup.php');
}