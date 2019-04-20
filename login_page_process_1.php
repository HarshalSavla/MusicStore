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


if(isset($_POST['admin']) &&

   $_POST['admin'] == 'Yes') {

$sql = "SELECT admin_name, admin_passwd FROM admin where admin_name = '".$_POST["uname"]."' AND admin_passwd = MD5('". $_POST["password"] ."')";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {
    	echo "Login Successful for admin ";
        echo  $row["admin_name"];?>

		<div align="center">
        	<a href="admin_operations.php" class="button"> Go to admin page </a>
        	echo "<script>location.href='admin_operations.php';</script>";
        </div>
        <?php
    }
} else {
    echo "Incorrect admin id or password";
    ?>
    <a href="Login_page.php" class="button"> Try Again </a>
    <?php
}


} else {
	$sql = "SELECT uname, passwd FROM Customer where uname = '".$_POST["uname"]."' AND passwd = MD5('". $_POST["password"] ."')";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {
    	echo "Login Successful for user <br>";
        echo  $row["uname"];
    }
} else {
    echo "Incorrect user id or password";
    ?>
    <a href="Login_page.php" class="button"> Try Again </a>
    <?php
}
}







?>

</body>
</html>