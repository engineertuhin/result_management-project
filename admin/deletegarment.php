<?php

include_once('database.php');
 $id= $_REQUEST['id'];




$query1="select image from Garments where id='$id'";
$co1=$connect -> query($query1);
$co=$co1-> fetch_assoc();
$image=$co['image'];





$query="delete from Garments  where id='$id'";
$conn=$connect -> query($query);
if($conn==true){
    unlink('Student_image/'.$image);
    header("location:garmants.php");
    
}








?>