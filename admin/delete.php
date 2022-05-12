<?php

echo  $id=$_REQUEST["id"];



include_once("database.php");

$query1="select image from notise where id='$id'";
$co1=$connect -> query($query1);
$co=$co1-> fetch_assoc();
$oldimage=$co['image'];




$query="delete from notise where id='$id'";
$con=$connect -> query($query);

if($con==true){
  unlink('notiseimage/'.$oldimage);
  header("location:deshboard.php");
}else{
    echo " I think some problem is available";
}
















?>