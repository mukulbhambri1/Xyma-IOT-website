<!DOCTYPE html>
<html>
<body>
	<title> Xyma Analytics </title>
	<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 30px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>

<div class="header">
  <a href="#default" class="logo">Welcome to the world of IOT - Internet of Things</a>
  <div class="header-right">
    <a href="signup.php">Signup</a>
  </div>
</div>
<center><h1 style="color:blue;" > Welcome to Xyma Analytics</center></h1>
<center><img src="logo.jpeg" alt="Xyma" width="1000" height="300"></center>
<h2><center>At XYMA, we integrate our Waveguide Ultrasonic Sensors with Process Models and Data Analytics units on a secure centralized Industrial IoT platform.The vision of XYMA Analytics is to make reliable sensors for you. Our expert engineers and researchers from IIT-Madras will bring your complicated and severe problems to an end.</center></h2>
<h1 style="color:blue;">Our Products</h1>
<h2>
<ul>
  <li>μTMapS</li>
  <li>PoRTS</li>
  <li>Ztar</li>
  <li>I-PAMS</li>
</ul>
</h2>
<h2><center> Enter Product name to get the product details</center> </h2>
<h3> Kindly Copy the the above product names you want to search for</h3>

<form action="iot.php" method="post">
Product Name <input type="text" name="name"><br>
<input type="submit" value="Submit">


</form>

</body>
</html>
