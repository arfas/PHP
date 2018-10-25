<?php
error_reporting(E_ALL ^ E_NOTICE)
?>
<?php
session_start();
?>
<!DOCTYPE html>
<head>
<title>Welcome to Activation Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<?php include 'master.php';?>
<div class="container text-center">
<h1>Welcome to Activation Page</h1>
<center>
<form method="post" action="connect_reg.php" >
<table>
<tr>
<td>Username:</td>
<td><input type="text" name="strusername" class ="textInput"></td>
</tr>
<tr>
<td>Activation:</td>
<td><input type="text" name="strcode" class="textInput"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="a_btn" value="Activate"></td>
</tr>
</center>
</div>
<?php include 'footer.php';?>
</body>
</html>