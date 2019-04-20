<!DOCTYPE html>
<html>
<head>
	<title></title>
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
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
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

<br><br><br>
<div class = "center">
<?php


echo "Search result for ".$_POST["name"];

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


$sql = "CALL findByGenre('" . $_POST["name"] ."')" ;
$result = mysqli_query($con, $sql);



// if (mysqli_num_rows($result) > 0) {
//     // output data of each row

//     while($row = mysqli_fetch_assoc($result)) {
//         echo  $row["Genre_name"]. " | " .$row["Song_name"]. " | " . $row["Composer"]. " " . "<br>";
//     }
// } else {
//     echo "0 results";
// }

if (mysqli_num_rows($result) > 0) {
    // output data of each row

    echo "<table align='center' border='1px'> <tr>  <th>Genre </th>  <th>Song Name </th>  <th>Composer</th>  </tr>";
    
    while($row = mysqli_fetch_assoc($result)) {
        
      echo "<tr><td>" .$row["Genre_name"]."</td>" . "<td>" .$row["Song_name"]."</td>". "<td>" .$row["Composer"]."</td>". "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
</div>
<br>
<br>
<div align = "center">
<a href="home_page.php" class = "button"> Go to main page </a>
</body>
	</div>





</html>