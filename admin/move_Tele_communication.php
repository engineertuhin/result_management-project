<?php
include_once('database.php');

if(isset($_REQUEST['submit'])){
  $data=$_REQUEST['id'];
 $semester=$_REQUEST['semester'];
 $departmen=$_REQUEST['department'];
 $name=$_REQUEST['name'];
 $roll=$_REQUEST['roll'];
 $reg=$_REQUEST['reg'];
 $board=$_REQUEST['board'];
 $oldimage=$_REQUEST['image'];
 $newimage=$_FILES['file']['name'];
 $tmp=$_FILES['file']['tmp_name'];

 $uniqe=time().rand().$newimage;
if(!empty($newimage)){
   $img=$uniqe;
  move_uploaded_file($tmp,'Student_image/'.$img);
unlink('Student_image/'.$oldimage);

}else{
    $img=$oldimage;
}
$query="update  Tele_communication set semester='$semester',name='$name',roll='$roll',reg='$reg',department='$departmen',board='$board',image='$img' where id='$data'";
$con=$connect -> query($query);
if($con==true){

   header("location: Tele_communication.php");


}
else{
    echo "Some problem";
}




}





?>