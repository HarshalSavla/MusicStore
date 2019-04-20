<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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

// Check if genre exists in genre table. If it does get corresponding genre_ID, IF NOT create new Genre_ID for that genre.
 $sql = "SELECT Genre_ID FROM Genre Where Genre_name ='".$_POST["genre"]."'";
 $result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row  
    while($row = mysqli_fetch_assoc($result)) {
    	echo $row["Genre_ID"];
    }
} else {
    $sql = "INSERT INTO Genre(Genre_name) VALUES ('".$_POST["genre"]."')";
    mysqli_query($con, $sql);
    
}

echo "<br> check 2".$_POST["genre"];


// Fetch new Genre_ID for newly created Genre_name
 $sql = "SELECT Genre_ID FROM Genre Where Genre_name ='".$_POST["genre"]."'";
 $result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row  
    while($row = mysqli_fetch_assoc($result)) {
    	echo "<br><br>";
    	echo "new genre_id";
    	echo $row["Genre_ID"];
    	$genre = $row["Genre_ID"];
    	echo "<br><br>";
    }
} else {
    echo " ";
}

echo "<br> <br>final genre";
echo $genre;


	$sql = "INSERT INTO Song(Song_name, Composer, GenreID, Popularity, Price) Values('".$_POST["song_name"]."','".$_POST["composer"]."','".$genre."','".$_POST["popularity"]."','".$_POST["price"]  . "')";

mysqli_query($con, $sql); 


    echo "<script>location.href='admin_operations.php';</script>";

?>

</body>
</html>