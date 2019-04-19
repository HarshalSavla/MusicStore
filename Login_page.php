<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#wrap {
    float: left;
    position: relative;
    left: 50%;
}

#content {
    float: left;
    position: relative;
    left: -50%;
}
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}


.container {
  padding: 16px;
}
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}
/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.cancelbtn, .loginbtn {
  float: left;
  width: 50%;
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

</style>
</head>
<body>



<form action="login_page_process_1.php" method="POST">
  
<div id = "wrap">
	<div id = "content">

  <div class="container">
  	<h3>Login </h3>

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" >

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" >

    <br>
    <br>
    <label for="admin">Admin login?</label>
    <input type="checkbox" name="admin" value = "Yes">
        <br><br>
        <a href="change_password.php"><font size="2">Change Password</font></a>
    <br>
    <br>

    <div class="clearfix">
       
      
       <button  type="submit" formaction="home_page.php" class="cancelbtn">Cancel</button>
        <button type="submit" class="loginbtn">Login</button>
      </form>
      
      
      
    </div>
    
  </div>


  </div>
</div>


</body>
</html>