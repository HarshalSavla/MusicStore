<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

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
.button2 {
  background-color: #4CAF50;
  border: none;
  border-radius: 20px;
  color: white;
  padding: 4px 11px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 2px 2px;
  cursor: pointer;
}
.center {
  text-align: center;
  padding-top: 10%;
  
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
#wrap {
    float: left;
    position: relative;
    left: 50%;
}

#content {
    float: left;
    position: relative;
    left: -50%;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 30%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
 
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="home_page.php" class="active">Home</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="Login_page.php">Login</a>
  <a href="sign_up.php">Signup</a>
  <a href="profile.php">Profile</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div class="center" align = "center">
  Search song <br> 
  <form action="searchBySong.php" method="post">
  <input type="text" name="name" placeholder="Enter song name"><br>
  <input type="submit" class = "button">
</form>
</div>

<div align = "center">
 <a href="Landing_page.php" class="button"> Advanced Search</a>
</div>



<?php 
$host="localhost";
$user="root";
$password="";
$dbname = "music_store_db";
$con=mysqli_connect($host,$user,$password,$dbname);
if($con) {
    echo '<h1></h1>';
} else {
    echo '<h1></h1>';
}


if (!empty($_POST["ASC"])){
  $order="ASC";
  echo "<div align='center'> <h3> Bottom 5 Trending songs </h3> </div>";
}
else{
$order = "DESC";
echo "<div align='center'> <h3> Top 5 songs </h3> </div>";
}

$sql = "SELECT Song_name, Composer FROM Song ORDER BY Popularity $order LIMIT 5";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

    echo "<table align='center' border='1px'> <tr>  <th>Song Name </th>  <th>Composer</th>  </tr>";
    
    while($row = mysqli_fetch_assoc($result)) {
        
      echo "<tr> <td>" .$row["Song_name"]."</td>". "<td>" .$row["Composer"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}


?>
<div align="center">
  <form action="home_page.php" method="post">
  <button class="button2" formaction="home_page.php" name="DESC" value="DESC">Top 5</button> 
</form>
<form action="home_page.php" method="post">
  <button class="button2" formaction="home_page.php" name="ASC" value="ASC"> Bottom 5</button> 
</form>

</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>