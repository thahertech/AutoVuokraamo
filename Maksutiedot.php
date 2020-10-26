<?php

$host="localhost";
$dbname="t9alth00";
$username="t9alth00";
$password="";

$con = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error(); }

$result = mysqli_query($con,"select * FROM Maksutiedot ORDER BY MaksuID");

echo "<table border='5'> <tr>
<th>Maksu Tunnus</th>
<th>Etunimi</th>
<th>Sukunimi</th>
<th>Rekisterinumero</th>

<th>Summa</th>
<th>Maksupvä</th>
<th>AjoneuvoID</th>


</tr>";
while($row = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>" . $row['MaksuID'] . "</td>";
echo "<td>" . $row ['Etunimi'] .    "</td>";
echo "<td>" . $row ['Sukunimi'] .    "</td>";
echo "<td>" . $row ['Rekisterinumero'] .    "</td>";

echo "<td>" . $row['Summa'] . "</td>";
echo "<td>" . $row ['Maksupvä'] .    "</td>";
echo "<td>" . $row['AjoneuvoID'] . "</td>";




}
echo "</table>";
   mysqli_close($con);
