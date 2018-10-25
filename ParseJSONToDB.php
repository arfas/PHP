<?php
$connect = mysqli_connect("localhost" , "root", "", "arfa");
$filename="data.json";
$data = file_get_contents($filename);
$array=json_decode($data,true);
foreach($array as $row){

    $sql="INSERT INTO tbltempactor(name,description,dob,country,image)
                                VALUES('".$row["name"]."','".$row["description"]."','".$row["dob"]."','".$row["country"]."','".$row["image"]."')";
    mysqli_query($connect, $sql);

}
echo"TblTempActor has been updated with data";
?>
