
<?php
	ini_set("error_reporting", 1);
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	if($_GET['rel']!='tab'){
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ICST</title>
<link rel="stylesheet" href="assets/css/syle.css">

<link rel="shortcut icon" type="image/x-icon" href="assets/images/bd_logo.png">
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <style>
       .a{

border:1px solid black;
padding:5px 10px;
color:white;
background-color:red;
border-radius: 3px;
}
   </style>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script>
	$(function(){
		$("a[rel='tab']").click(function(e){
			pageurl = $(this).attr('href');
			$.ajax({url:pageurl+'?rel=tab',success: function(data){
				$('#content').html(data);
			}});
			if(pageurl!=window.location){
				window.history.pushState({path:pageurl},'',pageurl);	
			}
			return false;  
		});
	});
	$(window).bind('popstate', function() {
		$.ajax({url:location.pathname+'?rel=tab',success: function(data){
			$('#content').html(data);
		}});
	});
   </script>
</head>
<body>

<div id='menu'>
<?PHP
   $data1=" rel='tab' ";
  $data2= "rel='tab'  ";
  

?>
</div>
<div id='content'>
<?php } ?>
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
<div class="search-result">
<form action="bordsemesterresult.php" method="post">
<table>
<tr>
<td>Select </td>
<td>
<div class="dropdown">
    <button class=" mr-4  dropdown-toggle" type="button" data-toggle="dropdown">Semester / Board
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li>  <a <?php echo $data1?> href="search.php">Semester</a></li>
	  <li>  <a <?php echo $data2?> href="boardresultsearch.php">Board</a></li>

  </div>
</div>
</td>
</tr>
<tr>
<td>Department</td>
<td>
<select name="department">
<option value="" selected>Select One</option> 
<option value="Computer">Computer</option>
      <option value="Civil">Civil</option>
      <option value="Electronics">Electronics</option>
      <option value="Garments">Garments </option>
      <option value="Textile">Textile</option>
      <option value="Mechanical">Mechanical </option>
      <option value="Tele_communication">Tele communication</option>
      <option value="Architecture">Architecture</option>
</select>
</td>
</tr>
<td>Semester</td>
<td>
<select name="semester">
<option value="" selected>Select One</option>
<option value="4th Semester">4th Semester</option>
<option value="5th Semester">5th Semester</option>
<option value="6th Semester">6th Semester</option>
<option value="7th Semester">7th Semester</option>
<option value="8th Semester">8th Semester</option>
</select>
</td>
</tr>
<tr>
<td>Year</td>
<td>
<select name="year">
<option value="" selected>Select One</option>
<option value="2019">2019</option>
<option value="2019">2020</option>
<option value="2019">2021</option>
</select>
</td>
</tr>
<tr>
<td>Board</td>
<td>
<select name="board">
<option value="" selected>Select One</option>
<option value="Technical board">Technical board</option>
</select>
</td>
</tr>
<tr>
<td> Roll</td>
<td><input name="roll" type="text"></td>
</tr>
<tr>
<td></td>
<td><input type="reset" value="reset"><input type="submit" name="submit" value="submit"><a class="a" href="index.php">Back</a></td>
</tr>
</table>
</form>
</div>
</div>

</body>
</html>


