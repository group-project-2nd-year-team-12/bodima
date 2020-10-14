
<!DOCTYPE html>
<html>
<head>
	<title>Bodima</title>
</head>
<div class="nav">
<div class="logo">Bodima </div>
</div>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../resource/css/forgot1.css">
<body >
<div class="contrain-wrapper">
<div class="header-wrapper">
		<div class="head"><h1>Reset your password </h1></div>
	</div>
	
	<div >
			<form  action="../controller/newPasswordCon.php" method="POST" class="feild-pa">
			<?php 
			if(isset($_GET['param']))
				{
					$errors=$_GET['param'];
					foreach($errors as $error)
					{
						echo '<p  class="error"> <b>'.$error.'</b></p>';
					}
                }
			?>
			<label for="password">Password :</label>
			<input type="password" name="password" id="password" placeholder="Password" >
            <label for="Confirm Password">Confirm Password :</label>
            <input type="Password" name="confirmpassword" id="password" placeholder="Password" >	
			<input type="submit" name="submit" value=" Save Changes ">
		</form>
			</div>
			</div>
<div class="footer">
	<div class="right">Copy right 2020:Bodima.lk </div>
</div>

</body>
</html>