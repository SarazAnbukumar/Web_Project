<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
<html lang="en">
<head>
<title>Customer Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size:36;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  background-position: center;
  background-image: cover2.JPG; 
  background-size: cotain;
  background-repeat: no-repeat;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position.
 It is positioned relative until a given offset position is met in the viewport - then it 
 "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 
 15 and earlier versions. However, for these versions the navbar will inherit default position */
 
.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 20%; /* IE10 */
  flex: 20%;
  background-image: url("blue.jpg"); 
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 80%; /* IE10 */
  flex: 80%;
  background-image: url("drive.gif"); 
  background-repeat: no-repeat;
 background-size: cover;
  padding: 20px; 
}

/* Fake image, just for this example */
.fakeimg {
  background-image: url("cus.gif");
  background-size: cover;
  background-repeat: no-repeat;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 5px;
  text-align: center;
   background-image: cp.jpg;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack
 on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links 
stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}

/* PAGE2 */

/* Footer2 */
.footer2 {
  padding: 1px;
  text-align: center;
    background-image: cp.jpg;
}

.column {
  float: center;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row2::after 
{
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 1;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: black;
}

body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}

/* PAGE3 */

body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}
.footer {
  padding: 1px;
  text-align: center;
   background-color: pink;
}
/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>


<center>
<div data-role="page" id="page1">
<div class="header">
<img src="coverpg.JPG" width="100%" height="500" bgcolor="black"/><br>
			<div class="navbar">
			<a href="#page1" class="active">Home</a>
			<a href="#page2">Catalogue</a>
			<a href="#page3">Buy</a>
			<a href="#page4">Make Order</a>
			<a href="#page5" class="right">Log Out</a>
			</div>
			<marquee direction="left to right" height="100" width="1000" bgcolor="white" loop="10">
	         <img face="tabona" size="30" img src="wel.JPG"  ></img>
			</marquee>
</div>
<div class="row">
  <div class="side">
    <h1></h1>
	<br>
  <center>
		
 
    <h1>New Arrival Here!!!</h1>
   
    <h2>Nowdays the trend of online jewellery shoping is growing rapidly for its enormous
	benefits.It is an easiest and onvenient way to buy accessories from an online jewellery.</h2>
	 </center>
	 
	 <div class="footer">
  <h2>copyright@accesories Shivana's Jewellery2020, All rights reserved</h2>
</div>

  <div class="main">
  </div>
</div>

</div>
</div>
<div data-role="page" id="page2">
<div class="header">
<img src="coverpg.JPG" width="100%" height="500" bgcolor="black"/><br>
			<div class="navbar">
			<a href="#page1">Home</a>
			<a href="#page2"class="active">Catalogue</a>
			<a href="#page3">Buy</a>
			<a href="#page4">Make Order</a>
			<a href="#page5" class="right">Log Out</a>
			</div>
			 <marquee direction="left to right" height="100" width="1000" bgcolor="white" loop="10">
	         <img face="tabona" size="100" img src="wel.JPG"  ></img>
			</marquee>
</div>
</div>
<br>

<center>
<div class="row2">
  <div class="column">
    <div class="card">
	<tr>
		<td align="center"><img src="pic1.jpg" alt="Nature" style="width:80%" onclick="myFunction(this);">
      <div class="container">
        <h2>Stone Earing</h2>
        <h2 class="title">7.99g</h2>
        <h2>Price: </h2>
        <h3>RM 2000<h3>
		   
        <p><a href="#page3","#1sttable">
		<button style="height: 100; width: 100%">
		<strong>More Details...</strong></button></a></p>
		</td>
	</tr>
	<tr>
		<td align="center"><img src="pic2.jpg" alt="Snow" style="width:80%" onclick="myFunction(this);">
		<div class="container">
        <h2>Bahubali Jumkha</h2>
        <h2 class="title">14gram</h2>
        <h2>Price: </h2>
        <h3>RM 3050<br>
		  </h3>
        <p><a href="#page3","#2ndtable">
		<button style="height: 100; width: 100%">
		<strong>More Details...</strong></button></a></p>
		</td>
		</tr>
      </div>
    </div>
  </div>
</div>
<br>

<div class="row2">
  <div class="column">
    <div class="card">
	<tr>
		<td align="center"> <img src="pic2.jpg" alt="Snow" style="width:80%" onclick="myFunction(this);">
      <div class="container">
        <h2>Bahubali Jumkha</h2>
        <h2 class="title">14gram</h2>
        <h2>Price: </h2>
        <h3>RM 3050<br>
		  </h3>
        <p><a href="#page3","#2ndtable">
		<button style="height: 100; width: 100%">
		<strong>More Details...</strong></button></a></p>
		</td>
	</tr>
	<tr>
		<td align="center">  <img src="pic3.jpg" style="width:80%" onclick="myFunction(this);">
		<h2>Pearl Gold Jumkha</h2>
        <h2 class="title">12gram</h2>
        <h2>Price: </h2>
        <h3>RM 2800<br>
		  </h3>
        <p><a href="#page3","#3rdtable">
		<button style="height: 100; width: 100%">
		<strong>More Details...</strong></button></a></p>
		</td>
	</tr>
      </div>
    </div>
  </div>
</div>
<br>

 <div class="row2">
  <div class="column">
    <div class="card">
	<tr>
		<td align="center"> <img src="pic4.jpg" style="width:80%" onclick="myFunction(this);">
      <div class="container">
	    <h2>Sanggu Jumkha</h2>
        <h2 class="title">10gram</h2>
        <h2>Price: </h2>
        <h3>RM 2699<br>
		  </h3>
        <p><a href="#page3","#4rdtable">
		<button style="height: 100; width: 100%">
		<strong>More Details...</strong></button></a></p>
		</td>
	</tr>
	<tr>
		<td align="center"><img src="pic5.jpg" style="width:80%" onclick="myFunction(this);">
		<div class="container">
	    <h2>Chakkare Jumkha</h2>
        <h2 class="title">8gram</h2>
        <h2>Price: </h2>
        <h3>RM 900<br>
		  </h3>
        <p><a href="#page3","#5rdtable">
		<button style="height: 100; width: 100%">
		<strong>More Details...</strong></button></a></p>
		</td>
	</tr>
      </div>
    </div>
  </div>
</div>
<br>

 <div class="row2">
  <div class="column">
    <div class="card">
      <img src="pic6.jpg" style="width:80%" onclick="myFunction(this);">
      <div class="container">
	   <h2> Pearl Earing</h2>
        <h2 class="title">9gram</h2>
        <h2>Price: </h2>
        <h3>RM 2999<br>
		  </h3>
        <p><a href="#page3","#6rdtable">
		<button style="height: 100; width: 100%">
		<strong>More Details...</strong></button></a></p>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="footer">
  <h2>copyright@accesories Shivana's Jewellery2020, All rights reserved</h2>
</div>

<div data-role="page" id="page3">
<div class="header">
  <h1></h1>
<img src="coverpg.JPG" width="100%" height="500" bgcolor="black"/><br>
			<div class="navbar">
			<a href="#page1">Home</a>
			<a href="#page2">Catalogue</a>
			<a href="#page3" class="active">Buy</a>
			<a href="#page4">Make Order</a>
			<a href="#page5" class="right">LogOut</a>
			</div>
	 <marquee direction="left to right" height="100" width="1000" bgcolor="white" loop="10">
	         <img face="tabona" size="100" img src="wel.JPG"  ></img>
	</marquee>
</div>

<div class="row2">
  <div class="column">
    <div class="card">
      <img src="pic1.jpg" style="width:100%">
      <div class="container">
	   <h2>Shivana's Jewellery </h2>
	    <h2>Stone Earing</h2>
        <h3>Arrival: 2020</h3>
		<h3>code:0001</h3>
		<h2 class="title">7.99g</h2>
        <p><a href="#page4"><button class="button">Buy</button></a></p>
	  </div>
    </div>
  </div>
</div>
				
<div class="row2">
  <div class="column">
    <div class="card">
      <img src="pic2.jpg" style="width:100%">
      <div class="container">
        <h2>Shivana's Jewellery </h2>
	    <h2>Bahubali Jumkha</h2>
        <h3>Arrival: 2020<h3>
		<h3>code:0002</h3>
		<h2 class="title">14g</h2>
        <p><a href="#page4"><button class="button">Buy</button></a></p>
      </div>
    </div>
  </div>
</div>

<div class="row2">
  <div class="column">
    <div class="card">
      <img src="pic3.jpg" style="width:100%">
      <div class="container">
	     <h2>Shivana's Jewellery </h2>
	    <h2>Pearl Gold Jumkha</h2>
		<h3>Arrival: 2020</h3>
		<h3>code:0003</h3>
		<h2 class="title">12g</h2>
        <p><a href="#page4"><button class="button">Buy</button></a></p>
      </div>
    </div>
  </div>
</div>

<div class="row2">
  <div class="column">
    <div class="card">
      <img src="pic4.jpg" style="width:100%">
      <div class="container">
	     <h2>Shivana's Jewellery </h2>
	    <h2>Sanggu Jumkha</h2>
		<h3>Arrival: 2020</h3>
		<h3>code:0004</h3>
		<h2 class="title">10g</h2>
        <p><a href="#page4"><button class="button">Buy</button></a></p>
      </div>
    </div>
  </div>
</div>


 <div class="row2">
  <div class="column">
    <div class="card">
      <img src="pic5.jpg" style="width:100%">
      <div class="container">
	     <h2>Shivana's Jewellery </h2>
	    <h2>Chakkare Jumkha</h2>
        <h3>Arrival: 2020</h3>
		<h3>code:0005</h3>
		<h2 class="title">8g</h2>
        <p><a href="#page4"><button class="button">Buy</button></a></p>
      </div>
    </div>
  </div>
</div>



 <div class="row2">
  <div class="column">
    <div class="card">
      <img src="pic6.jpg" style="width:80%">
      <div class="container">
	    <h2>Shivana's Jewellery </h2>
	    <h2>Pearl Earing</h2>
        <h3>Arrival: 2020</h3>
		<h3>code:0006</h3>
			<h2 class="title">7.99g</h2>
        <p><a href="#page4">
		<button class="button">Buy</button></a></p>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
</table>

</div>
<div class="footer">
  <h2>copyright@accesories Shivana's Jewellery2020, All rights reserved</h2>
</div>


<div data-role="page" id="page4">
<div class="header">
 <h1></h1>
<img src="coverpg.JPG" width="100%" height="500" bgcolor="black"/><br>
			<div class="navbar">
			<a href="#page1">Home</a>
			<a href="#page2">Catalogue</a>
			<a href="#page3">Buy</a>
			<a href="#page4" class="active">Make Order</a>
			<a href="#page5" class="right">LogOut</a>
			</div>
			 <marquee direction="left to right" height="100" width="1000" bgcolor="white" loop="10">
	         <img face="tabona" size="100" img src="wel.JPG"  ></img>
			</marquee>
</div>
</div>



<div class="w3-content" style="max-width:1532px;">
</div>

 <div class="w3-container w3-margin-top" id="rooms">
 </div>

<u><h2>Payment Details</h2></u>
<br>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Customer Address</h3>
            <label for="fname"><class="fa fa-user" align="left">Full Name:</label>
            <input type="text" id="fname" name="firstname" placeholder="Please Enter Your Name">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Please Enter Your email ">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Please Enter Your Address">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Please Enter Your City">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="Please Enter Your State">
              </div>
              <div class="col-50">
                <label for="zip">Jewellery Code</label>
                <input type="text" id="zip" name="zip" placeholder="xxxxx">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h1>Place Order</h1>
			<h2>Credit/Debit Card</h2>
            <label for="fname"></label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <h4><label for="cname" align="left">USERNAME:</label></h4>
            <input type="text" id="cname" name="cardname" placeholder="Enter Your Name">
            <h4><label for="ccnum" align="left">CERDIT/DEBIT CARD NUMBER:</label></h4>
            <input type="text" id="ccnum" name="cardnumber" placeholder="xxxx-xxxx-xxxx-xxxx">
            
                <div class="col-25">
    <div class="container">
	 <div class="w3-row-padding">
		<div class="w3-col m3">
		<label><i class="fa fa-calendar-o"></i> Check In</label>
		<input type="date" class="w3-input w3-border" placeholder="DD MM YYYY"/>
    </div>
      <label><i class="fa fa-search"></i> Search</label>
      <button class="w3-button w3-block w3-black">Search</button>
    </div>
   </div>
   </div>
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>Jewellery</b></span></h4>
      <p><a href="#">Product 1</a> <span class="price">RM2000</span></p>
      <p><a href="#">Product 2</a> <span class="price">RM3050</span></p>
      <p><a href="#">Product 3</a> <span class="price">RM2800</span></p>
      <p><a href="#">Product 4</a> <span class="price">RM2699</span></p>
	  <p><a href="#">Product 5</a> <span class="price">RM900</span></p>
	  <p><a href="#">Product 6</a> <span class="price">RM2999</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>RMxx,xxx</b></span></p>
   <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
   </div>
  </div>
</div>

      </form>
    </div>
  </div>
           
          </div>
          
        </div>

<div class="footer">
  <h2>copyright@accesories Shivana's Jewellery2020, All rights reserved</h2>
</div>

 
</body>
</html>