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
		   	<p>First Name</p>
		   	<input type="text" name="firstName" placeholder="Enter First Name">

		   	<p>Last Name</p>
		   	<input type="text" name="lastName" placeholder="Enter Last Name">

            <p>NIC</p>
		   	<input type="text" name="nic" placeholder="Enter NIC">

		   	<p>Email Address</p>
		   	<input type="email" name="email" placeholder="Enter Email Address">
		   	<p>Are you?</p>
		   	<table>
		   		<tr>
		   			<td>
						   <a href="#"><abbr title="Student"><img src="../resource/img/new/1.png"></abbr></a>
						   <div class="radio">
							<input type="radio" name="level" value="student" checked="checked" id="1">
							<label  for="1">Student</label>
								</div>
		   			</td>
		   			<td>
						   <a href="#"><abbr title="Boarding Owner"><img src="../resource/img/new/2.png"></abbr></a>
						   <div class="radio">
							<input type="radio" name="level" value="boarding_owner" id="2">
							<label  for="2">Boarding </label>
							</div>
		   			</td>
		   			<td>
						   <a href="]"><abbr title="Food supplier"><img src="../resource/img/new/3.png"></abbr></a>
						   <div class="radio">
							<input type="radio" name="level" value="food_supplier" id="3">
							<label for="3">Supplier</label>
							</div>
		   			</td>
		   		</tr>
			   </table>
		   	<input type="submit" name="submit" value="Next">
		   </form>
	</div>

</body>
</html>