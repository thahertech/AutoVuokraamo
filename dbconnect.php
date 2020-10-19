
<?php
$host = 'localhost'; $dbname = 't9alth00'; $username = 't9alth00'; $password ='';
$con = mysqli_connect($host,$username,$password,$dbname);
    if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
else {
}
echo ”OK”;
    mysqli_close($con);
?>
