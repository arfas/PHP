<?php

require 'connection.php';
$conn    = Connect();
$strusername    = $conn->real_escape_string($_POST['strusername']);

$strcode=$conn->real_escape_string($_POST['strcode']);


$query=("SELECT strcode FROM usertbl WHERE strusername='$strusername'");

$success = $conn->query($query);

if($strcode!="0")
{
	$query1=("UPDATE usertbl SET blnactive=1 WHERE strcode='$strcode'");
	$success1 = $conn->query($query1);
	
	echo"Your Account is activated,Now Go to your login page";
}
else{
	echo"Please enter the correct code.";
}

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}


//header('Location:login.php');
$conn->close();

?>