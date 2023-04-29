<?php

@include 'dbCon.php';

session_start();

if((!isset($_SESSION['admin_name'])) && (!isset($_SESSION['user_name']))){
   header('location:index.php');
}
?>

<?php

require_once ('dbCon.php');
$sql = "SELECT * from `connection_table`";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>

<html>
<head>
	<title>View Employee |  Admin Panel | XYZ Corporation</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	<?php include 'header.php'?>
	
	<div class="divider"></div>

		<table>
			<tr>

				<th align = "center">Connection. ID</th>
				<th align = "center">Photo</th>
				<th align = "center">Full Name</th>
				<th align = "center">Father/Husband's Name</th>
				<th align = "center">Con. Type</th>
				<th align = "center">Email</th>
				<th align = "center">Contact No.</th>
				<th align = "center">House No.</th>
				<th align = "center">Street No.</th>
				<th align = "center">Address line 1</th>
				<th align = "center">Address line- 2</th>
				<th align = "center">Document</th>
				
				
				<th align = "center">Document</th>
			</tr>
		

			<?php
				while ($connection = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$connection['connection_id']."</td>";
					echo "<td><img src='../".$connection['applicant_photo_url']."' height = 60px width = 60px></td>";
					echo "<td>".$connection['full_name']."</td>";
					
					echo "<td>".$connection['father_husband_name']."</td>";
					echo "<td>".$connection['connection_type']."</td>";
					echo "<td>".$connection['email_id']."</td>";
					echo "<td>".$connection['contact_no']."</td>";
					echo "<td>".$connection['street']."</td>";
					echo "<td>".$connection['House_no']."</td>";
					
					echo "<td>".$connection['address_line_1']."</td>";
					echo "<td>".$connection['address_line_2']."</td>";
					echo "<td><img src='../".$connection['applicant_id_url']."' height = 60px width = 60px></td>";

					echo "<td><a href=\"verify.php?id=$connection[connection_id]\">Verify</a> | <a href=\"reject.php?id=$connection[connection_id]\" onClick=\"return confirm('Are you sure you want to Reject it?')\">Reject</a></td>";

				}
				
				
			?>

		</table>
		
	
</body>
</html>
