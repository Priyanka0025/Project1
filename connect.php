<?php
  $username=$_POST['username'];
  $password=$_POST['password'];
  
  
  $conn=new mysqli('localhost','root','','dbecart');
  if($conn->connect_error)
     {
       die('Connection Failed'.'$conn->connect_error');
     }
  else{
         $stmt=$conn->prepare("insert into signuplogin(username,password) values(?, ?)");
         $stmt->bind_param("ss",$username,$password);
         $stmt->execute();
         echo"<!DOCTYPE html> 
  <html> 
     <head> 
        <meta charset='utf-8'> 
     </head>
 <body>
    <p>Signup Successfull...<p>
    <p> <a href='Login.html'>Login</a></p>
 </body>
  </html>";
         $stmt->close();
         $conn->close();  
       }
 	  
?> 