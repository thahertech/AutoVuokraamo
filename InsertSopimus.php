<?php

$host="localhost";
$dbname="t9alth00";
$username="t9alth00";
$password="";

$con = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
$idMaksurekisteri = mysqli_real_escape_string($con, $_POST['idMaksurekisteri']);
$SopimusID = mysqli_real_escape_string($con, $_POST['SopimusID']);

$Palautuspvä = mysqli_real_escape_string($con,date('Y-m-d',$_POST['Palautuspvä']));
$Aloituspvä = mysqli_real_escape_string($con,date('Y-m-d',$_POST['Aloituspvä']));
echo "<td>" . $row ['Palautuspvä'] .    "</td>";
$_POST[date('y-m-d')['Palautuspvä']];

$sql = "INSERT INTO Sopimus (SopimusID , Palautuspvä , Aloituspvä)
VALUES ('$SopimusID', '$Palautuspvä', '$Aloituspvä')";


if (!mysqli_query($con, $sql)) {
die('Error: ' . mysqli_error($con)); }
echo "1 record added"; 


mysqli_close($con);

?>