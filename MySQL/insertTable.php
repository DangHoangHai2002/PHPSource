<?php 
$severname='localhost';
$username = 'root';
$password = '';
$dbname='myDB';
$conn=mysqli_connect($severname,$username, $password, $dbname);
if($conn->connect_error){
    die('Connection failled:'. $conn->connect_error);
}
$sql = 
'INSERT INTO MyGuest(firstname,lastname,email)
VALUES("Joe","Dane", "joe@example.com")';
if($conn->query($sql)===TRUE) {
    echo "Record inserted successfully";
} else{
   echo "Error:".$sql.'<br>'.$conn->error;
}$conn->close();

?>