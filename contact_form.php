<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include "dbCon.php";
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$full_name = $conn->real_escape_string($_REQUEST['full_name']);
$contact_no = $conn->real_escape_string($_REQUEST['contact_no']);
$mail_id = $conn->real_escape_string($_REQUEST['email_id']);
$purpose = $conn->real_escape_string($_REQUEST['purpose']);
 


// Attempt insert query execution
$sql = "INSERT INTO contact_form_table (full_name,contact_no,email,purpose) VALUES ('$full_name','$contact_no','$mail_id','$purpose')";
if($conn->query($sql) === true){
    echo "<script>alert('We will contact you as soon as possible');</script>";
				echo "<script type='text/javascript'> document.location ='index.php'; </script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . $conn->error;
}
 
// Close connection
$conn->close();
?>