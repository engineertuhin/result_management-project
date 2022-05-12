
 <?php include_once('lib/header.php');
include_once('database.php');
include_once('lib/function7.php');
 
 
 ?>
 <?php

$id=$_REQUEST['id'];

 
     $query="select * from Architecture where id='$id'";
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
    
$quer="INSERT INTO `Architecture_result`( `sid`, `semester`, `name`, `roll`, `reg`, `department`, `board`, `image`, `subject1`, `Subject1_m`, `Subject1_g`, `Subject1_p`, `subject2`, `Subject2_m`, `Subject2_g`, `Subject2_p`, `subject3`, `Subject3_m`, `Subject3_g`, `Subject3_p`, `subject4`, `Subject4_m`, `Subject4_g`, `Subject4_p`, `subject5`, `Subject5_m`, `Subject5_g`, `Subject5_p`, `subject6`, `Subject6_m`, `Subject6_g`, `Subject6_p`, `subject7`, `Subject7_m`, `Subject7_g`, `Subject7_p`, `CGPA`, `result`) VALUES ('$id','$semester','$name','$roll','$reg','$department','$board','$image','$sub1','$s1','$subject1','$subjectpoint1','$sub2','$s2','$subject2','$subjectpoint2','$sub3','$s3','$subject3',$subjectpoint3,'$sub4','$s4','$subject4','$subjectpoint4','$sub5','$s5','$subject5','$subjectpoint5','$sub6','$s6','$subject6','$subjectpoint6','$sub7','$s7','$subject7','$subjectpoint7','$p','$pass')";
$conn=$connect -> query($quer);
if($conn==true){
  $mas="<p class='alert alert-success'>Data is  inserted <button type='button' class='close' data-dismiss='alert'>&times;</button></p>";
}else{
  $mas="<p class='alert alert-danger'>Data is not inserted <button type='button' class='close' data-dismiss='alert'>&times;</button></p>";
}
 

   }










}





 
 
 

 ?>


<div class="col-md-12">
 <link rel="stylesheet" href="css/new.css">
                                            <section class="panel b-a" style="margin-top:30px;  min-height: 700px;">
												<div class="panel-heading b-b"> <span class="badge bg-warning pull-right">10</span> <a href="#" class="font-bold">Architecture Department Add result</a> </div>
												<div class="container-sm container-fluid">
												<div class='row'>






                        <div class="text-center" style="margin-left:240px;margin-right:160px;">
<?php echo $mas?>
</div>


                                                <form  action="<?php echo $_SERVER['PHP_SELF']?>?id=<?php echo $id?>" method="post" enctype="multipart/form-data">                           
                                   <div class="col-md-8 " style="margin-left:200px;"> 



          

                       
           <div class="form-group col-md-10" >
           
    <label ><?php echo $data['Subject_1'] ?></label>
    <input type="text" name="1st" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your subject name">
    
  </div>
  <div class="col-md-2" > 
  <label for="cars">Mark</label>

<select id="cars" name="mark1" style="width:90px; margin-right:40px;">
  <option value="<?php echo $data['Mark_1'] ?>"><?php echo $data['Mark_1'] ?></option>
  
</select>
</div>
<div class="form-group col-md-10" >
           
           <label for="exampleInputEmail1"><?php echo $data['Subject_2'] ?></label>
           <input type="text" name="2nd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your subject name">
           
         </div>
         <div class="col-md-2" > 
         <label for="cars">Mark</label>
       
       <select id="cars" name="mark2" style="width:90px; margin-right:40px;">
         <option value="<?php echo $data['mark_2'] ?>"><?php echo $data['mark_2'] ?></option>
       
       
       </select>
       </div>

       <div class="form-group col-md-10" >
           
           <label for="exampleInputEmail1"><?php echo $data['Subject_3'] ?></label>
           <input type="text" name="3rd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your subject name">
           
         </div>
         <div class="col-md-2" > 
         <label for="cars">Mark</label>
       
       <select id="cars"   name="mark3" style="width:90px; ">
         <option value="<?php echo $data['mark_3'] ?>"><?php echo $data['mark_3'] ?></option>
    
       
       </select>
       </div>
       <div class="form-group col-md-10" >
           
           <label for="exampleInputEmail1"><?php echo $data['subject_4'] ?></label>
           <input type="text" name="4th" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your subject name">
           
         </div>
         <div class="col-md-2" > 
         <label for="cars">Mark</label>
       
       <select id="cars"  name="mark4" style="width:90px;">
         <option value="<?php echo $data['mark_4'] ?>"><?php echo $data['mark_4'] ?></option>
     
       
       </select>
       </div>
       <div class="form-group col-md-10" >
           
           <label for="exampleInputEmail1"><?php echo $data['Subject_5'] ?></label>
           <input type="text" name="5th" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your subject name">
           
         </div>
         <div class="col-md-2" > 
         <label for="cars">Mark</label>
       
       <select id="cars" name="mark5"  style="width:90px;" >
         <option value="<?php echo $data['mark_5'] ?>"><?php echo $data['mark_5'] ?></option>
     
       
       </select>
       </div>
       <div class="form-group col-md-10" >
           
           <label for="exampleInputEmail1"><?php echo $data['Subject_6'] ?></label>
           <input type="text" name="6th" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your subject name">
           
         </div>
         <div class="col-md-2" > 
         <label for="cars">Mark</label>
       
       <select id="cars"  name="mark6" style="width:90px; ">
         <option value="<?php echo $data['mark6'] ?>"><?php echo $data['mark6'] ?></option>
         
       
       </select>
       </div>
       <div class="form-group col-md-10" >
           
           <label for="exampleInputEmail1"><?php echo $data['Subject_7'] ?></label>
           <input type="text" name="7th" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your subject name">
           
         </div>
         <div class="col-md-2" > 
         <label for="cars">Mark</label>
       
       <select id="cars" name="mark7" style="width:90px;">
         <option value="<?php echo $data['mark_7'] ?>"><?php echo $data['mark_7'] ?></option>
 
       </select>
       </div>
       
      <div class="col-md-12">

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

  </div>




</form >  













<?php include_once('lib/footer.php');

 
 
?>
