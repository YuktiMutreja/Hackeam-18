<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "complaints";
$ID= rand(1,256);
$deptt=$_POST['deptt'];
$subject=$_POST['subject'];
$details=$_POST['details'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO comp ( ID,deptt, subject, details)
VALUES ('$ID','$deptt', '$subject','$details')";
$conn->close();
?>
<html>
<head>
<title>ThankYou Page</title> 
   <link rel="stylesheet" type="text/css" href="test.css">
</head>
<body>
<div class="header">
<body><br>
<h1 align="center">Hello Dear Student</h1>
<br><br><br></div> 
<?php echo "Your complaint ID is :".$ID;
?>

<br>
<h4><a href="index.html">Go back</a> </h4>    
    
</body>

</html>