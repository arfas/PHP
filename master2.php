<?php error_reporting(E_ALL ^ E_NOTICE)?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
<div class="jumbotron">
<div class="conatiner text-center">

<h1>My Website</h1>
<p>Mission,Vision&Values </p>
</div>
</div>

<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div

<div class="collapse anvbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">
<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
<li><a href="#">Products</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Contact</a></li> 
</ul>
<!--<button class="btn"><i class="fa fa-home"></i> Home</button>
<button class="btn"><i class="fa fa-bars"></i> Products</button>
<button class="btn"><i class="fa fa-trash"></i> About</button>
<button class="btn"><i class="fa fa-close"></i> Contact</button>
-->
<ul class="nav navbar-nav navbar-right">
<?php
$isLogged = true;
if($isLogged=true)
{
	echo '<li><a href="manageadminpage.php"><span class="glyphicon glyphicon-wrench"></span> Manage Admins</a></li>';
	echo '<li><a href="manageadminpage.php"><span class="glyphicon glyphicon-briefcase"></span> Profile</a></li>';
	echo '<li><a href="manageadminpage.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>';

	}
else
{
	
		echo '<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>';
		
}
	?>
	</ul>
	</div>
	</div>
	</nav>
	</body>
	</html>

</body>

