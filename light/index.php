<?php include("header.php");
 if(!isValidUser())   
        {
            header("location:login.php");
        }
?>
<!-- Main Content -->
<section class="content contact">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Welcome To SPM</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card info-box-2">
                    <div class="body">
                        <div class="icon">
                            <div class="chart chart-pie"></div>
                        </div>
                        <div class="content">
                            <div class="text">RUNING PROJECT</div>
                            <div class="number"><span class="number count-to" data-from="0" data-to="20" data-speed="2000" data-fresh-interval="700">20</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card info-box-2">
                    <div class="body">
                        <div class="icon">
                            <div class="chart chart-bar"></div>
                        </div>
                        <div class="content">
                            <div class="text">UPCOMING EVENTS</div>
                            <div class="number count-to" data-from="0" data-to="1" data-speed="3" data-fresh-interval="700">3</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card info-box-2">
                    <div class="body">
                        <div class="icon">
                            <div class="chart chart-bar"></div>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL MEMBERS</div>                            
                            <div class="number"><span class="number count-to" data-from="0" data-to="125543" data-speed="2000" data-fresh-interval="700">12543</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card info-box-2">
                    <div class="body">
                        <div class="icon">
                            <div class="chart chart-bar"></div>
                        </div>
                        <div class="content">
                            <div class="text">USERS</div>
                            <div class="number"><span class="number count-to" data-from="0" data-to="1063" data-speed="2000" data-fresh-interval="700">25</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


        