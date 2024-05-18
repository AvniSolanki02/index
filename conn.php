<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database = "student";

$conn = mysqli_connect($hostname,$username,$password,$database);

if(mysqli_connect_errno())
{
    echo "Database Connection Error...";
    die();

}
?>
