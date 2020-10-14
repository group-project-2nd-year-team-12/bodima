

<!DOCTYPE html>
<html>
<head>
	<title>Bodima</title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../resource/css/forgot1.css">
<body>
<div class="nav">
<div class="logo">Bodima </div>
</div>
<div class="contrain-wrapper">
	<div class="verify-wrapper">
            <h1>Verify your email address </h1>
	</div>
	<div class="discription-01">
            <h4>We're send an <b>email</b> to <b style="color: black"><?php echo $_GET['email'] ?></b> to verify your email address. Please click link in that email to reset your password. </h4>
	</div>
	<div class="resend">If you have not received the message<a href="user_forgot_password.php"> Resend</a></div>
	<div class="sign"><a href="#">Sign In</a></div>
</div>
<div class="footer">
	<div class="right">Copy right 2020:Bodima.lk </div>
</div>
</body>
</html>