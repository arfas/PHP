<?php

require 'connection.php';
$conn    = Connect();

$strusername    = $conn->real_escape_string($_POST['strusername']);
$strpassword   = $conn->real_escape_string($_POST['strpassword']);
$strpassword2 = $conn->real_escape_string($_POST['strpassword2']);
$stremail    = $conn->real_escape_string($_POST['stremail']);
$strcode=$conn->real_escape_string(md5(microtime()));
$strrole    = $conn->real_escape_string($_POST['strrole']);

if($strpassword==$strpassword2){
$query   = "INSERT into usertbl (Ingid,strusername,strpassword,stremail,strcode,strrole,strdate,blnactive) VALUES('" . rand() . "','" . $strusername . "','" . $strpassword . "','" . $stremail . "','" . $strcode . "','" . $strrole . "','" . date("Y/m/d") . "',0)";
$success = $conn->query($query);
echo"You have been registered you must activate your account from the activation link sent to you at '$stremail'<br>";
echo"Please follow the link below:<br>";
echo"http://localhost:1234/project%20phase%201(2)/activation.php?strusername='$strusername'&str_code='$strcode'";

}

else{
	echo"Passwords do not match";
}
if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}



$conn->close();

?>
