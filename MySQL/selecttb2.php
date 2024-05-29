<?php 
$severname='localhost';
$username = 'root';
$password = '';
$dbname='ProductDB';
$conn=mysqli_connect($severname,$username, $password, $dbname);
if($conn->connect_error){
    die('Connection failled:'. $conn->connect_error);
}
$sql="SELECT id,pname,company,year,band FROM tblproduct ";
$result=$conn->query($sql);
if($result->num_rows>0) {
    while ($row=$result->fetch_assoc()) {
    echo $row['id']."-". $row['pname']. "-" . $row['company'].'-'.$row['year'].'-'.$row['band']. "<br>";
}
}else{
    echo "No data found!";
}$conn->close();
?>