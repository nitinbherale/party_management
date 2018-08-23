<?php include("header.php"); ?>
<link rel="stylesheet" href="../assets/plugins/multi-select/css/multi-select.css">
<link rel="stylesheet" href="../assets/plugins/bootstrap-select/css/bootstrap-select.css" />
<?php 
    if(!isValidUser())  
    {
    redirect("login.php"); 
    }
    else
    {
    $id = $_POST['id'];
    if(isset($_POST["edit_member"])){
      
       $id = $_POST['id'];
       $fname = mysqli_real_escape_string($dblink,$_POST['fname']);
       $designation = mysqli_real_escape_string($dblink,$_POST['designation']);
       $email = mysqli_real_escape_string($dblink,$_POST['email']);
       $mobile = $_POST['mobile'];
       $whatsapp_no = $_POST['whatsapp_no'];
       $district = mysqli_real_escape_string($dblink,$_POST['district']);
       $tahsil = mysqli_real_escape_string($dblink,$_POST['tahsil']);
       $street = mysqli_real_escape_string($dblink,$_POST['street']);
       $city = mysqli_real_escape_string($dblink,$_POST['city']);
       $p_code = $_POST['p_code'];
       $gender = $_POST['gender'];
       $dob = $_POST['dob'];
       $f_id = mysqli_real_escape_string($dblink,$_POST['f_id']);
       $t_id = mysqli_real_escape_string($dblink,$_POST['t_id']);
       $p_pic = $_FILES["p_pic"];
       $tmp_name = time()."_".$p_pic['name']; 
       $imgpath = "assets/img/";
       $description = mysqli_real_escape_string($dblink,stripcslashes($_POST['description']));
       $group = $_POST['group'];
       $grp_array = $group[0];
       for ($i=1; $i < count($group); $i++) { 
               $grp_array .= ",".$group[$i];
            }
    
     $upd_qry = "update tbl_member set mem_f_nm = '$fname',mem_dsn = '$designation',mem_email = '$email',mem_m_no =  $mobile ,mem_wp_no = '$whatsapp_no',mem_dis = '$district',mem_tah = $tahsil ,mem_str = '$street', mem_cty = '$city' , mem_ps_code = '$p_code', mem_gen = '$gender', mem_dob = '$dob', mem_fb_lk='$f_id', mem_tw_lk= '$t_id'  where  mem_id = $id ";
                 $run_upd_qry = mysqli_query ($dblink,$upd_qry);
            if ($run_upd_qry) {
                 echo '<script>success_msg("Success","Data Updated Successfully","index.php");</script>';
            }//Upda query
}//isset submit
  if($id>0){
  list($member_list) = exc_qry("select * from tbl_member where mem_id = $id");
  //echo count($program);
  $fname = $member_list[0]['mem_f_nm'];
  $designation = $member_list[0]['mem_dsn'];
  $email = $member_list[0]['mem_email'];
  $mobile = $member_list[0]['mem_m_no'];
  $whatsapp_no = $member_list[0]['mem_wp_no'];
  $district = $member_list[0]['mem_dis'];
  $tahsil = $member_list[0]['mem_tah'];
  $street = $member_list[0]['mem_str'];
  $city = $member_list[0]['mem_cty'];
  $p_code = $member_list[0]['mem_ps_code'];
  $gender = $member_list[0]['mem_gen'];
  $dob = $member_list[0]['mem_dob'];
  
  $f_id = $member_list[0]['mem_fb_lk'];
  $t_id = $member_list[0]['mem_tw_lk'];
  //echo $pname.$description.$date.$location;
}
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
                        
                    </div>
                    <div class="body">
                        <form method="post" enctype="multipart/form-data" >
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <label for="full_name">Enter Full Name *</label>
                            <div class="form-group">                                
                                <input type="text" class="form-control" required placeholder="Enter your name" name="fname" value="<?php echo $fname; ?>">
                            </div>
                            <label for="designation">Designation *</label>
                            <div class="form-group">                                
                                <input type="text"  class="form-control" required placeholder="Enter your name" name="designation" value="<?php echo $designation; ?>">
                            </div>
                            <label for="email_address">Email Id</label>
                            <div class="form-group">                                
                                <input type="email" class="form-control" placeholder="Enter your email address" name="email" value="<?php echo $email; ?>">
                            </div>
                             <label for="mobile_number">Mobile No. *</label>
                            <div class="form-group">                                
                                <input type="number" min="7000000000" max="9999999999" class="form-control" required placeholder="Enter your Mobile No." name="mobile" value="<?php echo $mobile; ?>">
                            </div>
                             <label for="whatsapp_no">Whatsapp No. *</label>
                            <div class="form-group">                                
                                <input type="number" min="7000000000" max="9999999999" class="form-control" required placeholder="Enter your Whatsapp No." name="whatsapp_no" value="<?php echo $whatsapp_no; ?>">
                            </div>
                             <label for="district">District*</label>
                            <div class="form-group">                                
                                <input type="text" class="form-control" required placeholder="Enter your District" name="district"
                                value="<?php echo $district; ?>">
                            </div>
                            <label for="tahsil">Tahsil*</label>
                            <div class="form-group">                                
                                <input type="text" class="form-control" required placeholder="Enter your Tahsil" name="tahsil"
                                value="<?php echo $tahsil; ?>">
                            </div>
                              <label for="street">Street*</label>
                            <div class="form-group">                                
                                <input type="text"  class="form-control" required placeholder="Enter your Street" name="street" value="<?php echo $street; ?>">
                            </div>
                             <label for="city">City*</label>
                            <div class="form-group">                                
                                <input type="text" class="form-control" required placeholder="Enter your City" name="city" value="<?php echo $city; ?>">
                            </div>
                            <label for="postal_code">Postal Code*</label>
                            <div class="form-group">                                
                                <input type="number" id="email_address" class="form-control" required min="100000" max="999999" placeholder="Enter your Postal Code" name="p_code" value="<?php echo $p_code; ?>">
                            </div>
                            <label for="gender">Gender*</label>
                            <div class="form-group">
                                <div class="radio inlineblock m-r-20">
                                    <input type="radio" name="gender" id="male" class="with-gap"  value="1" <?php if($gender==1){echo "checked";}else{ echo "checked";} ?> required>
                                    <label for="male">Male</label>
                                </div>                                
                                <div class="radio inlineblock">
                                    <input type="radio" name="gender" id="Female" class="with-gap" value="2"  <?php if($gender==2){echo "checked";} ?>  required>
                                    <label for="Female">Female</label>
                                </div>
                            </div>
                            <label for="postal_code">Date Of Birth*</label>
                            <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-calendar"></i>
                                    </span>
                                    <input type="date" class="form-control datetimepicker" name="dob" required placeholder="Please choose date ..." value="<?php echo $dob; ?>" data-dtp="dtp_322XI">
                                </div>
                             <label for="fb_link">Facebook Id </label>
                            <div class="form-group">                                
                                <input type="url" class="form-control" id="f_id" placeholder="https://www.facebook.com/username" name="f_id" value="<?php echo $f_id; ?>">
                            </div>
                             <label for="fb_link">Twitter Id </label>
                            <div class="form-group">                                
                                <input type="url"  class="form-control" placeholder="https://twitter.com/username" name="t_id" value="<?php echo $t_id; ?>">
                            </div>
                             <label for="profile_pic">Profile Pic </label>
                            <div class="form-group">                                
                                <input type="File" class="form-control"  placeholder="Profile Picture" accept="image/*" name="p_pic">
                            </div>
                            <div class="form-group form-float">
                                <textarea name="description" cols="30" rows="5" placeholder="Short Info" class="form-control no-resize" ><?php echo $description; ?></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control show-tick" multiple>
                                            <option value="0">Shivsena</option>
                                            <option value="1">Yuvasena</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <a href="#smallModal" class="btn btn-primary" data-toggle="modal" data-target="#smallModal">Add New Group
                                     </a>
                                </div>
                            </div>
                            <br />

                            <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect" name="edit_member">Update Member</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Vertical Layout -->        
    </div>
</section>


<!--Modal-->

  <div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="smallModalLabel">Add New Group</h4>
            </div>
            <div class="modal-body"> 
               <div class="form-group">                                    
                    <input type="text" class="form-control" placeholder="Add New Group">
                </div>
             </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-round waves-effect">Add </button>
                <button type="button" class="btn btn-danger btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
<!--End Modal-->

<script src="../assets/plugins/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js --> 