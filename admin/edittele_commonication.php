
 <?php include_once('lib/header.php');
include_once('database.php');
 
 
 ?>


<?php

 $id=$_REQUEST['id'];
$query="select * from Tele_communication where id ='$id'";
$con=$connect -> query($query);
$data=$con -> fetch_assoc();




?>


  
<div class="col-md-12">
 <link rel="stylesheet" href="css/new.css">
                                            <section class="panel b-a" style="margin-top:30px;  min-height: 700px;">
												<div class="panel-heading b-b"> <span class="badge bg-warning pull-right">10</span> <a href="#" class="font-bold">Edit Tele_communication department data</a> </div>
												<div class="container-sm container-fluid">
												<div class='row'>

                                            
                                      <div class="text-center " style="margin-left:200px;margin-right:140px;">

                                      <?php echo $mas?>
                                      </div>     
                                      <div  style="margin-left:40px; margin-right:40px;">     

<form  action="move_Tele_communication.php" method="post" enctype="multipart/form-data">                           
                         

                                   <table class="table table-hover">
 
    <tr>
      <th scope="col">Old image</th>

      <td ><img style="margin-left:140px;" height="400" width="350" class="img-fluid  img-thumbnail shadow  " src="Student_image/<?php echo $data['image'];?>" alt="image not insert"></td>
      <input type="hidden" name="image" value="<?php echo $data['image']?>">
      
      
      </td>
   
       </tr>
      
       

 <tr>
<input type="hidden" name='id' value="<?php echo $data['id']?>">
 <th>Semester :</th>
 <td>   <select name="semester" class="custom-select  col-md-4" style="margin-left:15px;">
    
    <option value="<?php echo $data['semester']?>"><?php echo $data['semester']?></option>
    <option value="2nd Semester">2nd Semester add</option>
    <option value="3rd Semester">3rd Semester add </option>
    <option value="4th Semester">4th Semester add </option>
    <option value="5th Semester">5th Semester add</option>
    <option value="6th Semester">6th Semester add</option>
    <option value="7th Semester">7th Semester add</option>
    <option value="8th Semester">8th Semester add</option>
    <option value="1st Semester">1st Semester add</option>
    
  </select>  
  
     <select name="department" style="margin-left:10px; " class="custom-select col-md-4" >
      
      <option value="<?php echo $data['department']?>"><?php echo $data['department']?></option>
      
    </select>  

    <small style="margin-top:5px;" id="emailHelp" class="form-text text-muted col-md-12">If you change any student semester you need to again add here subject</small>     </td>
 
 </tr>
<tr>
<th>Name :</th>
<td> <div class="form-group col-md-9" >
    
    <input type="text" name="name" value="<?php echo $data['name']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Student name">
    
  </div></td>


</tr>
<tr>
<th>Roll :</th>
<td> <div class="form-group col-md-9" >
    
    <input type="text" name="roll" value="<?php echo $data['roll']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div></td>


</tr>

<tr>
<th>Registation:</th>
<td> <div class="form-group col-md-9" >
    
    <input type="text" name="reg" value="<?php echo $data['reg']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    
  </div></td>


</tr>
<tr>
<th>Board :</th>
<td> <div class="form-group col-md-9" >
    
    <input type="text" name="board" value="<?php echo $data['board']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    
  </div></td>



</tr>
<th>New image:</th>
<td> <div class="form-group col-md-9" >
    
   <input type="file" name="file">
    
  </div></td>



</tr>
<tr>
<th>update :</th>
<td> <div class="form-group col-md-9" >
    
<button type="submit" name="submit" class="btn btn-primary">Update data</button>

  </div></td>



</tr>


  </div>
   
</form >  

















<?php include_once('lib/footer.php');

 
 
?>