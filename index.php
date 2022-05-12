<?php
include_once('admin/database.php');

?>
<?php

$query="select * from info";
$con=$connect -> query($query);
$data=$con -> fetch_assoc();



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICST</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand a" href="#">ICST</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"style="height:30px">
    <span class="navbar-toggler-icon" style="height:20px"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="allnotise.php">All Notise</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="search.php">Result</a>
      </li>
      
    </ul>
  </div>
</nav>
<div  class="jumbotron jumbotron-fluid  bg-white"  >
 
 <img  src="admin/notiseimage/<?php echo $data['image']?>"class="img-fluid image" alt="">
 


</div>
<div class="container-sm d">
<div class="jumbotron shadow-lg p-3 mb-5 bg-white rounded">
  <h2 class="display-6 text-center">Collage info</h2>
  <p class="lead text-center">About Collage</p>
  <hr class="my-4 ">
  <p class="e"><?php echo $data['Description']?>
  </p>

</div>

</div>


<div class="container-sm f  ">
    <div class="jumbotron shadow-lg p-3 mb-5 bg-white rounded">
      <div class="card text-center">
  <div class="card-header">
    Daily Notice
  </div>
  <div class=container>
<div class="row">
<?php 

$notise="select * from notise  order by id desc
limit 10;";
$conn=$connect -> query($notise);
while($notis= $conn-> fetch_assoc()){



?>
    <div class="col-md-2 mt-3 ">
         <div class="card ml-2 bg-light" style="width: 18rem;">
    <a href="showimage.php?id=<?php echo $notis['id']?>">  <img class="card-img-top" src="admin/notiseimage/<?php echo $notis['image']?>" alt="Card image cap"></a> 
  <div class="card-body">
    <p class="card-text">Date:<?php echo $notis['date']?></p>
  </div>
  
</div>
    </div>
  
    <div class="col-md-2">
         <div class="card ml-3" style="width: 18rem;">
       
    </div>
  
    </div>
    <?php }?>
    </div>
  
  </div>

  
</div>


</div>

</div>





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>