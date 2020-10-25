<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../resource/css/admin.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo"><img src="../../resource/img/logo.svg" alt=""></div>
        </div>
        <div class="wrapper">
        <div class="nav">
            <div class="name"><img src="../../resource/img/pp.jpg" alt="" srcset=""><h3>Admin </h3></div>
            <h2><i class="fa fa-cogs"></i> Dash Board</h2>
            <ul>
                <div class="element1">
                    <li >Users <i class="fa fa-chevron-down"></i></li>
                    <div class="item">
                        <a href="#">Students <i class="fa fa-caret-right"></i></a>
                        <a href="#">Boarders <i class="fa fa-caret-right"></i></a>
                        <a href="#">Boarding Owners <i class="fa fa-caret-right"></i></a>
                        <a href="#">Food Suppliers <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="element2">
                    <a href="#"><li>Food Posts <i class="fa fa-chevron-down"></i></li></a>
                    <div class="item">
                        <a href="#">Posts <i class="fa fa-caret-right"></i></a>
                        <a href="#">Blocked <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="element3">
                    <a href="#"><li>Boarding Posts <i class="fa fa-chevron-down"></i></li></a>
                    <div class="item">
                        <a href="#">Posts <i class="fa fa-caret-right"></i></a>
                        <a href="#">Blocked <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
                <a href="#"><li>Complaint <i class="fa fa-chevron-down"></i></li></a>
                <a href="../../index.php"><li>Web Site <i class="fa fa-backward"></i></li></a>
            </ul>
        </div>
      
        <div class="content">
            <div class="table">
                <table>
                    <tr>
                        <th>Reg Id</td>
                        <th>First Name</td>
                        <th>Last Name</td>
                        <th>Email</td>
                        <th>NIC</th>
                        <th>Address</th>
                        <th>Is_accepted</th>
                        <th>Block user</th>
                     </th>
                     <tr>
                         <td>1</td>
                         <td>Lakshan</td>
                         <td>Amal</td>
                         <td>lakshanamal100@gmail.com</td>
                         <td>1</td>
                         <td>1</td>
                         <td>1</td>
                         <td><a href="#">Block</a></td>
                     </tr>
                </table>
            </div>
        </div>
        </div>
    </div>
    <script src="../../resource/js/admin.js"></script>
    <script src="../../resource/js/jquery.js"></script>
</body>
</html>

<!-- <?php echo $_SESSION['last_name'] ;?> -->