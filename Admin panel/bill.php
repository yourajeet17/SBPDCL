<?php

@include 'dbCon.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:index.php');
}
?>
<html>
<head>
	<title>Admin Panel | XYZ Corporation</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
    .div-1 {
        background-color: #;
		height: 500px;
		width:300px;
	       }    
	.center {
		border: 3px solid;
		margin: auto;
		width: 50%;
		padding: 10px;
		position:relative;
			}
		input[type=button], input[type=submit], input[type=reset] {
			background-color: #04AA6D;
			border: none;
			color: white;
			padding: 16px 32px;
			text-decoration: none;
			margin: 4px 2px;
			cursor: pointer;
			border-radius: 25px;
		}
		input[type=text] {
				width: 100%;
				padding: 12px 20px;
				margin: 8px 0;
				box-sizing: border-box;
			}
		
.select {
  cursor: pointer;
  display: inline-block;
  position: relative;
  font: normal 11px/22px Arial, Sans-Serif;
  color: black;
  border: 1px solid #ccc;
}

.styledSelect {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: white;
  padding: 0 10px;
  font-weight: bold;
}

.styledSelect:after {
  content: "";
  width: 0;
  height: 0;
  border: 5px solid transparent;
  border-color: black transparent transparent transparent;
  position: absolute;
  top: 9px;
  right: 6px;
}

.styledSelect:active,
.styledSelect.active {
  background-color: #eee;
}

.options {
  display: none;
  position: absolute;
  top: 100%;
  right: 0;
  left: 0;
  z-index: 999;
  margin: 0 0;
  padding: 0 0;
  list-style: none;
  border: 1px solid #ccc;
  background-color: white;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}
    </style>
    
</head>
<body>
	
<?php include 'header.php'?>
	 
	<div class="divider"></div>
	
    <form>
		<div class="center div-1">
			<h1 style="text-align:center"><u>Unit</u></h1>
			<form action="">
				<label for="unit" style="font-size:20px;">Unit in Kilowatt</label>
				<input type="text" id="unit" name="unit" placeholder="Type the value"><br><br>
				<input type="submit" value="Submit">
			</form>
		</div>
    </form>
	<form>
		<div class="center div-1">
			<select class="select" name="cars" id="cars">
				<option value="volvo">Volvo</option>
				<option value="saab">Saab</option>
				<option value="mercedes">Mercedes</option>
				<option value="audi">Audi</option>
			</select><br>
			<label for="unit" style="font-size:20px;">Previous Reading</label>
			<input type="text" id="unit" name="unit" placeholder="Type the value"><br><br>
			<label for="unit" style="font-size:20px;">Current Reading</label>
			<input type="text" id="unit" name="unit" placeholder="Type the value"><br><br>
			<label for="unit" style="font-size:20px;">Total unit Consumed</label>
			<input type="text" id="unit" name="unit"><br><br>
			<label for="unit" style="font-size:20px;">Total Price</label>
			<input type="text" id="unit" name="unit"><br><br>
			<input type="submit" value="Submit">
		</div>
    </form>

</body>
</html>
