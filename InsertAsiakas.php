<?php

$host="localhost";
$dbname="t9alth00";
$username="t9alth00";
$password="";

$con = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
$asiakasID = mysqli_real_escape_string($con, $_POST["asiakasID"]);
$Etunimi = mysqli_real_escape_string($con, $_POST["Etunimi"]);
$Sukunimi = mysqli_real_escape_string($con, $_POST["Sukunimi"]);
$Osoite = mysqli_real_escape_string($con, $_POST["Osoite"]);
$idSopimus = mysqli_real_escape_string($con, $_POST["idSopimus"]);


$sql = "INSERT INTO  Asiakas ( Etunimi, Sukunimi, Osoite)
VALUES ('$Etunimi', '$Sukunimi', '$Osoite')";


if (!mysqli_query($con, $sql)) {
die('Error: ' . mysqli_error($con)); }
echo "1 record added"; 


mysqli_close($con);

?>