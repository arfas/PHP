<?php
error_reporting(E_ALL ^ E_NOTICE)
?>
<!DOCTYPE html>
<head>
<title> Registration Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'master.php';?>
<div class = "container text-center">
<h1>Welcome to my Registration page</h1>
</div>
<center>
<form method="post" action="connect.php" >
<table>
<tr>
<td>Username:</td>
<td><input type="text" name="strusername" class ="textInput"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="strpassword" class="textInput"></td>
</tr>
<tr>
<td>Retype Password:</td>
<td><input type="password" name="strpassword2" class="textInput"></td>
</tr>
<tr>
<td>EMail:</td>
<td><input type="email" name="stremail" class="textInput"></td>
</tr>
<tr>
<td>Role:</td>
<td><input type="text" name="strrole" class="textInput"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="register_btn" value="Register"></td>
</tr>

</table>
</form>
</center>
<?php include 'footer.php';?>
</body>
</html>
