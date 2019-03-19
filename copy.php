<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "complaint";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = " SELEECT * from comp";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - deptt: " . $row["deptt"]. "-subject " . $row["subject"]. "-details".$row["details"]"<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>