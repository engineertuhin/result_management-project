<?php include_once('lib/header.php');
include_once('database.php')?>
<?php

if(isset($_REQUEST['sub'])){
  $dis=$_REQUEST['dis'];
  $file=$_FILES['image']['name'];
 $file_tmp=$_FILES['image']['tmp_name'];



 $uniqe =time().rand().$file;
  
 $extends=explode(".",$uniqe);

 $extantion=end($extends);

$last=md5($uniqe).".".$extantion;
 
 if(empty($dis) or empty($last)){

  $mas="<p class='alert alert-danger'>Place feelup full from <button type='button' class='close' data-dismiss='alert'>&times;</button></p>";
 }else{

$query="insert into info(Description,image)values('$dis','$last')";
$connec = $connect -> query($query);

if($connec==true){
  move_uploaded_file($file_tmp,'notiseimage/'.$last);
  $mas="<p class='alert alert-success'>Data is inserted <button type='button' class='close' data-dismiss='alert'>&times;</button></p>";
 

}else{
  $mas="<p class='alert alert-danger'>Data is not inserted <button type='button' class='close' data-dismiss='alert'>&times;</button></p>";
 
}
}

}



?>


<div class="col-md-12">
                        <section class="panel b-a" style="margin-top:30px;  min-height: 1000px;">
		<div class="panel-heading b-b"> <span class="badge bg-warning pull-right">10</span> <a href="#" class="font-bold">Add information</a> </div>
		<div class="text-center"style="margin-left:200px;margin-right:200px;">
    <?php echo $mas;?>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" style="padding:5px 30px 30px 30px" enctype="multipart/form-data">
<div  style="margin-left:40px; margin-right:40px;">
  <div class="form-group" >
   
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name="dis" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <input type="file" name="image">
  <br>
  <button type="submit" name="sub" class="btn btn-primary">Submit</button>
  <a href="deshboard.php" class="btn btn-danger">Back</a>
</form>
</div>
</form>
											</div>

<?php include_once('lib/footer.php')?>