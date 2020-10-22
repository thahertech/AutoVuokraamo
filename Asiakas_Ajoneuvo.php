<?php

$host="localhost";
$dbname="t9alth00";
$username="t9alth00";
$password="";

$con = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error(); }

$result = mysqli_query($con,"select * FROM Asiakas_Ajoneuvo JOIN Asiakas ON Asiakas_Ajoneuvo.idAsiakas = Asiakas.asiakasID ORDER BY idAsiakas");

echo "<table border='5'> <tr>
<th>Asiakasnumero</th>
<th>Etunimi</th>
<th>Sukunimi</th>
<th>Osoite</th>

<th>Ajoneuvonumero</th>
<th>Sopimusnumero</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>" . $row['idAsiakas'] . "</td>";
echo "<td>" . $row ['Etunimi'] .    "</td>";
echo "<td>" . $row ['Sukunimi'] .    "</td>";
echo "<td>" . $row ['Osoite'] .    "</td>";

echo "<td>" . $row['idAjoneuvo'] . "</td>";
echo "<td>" . $row ['idSopimus'] .    "</td>";



}
echo "</table>";
   mysqli_close($con);
