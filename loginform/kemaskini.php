<?php
require '../conn.php';
 
$idcustomer=$_POST['idcustomer'];
$username=$_POST['username'];
$pswd=$_POST['pswd'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];



$sql="UPDATE customer SET username='$username',pswd='$pswd', 
phonenumber='$phonenumber',email='$email' WHERE idcustomer = $idcustomer";
$conn->query($sql);
echo $conn->error;

header('location:index.php');
}