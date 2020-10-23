<?php
$host = 'localhost'; $dbname = 't9alth00'; $username = 't9alth00'; $password = '';
$con = mysqli_connect($host,$username,$password,$dbname); if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error(); }

$result = mysqli_query($con,"SELECT * FROM Sopimus");

echo "<table border='5'> <tr>
<th>SopimusID</th>
<th>idMaksurekisteri</th>
<th>Aloituspvä</th>
<th>Palautuspvä</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>" . $row [date('y-m-d')['Aloituspvä']] . "</td>";
echo "<td>" . $row['SopimusID']                  . "</td>";

echo "<td>" . $row['idMaksurekisteri']           .    "</td>";

echo "<td>" . $row[date('y-m-d')['Palautuspvä']] .    "</td>";


}
echo "</table>";

$result = mysqli_query($con,"SELECT * FROM Ajoneuvo" );

     
echo "<table border='5'> <tr>
<th>AjoneuvoID</th>
<th>Automerkki</th>
<th>Rekisterinumero</th>
<th>idSopimus</th> 

</tr>";
while($row = mysqli_fetch_array($result)) { echo "<tr>";
echo "<td>" . $row['AjoneuvoID'] . "</td>"; 
echo "<td>" . $row['Automerkki'] . "</td>";
echo "<td>" . $row['Rekisterinumero'] ."</td>";
echo "<td>" . $row["idSopimus"] . "</td>";  
 echo "</tr>";
} 
echo "</table>";

$result = mysqli_query($con,"SELECT * FROM Asiakas");

echo "<table border='1'> <tr>
<th>asiakasID</th>
<th>Etunimi</th>
<th>Sukunimi</th>
<th>Osoite</th>
<th>idSopimus</th> </tr>";
while($row = mysqli_fetch_array($result)) { echo "<tr>";
echo "<td>" . $row['asiakasID'] . "</td>";
echo "<td>" . $row['Etunimi'] . "</td>";
echo "<td>" . $row['Sukunimi'] . "</td>";
echo "<td>" . $row['Osoite'] . "</td>";
echo "<td>" . $row['idSopimus'] . "</td>"; echo "</tr>";
}
echo "</table>";

$result = mysqli_query($con,"SELECT * FROM Maksurekisteri");

echo "<table border='5'> <tr>
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
$result = mysqli_query($con,"select * from Sopimus JOIN Maksurekisteri ON Sopimus.idMaksurekisteri = Maksurekisteri.MaksuID;");

echo "<table border='1'> <tr>
<th>Sopimus Numero</th>
<th>MaksureksteriID</th>
<th>Palautuspvä</th>
<th>Aloituspäivä</th>
<th>MaksuID</th>
<th>Summa (€)</th>

</tr>";
while($row = mysqli_fetch_array($result)) { echo "<tr>";
echo "<td>" . $row['SopimusID'] . "</td>";
echo "<td>" . $row['idMaksurekisteri'] . "</td>";
echo "<td>" . $row["Palautuspvä"]    . "</td>";
echo "<td>" . $row['Aloituspvä'] . "</td>";
echo "<td>" . $row['MaksuID'] . "</td>";
echo "<td>" . $row['Summa'] . "</td>";


echo "</tr>";
}
echo "</table>";


$result = mysqli_query($con,"select * from Ajoneuvo JOIN Sopimus ON Ajoneuvo.idSopimus = Sopimus.SopimusID");

echo "<table border='1'> <tr>
<th>AjoneuvoID</th>
<th>Automerkki</th>
<th>Rekisterin.</th>



</tr>";
while($row = mysqli_fetch_array($result)) { echo "<tr>";
echo "<td>" . $row['AjoneuvoID'] . "</td>";
echo "<td>" . $row['Automerkki'] . "</td>";
echo "<td>" . $row['Rekisterinumero'] . "</td>";





echo "</tr>";
}
echo "</table>";