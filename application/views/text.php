<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap">

    <style>
*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    
}
.container1{
    background-color: rgb(255, 255, 255,0.9);
    background-size: cover;
    margin: 100px auto;
    width: 70%;
    min-height: 400px;
    background-color:  rgb(224, 247, 255);
}
.paragraph{
    text-align: center;
    padding: 20px;
}

.paragraph h2{
    font-size: 40px;
    font-weight: lighter;
    color: blueviolet;
}
.paragraph h3{
    color: blue;
}
.paragraph p{
    padding: 20px 30px;
    font-size: 20px;
    color: gray;
    text-align: center;
}
.paragraph a{
    text-decoration: none;
    padding: 10px;
    color: white !important;
    background-color:  #228be6;
    border: none;
    box-shadow:inset  0 1px 0 rgba(255,255,255,0.0125), 0 1px 1px rgba(0,0,0,0.05);
    cursor: pointer;
    outline: none;
}
    </style>
</head>
<body>
<div class="container1">
        <div class="paragraph">
            <h3 style="text-align:left">HEY THERE !</h3>
            <h2><b>L</b>ast <b>S</b>tep <b>T</b>o <b>S</b>tart </h2>
            <p>We just need you to confirm your email address and finish setting new account we created just for you.</p>
            <a class="btn" href="http://localhost/mvc/application1/application/controller/registerCon.php?token='.$token.'&level='.$level.'&email='.$email.'">Click to confirm your email address <i class="fa fa-arrow-right"></i></a>
            
        </div>
    </div>
</body>
</html>