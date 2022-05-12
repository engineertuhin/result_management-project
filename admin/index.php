<?php

include_once('database.php');
if(isset($_SESSION['name']) or isset($_SESSION['email']) or isset($_SESSION['password']) ){
    header("location:deshboard.php");
}
?>
<?php

include_once('database.php');
if(isset($_REQUEST['submit'])){
$email =$_REQUEST['email'];
$password =$_REQUEST['password'];




$query="select * from  admin where email='$email' or password ='$password' ";
$con=$connect -> query($query);
  $count = $con -> num_rows;
if(empty($email) or empty($password) ){
    $mas="<p class='alert alert-danger'>You need to Email and Password<button type='button' class='close' data-dismiss='alert'>&times;</button></p>";
}elseif(($count==1)){
    $fetch=$con -> fetch_assoc();
    if(password_verify($password,$fetch['password'])){
       
       
        $_SESSION['name']=$fetch['name'];
        $_SESSION['email']=$fetch['email'];
        $_SESSION['password']=$fetch['password'];

        header("location:deshboard.php");

    }else{
        $mas="<p class='alert alert-danger'>Password is rong<button type='button' class='close' data-dismiss='alert'>&times;</button></p>";
    }
    
}else{
    $mas="<p class='alert alert-danger'>Email is rong<button type='button' class='close' data-dismiss='alert'>&times;</button></p>";
}


}

?>





<!DOCTYPE html>
<html lang="en" class=" ">
<!-- Mirrored from flatfull.com/themes/scale/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:15:07 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Scale | Web Application</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>

<body class="">
    <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
        <div class="container aside-xl"> <a class="navbar-brand block" href="" style="font-size:18px;">Institute of computer science and Technology</a>
            <section class="m-b-lg"><strong><center>Icst Admin panal</center></strong>
                <header class="wrapper text-center"> <strong>Sign in to get in touch</strong> </header>
                <div class="text-center">
                    <?php echo $mas?>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 
                    <div class="list-group">
                        <div class="list-group-item">
                            <input type="email" name="email" placeholder="Email" class="form-control no-border"> </div>
                        <div class="list-group-item">
                            <input type="password" name="password" placeholder="Password" class="form-control no-border"> </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
                    <div class="text-center m-t m-b"><!--<a href="#"><small>Forgot password?</small></a>--></div>
                    <div class="line line-dashed"></div>
                    <p class="text-muted text-center"><small>Do not have an account?</small></p> <a href="signup.php" class="btn btn-lg btn-default btn-block">Create an account</a> </form>
            </section>
        </div>
    </section>
    <!-- footer -->
    <footer id="footer">
        <div class="text-center padder">

        </div>
    </footer>
    <!-- / footer -->
    <!-- Bootstrap -->
    <!-- App -->
    <script src="js/app.v1.js"></script>
    <script src="js/app.plugin.js"></script>
</body>
<!-- Mirrored from flatfull.com/themes/scale/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:15:07 GMT -->

</html>