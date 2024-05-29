<?php
$severname='localhost';
$username = 'root';
$password = '';
$conn= new mysqli($severname,$username, $password); 
if ($conn -> connect_error){
    die('Connection failled:'.$conn->connect_error);
}else{
   echo "Connected Successfully";
}
?>
