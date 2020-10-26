<?php

$host="localhost";
$dbname="t9alth00";
$username="t9alth00";
$password="";

$con = mysqli_connect($host, $username, $password, $dbname    );
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
$MaksuID = mysqli_real_escape_string($con,  $_POST["MaksuID"] );
$Summa = mysqli_real_escape_string($con,    $_POST["Summa"]   );

$Maksupvä = mysqli_real_escape_string($con,$_POST["Maksupvä"]);
$Maksettu = mysqli_real_escape_string($con,$_POST["Maksettu"]);


$sql = "INSERT INTO Maksurekisteri (MaksuID, Summa,Maksupvä)
VALUES ('$MaksuID','$Summa', '$Maksupvä')";


if (!mysqli_query($con, $sql)) {
die('Error: ' . mysqli_error($con)); }
echo "1 record added"; 


mysqli_close($con);

?>