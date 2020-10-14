<?php
     function sendResetLink($userEmail,$tokenPass)
     {
         $subject="Reset your password";
         $headers  = 'MIME-Version: 1.0' . "\r\n";
         $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
         $from="Bodima";
     // Create email headers
         $headers .= 'From: '.$from."\r\n".
         'Reply-To: '.$from."\r\n" .
         'X-Mailer: PHP/' . phpversion();
      
         $message='
         <html >
         <head>
             <meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, initial-scale=1.0">
             <title>Reset your password</title>
         </head>
         <body>
        
                 <h1>Reset your password </h1>
                 <h4>Hey there!
                     If you submitted a request to reset your password. 
                     Click on the link below to reset your password and get back into your account.
                     If it wasn’t you there is nothing to do nor worry about. You can keep on keeping on
                 </h4>
                 <a style="background-color: black; color: white;padding :10px ;border:none ; border-redius:5px; font-size:16px" href="http://localhost/mvc/application/controller/index.php?tokenPassword='.$tokenPass.'">Reset my password</a>
     
             
         
         </body>
         </html>';
     
     mail($userEmail,$subject,$message,$headers);
     }
?>