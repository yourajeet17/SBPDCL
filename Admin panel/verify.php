<?php

require_once ('dbCon.php');
// Check connection
if (isset($_GET['id'])) {
    $id = $_GET['id'];
$sql = "SELECT * FROM connection_table where connection_id = $id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
       
    $connection_id = $row["connection_id"];
   	$consumer_name = $row['full_name'];
	$date = date('Y-m-d H:i:s');;
	


    $sql1 = "INSERT INTO consumer_table (connection_id,consumer_name,date_of_connection)
              VALUES ('$connection_id','$consumer_name','$date')";

    $result = mysqli_query($conn, "DELETE FROM connection_table WHERE connection_id=$id");
  
    if(mysqli_query($conn,$sql1)){
        header("Location: connection_application.php");
       
        
        
    }else{
        echo '<script>alert("Please try later")</script>';
    }
  
  }
} else {
  echo "0 results";
}}
$conn->close();
?>