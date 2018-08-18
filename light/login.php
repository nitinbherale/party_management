<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Shivsena Program Management Application">
    <title>:: Shivsena Party Management :: Home</title>
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"/>
    <!-- Favicon-->

    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/main.css">    
    <link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<?php include 'connect.php'; 

    if(isValidUser())   
        {
            header("location:index.php");
        }
    if(isset($_POST["login"]))
        {   
            $username=$_POST['u_nm'];
            $password=$_POST['pswd']; 
            $msg=LgnChk($username,$password); 
            if($msg=="")    
                {
                    header("location:index.php");
                }
            else{
                    echo '<script>window.alert("'.$msg.'");</script>';
                }   
        }
            ?>
<body class="theme-purple">
<div class="authentication">
    <div class="container">
        <div class="col-md-12 content-center">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3">
            </div>                     
            <div class="col-lg-6 col-md-6">
                <div class="card-plain">
                    <div class="header">
                        <h5>Log in</h5>
                    </div>
                    <form class="form" method="post">
                        <div class="input-group">
                            <input type="text" name="u_nm" class="form-control" placeholder="User Name" required />
                            <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
                        </div>
                        <div class="input-group">
                            <input type="password" name="pswd" placeholder="Password" class="form-control" required />
                            <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                        </div>                            
                        <div class="footer">
                            <button type="submit" name="login" class="btn btn-primary btn-round btn-block">SIGN IN</button>
                        </div>
                    </form>
                    <a href="forgot-password.php" class="link">Forgot Password?</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
            </div> 
        </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="../assets/plugins/particles-js/particles.min.js"></script>
<script src="../assets/plugins/particles-js/particles.js"></script>
</body>

</html>