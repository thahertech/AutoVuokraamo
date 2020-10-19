<?php
$host = 'localhost'; $dbname = 't9alth00'; $username = 't9alth00'; $password = '';
$con = mysqli_connect($host,$username,$password,$dbname); if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
$result = mysqli_query($con,"SELECT * FROM Ajoneuvo" );

     
echo "<table border='1'> <tr>
<th>AjoneuvoID</th>
<th>Automerkki</th>
<th>Rekisterinumero</th>
<th>Sopimus</th> </tr>";
while($row = mysqli_fetch_array($result)) { echo "<tr>";
echo "<td>" . $row['AjoneuvoID'] . "</td>"; 
echo "<td>" . $row['Automerkki'] . "</td>";
echo "<td>" . $row['Rekisterinumero'] ."</td>";
echo "<td>" . $row['idSopimus'] . "</td>"; echo "</tr>";
}
echo "</table>";

$result = mysqli_query($con,"SELECT * FROM Asiakas");

echo "<table border='1'> <tr>
<th>asiakasID</th><th>Etunimi</th> <th>Sukunimi</th> <th>Osoite</th> </tr>";
while($row = mysqli_fetch_array($result)) { echo "<tr>";
echo "<td>" . $row['asiakasID'] . "</td>";echo "<td>" . $row['Etunimi'] . "</td>"; echo "<td>" . $row['Sukunimi'] . "</td>";echo "<td>" . $row['Osoite'] . "</td>"; echo "</tr>";
}
echo "</table>";

$result = mysqli_query($con,"SELECT * FROM Maksurekisteri");

echo "<table border='1'> <tr>
<th>MaksuID</th>
<th>Summa</th>
<th>Maksettu</th>
<th>Maksupvä</th> </tr>";
while($row = mysqli_fetch_array($result)) { echo "<tr>";
echo "<td>" . $row['MaksuID'] . "</td>";
echo "<td>" . $row['Summa'] . "</td>";
echo "<td>" . $row['Maksettu'] . "</td>";
echo "<td>" . $row['Maksupvä'] . "</td>"; echo "</tr>";
}
echo "</table>";
$result = mysqli_query($con,"SELECT * FROM Sopimus");

echo "<table border='1'> <tr>
<th>Sopimus Numero</th>
<th>MaksurekisteriID</th>
<th>Palautuspvä</th>
<th>Aloituspäivää</th> </tr>";
while($row = mysqli_fetch_array($result)) { echo "<tr>";
echo "<td>" . $row['SopimusID'] . "</td>";
echo "<td>" . $row['idMaksurekisteri'] . "</td>";
echo "<td>" . date(["Palautuspvä"])   . "</td>";
echo "<td>" . $row['Aloituspvä'] . "</td>";
echo "</tr>";
}
echo "</table>";

$result = mysqli_query($con,"SELECT * FROM Maksurekisteri");
while($row = mysqli_fetch_array($result)) {
echo $row['MaksuID'] . " " . $row['Maksupvä']. $row['Maksettu']. $row['Summa'];
echo "<br>";
}


$result = mysqli_query($con,"SELECT * FROM Sopimus");
while($row = mysqli_fetch_array($result)) {
echo $row['SopimusID'] . " ".
        $row['idMaksurekisteri']. 
        $row['Palautuspvä']. 
        $row['Aloituspvä'];
echo "<br>";
}
