
 <?php include_once('lib/header.php');
include_once('database.php');
 
 
 ?>
 <?php
 
 if(isset($_REQUEST['submit'])){
  $year=$_REQUEST['year'];
  $semestre=$_REQUEST['smester'];
  $department=$_REQUEST['department'];

     $csv=$_FILES['csv']['name'];
  $csvtmp=$_FILES['csv']['tmp_name'];
   $rand=rand().time().$csv;
  $extinsain=explode('.',$csv);
  $lastex=end($extinsain);
  $lower=strtolower($lastex);
 
  if(in_array($lower ,['csv'])==false){
     $ma="<font color='red'>Only CSV file can uplodad</font>";

  }else{
      move_uploaded_file($csvtmp,"board_result_csv _file/".$rand);
     



  $file=fopen( "board_result_csv _file/".$rand,'r');
   
      while(!feof($file)){
        
     $str= fgetcsv($file);
           
     for($i=0;$i<count($str);$i++){
  
     $data=explode(' ',$str[$i]);

     for($j=0 ; $j<=count($data);$j++){
        
        $dat=  $data[$j];
  $my=$dat+0;
   
     $vari= $data[$j+1];
       $year;
       $semestre;
       $department;
   
 $query="INSERT INTO `Boardresult`( `Year`, `roll`, `result`, `department`, `semester`) VALUES ('$year','$my','$vari','$department','$semestre')";
 $conn=$connect -> query($query);


 if($conn==true){

    $mass="<p class='alert alert-success'>Result is Add<button type='button' class='close' data-dismiss='alert'>&times;</button></p>";


}else{
    $mass="<p class='alert alert-danger'>Data is not add<button type='button' class='close' data-dismiss='alert'>&times;</button></p>";
}

      


     }
    
    
     

    
 
    }}

      fclose($file);


  


}




  }



 
 
 
 ?>





<div class="col-md-12">
 <link rel="stylesheet" href="css/new.css">
                                            <section class="panel b-a" style="margin-top:30px;  min-height: 500px;">
												<div class="panel-heading b-b"> <span class="badge bg-warning pull-right">10</span> <a href="#" class="font-bold">Board Result add</a> </div>
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
             <select name="year" class="custom-select  col-md-12">
    
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
     
    </select>  
<br>
<br>
<label for="exampleInputPassword1">Department</label>
<br>
<select name="department" class="custom-select  col-md-12">
    
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
<label for="exampleInputPassword1">Semester</label>
<br>

<select name="smester" class="custom-select  col-md-12">
    

      <option value="4th Semester">4th Semester</option>
      <option value="5th Semester">5th Semester</option>
      <option value="6th Semester">6th Semester</option>
      <option value="7th Semester">7th Semester</option>
      <option value="8th Semester">8th Semester</option>
   
  </select>  
<br>
<br>
<level>CSV file</level>

    <input type="file" name="csv">      
    <?php echo $ma?>                           
 
<br>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

  </div>




</form >  










 <?php  include_once('lib/footer.php')    ?>