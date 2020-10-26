<?php 
  
/* 
 * To change this license header, choose License Headers in Project Properties. 
 * To change this template file, choose Tools | Templates 
 * and open the template in the editor. 
 */ 
  
  
// muodostetaan yhteys tietokantaan 
try { 
$yhteys = new PDO("mysql:host=localhost;dbname=t9alth00", "t9alth00", 
""); 
} 
catch (PDOException $e) { 
die("VIRHE: " . $e->getMessage()); 
} 
// virheenkäsittely: virheet aiheuttavat poikkeuksen 
$yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
// merkistö: käytetään latin1merkistöä; 
//toinen yleinen vaihtoehto on utf8. 
$yhteys->exec("SET NAMES latin1"); 
// valmistetaan kysely 
$kysely = $yhteys->prepare("SELECT * FROM Sopimus"); 

// suoritetaan kysely 
$kysely->execute(); 

  
echo "<table>";

while ($rivi = $kysely->fetch()){ 
echo "<tr>"; 

//(echo "<td>" . htmlspecialchars($rivi['SopimusID'])        . "</td>"; 
echo "<td>" . htmlspecialchars($rivi['idMaksurekisteri']) . "</td>"; 

echo "<td>" . htmlspecialchars($rivi['Summa'])                          .   "</td>"; 
echo "<td>" . htmlspecialchars($rivi['Palautuspvä'])    .   "</td>"; 
//echo "<td>" . $rivi["Aloituspvä"]     .   "</td>"; 


echo "</tr>"; 
} 
echo "</table>"; 
