<?php

$host="localhost";
$dbname="t9alth00";
$username="t9alth00";
$password="";

$con = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
$SopimusID = mysqli_real_escape_string($con, $_POST["SopimusID"]);
$idMaksu = mysqli_real_escape_string($con, $_POST["idMaksurekisteri"]);
$Palautus = mysqli_real_escape_string($con, $_POST["Palautuspvä"]);
$Aloitus = mysqli_real_escape_string($con, $_POST["Aloituspvä"]);


$sql = "INSERT INTO  Sopimus ( idMaksurekisteri, Palautuspvä, Aloituspvä)
VALUES ($idMaksu', '$Palautus', '$Aloitus)";


if (!mysqli_query($con, $sql)) {
die('Error: ' . mysqli_error($con)); }
echo "1 record added"; 


mysqli_close($con);

?>