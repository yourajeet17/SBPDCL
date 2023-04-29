<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image']) && isset($_FILES['applicant_id']  )) {

	include "dbCon.php";

    $connection_type = $conn->real_escape_string($_REQUEST['Connection_Type']);
	$full_name = $conn->real_escape_string($_REQUEST['Full_Name']);
	$Husband_Father_Name = $conn->real_escape_string($_REQUEST['Husband_Father_Name']);
	$conatact_no = $conn->real_escape_string($_REQUEST['conatact_no']);
	$email_id = $conn->real_escape_string($_REQUEST['email_id']);
	$house_no = $conn->real_escape_string($_REQUEST['house_no']);
	$steet = $conn->real_escape_string($_REQUEST['steet']);
	$address_line_1 = $conn->real_escape_string($_REQUEST['address_line-1']);
	$address_line_2 = $conn->real_escape_string($_REQUEST['address_line-2']);

	$img_name = $_FILES['applicant_id']['name'];
	$img_size = $_FILES['applicant_id']['size'];
	$tmp_name = $_FILES['applicant_id']['tmp_name'];
	$error = $_FILES['applicant_id']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: index.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name_id = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = ''.$new_img_name_id;
				move_uploaded_file($tmp_name, $img_upload_path);
				}
		}
	}			

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: index.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = ''.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				

				// Insert into Database
				$sql = "INSERT INTO connection_table (connection_type, full_name, father_husband_name,contact_no,email_id,House_no,street,address_line_1,address_line_2,applicant_photo_url,applicant_id_url) VALUES ( '$connection_type','$full_name', 
'$Husband_Father_Name','$conatact_no','$email_id','$house_no','$steet','$address_line_1', '$address_line_2','$new_img_name','$new_img_name_id ')";
				mysqli_query($conn, $sql);
				$sql2 = "INSERT INTO master_table (connection_type, full_name, father_husband_name,contact_no,email_id,House_no,street,address_line_1,address_line_2,applicant_photo_url,applicant_id_url) VALUES ( '$connection_type','$full_name', 
				'$Husband_Father_Name','$conatact_no','$email_id','$house_no','$steet','$address_line_1', '$address_line_2','$new_img_name','$new_img_name_id ')";
				mysqli_query($conn, $sql2);
				echo "<script>alert('Your compalint is registered);</script>";
				echo "<script type='text/javascript'> document.location ='index.php'; </script>";
			
			}else {
				$em = "You must Enter correct Data format";
		        header("Location: newConnection.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: newConnection.php?error=$em");
	}

}else {
	header("Location: newConnection.php?error=$em");
}