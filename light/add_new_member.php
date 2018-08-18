<?php include("header.php") ?>
<?php 
if (isset($_POST["add_new_mem"])){
    $fname = $_POST['fname'];
    $designation = $_POST['designation'];
   echo "<script>window.alert('button clicked')</script>";

}
?>
<section class="content">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Add New Member</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="member_list.html">Member List</a></li>
                                    <li class="breadcrumb-item active">New Member</li>
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
        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Member</strong> Details</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form method="post" enctype="multipart/form-data" >
                            <label for="full_name">Enter Full Name</label>
                            <div class="form-group">                                
                                <input type="text" class="form-control" required placeholder="Enter your name" name="fname">
                            </div>
                            <label for="designation">Designation</label>
                            <div class="form-group">                                
                                <input type="text"  class="form-control" required placeholder="Enter your name" name="designation">
                            </div>
                            <label for="email_address">Email Id</label>
                            <div class="form-group">                                
                                <input type="email" class="form-control" required placeholder="Enter your email address" name="email">
                            </div>
                             <label for="mobile_number">Mobile No.</label>
                            <div class="form-group">                                
                                <input type="number" class="form-control" required placeholder="Enter your Mobile No." name="mobile">
                            </div>
                             <label for="whatsapp_no">Whatsapp No.</label>
                            <div class="form-group">                                
                                <input type="text" class="form-control" required placeholder="Enter your Whatsapp No." name="whatsapp_no">
                            </div>
                             <label for="district">District*</label>
                            <div class="form-group">                                
                                <input type="text" class="form-control" required placeholder="Enter your District" name="district">
                            </div>
                            <label for="tahsil">Tahsil*</label>
                            <div class="form-group">                                
                                <input type="text" class="form-control" required placeholder="Enter your Tahsil" name="tahsil">
                            </div>
                              <label for="street">Street*</label>
                            <div class="form-group">                                
                                <input type="text"  class="form-control" required placeholder="Enter your Street" name="street">
                            </div>
                             <label for="city">City*</label>
                            <div class="form-group">                                
                                <input type="text" class="form-control" required placeholder="Enter your City" name="city">
                            </div>
                            <label for="postal_code">Postal Code*</label>
                            <div class="form-group">                                
                                <input type="text" id="email_address" class="form-control" required placeholder="Enter your Postal Code" name="p_code">
                            </div>
                            <label for="gender">Gender*</label>
                            <div class="form-group">
                                <div class="radio inlineblock m-r-20">
                                    <input type="radio" name="gender" id="male" class="with-gap" required value="option1">
                                    <label for="male">Male</label>
                                </div>                                
                                <div class="radio inlineblock">
                                    <input type="radio" name="gender" id="Female" class="with-gap" required value="option2" checked="">
                                    <label for="Female">Female</label>
                                </div>
                            </div>
                            <label for="postal_code">Date Of Birth*</label>
                            <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-calendar"></i>
                                    </span>
                                    <input type="date" class="form-control datetimepicker" required placeholder="Please choose date &amp; time..." data-dtp="dtp_322XI">
                                </div>
                             <label for="fb_link">Facebook Id*</label>
                            <div class="form-group">                                
                                <input type="text" id="email_address" class="form-control"  placeholder="Facebook Id" name="f_id">
                            </div>
                             <label for="fb_link">Twitter Id*</label>
                            <div class="form-group">                                
                                <input type="text" id="email_address" class="form-control" placeholder="Twitter Id" name="t_id">
                            </div>
                             <label for="profile_pic">Profile Pic*</label>
                            <div class="form-group">                                
                                <input type="File" id="email_address" class="form-control"  placeholder="Profile Picture" name="p_pic">
                            </div>
                            <div class="form-group form-float">
                                <textarea name="description" cols="30" rows="5" placeholder="Short Info" class="form-control no-resize" required aria-required="true"></textarea>
                            </div>

                           <div class="form-check form-check-inline">
                              <input class="form-check-input" name="group[]" type="checkbox" id="inlineCheckbox1" value="option1">
                              <label class="form-check-label"  for="inlineCheckbox1">Yuvasainik</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" name="group[]" type="checkbox" id="inlineCheckbox2" value="option2">
                              <label class="form-check-label"  for="inlineCheckbox2">Shivsainik</label>
                            </div><br />

                            <button type="submit" name="add_new_mem" class="btn btn-raised btn-primary btn-round waves-effect">CREATE MEMBER</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Vertical Layout -->        
    </div>
</section>
