<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}


/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}
.footer {
  padding: 1px;
  text-align: center;
   background-color: pink;
}
/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>
<center>
<div data-role="page" id="page1">
<div class="header">
<marquee direction="left to right" height="100" width="1000" bgcolor="white" loop="10">
	         <img face="tabona" size="30" img src="wel.JPG"  ></img>
			</marquee>
<img src="coverpg.JPG" width="100%" height="700" bgcolor="black"/><br>

</div>
</div>

<button class="open-button" onclick="openForm()">Open Form</button>

<div class="form-popup" id="myForm">
  <form action="check.php" method="post" class="form-container">
    <h1><u>Login</h1></u>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="pswd"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pswd" required>
	

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>

</div>

 <div class="footer">
  <h2>copyright@accesories Shivana's Jewellery2020, All rights reserved</h2>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
	
</html>