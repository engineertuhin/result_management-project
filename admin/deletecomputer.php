<?php

include_once('database.php');
 $id= $_REQUEST['id'];




$query1="select image from Computer where id='$id'";
$co1=$connect -> query($query1);
$co=$co1-> fetch_assoc();
$image=$co['image'];





$query="delete from Computer  where id='$id'";
$conn=$connect -> query($query);
if($conn==true){
    unlink('Student_image/'.$image);
    header("location:computer.php");
    
}








?>