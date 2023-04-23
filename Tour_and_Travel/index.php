<?php
$email=$_POST['email'];
$password=$_POST['password'];

//datatbase connection her
$con=new mysqli("loacalhost","root","","test");
if($con->connect_error){
    die("failed to connect:",$con->connect_error);
}
else{
    $stmt =$con->prepare("select *form regi")
}
?>