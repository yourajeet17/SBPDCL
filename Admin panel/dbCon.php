<?php 
    $db_host ="localhost";
    $db_user ="root";
    $db_password ="";
    $db_name ="electrcity"; 

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if(!$conn)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>
