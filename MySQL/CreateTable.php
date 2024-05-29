<?php
$severname='localhost';
$username = 'root';
$password = '';
$dbname='myDB';
$conn= new mysqli($severname,$username, $password,$dbname); 
if ($conn -> connect_error){
    die('Connection failled:'.$conn->connect_error);
}else{
   echo "Connected Successfully";
}
$sql = "CREATE TABLE MyGuest (
    id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname varchar(30) NOT NULL,
    lastName varchar(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if($conn->query($sql)===TRUE) {
    echo "Table created successfully!";
} else {
    echo "Error creating table: ". $conn->error;
}$conn->close();
?>