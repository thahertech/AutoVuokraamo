<?php 
  
try { 
$yhteys = new PDO("mysql:host="
        . "localhost;".
"dbname=t9alth00",
"t9alth00", ""); 
} 
catch (PDOException $e) { 
die("VIRHE: " . $e->getMessage()); 
} 
$yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$yhteys->exec("SET NAMES latin1");  
 $kysely = $yhteys->prepare("SELECT * FROM Ajoneuvo JOIN Asiakas_Ajoneuvo ON Ajoneuvo.AjoneuvoID=Asiakas_Ajoneuvo.idAjoneuvo JOIN Asiakas ON Asiakas.asiakasID= Asiakas_Ajoneuvo.idAsiakas"); 
 
  $kysely->execute();
  
echo "<table>"; 
echo "<table border='5'> <tr>
<th>Asiakas ID</th>

<th>Etunimi</th>
<th>Sukunimi</th>
<th>Osoite</th>

<th>Sopimus Numero</th>

<th>Automerkki</th>
<th>Rekisterinumero</th>
<th>Ajoneuvo Numero</th>


</tr>";
while ($rivi = $kysely->fetch())  { 
echo "<tr>";

echo "<td>" . htmlspecialchars($rivi["asiakasID"]) . "</td>"; 
echo "<td>" . htmlspecialchars($rivi["Etunimi"]) . "</td>"; 
echo "<td>" . htmlspecialchars($rivi["Sukunimi"]) . "</td>"; 
echo "<td>" . htmlspecialchars($rivi["Osoite"]) . "</td>"; 
echo "<td>" . htmlspecialchars($rivi["idSopimus"]) . "</td>";


echo "<td>" . htmlspecialchars($rivi["Automerkki"]) . "</td>"; 
echo "<td>" . ($rivi["Rekisterinumero"]) . "</td>"; 
echo "<td>" . htmlspecialchars($rivi["idAjoneuvo"]) . "</td>"; 



echo "</tr>"; 
} 
echo "</table>";


  
echo "<table>";  
 mysqli_close($con);
?>
