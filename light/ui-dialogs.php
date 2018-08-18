<?php include("header.php") ?>
<link rel="stylesheet" href="../assets/plugins/sweetalert/sweetalert.css"/>

<section class="content">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Dialogs</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">UI</a></li>
                                    <li class="breadcrumb-item active">Dialogs</li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                                <button class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10">Create New</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix js-sweetalert">
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <p>A basic message</p>
                        <button class="btn btn-raised btn-primary waves-effect btn-round" data-type="basic">CLICK ME</button>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <p>A title with a text under</p>
                        <button class="btn btn-raised btn-primary waves-effect btn-round" data-type="with-title">CLICK ME</button>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <p>A success message!</p>
                        <button class="btn btn-raised btn-primary waves-effect btn-round" data-type="success">CLICK ME</button>
                    </div>
                </div>                
                <div class="card">
                    <div class="body">
                        <p>A message with a custom icon</p>
                        <button class="btn btn-raised btn-primary waves-effect btn-round" data-type="with-custom-icon">CLICK ME</button>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <p>A warning message, with a function attached to the <b>Confirm</b> button...</p>
                        <button class="btn btn-raised btn-primary waves-effect btn-round" data-type="confirm">CLICK ME</button>
                    </div>
                </div>                
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <p>An HTML message</p>
                        <button class="btn btn-raised btn-primary waves-effect btn-round" data-type="html-message">CLICK ME</button>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <p>A message with auto close timer</p>
                        <button class="btn btn-raised btn-primary waves-effect btn-round" data-type="autoclose-timer">CLICK ME</button>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <p>A replacement for the <b>prompt</b> function</p>
                        <button class="btn btn-raised btn-primary waves-effect btn-round" data-type="prompt">CLICK ME</button>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                         <p>With a loader (for AJAX request for example)</p>
                        <button class="btn btn-raised btn-primary waves-effect btn-round" data-type="ajax-loader">CLICK ME</button>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                         <p>... and by passing a parameter, you can execute something else for <b>Cancel</b>.</p>
                        <button class="btn btn-raised btn-primary waves-effect btn-round" data-type="cancel">CLICK ME</button>
                    </div>
                </div>               
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js --> 

<script src="../assets/plugins/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js --> 

<script src="assets/js/pages/ui/dialogs.js"></script>
</body>

</html>