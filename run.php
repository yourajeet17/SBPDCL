
<Html>  
<head>   
<title>  
Registration Page  
</title>  
</head>  
<body bgcolor="Lightskyblue">  
<br>  
<br>  

<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image">

          
  
<label> Firstname </label>         
<input type="text" name="Connection_Type" size="15"/> <br> <br>  
<label> Middlename: </label>     
<input type="text" name="Full_Name" size="15"/> <br> <br>  
<label> Lastname: </label>         
<input type="text" name="Husband_Father_Name" size="15"/> <br> <br>  
  
 

 

   <input type="submit" 
                  name="submit"
                  value="Submit">
     	
     </form>
</body>  
</html>  