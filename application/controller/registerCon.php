<?php   require_once ('../config/database.php');
        require_once ('../models/reg_user.php');
        session_start(); 
?>
<?php

if(isset($_POST['submit']))
{
print_r($_POST);
 $errors=array();            //create empty array
        if(!isset($_POST['firstName']) || strlen(trim($_POST['firstName']))<1)   //check if the username and password has been entered
                {
                 $errors[]='*First name required';
                }
        if(!isset($_POST['lastName']) || strlen(trim($_POST['lastName']))<1)
                {
                 $errors[]='*Last name required';
                }
        if(!isset($_POST['nic']) || strlen(trim($_POST['nic']))<1)
                 {
                 $errors[]='*NIC  required';
                 }
        elseif(strlen(trim($_POST['nic']))!=10  ){
               // $errors[]="*NIC number is invalid";
               if(strlen(trim($_POST['nic']))!=12)
                {
                        $errors[]='*Invalid NIC  ';
                }
        }
        
       
        if(!isset($_POST['email']) || strlen(trim($_POST['email']))<1)
                {
                $errors[]='*Email address required';
               }
        elseif (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) 
               {
                   $errors[]='*Invalied email address ';
               } 

        if(empty($errors))
        {
                if($_POST['level']=="boarding_owner")
                {
                        header('Location:../views/boarding_owner_reg.php');
                }
                elseif($_POST['level']=="student")
                {
                        header('Location:../views/student_reg.php');
                }
                elseif($_POST['level']=="food_supplier")
                {
                        header('Location:../views/food_supplier_reg.php');
                }
        }
        else
        {
                header('Location:../views/register.php?'.http_build_query(array('param'=>$errors)));
        }
}

?>
