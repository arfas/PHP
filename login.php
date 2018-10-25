<?php
error_reporting(E_ALL ^ E_NOTICE)
?>
<!DOCTYPE html>
<head>
<title> Login Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'master.php';?>
<div class = "container text-center">
<h1>Welcome to my Login Page</h1>
</div>
<center>
<form method="post" action="connect_login.php" >
<table>
<tr>
<td>Username:</td>
<td><input type="text" name="strusername" class ="textInput"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="strpassword" class ="textInput"></td>
</tr>
<tr>
<td></td>
<td><name="strrole" ></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="register_btn" value="Login"></td>
</tr>
</table>
</form>
</br>

<a href="http://localhost:1234/project%20phase%201(2)/forgotpassword.php"><span class="glyphicon glyphicon-user"></span>Forgot Your Password</a>
</center>

<?php include 'footer.php';?>
</body>
</html>
