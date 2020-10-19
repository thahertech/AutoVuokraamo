<?php
$host = 'localhost'; $dbname = 't9alth00'; $username = 't9alth00'; $password = '';
$con = mysqli_connect($host,$username,$password,$dbname); if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
$result = mysqli_query($con,"SELECT * FROM Asiakas");

echo "<table border='1'> <tr>
<th>asiakasID</th><th>Etunimi</th> <th>Sukunimi</th> <th>Osoite</th> </tr>";
while($row = mysqli_fetch_array($result)) { echo "<tr>";
echo "<td>" . $row['asiakasID'] . "</td>";echo "<td>" . $row['Etunimi'] . "</td>"; echo "<td>" . $row['Sukunimi'] . "</td>";echo "<td>" . $row['Osoite'] . "</td>"; echo "</tr>";
}
echo "</table>";

   mysqli_close($con);
?>
