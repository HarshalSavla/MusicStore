<!DOCTYPE html>
<html>
<head>
	<title></title>
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

<br><br><br>
<div class = "center">

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


$sql = "SELECT Song_name, Composer, Popularity FROM Song";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

    echo "<table align='center' border='1px'> <tr>    <th>Song Name </th>  <th>Composer</th> <th>Popularity </th> </tr>";
    
    while($row = mysqli_fetch_assoc($result)) {
        
      echo "<tr><td>"  .$row["Song_name"]."</td>". "<td>" .$row["Composer"]."</td>". "<td>" .$row["Popularity"]."</td></tr>";
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