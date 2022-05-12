<?php
include_once('database.php');
include_once('lib/function.php');

if(isset($_REQUEST['submit'])){
 //function name chack
 $name=$_REQUEST['name'];

 $namefunction= namechack($name,$connect);


//function email chack
 $email=$_REQUEST['email'];
$emailfunction=emailchack($email,$connect);
 //password convert to hash password
 $password=$_REQUEST['password'];
 $hashpass=password_hash($password,PASSWORD_DEFAULT); 
 $chack=$_REQUEST['chack'];



 if( $chack=='agree'){
   $chack ==true;
 }else{
   $chack ==false;
 }
if(empty($name) or empty($email) or empty($password)){
    $mas="<p class='alert alert-danger'>You need to feelup full from <button type='button' class='close' data-dismiss='alert'>&times;</button></p>";

 }elseif( $chack==false){
    $mas="<p class='alert alert-danger'>Place agree the chack box <button type='button' class='close' data-dismiss='alert'>&times;</button></p>";
    $mas1="<font color='red'><small>Agree the chack box</samll></font>";
 


 
 
 
}elseif($namefunction==false){
    $mas="<p class='alert alert-danger'>User name is already available <button type='button' class='close' data-dismiss='alert'>&times;</button></p>";
}elseif($emailfunction==false)
{
    $mas="<p class='alert alert-danger'>email is already available <button type='button' class='close' data-dismiss='alert'>&times;</button></p>"; 
}

else{

$query="insert into admin (name,email,password)values('$name','$email','$hashpass')";
$con=$connect -> query($query);
if($con==true){
    $mas="<p class='alert alert-success'>Admin registation successful <button type='button' class='close' data-dismiss='alert'>&times;</button></p>";
}

 }


}


?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="product-options">
 
</div>

<!DOCTYPE html>
<html lang="en" class=" ">
<!-- Mirrored from flatfull.com/themes/scale/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:15:07 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Scale | Web Application</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>

<body class="">
    <section id="content" class="m-t-lg wrapper-md animated fadeInDown">
        <div class="container aside-xl"> <a class="navbar-brand block" href="index.html">Admin registation</a>
            <section class="m-b-lg">
                <header class="wrapper text-center"> <strong>Sign up to find interesting thing</strong> </header>
                <div class="text-center">
                    <?php echo $mas?>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                    <div class="list-group">
                        <div class="list-group-item">
                            <input placeholder="Name" name="name" class="form-control no-border"> </div>
                        <div class="list-group-item">
                            <input type="email" placeholder="Email" name="email" class="form-control no-border"> </div>
                        <div class="list-group-item">
                            <input type="password" placeholder="Password" name="password" class="form-control no-border"> </div>
                    </div>
                    <div class="checkbox m-b">
                        <label>
                            <input type="checkbox" name="chack"> Agree the<?php echo "   ".$mas1?> <a href="#">terms and policy</a> </label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Sign up</button>
                    <div class="line line-dashed"></div>
                    <p class="text-muted text-center"><small>Already have an account?</small></p> <a href="index.php" class="btn btn-lg btn-default btn-block">Sign in</a> </form>
            </section>
        </div>
    </section>
    <!-- footer -->
    <footer id="footer">
        <div class="text-center padder clearfix">
          
        </div>
    </footer>
 
    <script src="js/app.v1.js"></script>
    <script src="js/app.plugin.js"></script>
</body>
<!-- Mirrored from flatfull.com/themes/scale/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:15:07 GMT -->

</html>