<?php
$servername = "localhost";
$username = "orbital1_admin";
$password = "orbitalcat";
$dbName = "orbital1_catgame";

$readquest_id = $_GET["quest_id"];

// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully ";
//echo $readquest_id;
$sql = "SELECT 	ID, QUEST_ID, QUEST_HEADER FROM DAILY_QUEST WHERE QUEST_ID='" . $readquest_id . "'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "ID: " . $row["ID"]. " - QUEST_ID: " . $row["QUEST_ID"]. " " . $row["QUEST_HEADER"]. "<br>";
	echo json_encode($row);
  }
} else {
  echo "0 results";
}
$conn->close();

?>