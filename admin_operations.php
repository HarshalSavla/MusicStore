<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
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
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 4px 2px;
  cursor: pointer;
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

	<div align="center">
		<h3>Current database content </h3>
	</div>
	<div align="center">
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


$sql = "SELECT SongID, Song_name, Composer, Popularity, Price FROM Song";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

    echo "<table align='center' border='1px'> <tr>  <th>Song ID </th>  <th>Song Name </th>  <th>Composer</th> <th>Popularity </th> <th> Price</th> </tr>";
    
    while($row = mysqli_fetch_assoc($result)) {
        
      echo "<tr><td>" .$row["SongID"]."</td>" . "<td>" .$row["Song_name"]."</td>". "<td>" .$row["Composer"]."</td>". "<td>" .$row["Popularity"]."</td>". "<td>" .$row["Price"]."</td> </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}


?>
<br><br>
		<div class="center" align = "center">
	1. Enter new record <br> 
	<form action="new_song.php" method="post">
	<input type="text" name="song_name" placeholder="Song Name" required>
	<input type="text" name="composer" placeholder="Composer"required><br>
	<input type="text" name="popularity" placeholder="Popularity" required>
	<input type="text" name="genre" placeholder="Genre" required><br>
	<input type="text" name="price" placeholder="Price" required><br>


	<input type="submit" class = "button">
</form>
</div>
<br><br>
		<div class="center" align = "center">
	2. Delete Record <br> 
	<form action="delete_song.php" method="post">
	<input type="text" name="song_name" placeholder="Song ID" required><br>

	<button class="button" onclick="confirmFunction()"> Delete </button>
</form>
</div>
	</div>

	
<script>
function confirmFunction() {
  var txt;
  var r = confirm("Are you sure you want to delete this song from the database?");
  if (r == true) {
  	location.href='delete_song.php';
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>

</body>
</html>




















