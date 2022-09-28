<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$databasename = 'store_sm';

$conn = mysqli_connect($servername, $username, $password, $databasename);

if(mysqli_connect_errno()){
    echo "Failed to connection : " . mysqli_connect_error();
    exist();
}
?>