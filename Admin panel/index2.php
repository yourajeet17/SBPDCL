<?php

@include 'dbCon.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:index.php');
}

?>
<!DOCTYPE html>

<html>

<head>
    <title>NBPDC Ltd</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styleindex.css">
</head>

<body>
    <?php include 'header.php';?>

    <div class="divider"></div>
    <div id="divimg">

    </div>


    <img src="bulb_pic.jpg" style="float: left; margin-right: 100px; margin-top: 35px; margin-left: 70px">


    <div style="margin-top: 175px">
     
        <h3 style="font-family: 'Montserrat', sans-serif; font-size: 30px ; text-align: center;">Designation    &nbsp; <span>Admin</span></h3>
      <h4 style="font-family: 'Montserrat', sans-serif; font-size: 30px ; text-align: center;" ><span><?php echo $_SESSION['admin_name'] ?></span></h4>
            <h1
                style="font-family: 'Lobster', cursive; font-weight: 200; font-size: 50px; margin-top: 100px; text-align: center;">
                NBPD Company Ltd</h1>
        
        <p style="font-family: 'Montserrat', sans-serif; font-size: 30px ; text-align: center;">हमारा आधार... ऊर्जस्वित
            बिहार


        </p>
        
    </div>



</body>

</html>