<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../resource/css/register.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap">
	<title>Registration Form</title>
	
</head>
<body>
	<div class="register">
	<!--<img src="img/new1.png" class="registerProfile">-->
	   <h1>Registration Form</h1>
	   <?php
	   if(isset($_GET['param']))
	   {
		   $errors=$_GET['param'];
		   foreach($errors as $error)
		   {
			   echo '<p class="error"><b>'.$error.'</b></p>';
		   }
	   }
	 
	 ?>
		   <form action="../controller/registerCon.php" method="post">
		   <div class="agreement">
                     <div class="term">Term and condition</div> 
					<textarea name="aggrement" id="1" cols="30" rows="10"></textarea>
            </div>
                            
            <div class="check">
                 <input type="checkbox">
                 <div class="agree">I am agree with term and condition</div> 
                 
            </div>
		   
		   	<input type="submit" name="submit" value="Register">
		   </form>
	</div>

</body>
</html>