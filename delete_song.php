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

$sql = "DELETE FROM Song WHERE SongID ='".$_POST["song_name"]."'";
mysqli_query($con, $sql); 



echo "<script>location.href='admin_operations.php';</script>";
?>


</body>
</html>