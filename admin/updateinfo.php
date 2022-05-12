<?php include_once('lib/header.php');
include_once("database.php");
?>

<?php 
$id=$_REQUEST['id'];
$query="select * from info where id='$id'";
$con=$connect ->  query($query);
$data =$con -> fetch_assoc();





?>


<div class="col-md-12">
                        <section class="panel b-a" style="margin-top:30px;  min-height: 1000px;">
		<div class="panel-heading b-b"> <span class="badge bg-warning pull-right">10</span> <a href="#" class="font-bold"> Updata informatation</a> </div>
		<div class="text-center"style="margin-left:200px;margin-right:200px;">
    <?php echo $mas;?>
    </div>
   



    <form  action="move.php" method="POST" style="padding:5px 30px 30px 30px" enctype="multipart/form-data">
<div  style="margin-left:40px; margin-right:40px;">

<table class="table  table-hover">

<tr>
      <th scope="col">Old image</th>
      <td><div class="text-center">
<img height='400px' width='400px' src="notiseimage/<?php echo $data['image']?> "class="img-thumbnail shadow   img-fluid"  alt="">
<input type="hidden" name="oldimage" value="<?php echo $data['image']?>">
</div>
<input type="hidden"> </td>
    <tr>
      <th scope="col">Description</th>
      <td> <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name="Description" id="exampleFormControlTextarea1" rows="5"><?php echo $data['Description']?></textarea>
  </div></td>
 <tr>
      <th scope="col">New image</th>
      
      <td><input type="file" name='newimage'></td>
  </td>
  <tr>
      <th scope="col">action</th>
      <br>
      <td><button type="submit" name="submit" class="btn btn-primary">Submit</button></td>
  </td>
     
    
  </thead>

    
  
</div>
</form>
											</div>

<?php include_once('lib/footer.php')?>