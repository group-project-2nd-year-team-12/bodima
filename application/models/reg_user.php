<?php 

class reg_user{

    public static function loging($email,$password,$connection)
    {
        
        $query="SELECT level,email,first_name,last_name,address FROM  boarder WHERE email='$email' AND password='$password' 
        UNION SELECT level,email,first_name,last_name,address FROM  boardings_owner WHERE email='$email' AND password='$password'
       UNION SELECT level,email,first_name,last_name,address FROM administrator  WHERE email='$email' AND password='$password'
       UNION SELECT level,email,first_name,last_name,address FROM food_supplier  WHERE email='$email' AND password='$password'
                 LIMIT 1 ";
        $result_set=mysqli_query($connection,$query);
                 return  $result_set;
    }
    

    public function forgotPassword($email,$connection)
    {
        $query="SELECT token,email FROM  boarder WHERE email='$email'  
        UNION SELECT token,email FROM  boardings_owner WHERE email='$email'  
        UNION SELECT token,email FROM  food_supplier WHERE email='$email'
                 LIMIT 1 ";
        $result_set=mysqli_query($connection,$query);
        return $result_set; 
    }   

    public static function newPassword($token,$connection)
    {
        $query="SELECT email,level FROM boarder WHERE token='{$token}' 
        UNION SELECT email,level FROM boardings_owner WHERE token='{$token}'
        UNION SELECT email,level FROM food_supplier WHERE token='{$token}'
         LIMIT 1";
        $result_set=mysqli_query($connection,$query);
        return $result_set; 
    }   

    public function savePassword($newtoken,$email,$password,$level,$connection)
    {
        $query="UPDATE $level SET password='{$password}',token='{$newtoken}' WHERE email='{$email}'  ";
        $result_set=mysqli_query($connection,$query);
        return $result_set;
    }   

    public static function getProduct($connection){
        $query="SELECT * FROM product ORDER BY id ASC";// where ekak danna post_id ekata adaala products enna
        $result=mysqli_query($connection,$query);
        return $result;
    }

    public static function food_request($email,$address,$first_name,$last_name,$product_name,$quantity,$order_id,$total,$connection)
    {
        $query="INSERT INTO food_request (email,address,first_name,last_name,is_accepted,product_name,quantity,total,order_id) 
        VALUES('{$email}','{$address}','{$first_name}','{$last_name}',0,'{$product_name}','{$quantity}','{$total}','{$order_id}') LIMIT 1";
         $result=mysqli_query($connection,$query);
    }

    public static function getOrder($connection,$order_id){
        $query="SELECT * FROM food_request WHERE order_id='{$order_id}'";
        $result=mysqli_query($connection,$query);
        return $result;
    }
    public static function getOrdId($connection)
    {
       $query="SELECT DISTINCT  order_id FROM food_request WHERE is_accepted=0";
       $result=mysqli_query($connection,$query);
       return $result;
    }

     public static function accept($order_id,$connection)
     {
        $query="UPDATE food_request SET is_accepted=1 WHERE order_id=$order_id ";
        $result_set=mysqli_query($connection,$query);
     }

    
    public static function getProductsByPostid($F_post_id,$connection){
        $query="SELECT * FROM product WHERE F_post_id = $F_post_id";// where ekak danna post_id ekata adaala products enna
        //SELECT * FROM product WHERE 'F-post-id'=3 ORDER BY id ASC
        //SELECT * FROM `product` WHERE `F-post-id` = 3
        $result=mysqli_query($connection,$query);
        return $result;
    }



    }


?>