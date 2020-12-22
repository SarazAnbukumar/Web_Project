<?php
require 'conn.php';

$email = $_POST['email'];
$pswd =$_POST['pswd'];

		$sql="SELECT * FROM customer WHERE email = $email'";
		$result = $conn->query($sql);
		if ($result->num_rows){
			header('Location:../customer/');
			} else {
				?>
				<script>
				alert('Successfully Login');
				window.location='berjaya.php';
				</script>
				<?php
			}
			
		$sql="SELECT * FROM customer WHERE pswd = '$pswd'";
		$result = $conn->query($sql);
		{
			?>
				<script>
				alert('');
				window.location='index.php';
				</script>
				<?php
		} 