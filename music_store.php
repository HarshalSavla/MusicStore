<!DOCTYPE html>
<html>
<head>
	<title>PHP trial</title>
</head>
<body>

</body>

<?php 
 	
 	echo "Hello World";

$host="localhost";
$user="root";
$password="";
$dbname = "music_store_db";
$con=mysqli_connect($host,$user,$password,$dbname);
if($con) {
    echo '<h1>Connected to MySQL</h1>';
} else {
    echo '<h1>MySQL Server is not connected</h1>';
}


$sql = "SELECT * FROM Genre";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {
        echo  $row["Genre_ID"]. " - " . $row["Genre_name"]. " " . "<br>";
    }
} else {
    echo "0 results";
}

 ?>
</html>

