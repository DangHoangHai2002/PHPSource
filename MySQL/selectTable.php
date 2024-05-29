<?php 
$severname='localhost';
$username = 'root';
$password = '';
$dbname='myDB';
$conn=mysqli_connect($severname,$username, $password, $dbname);
if($conn->connect_error){
    die('Connection failled:'. $conn->connect_error);
}
$sql="SELECT id,firstname,lastname FROM MyGuest";
$result=$conn->query($sql);
if($result->num_rows>0) {
    while ($row=$result->fetch_assoc()) {
    echo $row['id']."-". $row['firstname']. "-" . $row['lastname']. "<br>";
}
}else{
    echo "No data found!";
}$conn->close();
?>