<!DOCTYPE html>
<html>
<head>
	<title> Landing Page</title>
	<style>
    body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
.button {
  background-color: #4CAF50;
  border: none;
  border-radius: 20px;
  color: white;
  padding: 8px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.center {
  text-align: center;
  
}
input[type=text], select {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 20px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 20%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 20px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.div2{
  border-radius: 5px;
  width: 100%;
  text-align: center;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head><body>
  <div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="Login_page.php">Login</a>
  <a href="sign_up.php">Signup</a>
  <a href="profile.php">Profile</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<div class="center"  align="center"> <h3> Search options</h3> </div>



<div class="center" class="div2" align = "center">
	1. Browse the entire music collection <br>
	<a href = "collection.php" class = "button"> Click here </a>
</div>
<br>
<br>
<div class="center" align = "center">
	2. Search by composer <br> 
	<form action="searchByComposer.php" method="post">
	<input type="text" name="name" placeholder="Enter Composer/Artist name"><br>
	<input type="submit" class = "button">
</form>
</div>

<br>
<br>
<div class="center" align = "center">
	3. Search by Genre 
	<form action="searchByGenre.php" method="post">
	<input type="text" name="name"  placeholder="Enter Genre"><br>
	<input type="submit" class = "button">
</form>
</div>
<div align = "center">
<a href="home_page.php" class = "button"> Go to main page </a>
</div>

</body>
</html>