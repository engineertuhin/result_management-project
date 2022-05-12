
 <?php include_once('lib/header.php');
include_once('database.php');
 
 
 ?>
<?php 

$query="select * from Electronics ORDER by semester";
$con=$connect -> query($query);

  



?>




 <div class="col-md-12">
 <link rel="stylesheet" href="css/new.css">
                                            <section class="panel b-a" style="margin-top:30px;  min-height: 1700px;">
												<div class="panel-heading b-b"> <span class="badge bg-warning pull-right">10</span> <a href="#" class="font-bold">Electronics Department all Student</a> </div>
												<div class="container-sm container-fluid">
												<div class='row'>



<div class="col-md-12">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/2762528b24.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/2762528b24.js" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<form  action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">

<input id="myInput" type="text" placeholder="Search.."   style="margin-top:20px; margin-left:83%"  >
<br><br>

<table  class="table table-hover " >
  <thead>
  <tr>
    <th>SI on</th>
    <th>Semester</th>
    <th>Name</th>
    <th>Roll</th>
    <th>Regestation</th>
    <th>Department</th>
    <th>Board</th>
    <th>Image</th>
    <th>book</th>
    <th>Action</th>
  </tr>
  </thead>

  <?php  $c=1;   while($data= $con -> fetch_assoc()) { ?>
  <tbody id="myTable">
  <tr>
    <td><?php echo $c ;$c++  ?></td>
    <td><?php echo $data['semester']  ?></td>
    <td><?php echo $data['name']  ?></td>
    <td><?php echo $data['roll']  ?></td>
    <td><?php echo $data['reg']  ?></td>
    <td><?php echo $data['department']  ?></td>
    <td><?php echo $data['board']  ?></td>
    <td><img height="80" width="80" style="border-radius: 50%;" src="Student_image/<?php  echo $data['image']?>" alt="image"></td>
   
    <?php     
      $id= $data['id'];
       $subject=$data['Subject_1'];
    $q="select Subject_1 from Electronics where id='$id'";
    $co=$connect -> query($q);
    $count=$co -> fetch_assoc();
 
  $count['Subject_1'];
    

    ?>
   
  
    <?php if(!empty($count['Subject_1'])): ?>
    <td><a href="" class="text-success"><i class="text-center fas fa-thumbs-up fa-2x"> book is add</i></a></td>


    <?php else : ?>

      <td><a href="" class="text-danger"><i  class="text-center fas fa-thumbs-down fa-2x">book is not add</i></a></td>

      <?php endif ?>
      

      <?php
    
  $semesters= $data['semester'];
   $roll=$data['roll'] ;
   $department=$data['department'] ;
  if($semesters=='7th Semester' or $semesters=='4th Semester' or $semesters=='8th Semester' or $semesters=='6th Semester'  or $semesters=='5th Semester'){
   $masb="disabled";
   
   $result="Board R not add";
   $color="btn-danger";

$query="select Boardresult.department,Boardresult.roll,Boardresult.semester from 
Boardresult,Electronics where Electronics.roll=Boardresult.roll and Electronics.semester=Boardresult.semester and Electronics.department=Boardresult.department ";
$connec=$connect -> query($query);
while($da=$connec -> fetch_assoc()){
 $da['roll'];
 $da['department'];
 $da['semester'];
if($da['roll']==$roll and $da['department']==$department and  $da['semester']==$semesters ){
  $result="board result add";
  $color="btn-success";
}
   
 }
   
  
  }else{
    $result="Add result";
    $color="btn-danger";
  }
    ?>


<?php

 $id=$data['id']; 
 $roll=$data['roll'];
 $q="select roll from Electronics_result where sid='$id'";
 $qu=$connect -> query($q);
 $d=$qu -> fetch_assoc();

?>
<?php if($d['roll']==$roll):?>
<div class="container-fluid">
  <td><a href="updateElectronics.php?id=<?php echo $data['id'] ?>" title="Update result" class='btn btn-success btn-sm '>Update Result</a>
  </div>
<?php else: ?>
 
  <div class="container-fluid">
  <td><a href="addresultElectronics.php?id=<?php echo $data['id'] ?>" title="Add result" class='btn <?php echo $color ?> btn-sm <?php echo $masb?>'><?php echo $result?></a>
  </div>
    <?php endif?>
 
    

    
    <a href="editElectronics.php?id=<?php echo $data['id'] ?>" title="Edit" style="margin-top:5px;" class='btn btn-info  btn-sm'><i class="fas fa-user-edit"></i></a>
   
    <a href="deleteElectronics.php?id=<?php echo $data['id'] ?>" title="Delete" style="margin-top:5px;" class='btn btn-danger btn-sm'><i class="fas fa-trash-alt"></i></a>

    </td>
   
  
 </tr>

  
 
  <?php  }?>
</div>



</form >







 <?php include_once('lib/footer.php');

 
 
 ?>
