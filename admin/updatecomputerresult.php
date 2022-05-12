
 <?php include_once('lib/header.php');
include_once('database.php');
include_once('lib/function.php');
 
 
 ?>
 <?php

$id=$_REQUEST['id'];

 
     $query="select * from Computer where id='$id'";
     $connec=$connect -> query($query);
     $data=$connec -> fetch_assoc();

    $semester= $data['semester'];
    $name=$data['name'];
    $roll= $data['roll'];
    $reg=$data['reg'];
    $department= $data['department'];
    $board	=$data['board'];
    $image	=$data['image'];
    $sub1	=$data['Subject_1'];
    $sub2	=$data['Subject_2'];
    $sub3	=$data['Subject_3'];
    $sub4	=$data['subject_4'];
    $sub5	=$data['Subject_5'];
    $sub6	=$data['Subject_6'];
    $sub7	=$data['Subject_7'];













if(isset($_REQUEST['submit'])){
   
        $s1=$_REQUEST['1st'];
       $subject1=  marksubject($s1,$connect,$id);
    $subjectpoint1=  pointsubject($s1,$connect,$id);

        $m1=$_REQUEST['mark1'];
        $s2=$_REQUEST['2nd'];
       $subject2=  marksubjecte($s2,$connect,$id);
     $subjectpoint2=  pointsubject1($s2,$connect,$id);


        $m2=$_REQUEST['mark2'];
        $s3=$_REQUEST['3rd'];
      $subject3=  marksubject3($s3,$connect,$id);
     $subjectpoint3=  pointsubject2($s3,$connect,$id);

      
        $m3=$_REQUEST['mark3'];
        $s4=$_REQUEST['4th'];

         $subject4=  marksubject4($s4,$connect,$id);
        $subjectpoint4=  pointsubject3($s4,$connect,$id);


        $m4=$_REQUEST['mark4'];
        $s5=$_REQUEST['5th'];
       $subject5=  marksubject5($s5,$connect,$id);
     $subjectpoint5=  pointsubject4($s5,$connect,$id);

        $m5=$_REQUEST['mark5'];
        $s6=$_REQUEST['6th'];
     $subject6=  marksubject6($s6,$connect,$id);
     $subjectpoint6=  pointsubject5($s6,$connect,$id);

        $m6=$_REQUEST['mark6'];
        $s7=$_REQUEST['7th'];
       $subject7=  marksubject7($s7,$connect,$id);
        $subjectpoint7=  pointsubject6($s7,$connect,$id);
     
        $m7=$_REQUEST['mark7'];


 
        $totalpoint=totalp($subjectpoint1,$subjectpoint2,$subjectpoint3,$subjectpoint4,$subjectpoint5,$subjectpoint6,$subjectpoint7);
         $p=  round($totalpoint,2);


          
     
   $pass=pass($subjectpoint1,$subjectpoint2,$subjectpoint3,$subjectpoint4,$subjectpoint5,$subjectpoint6,$subjectpoint7);
      
   if(empty($s1) or empty($s2) or empty($s3) or empty($s4) or empty($s5) or empty($s6) or empty($s7)){

   
  $mas="<p class='alert alert-danger'>Place feelup full section<button type='button' class='close' data-dismiss='alert'>&times;</button></p>";



   }else{
    
$quer="UPDATE `computer_result` SET `subject1`='$sub1',`Subject1_m`='$s1',`Subject1_g`='$subject1',`Subject1_p`='$subjectpoint1',`subject2`='$sub2',`Subject2_m`='$s2',`Subject2_g`='$subject2',`Subject2_p`='$subjectpoint2',`subject3`='$sub3',`Subject3_m`='$s3',`Subject3_g`='$subject3',`Subject3_p`='$subjectpoint3',`subject4`='$sub4',`Subject4_m`='$s4',`Subject4_g`='$subject4',`Subject4_p`='$subjectpoint4',`subject5`='$sub5',`Subject5_m`='$s5',`Subject5_g`='$subject5',`Subject5_p`='$subjectpoint5',`subject6`='$sub6',`Subject6_m`='$s6',`Subject6_g`='$subject6',`Subject6_p`='$subjectpoint6',`subject7`='$sub7',`Subject7_m`='$s7',`Subject7_g`='$subject7',`Subject7_p`='$subjectpoint7',`CGPA`='$p',`result`='$pass' WHERE sid='$id'";
$conn=$connect -> query($quer);
if($conn==true){
  $mas="<p class='alert alert-success'>Data is  inserted <button type='button' class='close' data-dismiss='alert'>&times;</button></p>";
  header('location:updatecomputerresult.php?id=$id');
}else{
  $mas="<p class='alert alert-danger'>Data is not inserted <button type='button' class='close' data-dismiss='alert'>&times;</button></p>";
}
 

   }










}





 
 
 

 ?>
 <?php
 
 $da="select * from computer_result where sid='$id'";
 $co=$connect -> query($da);
 $cul=$co -> fetch_assoc();
 
 ?>


<div class="col-md-12">
 <link rel="stylesheet" href="css/new.css">
                                            <section class="panel b-a" style="margin-top:30px;  min-height: 700px;">
												<div class="panel-heading b-b"> <span class="badge bg-warning pull-right">10</span> <a href="#" class="font-bold">Computer Department Add result</a> </div>
												<div class="container-sm container-fluid">
												<div class='row'>






                        <div class="text-center" style="margin-left:240px;margin-right:160px;">
<?php echo $mas?>
</div>


                                                <form  action="<?php echo $_SERVER['PHP_SELF']?>?id=<?php echo $id?>" method="post" enctype="multipart/form-data">                           
                                   <div class="col-md-8 " style="margin-left:200px;"> 



          

                       
           <div class="form-group col-md-10" >
           
    <label ><?php echo $data['Subject_1'] ?></label>
    <input type="text" name="1st" value="<?php echo $cul['Subject1_m']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your subject name">
    
  </div>
  <div class="col-md-2" > 
  <label for="cars">Mark</label>

<select id="cars" name="mark1" style="width:90px; margin-right:40px;">
  <option value="<?php echo $data['Mark_1'] ?>"><?php echo $data['Mark_1'] ?></option>
  
</select>
</div>
<div class="form-group col-md-10" >
           
           <label for="exampleInputEmail1"><?php echo $data['Subject_2'] ?></label>
           <input type="text" name="2nd" value="<?php echo $cul['Subject2_m']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your subject name">
           
         </div>
         <div class="col-md-2" > 
         <label for="cars">Mark</label>
       
       <select id="cars" name="mark2" style="width:90px; margin-right:40px;">
         <option value="<?php echo $data['mark_2'] ?>"><?php echo $data['mark_2'] ?></option>
       
       
       </select>
       </div>

       <div class="form-group col-md-10" >
           
           <label for="exampleInputEmail1"><?php echo $data['Subject_3'] ?></label>
           <input type="text" name="3rd" value="<?php echo $cul['Subject3_m']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your subject name">
           
         </div>
         <div class="col-md-2" > 
         <label for="cars">Mark</label>
       
       <select id="cars"   name="mark3" style="width:90px; ">
         <option value="<?php echo $data['mark_3'] ?>"><?php echo $data['mark_3'] ?></option>
    
       
       </select>
       </div>
       <div class="form-group col-md-10" >
           
           <label for="exampleInputEmail1"><?php echo $data['subject_4'] ?></label>
           <input type="text" name="4th" value="<?php echo $cul['Subject4_m']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your subject name">
           
         </div>
         <div class="col-md-2" > 
         <label for="cars">Mark</label>
       
       <select id="cars"  name="mark4" style="width:90px;">
         <option value="<?php echo $data['mark_4'] ?>"><?php echo $data['mark_4'] ?></option>
     
       
       </select>
       </div>
       <div class="form-group col-md-10" >
           
           <label for="exampleInputEmail1"><?php echo $data['Subject_5'] ?></label>
           <input type="text" name="5th" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $cul['Subject5_m']?>" placeholder="Enter your subject name">
           
         </div>
         <div class="col-md-2" > 
         <label for="cars">Mark</label>
       
       <select id="cars" name="mark5"  style="width:90px;" >
         <option value="<?php echo $data['mark_5'] ?>"><?php echo $data['mark_5'] ?></option>
     
       
       </select>
       </div>
       <div class="form-group col-md-10" >
           
           <label for="exampleInputEmail1"><?php echo $data['Subject_6'] ?></label>
           <input type="text" name="6th" value="<?php echo $cul['Subject6_m']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your subject name">
           
         </div>
         <div class="col-md-2" > 
         <label for="cars">Mark</label>
       
       <select id="cars"  name="mark6" style="width:90px; ">
         <option value="<?php echo $data['mark6'] ?>"><?php echo $data['mark6'] ?></option>
         
       
       </select>
       </div>
       <div class="form-group col-md-10" >
           
           <label for="exampleInputEmail1"><?php echo $data['Subject_7'] ?></label>
           <input type="text" value="<?php echo $cul['Subject7_m']?>" name="7th" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your subject name">
           
         </div>
         <div class="col-md-2" > 
         <label for="cars">Mark</label>
       
       <select id="cars" name="mark7" style="width:90px;">
         <option value="<?php echo $data['mark_7'] ?>"><?php echo $data['mark_7'] ?></option>
 
       </select>
       </div>
       
      <div class="col-md-12">

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
<a href="computer.php" class='btn btn-danger'>Back</a>
  </div>




</form >  













<?php include_once('lib/footer.php');

 
 
?>
