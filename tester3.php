<?php

$host="localhost";
$dbname="t9alth00";
$username="t9alth00";
$password="";

$con = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error(); }

$result = mysqli_query($con,"select * FROM Sopimus JOIN Asiakas ON Sopimus.SopimusID=Asiakas.idSopimus");

echo "<table border='5'> <tr>
<th>Asiakas Numero</th>

<th>Etunimi</th>
<th>Sukunimi</th>

<th>Sopimus Numero</th>
<th>Palautuspäivä</th>

<th>Aloituspäivä</th>


</tr>";
while($row = mysqli_fetch_array($result)) {
    'Palautuspvä'[ date( 'y-m-d')];
echo "<tr>";

echo "<td>" . $row ['asiakasID'] .   "</td>";
echo "<td>" . $row['Etunimi'] .     "</td>";
echo "<td>" . $row ['Sukunimi'] .   "</td>";

echo "<td>" . $row['SopimusID'] .   "</td>";

echo "<td>" . $row ['Aloituspvä'] .    "</td>";
echo "<td>" . $row ['Palautuspvä'] .    "</td>";







}
echo "</table>";

