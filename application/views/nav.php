<div class="header">
            <div class="logo">
                <h1 style="color:black">Bodima<small style="font-size: 12px; color:rgb(31, 178, 60);">   Solution for many problem</small></h1>
            </div>
            <div class="sign">
                <?php if(!isset($_SESSION['email'])){echo '<a href="../controller/logingController.php?click1">Sign In </a>';}?>
                <?php if(isset($_SESSION['email'])){ 
                    ?>
                    <div class="notification"><i class="fa fa-bell"></i></div>
                    <div class="profile"><i  class="fa fa-user-circle"></i></div>
                <?php
                    echo '<div class="user">Hi '.$_SESSION['first_name'].'</div>'; 
                    echo '<a href="../controller/logoutController.php">Log out </a>';}
                ?> 
                <img src="../resource/img/sign-in-alt-solid.svg" alt="">
                
            </div>
</div>
        <div class="nav">
            <ul class="nav_bar">
                <li class=" nav_item "><a href="../index.php">Home</a></li>
                <li class="nav_item "><a href="Boardings.php">Boardings</a></li>
                <?php if(isset($_SESSION['email']))
                { 
                    if($_SESSION['level']=="boardings_owner" ||$_SESSION['level']=="boarder" )
                    {
                       echo '<li class="nav_item "><a href="foodposts.php">Order Food</a></li>';
                    }
                    elseif($_SESSION['level']=="food_supplier")
                    {
                       echo '<li class="nav_item "><a href="../controller/orderAcptCon.php?click">Orders</a></li>';
                    }
                    // echo '<li class="nav_item "><a href="foodposts.php">Order Foods</a>';
                }
                    ?>
                <li class="nav_item "><a href="#">About us</a></li>
                <li class="nav_item "><a href="# ">Contact Us</a></li>
                <?php if(!isset($_SESSION['email'])){ echo "<li onClick='dropDown();' class='drop'><a href='#'>Register  <i class='fa fa-caret-down'></i></a></li>"; }?>
            </ul>
        </div>