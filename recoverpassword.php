<?php
error_reporting(E_ALL ^ E_NOTICE)
?>
<?php
session_start();
?>



<!DOCTYPE html>
<head>
<title>Welcome to Password Recovery Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<?php include 'master.php';?>
<div class="container text-center">
<h1>Welcome to Password Recovery Page</h1>
<center>
<form method="post" action="connect_recpassword.php" >
<table>
<tr>
<td>Username:</td>
<td><input type="text" name="strusername" class ="textInput"></td>
</tr>
<tr>
<td>New Password</td>
<td><input type="password" name="strpassword" class ="textInput"></td>
</tr>
<tr>
<td>Retype Password</td>
<td><input type="password" name="strpassword2" class="textInput"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="a_btn" value="Submit"></td>
</tr>
</center>
</div>
<?php include 'footer.php';?>
</body>
</html>