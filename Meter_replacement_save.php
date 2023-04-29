<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include "dbCon.php";
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$fname = $conn->real_escape_string($_REQUEST['fname']);
$email = $conn->real_escape_string($_REQUEST['email']);
$district = $conn->real_escape_string($_REQUEST['district']);
$mobile = $conn->real_escape_string($_REQUEST['mobile']);
$commercial = $conn->real_escape_string($_REQUEST['commercial']);
$domestic = $conn->real_escape_string($_REQUEST['domestic']);
 

// Attempt insert query execution
$sql = "INSERT INTO meter_replacement (fname,email,district,mobile,commercial,domestic) VALUES ('$fname','$email','$district','$mobile','$commercial','$domestic')";
if($conn->query($sql) === true){
    echo "<script>alert('You have successfully applied for meter replacement');</script>";
				echo "<script type='text/javascript'> document.location ='index.php'; </script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . $conn->error;
}
 
// Close connection
$conn->close();
?>