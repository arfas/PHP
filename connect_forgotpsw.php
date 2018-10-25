<?php

require 'connection.php';
$conn    = Connect();
$stremail   = $conn->real_escape_string($_POST['stremail']);
$stremail1 = $conn->real_escape_string($_POST['stremail1']);




if($stremail==$stremail1){
	$query   = mysqli_query($conn,"SELECT * FROM usertbl WHERE stremail='$stremail' ");
	$row=mysqli_fetch_row($query);
echo"You have been registered you must activate your account from the activation link sent to you at '$stremail'<br>";
echo"Please follow the link below:<br>";
echo"http://localhost:1234/project%20phase%201(2)/recoverpassword.php?strusername=$row[1]&str_code=$row[5]";

}

else{
	echo"email dont match";
}


$conn->close();

?>