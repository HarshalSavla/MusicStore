<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<style>
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


$sql = "SELECT SongID, Song_name, Composer, Popularity FROM Song";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

    echo "<table align='center' border='1px'> <tr>  <th>Song ID </th>  <th>Song Name </th>  <th>Composer</th> <th>Popularity </th> </tr>";
    
    while($row = mysqli_fetch_assoc($result)) {
        
      echo "<tr><td>" .$row["SongID"]."</td>" . "<td>" .$row["Song_name"]."</td>". "<td>" .$row["Composer"]."</td>". "<td>" .$row["Popularity"]."</td></tr>";
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
	<input type="text" name="name" placeholder="Song_name"><br>
	<input type="text" name="name" placeholder="Composer"><br>

	<input type="submit" class = "button">
</form>
</div>
	</div>

</body>
</html>