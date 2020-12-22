<html lang="en">
<head>
<title>Admin Page</title>
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
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  background-position: center;
  background-image:  
  background-size: cotain;
  background-repeat: no-repeat;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 50px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
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
  background-image: admin2.JPG; 
 
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-image:admin2.JPG;
  background-repeat: no-repeat;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 3px;
  text-align: center;
    background-image: 
}
/* Text */
.text{
text-align:left;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
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
    background-image: url("clr.jpg");
}

.column {
  float: left;
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

.container::after, .row2::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}
.footer 
{
	font-family: arial;
	fonnt-size:26;
	bgcolor:white;
  padding: 1px;
  text-align: center;
   background-color: pink;
}
}
.mian 
{
	font-family: verdana;
	fonnt-size:48;
	bgcolor:pink;
  padding: 1px;
  text-align: center;
   background-color: grey;
}
.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
}

</style>
</head>
<body>

<center>
<div data-role="page" id="page1">
<div class="header">
<img src="coverpg.JPG" width="100%" height="300" bgcolor="black"/><br>
			<div class="navbar">
  <a href="#page1" class="active">Home</a>
  <a href="#page2">Earing Collections</a>
  <a href="#page3">Sales Details</a>
  <a href="#page5" class="right">Log Out</a>
</div>
<marquee direction="left to right" height="100" width="1000" bgcolor="white" loop="10">
	         <img face="tabona" size="50" img src="wel.JPG"  ></img>
			</marquee>
 <div class="main">
   <u><h2><b>About Us</h2></u>
    <p>
	<h2>The system of Jewellery exist back in the previous years, were people sales Jewellery for their 
	personal usage. Jewellery essential to many women’s plan to buy for their personal usage.
	</h2>
	</p>
   
 </div>	
</div>
	<div class="footer">
	<h2>copyright@accesories Shivana's Jewellery2020 All rights reserved</h2>
	</div>
</div>

<div data-role="page" id="page2">
<div class="header">

<img src="coverpg.JPG" width="100%" height="500" bgcolor="black"/><br>
			<div class="navbar">
  <a href="#page1">Home</a>
  <a href="#page2"class="active">Earing Collections</a>
  <a href="#page3">Sales Details</a>
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
	     <td align ="center"> <img src="pic1.jpg" width="100%" height="300"/>
      <div class="container">
	   <h2>Shivana's Jewellery </h2>
	    <h2>Stone Earing</h2>
        <h3>Arrival: 2020</h3>
		<h3>code:0001</h3>
		<h2 class="title">7.99g</h2>
        <p><a href="#page4"><button class="button">Edit</button></a></p>
		</td>
		</tr>
		<tr>
	     <td align ="center"> <img src="pic2.jpg" width="100%" height="300"/>
      <div class="container">
	   <h2>Shivana's Jewellery </h2>
	    <h2>Bahubali Jumkha</h2>
        <h3>Arrival: 2020</h3>
		<h3>code:0002</h3>
		<h2 class="title">14g</h2>
        <p><a href="#page4"><button class="button">Edit</button></a></p>
		</td>
		</tr>
	  </div>
    </div>
  </div>
</div>

<div class="row2">
  <div class="column">
    <div class="card">
	<tr>
	     <td align ="center"> <img src="pic3.jpg" width="100%" height="300"/>
      <div class="container">
	   <h2>Shivana's Jewellery </h2>
	    <h2>Pearl Gold Jumkha</h2>
        <h3>Arrival: 2020</h3>
		<h3>code:0003</h3>
		<h2 class="title">12g</h2>
        <p><a href="#page4"><button class="button">Edit</button></a></p>
		</td>
		</tr>
		<tr>
	     <td align ="center"> <img src="pic4.jpg" width="100%" height="300"/>
      <div class="container">
	   <h2>Shivana's Jewellery </h2>
	    <h2>Sanggu Jumkha</h2>
        <h3>Arrival: 2020</h3>
		<h3>code:0004</h3>
		<h2 class="title">10g</h2>
        <p><a href="#page4"><button class="button">Edit</button></a></p>
		</td>
		</tr>
	  </div>
    </div>
  </div>
</div>

<div class="row2">
  <div class="column">
    <div class="card">
	<tr>
	     <td align ="center"> <img src="pic5.jpg" width="100%" height="300"/>
      <div class="container">
	   <h2>Shivana's Jewellery </h2>
	    <h2>Chakkare Jumkha</h2>
        <h3>Arrival: 2020</h3>
		<h3>code:0005</h3>
		<h2 class="title">8g</h2>
        <p><a href="#page4"><button class="button">Edit</button></a></p>
		</td>
		</tr>
		<tr>
	     <td align ="center"> <img src="pic6.jpg" width="100%" height="300"/>
      <div class="container">
	   <h2>Shivana's Jewellery </h2>
	    <h2>Pearl Earing</h2>
        <h3>Arrival: 2020</h3>
		<h3>code:0006</h3>
		<h2 class="title">7.99g</h2>
        <p><a href="#page4"><button class="button">Edit</button></a></p>
		</td>
		</tr>
	  </div>
    </div>
  </div>
</div>
	<br>
<br>	

</div>
<br>
<br>
<br>
</center>
</div>

<div data-role="page" id="page3">
<div class="header">
  <h1></h1>
<img src="coverpg.JPG" width="100%" height="500" bgcolor="black"/><br>
			<div class="navbar">
			<a href="#page1">Home</a>
			<a href="#page2">Categories</a>
			<a href="#page3" class="active">Sales Details</a>
			<a href="#page4" class="right">LogOut</a>
</div>
<marquee direction="left to right" height="100" width="1000" bgcolor="white" loop="10">
	         <img face="tabona" size="100" img src="wel.JPG"  ></img>
			</marquee>
</div>

<h1>Sales Details</h1>

<div id="piechart"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['', ''],
  ['Bahubali Jumkha', 12],
  ['Stone Earing', 7],
  ['Chakkare Jumkha', 20],
  ['Sanggu Jumkha', 12],
  ['Pearl Earing', 10]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</div>

<div class="footer">
  <h2>copyright@accesories Shivana's Jewellery2020 All rights reserved</h2>
</div>

</div>
</div>
</body>
</html>