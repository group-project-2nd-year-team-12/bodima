<?php   require_once ('../config/database.php');
        require_once ('../models/reg_user.php'); 
        session_start();
?>

<?php
    
        if(isset($_GET['click1']))     // check the sign in button click
         {
                header('Location:../views/user_loging.php');    
         }
?>

<?php
        if(isset($_POST['submit']))
	{
         $errors=array();            //create empty array
                if(!isset($_POST['username']) || strlen(trim($_POST['username']))<1)   //check if the username and password has been entered
                        {
                         $errors[]='Username is Missing / Invalid';
                        }
                if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1)
                        {
                         $errors[]='Password is Missing / Invalid';
                        }

            //check if there are any errors in the form
            if(empty($errors))
            {
              //save username and password into variables
              //protect the our database  becauses  can be change sql query in database
              $useremail=mysqli_real_escape_string($connection,$_POST['username']);
              $password=mysqli_real_escape_string($connection,$_POST['password']);
              $hash=sha1($password);
            
               //$user=new reg_user();

               $result=reg_user::loging($useremail,$hash,$connection);
            
          //prepare database query
        
          
          if($result)
          {
            //query successful
            //check if the user is valid
            if(mysqli_num_rows($result)==1)
            {
                $record=mysqli_fetch_assoc($result);
                $_SESSION['email']=$record['email'];
                $_SESSION['level']=$record['level'];
                $_SESSION['first_name']=$record['first_name'];
                $_SESSION['last_name']=$record['last_name'];
                $_SESSION['address']=$record['address'];
                if($record['level']=="boarder")
                {
                        $_SESSION['B_id']=$record['B_id'];
                        
                        header('Location:../index.php');
                }
                elseif($record['level']=="admin")
                {
                        $_SESSION['a_id']=$record['a_id'];
                        header('Location:../views/adminPanel.php');
                }
                elseif($record['level']=="reg_user")
                {
                       $_SESSION['reg_id']=$record['reg_id'];
                       header('Location:../index.php');
                }
                elseif($record['level']=="boardings_owner")
                {
                        $_SESSION['BO_id']=$record['BO_id'];
                        header('Location:../index.php');
                }
                elseif($record['level']=="food_supplier") 
                {
                       $_SESSION['f_id']=$record['f_id'];
                       header('Location:../index.php');
                }

               
            }
            else{
                header('Location:../views/user_loging.php?errors='.'errors');
            }

          }else{
                header('Location:../views/user_loging.php?errors='.'errors');
          }
                
        } else{
                header('Location:../views/user_loging.php?errors='.'errors');
        }    
        }	
?>