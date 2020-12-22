<?php
require 'conn.php';

$email = $_POST['Email'];
$password =$_POST['Password'];

		$sql="SELECT * FROM customer WHERE Email = $email'";
		$result = $conn->query($sql);
		if ($result->num_rows){
			header('Location:../customer/');
			} else {
				?>
				<script>
				alert('Incorrect Email or Password');
				window.location='berjaya.php';
				</script>
				<?php
			}
			
		$sql="SELECT * FROM customer WHERE Password = '$password'";
		$result = $conn->query($sql);
		{
			?>
				<script>
				alert('');
				window.location='signup.php';
				</script>
				<?php
		} 