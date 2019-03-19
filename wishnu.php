<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "complaints";
/*$val= $_REQUEST['val'];*/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{  
    die("Connection failed: " . $conn->connect_error);
} 
$result=mysqli_query($conn,"select * from comp");
 
while($row = mysqli_fetch_array($result))
{
         echo $row['ID'].' '.$row['details'].'<br/>';
 }
 $conn->close();
 ?>
 





