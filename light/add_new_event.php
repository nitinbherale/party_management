<?php include("header.php");
    if(!isValidUser())  
    {
        redirect("login.php"); 
    }
    else
    {
        if (isset($_POST['add_program'])) 
        {
            $title = mysqli_real_escape_string($dblink,$_POST['title']);
            $description = mysqli_real_escape_string($dblink,$_POST['description']);
            $p_date = $_POST['p_date'];
            $p_time = $_POST['p_time'];
            $street = mysqli_real_escape_string($dblink,$_POST['street']);
            $city = mysqli_real_escape_string($dblink,$_POST['city']);
            $pin_code = $_POST['pin_code'];
            $coor_per = mysqli_real_escape_string($dblink,$_POST['coor_person']);
            $coor_email = mysqli_real_escape_string($dblink,$_POST['coor_email']);
            $coor_mob_no = mysqli_real_escape_string($dblink,$_POST['coor_mob_no']);
            $e_pic = $_FILES["e_pic"];
            $tmp_name = time()."_".$e_pic['name']; 
            $imgpath = "assets/img/events/";
            if(strlen($e_pic["name"])>0)
            {
                if ($e_pic['size']<1000000) 
                {
                    if(!move_uploaded_file($e_pic["tmp_name"],$imgpath.$tmp_name))//storing image in file
                    {
                        echo '<script>warning_msg("Error","File upload Failed");</script>'; 
                        $error = 1;
                    }
                    else
                    {
                        $add_qry = ",mem_img = '$tmp_name'";
                    }
                }
                else
                {
                    echo '<script>warning_msg("Warning","File size is more than 1 mb");</script>'; 
                            $error = 1;
                }
            }

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
                                <h2>Add New Event</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Event List</a></li>
                                    <li class="breadcrumb-item active">New Event</li>
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
                        <h2><strong>Event</strong> Details</h2>
                    </div>
                    <div class="body">
                        <form method="post" enctype="multipart/form-data" >
                            <label for="event_name">Event Title *</label>
                            <div class="form-group">                                
                                <input type="text" name="title" required class="form-control" placeholder="Event Name *">
                            </div>
                            <label for="Event_description">Event Desciption *</label>
                            <div class="form-group">                                
                                <input type="text" name="description" required class="form-control" placeholder="Event Description *">
                            </div>
                             <label for="Event_date">Date *</label>
                            <div class="form-group">                                
                                <input type="date" name="p_date" required min="<?php echo date('Y-m-d'); ?>" class="form-control" placeholder="Enter Date *">
                            </div>
                             <label for="Event_time">Time *</label>
                            <div class="form-group">                                
                                <input type="time" name="p_time" required class="form-control" placeholder="Enter Time *">
                            </div>
                            <label for="Event_location">Location*</label>
                            <div class="form-group">                                
                                <input type="text" name="street" required class="form-control" placeholder="Enter Street  *">
                                <input type="text" name="city" required class="form-control m-t-5" placeholder="Enter City  *">
                                <input type="number" name="pin_code" required min="100000" max="999999" class="form-control m-t-5" placeholder="Pin Code  *">
                            </div>
                          <!--  <label for="Coordinate_email">Event Coordinate Email </label>
                            <div class="form-group">                                
                                <input type="email" name="coor_per" class="form-control" placeholder="Coordinate Person Email ">
                            </div> -->
                            <label for="Coordinate_email">Event Coordinate Person </label>
                            <div class="form-group">                                
                                <input type="text" name="coor_person" class="form-control" placeholder="Coordinate Person Name * ">
                            </div>
                             <label for="Coordinate_email">Event Coordinate Email </label>
                            <div class="form-group">                                
                                <input type="email" name="coor_email" class="form-control" placeholder="Coordinate Person Email ">
                            </div>
                             <label for="Coordinate_mobile">Event Coordinate Mobile No.*</label>
                            <div class="form-group">                                
                                <input type="number" name="coor_mob_no" required min="7000000000" max="9999999999" class="form-control" placeholder="Mobile No.*">
                            </div>
                            <label for="Coordinate_email">Event Image </label>
                            <div class="form-group">                                
                                <input type="file" name="e_pic" class="form-control" placeholder="Coordinate Person Email ">
                            </div>
                            <button type="submit" name="add_program" class="btn btn-raised btn-primary btn-round waves-effect">CREATE Event</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Vertical Layout -->        
    </div>
</section>