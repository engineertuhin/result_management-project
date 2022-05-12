 <?php include_once('lib/header.php');
include_once('database.php');
 
 
 ?>
<?php

if(isset($_REQUEST['submit'])){
    $semester=$_REQUEST['semester'];
     $department=$_REQUEST['department'];
     $name=$_REQUEST['name'];
     $roll=$_REQUEST['roll'];
     $reg=$_REQUEST['reg'];
     $image =$_FILES['image']['name'];
     $image_tmp=$_FILES['image']['tmp_name'];
     ///image name chang
     $uniq=time().rand().$image;
     $extent=explode(".",$uniq);
      $ex= end($extent);
      $last=md5($uniq).".".$ex;

$board=$_REQUEST['board'];
if(empty($semester) or empty($department) or empty($name) or empty($roll) or empty($reg) or empty($board)){

    $mas="<p class='alert alert-danger'>You need to feelup all Section<button type='button' class='close' data-dismiss='alert'>&times;</button></p>";


}else{

$query="insert into  $department (semester,name,roll,reg,department,board,image) values('$semester','$name','$roll','$reg','$department','$board','$last')";
$con=$connect -> query($query);

if($con==true){
    move_uploaded_file($image_tmp,'Student_image/'.$last);
    $mas="<p class='alert alert-success'>Data is insertat<button type='button' class='close' data-dismiss='alert'>&times;</button></p>";
}else{

    $mas="<p class='alert alert-danger'>Data is not insertat<button type='button' class='close' data-dismiss='alert'>&times;</button></p>";

}


}




}







?>




    
 <div class="col-md-12">
 <link rel="stylesheet" href="css/new.css">
                                            <section class="panel b-a" style="margin-top:30px;  min-height: 1700px;">
												<div class="panel-heading b-b"> <span class="badge bg-warning pull-right">10</span> <a href="#" class="font-bold">Add Student</a> </div>
												<div class="container-sm container-fluid">
												<div class='row'>
                                            
                                      <div class="text-center " style="margin-left:200px;margin-right:140px;">

                                      <?php echo $mas?>
                                      </div>          

<form  action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">                           
                                   <div class="col-md-8 " style="margin-left:200px;"> 



            <div class="form-group " >
            <label for="exampleInputPassword1">Semester</label>
  <br>
             <select name="semester" class="custom-select  col-md-12">
    
      <option value="1st Semester">1st Semester</option>
      <option value="2nd Semester">2nd Semester</option>
      <option value="3rd Semester">3rd Semester</option>
      <option value="4th Semester">4th Semester</option>
      <option value="5th Semester">5th Semester</option>
      <option value="6th Semester">6th Semester</option>
      <option value="7th Semester">7th Semester</option>
      <option value="8th Semester">8th Semester</option>
    </select>                                   
           <br>                 
           <div class="form-group " >
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Student name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Roll</label>
    <input type="text" name="roll" class="form-control" id="exampleInputPassword1" placeholder="Enter Student roll">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Regestation</label>
    <input type="text" class="form-control" name="reg" id="exampleInputPassword1" placeholder="Enter Student Regestation no">
  </div>
  <label for="exampleInputPassword1">Department</label>
  <br>
  <select name="department"  class="custom-select col-md-12" >
      
      <option value="Computer">Computer</option>
      <option value="Civil">Civil</option>
      <option value="Electronics">Electronics</option>
      <option value="Garments">Garments </option>
      <option value="Textile">Textile</option>
      <option value="Mechanical">Mechanical </option>
      <option value="Tele_communication">Tele communication</option>
      <option value="Architecture">Architecture</option>
    </select>           
  <div class="form-group">
    <label for="exampleInputPassword1">Board</label>
    <input type="text" class="form-control" name="board" id="exampleInputPassword1" placeholder="Enter Board">
  </div>
  <label for="exampleInputPassword1">Student image</label>
  <input type="file" name="image">
 <br/>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

 <br>

</form >  
    
<?php     

if(isset($_REQUEST['submit1'])){



  $semester1=$_REQUEST['semester1'];

   $name1=$_REQUEST['name1'];

  $roll1=$_REQUEST['roll1'];

  $reg1=$_REQUEST['reg1'];

  $department1=$_REQUEST['department1'];

  $board1=$_REQUEST['board1'];

  $image1 =$_FILES['image1']['name'];
   $image1_tmp=$_FILES['image1']['tmp_name'];
     ///image name chang
     $uniq=time().rand().$image1;
     $extent=explode(".",$uniq);
      $ex= end($extent);
      $last1=md5($uniq).".".$ex;






  
      $semester2=$_REQUEST['semester2'];

      $name2=$_REQUEST['name2'];
 
  $roll2=$_REQUEST['roll2'];
 
   $reg2=$_REQUEST['reg2'];
 
   $department2=$_REQUEST['department2'];
 
   $board2=$_REQUEST['board2'];
      $image2 =$_FILES['image2']['name'];
   $image2_tmp=$_FILES['image2']['tmp_name'];
     ///image name chang
     $uniq=time().rand().$image2;
     $extent=explode(".",$uniq);
      $ex= end($extent);
      $last2=md5($uniq).".".$ex;



if(empty($semester1 ) or empty($name1 ) or empty($roll1) or empty($reg1) or empty($department1) or empty($board1) or empty($semester2 ) or empty($name2 ) or empty($roll2) or empty($reg2) or empty($department2) or empty($board2)){
  $mass="<p class='alert alert-danger'>Place feelup the from<button type='button' class='close' data-dismiss='alert'>&times;</button></p>";


}else{

  $query="insert into  $department1 (semester,name,roll,reg,department,board,image) values('$semester1','$name1','$roll1','$reg1','$department1','$board1','$last1')";
  $con=$connect -> query($query);



  $query1="insert into  $department2 (semester,name,roll,reg,department,board,image) values('$semester2','$name2','$roll2','$reg2','$department2','$board2','$last2')";
  $con=$connect -> query($query1);
  
  
  if($con==true){
      move_uploaded_file($image1_tmp,'Student_image/'.$last1);
      move_uploaded_file($image2_tmp,'Student_image/'.$last2);
      $mass="<p class='alert alert-success'>Data is insertat<button type='button' class='close' data-dismiss='alert'>&times;</button></p>";
  }else{
  
      $mass="<p class='alert alert-danger'>Data is not insertat<button type='button' class='close' data-dismiss='alert'>&times;</button></p>";
  
  }
  
  
  }



}






?>
<br>
<div class="text-center">
<?php echo $mass?>
</div>
<h3 class="text-center">Multi data insert </h3>


         


<hr>
<form  action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">                           
                                


            <div class="form-group " >
            <label for="exampleInputPassword1">Semester</label>
  <br>
             <select name="semester1" class="custom-select  col-md-12">
    
      <option value="1st Semester">1st Semester</option>
      <option value="2nd Semester">2nd Semester</option>
      <option value="3rd Semester">3rd Semester</option>
      <option value="4th Semester">4th Semester</option>
      <option value="5th Semester">5th Semester</option>
      <option value="6th Semester">6th Semester</option>
      <option value="7th Semester">7th Semester</option>
      <option value="8th Semester">8th Semester</option>
    </select>                                   
           <br>                 
           <div class="form-group " >
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Student name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Roll</label>
    <input type="text" name="roll1" class="form-control" id="exampleInputPassword1" placeholder="Enter Student Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Regestation</label>
    <input type="text" class="form-control" name="reg1" id="exampleInputPassword1" placeholder="Enter Student Regestation no">
  </div>
  <label for="exampleInputPassword1">Department</label>
  <br>
  <select name="department1"  class="custom-select col-md-12" >
      
      <option value="Computer">Computer</option>
      <option value="Civil">Civil</option>
      <option value="Electronics">Electronics</option>
      <option value="Garments">Garments </option>
      <option value="Textile">Textile</option>
      <option value="Mechanical">Mechanical </option>
      <option value="Tele_communication">Tele communication</option>
      <option value="Architecture">Architecture</option>
    </select>           
  <div class="form-group">
    <label for="exampleInputPassword1">Board</label>
    <input type="text" class="form-control" name="board1" id="exampleInputPassword1" placeholder="Enter Board">
  </div>
  <label for="exampleInputPassword1">Student image</label>
  <input type="file" name="image1">

 
  
<br>
<hr>

            <div class="form-group " >
            <label for="exampleInputPassword1">Semester</label>
  <br>
             <select name="semester2" class="custom-select  col-md-12">
    
      <option value="1st Semester">1st Semester</option>
      <option value="2nd Semester">2nd Semester</option>
      <option value="3rd Semester">3rd Semester</option>
      <option value="4th Semester">4th Semester</option>
      <option value="5th Semester">5th Semester</option>
      <option value="6th Semester">6th Semester</option>
      <option value="7th Semester">7th Semester</option>
      <option value="8th Semester">8th Semester</option>
    </select>                                   
           <br>                 
           <div class="form-group " >
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Student name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Roll</label>
    <input type="text" name="roll2" class="form-control" id="exampleInputPassword1" placeholder="Enter Student Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Regestation</label>
    <input type="text" class="form-control" name="reg2" id="exampleInputPassword1" placeholder="Enter Student Regestation no">
  </div>
  <label for="exampleInputPassword1">Department</label>
  <br>
  <select name="department2"  class="custom-select col-md-12" >
      
      <option value="Computer">Computer</option>
      <option value="Civil">Civil</option>
      <option value="Electronics">Electronics</option>
      <option value="Garments">Garments </option>
      <option value="Textile">Textile</option>
      <option value="Mechanical">Mechanical </option>
      <option value="Tele_communication">Tele communication</option>
      <option value="Architecture">Architecture</option>
    </select>           
  <div class="form-group">
    <label for="exampleInputPassword1">Board</label>
    <input type="text" class="form-control" name="board2" id="exampleInputPassword1" placeholder="Enter Board">
  </div>
  <label for="exampleInputPassword1">Student image</label>
  <input type="file" name="image2">
 <br/>
  <button type="submit" name="submit1" class="btn btn-primary">Submit</button>

 <br>
 
</form >  






                                            <?php include_once('lib/footer.php')?>                                           