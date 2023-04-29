
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include "dbCon.php";
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$con_name = $conn->real_escape_string($_REQUEST['con_name']);
$con_contact = $conn->real_escape_string($_REQUEST['con_contact']);
$con_email = $conn->real_escape_string($_REQUEST['con_email']);
$con_address = $conn->real_escape_string($_REQUEST['con_address']);
$con_complaint = $conn->real_escape_string($_REQUEST['con_complaint']);
$con_complaint_nature = $conn->real_escape_string($_REQUEST['con_complaint_nature']);
$complaint_against = $conn->real_escape_string($_REQUEST['complaint_against']);
$complaint_detail = $conn->real_escape_string($_REQUEST['complaint_detail']);
 


// Attempt insert query execution
$sql = "INSERT INTO register_complain (con_name,con_contact,con_email,con_address,con_complaint,con_complaint_nature,complaint_against,complaint_detail) VALUES
 ('$con_name','$con_contact','$con_email','$con_address','$con_complaint','$con_complaint_nature','$complaint_against','$complaint_detail')";
if($conn->query($sql) === true){
    echo "<script>alert('You have successfully inserted the data');</script>";
				echo "<script type='text/javascript'> document.location ='index.php'; </script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . $conn->error;
}
 
// Close connection
$conn->close();
?>