<?php
require_once ('dbCon.php');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM connection_table ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["connection_id"]. " - Name: " . $row["full_name"]. " " . $row["contact_no"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
