<?php
$servername = "localhost";
$username = "orbital1_admin";
$password = "orbitalcat";
$dbName = "orbital1_catgame";

$readPara = $_GET["msg"];

// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully ";
echo $readPara;
$sql = "SELECT ID, UUID, NAME_CAT FROM MasterDB";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["ID"]. " - UUID: " . $row["UUID"]. " " . $row["NAME_CAT"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>