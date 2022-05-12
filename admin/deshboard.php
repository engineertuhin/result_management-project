<?php include_once('lib/header.php');
include_once("database.php");
?>
<?php
$query="select * from info ";
$con=$connect -> query($query);
$data=$con -> fetch_assoc();
$count=$con -> num_rows;


?>          

                                
     
                                       
                                        <div class="col-md-12">
                                            <section class="panel b-a" style="margin-top:30px;  min-height: 1000px;">
												<div class="panel-heading b-b"> <span class="badge bg-warning pull-right">10</span> <a href="#" class="font-bold">Collage information</a> </div>
												<div class="container-sm container-fluid">
												<div class='row'>
											<div class ="col-md-4 lg-4 sm-4 ">
												<img src="notiseimage/<?php echo $data['image'];?>" style="width:300px;height:250px;" alt="" class="img-fluid max-width: 100% height: auto">
											</div>
											<div class ="col-md-6 lg-6 sm-5  " style="margin-top:5px;">
											<p ><?php echo $data['Description'];?></p>
											</div>	<div class ="col-md-2 lg-2 sm-2  " style="margin-top:5px;">


                  <?php if($count==1):
                  ?>

											<a href="updateinfo.php?id=<?php echo $data['id'] ?>" class="btn btn-info btn-sm r-2">Update</a>


                  <?php else:
                  ?>
                  	<a href="addinfo.php" class="btn btn-warning btn-sm r-2">Add Info</a>

                    <?php endif
                  ?>

											<a style="margin-top:5px;" href="addnotise.php" class="btn btn-success btn-sm" >Add Notice</a>
										
											</div>

											</div>
                      <form  action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
											<table class="table table-hover a" >
  <thead >
    <tr>
    <th scope="col">Si no</th>
      <th scope="col">Date and Time</th>
      <th scope="col">Notice image</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  include_once('database.php');
  $table="select * from notise ";
  $conne=$connect ->query($table);
  $con=1;
  while($data =$conne->fetch_assoc()) {
 
  ?>
    <tr>
    <td><?php echo $con;$con++ ?></td>
      <td><?php echo $data['date']?></td>
      <td><img height="200px" width="200px" src="notiseimage/<?php echo $data['image']?>">
      <input type="hidden" name="hidden"></td>
      <td><?php echo $data['Description']?></td>
      <td><a href="editnotise.php?id=<?php echo $data['id']?>" class="btn btn-info btn-sm">Edit</a> 
      <a href="delete.php?id=<?php echo $data['id']?>" class="btn btn-danger  btn-sm" style="margin-top:5px;">Delete</a></td>
    </tr>
  <?php }?>
										
  </form >                                        
                                 
			

                        <?php include_once('lib/footer.php')?>