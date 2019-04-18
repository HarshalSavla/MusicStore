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
echo "Genre Name" . " | " . " Song Name " . " | " . "Composer <br>";


if (mysqli_num_rows($result) > 0) {
    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {
        echo  $row["Genre_name"]. " | " .$row["Song_name"]. " | " . $row["Composer"]. " " . "<br>";
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