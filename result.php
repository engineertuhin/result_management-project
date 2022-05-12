<?php
include_once("admin/database.php");
?>
<?php

if(isset($_REQUEST['submit'])){
	$department=$_REQUEST['department'];
	$semester=$_REQUEST['semester'];
	$year=$_REQUEST['year'];
	$roll=$_REQUEST['roll'];
	$board=$_REQUEST['board'];

$query="select * from $department where semester='$semester' and roll='$roll' and board='$board'";
$conn=$connect -> query($query);
$data=$conn -> fetch_assoc();





}else{
	header("location:search.php");
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
				<h3>Result Search</h3>
				<hr>
				<h4>Institute of Computer Scince & Technology</h4>
			</div>
		</div>
		<div class="w-main">


				<div class="student-info">
					<div class="student-photo">
						<img src="admin/Student_image/<?php echo $data['image']?>" alt="">
					</div>
					<div class="student-details">
						<table>
							<tr>
								<td>Name</td>
								<td><?php    if(isset($data)){
									      echo $data['name'];
									}                    ?></td>
							</tr>
							<tr>
								<td>Roll</td>
								<td><?php    if(isset($data)){
									      echo $data['roll'];
									}                    ?></td>
							</tr>
							<tr>
								<td>Reg.</td>
								<td><?php    if(isset($data)){
									      echo $data['reg'];
									}  ?>         </td>
							</tr>
							<tr>
								<td>Department</td>
								<td><?php    if(isset($data)){
									      echo $data['department'];
									}  ?> </td>
							</tr>
							<tr>
								<td>Semester</td>
								<td><?php    if(isset($data)){
									      echo $data['semester'];
									}  ?></td>
							</tr>
							<tr>
								<td>Result</td>
								<td><?php    if(isset($data)){
									      if($data['result']=='Fall'){
											  echo "<font color='red'>Fail</font>";
										  }else{
											echo "<font color='green'>Passed</font>";
										  }
										
									}  ?></td>
							</tr>
						</table>
					</div>

				</div>

				<div class="student-result">
					<table>
						<tr>
							<td>Subject</td>
							<td>Marks</td>
							<td>Grade</td>
							<td>GPA</td>
							<td>CGPA</td>
						</tr>
						<tr>
							<td><?php    if(isset($data)){
									      echo $data['subject1'];
									}                    ?></td>
									
							<td><?php    if(isset($data)){
									      echo $data['Subject1_m'];
									}                    ?></td>
							<td><?php    if(isset($data)){
									      echo $data['Subject1_g'];
									}                    ?></td>
							<td><?php    if(isset($data)){
									      echo $data['Subject1_p'];
									}                    ?></td>
							<td rowspan="6"><?php    if(isset($data)){
									      echo $data['CGPA'];
									}                    ?></td>
						</tr>
						<tr>
							<td><?php    if(isset($data)){
									      echo $data['subject2'];
									}                    ?></td>
						<td><?php    if(isset($data)){
									      echo $data['Subject2_m'];
									}                    ?></td>
							<td><?php    if(isset($data)){
									      echo $data['Subject2_g'];
									}                    ?></td>
							<td><?php    if(isset($data)){
									      echo $data['Subject2_p'];
									}                    ?></td>
						</tr>
						<tr>
						<td><?php    if(isset($data)){
									      echo $data['subject3'];
									}                    ?></td>
						<td><?php    if(isset($data)){
									      echo $data['Subject3_m'];
									}                    ?></td>
							<td><?php    if(isset($data)){
									      echo $data['Subject3_g'];
									}                    ?></td>
							<td><?php    if(isset($data)){
									      echo $data['Subject3_p'];
									}                    ?></td>
						</tr>
						<tr>
						<td><?php    if(isset($data)){
									      echo $data['subject4'];
									}                    ?></td>
						<td><?php    if(isset($data)){
									      echo $data['Subject4_m'];
									}                    ?></td>
							<td><?php    if(isset($data)){
									      echo $data['Subject4_g'];
									}                    ?></td>
							<td><?php    if(isset($data)){
									      echo $data['Subject4_p'];
									}                    ?></td>
						</tr>
						<tr>
						<td><?php    if(isset($data)){
									      echo $data['subject5'];
									}                    ?></td>
						<td><?php    if(isset($data)){
									      echo $data['Subject5_m'];
									}                    ?></td>
							<td><?php    if(isset($data)){
									      echo $data['Subject5_g'];
									}                    ?></td>
							<td><?php    if(isset($data)){
									      echo $data['Subject5_p'];
									}                    ?></td>
						</tr>
						<tr>
						<td><?php    if(isset($data)){
									      echo $data['subject6'];
									}                    ?></td>
						<td><?php    if(isset($data)){
									      echo $data['Subject6_m'];
									}                    ?></td>
							<td><?php    if(isset($data)){
									      echo $data['Subject6_g'];
									}                    ?></td>
							<td><?php    if(isset($data)){
									      echo $data['Subject6_p'];
									}                    ?></td>
						</tr>
						<tr>
						<td><?php    if(isset($data)){
									      echo $data['subject7'];
									}                    ?></td>
						<td><?php    if(isset($data)){
									      echo $data['Subject7_m'];
									}                    ?></td>
							<td><?php    if(isset($data)){
									      echo $data['Subject7_g'];
									}                    ?></td>
							<td><?php    if(isset($data)){
									      echo $data['Subject7_p'];
									}                    ?></td>
						</tr>
					</table>
				</div>




		</div>
		<div class="w-footer">
			<div class="f-left">
				<p>©2005-2019 Ministry of Education, All rights reserved.</p>
			</div>
			<div class="f-right">
				<span>Powered by</span>
				<img src="assets/images/tbl_logo.png" alt="">
			</div>
		</div>
	</div>
	<div class="bottom">
		<img src="assets/images/play.png" alt="">
	</div>

	

	
</body>
</html>