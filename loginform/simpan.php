<?php
require 'index.php';
$Username = $_POST['username'];
$Password = $_POST['Pswd'];
$sql = "SELECT * FROM customer  WHERE Username = ? AND pswd = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('ss', $Username, $Password);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows>0) {
 header('location: berjaya.php');	
} else {
 ?>
 <script>
alert('Maaf! Username dengan Password tidak wujud(<?php echo $Username .'|'.$Password; ?>)');
window.location = 'index.php';
 </script>
 <?php
 exit;
}