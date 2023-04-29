<?php 
session_start(); 
include "dbCon.php";

if (isset($_POST['consumer_no']) && isset($_POST['user_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['consumer_no']);
	$pass = validate($_POST['user_password']);

	if (empty($uname)) {
		header("Location: consumer_login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: consumer_login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM user_table WHERE consumer_no='$uname' AND user_password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['consumer_no'] === $uname && $row['user_password'] === $pass) {
            	$_SESSION['consumer_no'] = $row['consumer_no'];
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['consumer_no'] = $row['consumer_no'];
                $_SESSION['user_email'] = $row['user_email'];
                $_SESSION['user_contact'] = $row['user_contact'];
            	
            	header("Location: user_profile.php");
		        exit();
            }else{
				header("Location: consumer_login.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: consumer_login.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: consumer_login.php");
	exit();
}