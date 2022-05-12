
 <?php include_once('lib/header.php');
include_once('database.php');
 
 
 ?>


<?php 


if(isset($_REQUEST['submit'])){

  $department=$_REQUEST['department'];
  $query="Select * from $department ";
  $con=$connect -> query($query);
  $data=$con -> fetch_assoc();
   $sms=$data['semester'];
 $semester=$_REQUEST['semester'];

   $s1=$_REQUEST['1st'];
   $m1=$_REQUEST['mark1'];
   $s2=$_REQUEST['2nd'];
   $m2=$_REQUEST['mark2'];
   $s3=$_REQUEST['3rd'];
   $m3=$_REQUEST['mark3'];
   $s4=$_REQUEST['4th'];
   $m4=$_REQUEST['mark4'];

   $s5=$_REQUEST['5th'];
   $m5=$_REQUEST['mark5'];

   $s6=$_REQUEST['6th'];
   $m6=$_REQUEST['mark6'];

   $s7=$_REQUEST['7th'];
   $m7=$_REQUEST['mark7'];

  if(empty($semester) or empty($department) or empty($s1) or empty($m1) or empty($s2) or empty($m2) or empty($s3) or empty($m3) or empty($s4) or empty($m4) or empty($s5) or empty($m5) or empty($s6) or empty ($m6) or empty($s7) or empty($m7)){


    $mass="<p class='alert alert-danger'>Place feelup the from<button type='button' class='close' data-dismiss='alert'>&times;</button></p>";

  } else{
  

$update="update   $department set Subject_1='$s1' ,Mark_1='$m1' ,Subject_2='$s2' ,mark_2='$m2',Subject_3='$s3',mark_3='$m3',subject_4='$s4' ,mark_4='$m4', Subject_5='$s5' ,mark_5='$m5' ,Subject_6='$s6' ,mark6='$m6' , Subject_7='$s7' ,mark_7='$m7' where semester='$semester'";
$con=$connect -> query($update);
if($con==true){
  $mass="<p class='alert alert-success'>Data is insert <button type='button' class='close' data-dismiss='alert'>&times;</button></p>";
}else{

  $mass="<p class='alert alert-danger'>Data is not insert at<button type='button' class='close' data-dismiss='alert'>&times;</button></p>";


}



  }


}




?>



<div class="col-md-12">
 <link rel="stylesheet" href="css/new.css">
                                            <section class="panel b-a" style="margin-top:30px;  min-height: 750px;">
												<div class="panel-heading b-b"> <span class="badge bg-warning pull-right">10</span> <a href="#" class="font-bold">Book Insert all Department</a> </div>
												<div class="container-sm container-fluid">
												<div class='row'>
                                            


                        <div class="text-center" style="margin-left:240px;margin-right:160px;">
<?php echo $mass?>
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
                       <br>  

                       <br>  

                       
           <div class="form-group col-md-10" >
           
    <label for="exampleInputEmail1">1st Subject name</label>
    <input type="text" name="1st" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your subject name">
    
  </div>
  <div class="col-md-2" > 
  <label for="cars">Mark</label>

<select id="cars" name="mark1" style="width:90px; margin-right:40px;">
  <option value="30">30</option>
  <option value="60">60</option>
  <option value="90">90</option>

</select>
</div>
<div class="form-group col-md-10" >
           
           <label for="exampleInputEmail1">2nd Subject name</label>
           <input type="text" name="2nd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your subject name">
           
         </div>
         <div class="col-md-2" > 
         <label for="cars">Mark</label>
       
       <select id="cars" name="mark2" style="width:90px; margin-right:40px;">
         <option value="30">30</option>
         <option value="60">60</option>
         <option value="90">90</option>
       
       </select>
       </div>

       <div class="form-group col-md-10" >
           
           <label for="exampleInputEmail1">3rd Subject name</label>
           <input type="text" name="3rd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your subject name">
           
         </div>
         <div class="col-md-2" > 
         <label for="cars">Mark</label>
       
       <select id="cars"   name="mark3" style="width:90px; ">
         <option value="30">30</option>
         <option value="60">60</option>
         <option value="90">90</option>
       
       </select>
       </div>
       <div class="form-group col-md-10" >
           
           <label for="exampleInputEmail1">4th Subject name</label>
           <input type="text" name="4th" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your subject name">
           
         </div>
         <div class="col-md-2" > 
         <label for="cars">Mark</label>
       
       <select id="cars"  name="mark4" style="width:90px;">
         <option value="30">30</option>
         <option value="60">60</option>
         <option value="90">90</option>
       
       </select>
       </div>
       <div class="form-group col-md-10" >
           
           <label for="exampleInputEmail1">5th Subject name</label>
           <input type="text" name="5th" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your subject name">
           
         </div>
         <div class="col-md-2" > 
         <label for="cars">Mark</label>
       
       <select id="cars" name="mark5"  style="width:90px;" >
         <option value="30">30</option>
         <option value="60">60</option>
         <option value="90">90</option>
       
       </select>
       </div>
       <div class="form-group col-md-10" >
           
           <label for="exampleInputEmail1">6th Subject name</label>
           <input type="text" name="6th" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your subject name">
           
         </div>
         <div class="col-md-2" > 
         <label for="cars">Mark</label>
       
       <select id="cars"  name="mark6" style="width:90px; ">
         <option value="30">30</option>
         <option value="60">60</option>
         <option value="90">90</option>
       
       </select>
       </div>
       <div class="form-group col-md-10" >
           
           <label for="exampleInputEmail1">7th Subject name</label>
           <input type="text" name="7th" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your subject name">
           
         </div>
         <div class="col-md-2" > 
         <label for="cars">Mark</label>
       
       <select id="cars" name="mark7" style="width:90px;">
         <option value="30">30</option>
         <option value="60">60</option>
         <option value="90">90</option>
       
       </select>
       </div>
       
      <div class="col-md-12">

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

  </div>




</form >  










 <?php  include_once('lib/footer.php')    ?>