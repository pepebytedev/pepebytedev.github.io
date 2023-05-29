<?php
$servername = "localhost";
$username = "orbital1_admin";
$password = "orbitalcat";
$dbName = "orbital1_catgame";

$readquest_id = $_GET["json_id"];
$readjsonfileurl = "/meta/" . $readquest_id . ".json";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Read the JSON file 
//$json = file_get_contents('11999.json');
$json = file_get_contents(__DIR__ . $readjsonfileurl );
  
// Decode the JSON file
//echo json_encode($json);
echo $json;

//echo $json_data;

$conn->close();

?>