<?php
include_once('admin/database.php');

?>
<?php

$query="select * from notise  order by id desc";
$con=$connect -> query($query);




?>
<html>
<head>
  <title></title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:600,900" rel="stylesheet">
  <link rel="stylesheet" href="css/view.css">
</head>
<body>
  <p class="heading">All Notise</p>
  <div class="gallery-image">
  <?php while($notis= $con-> fetch_assoc()){?>
   <a href="showimage.php?id=<?php echo $notis['id']?>"> <div class="img-box">
      <img  src="admin/notiseimage/<?php echo $notis['image']?>" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Date</p>
          <p class="opacity-low"><?php echo $notis['date']?></p>
        </div>
      </div> 
    </div>
  <?php }?> 
</body>
</html>