<?php

$host="localhost";
$dbname="t9alth00";
$username="t9alth00";
$password="";

$con = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error(); }

$result = mysqli_query($con,"SELECT * FROM Sopimus JOIN Maksurekisteri ON Sopimus.SopimusID = Maksurekisteri.MaksuID");
echo "<table border='3'> 
<tr> 
<th>SopimusID</th> 
<th>idMaksurekisteri</th> 
<th>Palautuspvä</th> 
<th>Aloituspvä</th>
<th>MaksuID</th>
<th>Summa</th>
<th>Maksettu</th>
<th>Maksupvä</th>




</tr>" ;
while($row = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>" . $row['SopimusID'] .                   "</td>";
echo "<td>" . $row['idMaksurekisteri'] .            "</td>";
echo "<td>" . $row [date('Y-m-d')['Palautuspvä']] . "</td>";
echo "<td>" . $row [date('Y-m-d')['Aloituspvä'] ].  "</td>";
echo "<td>" . $row['MaksuID'] .                     "</td>";
echo "<td>" . $row['Summa'] .                       "</td>";
echo "<td>" . $row [date('Y-m-d')['Maksettu']] .    "</td>";
echo "<td>" . $row [date('Y-m-d')['Maksupvä']] .      "</td>";
echo "</tr>";
}
echo "</table>";


$result = mysqli_query($con,"select * FROM Maksurekisteri JOIN Sopimus ON Maksurekisteri.MaksuID=Sopimus.SopimusID");

echo "<table border='5'> <tr>
<th>MaksuID</th>
<th>Summa</th>
<th>Maksettu</th>
<th>Maksupvä</th> </tr>";
while($row = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>" . $row['MaksuID'] . "</td>";
echo "<td>" . $row['Summa'] . "</td>";
echo "<td>" . $row ['Maksettu'] .    "</td>";
echo "<td>" . $row [date('y-m-d')['Maksupvä']] .    "</td>";

"</tr>";
}
echo "</table>";
$result = mysqli_query($con,"select * FROM Sopimus JOIN Asiakas ON Sopimus.SopimusID=Asiakas.idSopimus");

echo "<table border='5'> <tr>
<th>SopimusID</th>
<th>idMaksurekisteri</th>
<th>Palautuspvä</th> 
<th>Aloituspvä</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>" . $row['SopimusID'] . "</td>";
echo "<td>" . $row['idMaksurekisteri'] . "</td>";
echo "<td>" . $row [date('y-m-d')] . "</td>";  


}
echo "</table>";

   mysqli_close($con);
?>

