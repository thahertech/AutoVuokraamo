<?php 
  
/* 
 * To change this license header, choose License Headers in Project Properties. 
 * To change this template file, choose Tools | Templates 
 * and open the template in the editor. 
 */ 
$host='localhost'; 
$dbname='t9alth00'; 
$username='t9alth00'; 
$password=''; 
  
$con=mysqli_connect($host,$username,$password,$dbname); 
  
if (mysqli_connect_errno()) 
{ 
  echo "Yhteys epäonnistui" . mysqli_connect_error(); 
} 
  
$result = mysqli_query($con,"SELECT * FROM Maksurekisteri"); 
echo "<table border='3'> 
<tr> 
<th>MaksuID</th> 
<th>Summa</th> 
<th>Maksettu</th> 
<th>Maksupvä</th>
<th>Maksupvä</th>

</tr>"; 
while($row = mysqli_fetch_array($result)) { 
echo "<tr>"; 
echo "<td>" . $row['MaksuID'] . "</td>"; 
echo "<td>" . $row['Summa'] . "</td>"; 
echo "<td>" . $row['Maksettu'] . "</td>"; 
echo "<td>" . $row['Maksupvä'] . "</td>"; 
echo  "<td>" . $date["Maksupva"] .  "</td>";

echo "</tr>"; 
} 
echo "</table>"; 
  
mysqli_close($con); 
  
