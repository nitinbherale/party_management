<?php include("header2.php") ?>

<?php include 'connect.php'; 
    if(isValidUser())   
        {
            header("location:index.php");
        }
    if(isset($_POST["login"]))
        {   
            $username=$_POST['u_nm'];
            $password=$_POST['pswd']; 
            echo '';
            $msg=LgnChk($username,$password); 
            if($msg=="")    
                {
                    header("location:index.php");
                }
            else{
                    echo '<script>swal("'.$msg.'");</script>';
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

</body>
