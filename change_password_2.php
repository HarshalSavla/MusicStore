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



$sql = "SELECT uname, passwd FROM Customer where uname = '".$_POST["uname"]."' AND passwd = MD5('". $_POST["old_password"] ."')";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {

    	$sql = "UPDATE Customer SET passwd = MD5('". $_POST["new_password"] ."') WHERE uname = '".$_POST["uname"]."'"; 
    	mysqli_query($con, $sql);
    	?>



    	<div align="center">
	<h3>Password changed Successfully</h3>
	<a href="home_page.php" class="button"> Go to Home Page</a>


</div>



<?php
    }
} else {
    echo "Incorrect user id or password";
}
?>



</body>
</html>