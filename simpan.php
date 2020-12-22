<?php
require 'signup.php';
$email = $_POST['Email'];
$password = $_POST['Password'];
$sql = "SELECT * FROM customer  WHEREEmail = ? AND Password = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('ss', $email, $password);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows>0) {
 header('location: berjaya.php');	
} else {
 ?>
 <script>
alert('Maaf! Email dengan Password tidak wujud(<?php echo $email .'|'.$password; ?>)');
window.location = 'signup.php';
 </script>
 <?php
 exit;
}