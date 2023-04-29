<?php 

if (isset($_POST['submit']) && isset($_FILES['cv'])) {

	include "dbCon.php";

    
$name = $conn->real_escape_string($_REQUEST['Full_Name']);
$email_id = $conn->real_escape_string($_REQUEST['email_id']);
$conatact_no = $conn->real_escape_string($_REQUEST['conatact_no']);
$reason_to_hire = $conn->real_escape_string($_REQUEST['reason_to_hire']);
 



		

	$img_name = $_FILES['cv']['name'];
	$img_size = $_FILES['cv']['size'];
	$tmp_name = $_FILES['cv']['tmp_name'];
	$error = $_FILES['cv']['error'];

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
				$sql = "INSERT INTO career_table (full_name, email_id, contact_no,cv_url,reason_to_hire) VALUES
                 ( '$name','$email_id','$conatact_no','$new_img_name','$reason_to_hire')";if($conn->query($sql) === true){
                 echo "<script>alert('Our HR will see your resume,Good Luck');</script>";
                 echo "<script type='text/javascript'> document.location ='index.php'; </script>";
			
			}else {
				$em = "You must Enter correct Data format";
		        header("Location: index.php?error=$em"); 
				// #wea are going to do nothing
			}
	
	    }
        
    
	}
}
}
?>