<?php
$host = 'localhost'; $dbname = 't9alth00'; $username = 't9alth00'; $password = '';
$con = mysqli_connect($host,$username,$password,$dbname); if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
$result = mysqli_query($con,"SELECT * FROM Maksutiedot ORDER BY MaksuID");

echo "<table border='1'> <tr>
    
<th>Maksu Tunnus</th>
<th>Etunimi</th>
<th>Sukunimi</th>
<th>Rekisterinumero</th> 
<th>Summa</th>
<th>Maksupvä</th>
<th>AjoneuvoID</th>

</tr>";


while($row = mysqli_fetch_array($result)) { echo "<tr>";
echo "<td>" . $row['MaksuID'] . "</td>";
echo "<td>" . $row['Etunimi'] . "</td>";
echo "<td>" . $row['Sukunimi'] . "</td>";
echo "<td>" . $row['Rekisterinumero'] . "</td>";
echo "<td>" . $row['Summa'] . "</td>";
echo "<td>" . $row['Maksupvä'] . "</td>";
echo "<td>" . $row['AjoneuvoID'] . "</td>";


echo "</tr>";
}
echo "</table>";

$result = mysqli_query($con,"SELECT * FROM Ajoneuvotiedot ORDER BY AjoneuvoID");

echo "<table border='1'> <tr>
<th>AsiakasID</th>
<th>Etunimi</th> 
<th>Sukunimi</th> 
<th>Automerkki</th> 
<th>Rekisternumero</th> 
<th>AjoneuvoID</th> 

</tr>";
while($row = mysqli_fetch_array($result)) { 
echo "<tr>";

echo "<td>" . $row['AsiakasID'] . "</td>";
echo "<td>" . $row['Etunimi'] . "</td>";
echo "<td>" . $row['Sukunimi'] . "</td>";
echo "<td>" . $row['Automerkki'] . "</td>";
echo "<td>" . $row['Rekisterinumero'] . "</td>";
echo "<td>" . $row['AjoneuvoID'] . "</td>";

echo "</tr>";
}
echo "</table>";

$result = mysqli_query($con,"SELECT * FROM Sopimustiedot");

echo "<table border='1'> <tr>
<th>SopimusID</th>
<th>Etunimi</th> 
<th>Sukunimi</th> 
<th>Osoite</th> 
</tr>";
while($row = mysqli_fetch_array($result)) { 
echo "<tr>";

echo "<td>" . $row['SopimusID'] . "</td>";
echo "<td>" . $row['Aloituspvä'] . "</td>";
echo "<td>" . $row['Palautuspvä'] . "</td>";
echo "<td>" . $row['Etunimi'] . "</td>";
echo "<td>" . $row['Sukunimi'] . "</td>";

echo "<td>" . $row['AsiakasID'] . "</td>";

echo "</tr>";
}
echo "</table>";

   mysqli_close($con);
?>
