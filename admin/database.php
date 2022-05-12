<?php  


session_start();
$host="localhost";
$user="admin";
$password="00";
$database="icst";
$connect=mysqli_connect($host,$user,$password,$database);

if($connect==false){
    echo "database is not connect";

}




?>