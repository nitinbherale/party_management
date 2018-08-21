<?php include("header.php");
 if(!isValidUser())  
    {
        redirect("login.php"); 
    }
    else
    {
        $mem_id = $_GET['mbr_no'];
        list($member_list) = exc_qry("select * from tbl_member where mem_id = ".$mem_id);
        if(isset($_POST['send_sms'])){
            $message = $_POST['message']."\n".SEND_BY;
            $send = send_sms($message,$member_list[0]['mem_m_no']);
          //  $send = "success";
            if($send="success")
            {
                $ins_qry = 'insert into tbl_sms set sms_sender_id = '.$_SESSION['pma_adm_id'].', sms_sender_usnm = "'.$_SESSION['pma_adm_usr_nm'].'", sms_rece_id = '.$member_list[0]['mem_id'].', sms_rece_mn = '.$member_list[0]['mem_m_no'].', sms_sent_time = now(), sms_content="'.$message.'"';
                $ins_res = mysqli_query($dblink,$ins_qry);
                if($ins_qry){
                    echo '<script>success_msg("Success","Message Send SuccessFully","view_profile.php?mbr_no='.$member_list[0]['mem_id'].'");</script>';
                }
                else{
                    $err_msg = mysqli_error($dblink);
                    echo '<script>swal("'.$err_msg.'")</script>';
                }
               // echo "<script>window.alert('".$ins_qry."')</script>";
                // 
            }
        }
    }   
?>
<section class="content profile-page">    
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <h2>Profile</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Member List</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#overview">Overview</a></li>
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#schedule">Export PDF</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if(strlen($member_list[0]['mem_img'])>0){
        $img = $member_list[0]['mem_img'];
        }
        else{
            $img = "no_image.png";
        };  ?>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card active-bg text-white card_mt_20" style="background: #191f28;">
                    <div class="body profile-header">
                        <img src="assets/img/<?php echo $img; ?>" class="user_pic rounded img-raised" alt="User" width="150px">
                        <div class="detail">
                            <div class="u_name">
                                <h4 style="color: #fff;"><strong><?php echo $member_list[0]['mem_f_nm']; ?></strong></h4>
                                <span style="color: #fff;"><?php echo $member_list[0]['mem_desn']; ?></span> <hr style="background: #c78035;">
                                <p>   
                                    &nbsp;
                                </p>
                            </div>
                            <!--<div id="m_area_chart"></div>-->
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="overview">
                        <div class="row clearfix tab_custom_clr">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card text-center">
                                    <div class="body">
                                        <h5 class="m-b-0"><?php echo date('d', strtotime($member_list[0]['mem_dob']))."th ".date('F Y', strtotime($member_list[0]['mem_dob'])); ?> </h5>
                                         <small>DOB</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card text-center">
                                    <div class="body">                            
                                        <h5 class="m-b-0"><?php echo $member_list[0]['mem_cty']; ?></h5>
                                        <small>City</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card text-center">
                                    <div class="body">
                                        <h5 class="m-b-0">421301</h5>
                                        <small><?php echo $member_list[0]['mem_ps_cd']; ?></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card text-center">
                                    <div class="body">
                                        <h5 class="m-b-0"><?php echo $member_list[0]['mem_dis']; ?></h5>
                                        <small>Dist</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h2><strong>Info</strong></h2>
                                    </div>
                                    <div class="body">
                                        <small class="text-muted">Address: </small>
                                        <p>At- Apti, Tal-Kalyan, Post-Vaholi,Dist-Thane, Maharashtra</p>
                                        <div>
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d60271.345226256526!2d73.0951300290857!3d19.24061520800938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sapti+kalyan!5e0!3m2!1sen!2sin!4v1534514439942" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        </div>
                                        <hr>
                                        <small class="text-muted">Email address: </small>
                                        <p><?php echo $member_list[0]['mem_email']; ?></p>
                                        <hr>
                                        <small class="text-muted">Mobile No.: </small>
                                        <p>+91 <?php echo $member_list[0]['mem_m_no']; ?></p>
                                        <hr>
                                        <small class="text-muted">Whatsapp No.: </small>
                                        <p>+91 <?php echo $member_list[0]['mem_wp_no']; ?></p>
                                        <hr>
                                        <small class="text-muted">Birth Date: </small>
                                        <p class="m-b-0"><?php echo date('F d,Y', strtotime($member_list[0]['mem_dob'])); ?></p>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-8 col-md-12">
                                  <div class="card">
                                    <div class="body">                               
                                        <h5 class="m-t-20 m-b-0 post_title">Short Info</h5>                                
                                        <p><?php echo $member_list[0]['mem_srt_info']; ?></p>
                                    </div>
                                </div>
                                 <div class="card">
                                    <div class="header">
                                        <h2><strong>Send</strong> Message</h2>
                                    </div>
                                    <div class="body m-b-10">
                                        <form method="post">
                                            <div class="form-group">
                                                <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..." name="message" required></textarea>
                                            </div>
                                            <div class="post-toolbar-b">
                                               <!--  <button class="btn btn-warning btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-attachment"></i></button>
                                                <button class="btn btn-warning btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-camera"></i></button> -->
                                                <button type="submit" name="send_sms" class="btn btn-primary btn-round">Send </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--<div role="tabpanel" class="tab-pane page-calendar active" id="schedule">
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Default Size -->
<div class="modal fade" id="addevent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Add Event</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="form-line">
                        <input type="number" class="form-control" placeholder="Event Date">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" class="form-control" placeholder="Event Title">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <textarea class="form-control no-resize" placeholder="Event Description..."></textarea>
                    </div>
                </div>       
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-round waves-effect">Add</button>
                <button type="button" class="btn btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .card_mt_20{margin-top: 50px;margin-bottom: 60px;}
    .card_mt_20 p {color: #ffffff;}
    .tab_custom_clr h5{color: #f37437;}
</style>
