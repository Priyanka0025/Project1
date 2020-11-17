<?php
  $username=$_POST['username'];
  $password=$_POST['password'];
  
  
  $conn=new mysqli('localhost','root','','dbecart');
  if($conn->connect_error)
     {
       die('Connection Failed'.'$conn->connect_error');
     }
  if ($_SERVER['REQUEST_METHOD']=='POST'){
     $username = $_POST['username'];
     $password = $_POST['password'];

     $sql= "SELECT * FROM signuplogin WHERE username = '$username' AND password = '$password' ";
     $result = mysqli_query($conn,$sql);
     $check = mysqli_fetch_array($result);
     if(isset($check)){
     echo 'success';
}else{
echo 'failure';
}
}
?> 