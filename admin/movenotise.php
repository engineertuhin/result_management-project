<?php
include_once('database.php');
if(isset($_REQUEST['submit'])){

   $id =$_REQUEST['id'];
 $discription=$_REQUEST['Description'];
 $new=$_FILES['newimage']['name'];
 $file_tmp=$_FILES['newimage']['tmp_name'];
  
 $old=$_REQUEST['oldimage'];
if(!empty($new)){
    $convert=time().rand().$new;
   $image=$convert;
   move_uploaded_file($file_tmp,'notiseimage/'.$image);
   unlink('notiseimage/'.$old);
  }else{
   $image=$old;

  }
  $query="update  notise set image='$image',Description='$discription' where id='$id'";
  $con=$connect -> query($query);
 
  if($con==true){
  header("location:deshboard.php");
   
  }else{
      echo "data is not update ";
  }
}







?>