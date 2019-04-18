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
  border: 1px solid green;
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


$sql = "SELECT SongID, Song_name, Composer, Popularity FROM Song";
$result = mysqli_query($con, $sql);
echo "SongID" . " | " . " Song name " . " | " ." Composer "." | " . "Popularity <br>";
if (mysqli_num_rows($result) > 0) {
    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {
        echo  $row["SongID"]. "  |  " . $row["Song_name"]. "  |  " . $row["Composer"]."  |  ". $row["Popularity"]."<br>";
    }
} else {
    echo "0 results";
}


?>
</div>
<br>
<br>
<div align = "center">
<a href="Landing_page.php" class = "button"> Go to main page </a>
</body>
	</div>

</html>