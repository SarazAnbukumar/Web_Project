<?php
require '../conn.php';

$idcustomer=$_GET['idcustomer'];
$sql="SELECT * FROM car WHERE idCar=$idcustomer";
$row=$conn->query($sql)->fetch_object();
?>

<html lang="en">
  <head>
    <title>Edit</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <link rel="stylesheet" href="admin.css" />  

  </head>
  <div data-role="page" id="">
      <div class="header">
        <h1></h1>
      </div>

      <div class="navbar">
        <a href="#page3" class="active"></a>
        <a href="#page4" class="right"></a>
      </div>

      <h1>Edit</h1>
      
      <form  action="kemaskini.php" method="post" data-ajax="false">
        <input type="hidden" name="idcustomer" value="<?php echo $row->idcustomer; ?>">
        <label>Email</label><input id="carname" type="text" name="carname" value="<?php echo $row->email; ?>" />
		<label>Password</label><input id="carbrand" type="text" name="carbrand" value="<?php echo $row->password; ?>" />
      </form>


      <div class="footer2">
        <h2>copyright@accesories Shivana's Jewellery2020, All rights reserved</h2>
      </div>