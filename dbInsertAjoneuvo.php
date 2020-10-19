
<?php

$host="localhost";
$dbname="t9alth00";
$username="t9alth00";
$password="";

$con = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
$Automerkki = mysqli_real_escape_string($con, $_POST["Automerkki"]);
$Rekisterinumero= mysqli_real_escape_string($con, $_POST["Rekisterinumero"]);
$idSopimus= mysqli_real_escape_string($con, $_POST["idSopimus"]);


$sql = "INSERT INTO  Ajoneuvo ( Automerkki , Rekisterinumero, idSopimus)
VALUES ('$Automerkki ','$Rekisterinumero','$idSopimus')";

if (!mysqli_query($con, $sql)) {
die('Error: ' . mysqli_error($con)); }
echo "1 record added"; 


mysqli_close($con);

?>
