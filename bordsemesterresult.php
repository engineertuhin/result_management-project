<?php
include_once("admin/database.php");
?>
<?php 

if(isset($_REQUEST['submit'])){

  $department=$_REQUEST['department'];
 $semester=$_REQUEST['semester'];
  $roll=$_REQUEST['roll'];

  $query="select Boardresult.roll,Boardresult.result, Boardresult.department,Boardresult.semester,$department.name,$department.image,$department.reg FROM $department,Boardresult where  $department.roll=Boardresult.roll ; ";
  $connec=$connect -> query($query);
 while($conne=$connec -> fetch_assoc()){
  
  if($conne['roll']==$roll and $conne['department']==$department and $conne['semester']==$semester){
     $image=$conne['image'];
     $rolls=$conne['roll'];
     $deprt=$conne['department'];
     $name=$conne['name'];
     $result=$conne['result'];
     $reg=$conne['reg'];
     $semes=$conne['semester'];
  }
  }

}else{

    header("location:boardresultsearch.php");
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Education Board Bangladesh</title>
	<link rel="stylesheet" href="assets/css/syle.css">

	<link rel="shortcut icon" type="image/x-icon" href="assets/images/bd_logo.png">
</head>
<body>
	

	<div class="wraper">
		<div class="w-top">
			<div class="logo">
				<img src="assets/images/bd_logo.png" alt="">
			</div>
			<div class="banner">
				<h3>Result</h3>
				<hr>
				<h4>Institute of Computer and technology</h4>
			</div>
		</div>
		<div class="w-main">


				<div class="student-info">
					<div class="student-photo">
						<img src="admin/Student_image/<?php echo $image?>" alt="">
					</div>
					<div class="student-details">
						<table>
							<tr>
								<td>Name</td>
								<td><?php echo $name?></td>
							</tr>
							<tr>
								<td>Roll</td>
								<td><?php echo $rolls?></td>
							</tr>
							<tr>
								<td>Reg.</td>
								<td><?php echo $reg?></td>
							</tr>
							<tr>
								<td>Board</td>
								<td><?php echo $deprt?></td>
							</tr>
							<tr>
								<td>Semester</td>
								<td><?php echo $semes?></td>
							</tr>
							<tr>
								<td>Result</td>
								<td><?php echo $result?></td>
							</tr>
						</table>
					</div>

				</div>

				<div class="student-result">
					<table>
						<tr>
							
							<td>Result</td>
						</tr>
						<tr>
						
						<td  style=" text-align: center;" rowspan="6"><?php echo $result?></td>
						</tr>
						<tr>
						
					</table>
				</div>




		</div>
		

	

	
</body>
</html>