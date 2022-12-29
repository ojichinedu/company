<?php 
if (!isset($_SESSION)){
    session_start();
} 
$servername ="localhost";
$username = "root";
$password ="";
$dbname ="definance";

$conn =mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connection failed:".mysqli_connect_error());
}
else {
    // = "connected Successfully";
    // $mg;
}

?>